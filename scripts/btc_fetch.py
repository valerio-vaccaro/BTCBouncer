import configparser
import json
import mysql.connector
from bitcoin_rpc_class import RPCHost

config = configparser.RawConfigParser()
config.read('bouncer.conf')
rpcHost = config.get('BTC', 'host')
rpcPort = config.get('BTC', 'port')
rpcUser = config.get('BTC', 'username')
rpcPassword = config.get('BTC', 'password')
rpcWallet = config.get('BTC', 'wallet')
legacy = config.get('BTC', 'legacy')
p2sh = config.get('BTC', 'p2sh')
bech32 = config.get('BTC', 'bech32')
p2tr = config.get('BTC', 'p2tr')
serverURL = 'http://' + rpcUser + ':' + rpcPassword + '@'+rpcHost+':' + str(rpcPort)+'/wallet/' + rpcWallet

mydb = mysql.connector.connect(
        host=config.get('MYSQL', 'host'),
        user=config.get('MYSQL', 'username'),
        passwd=config.get('MYSQL', 'password'),
        database=config.get('MYSQL', 'database'),
        auth_plugin='mysql_native_password'
)

host = RPCHost(serverURL)
print('FETCH')
# get unspended transactions
transactions = host.call('listunspent')
for utxo in transactions:
    if utxo['spendable']:
        print('--- NEW TRANSACTION '+utxo['txid'])
        my_utxo = utxo['txid']
        my_addr = utxo['address']
        my_amount = utxo['amount']
        print('\tmy addr: '+my_addr)
        print('\tamount: '+str(my_amount))

        if my_addr == legacy:
            my_cmd = 'bouncer'
        elif my_addr == p2sh:
            my_cmd = 'bouncer'
        elif my_addr == bech32:
            my_cmd = 'bouncer'
        elif my_addr == p2tr:
            my_cmd = 'bouncer'
        else:
            my_cmd = 'tip'
        print("\tcommand "+my_cmd)

        if my_cmd == 'bouncer':
            detailed_utxo = host.call('getrawtransaction',utxo['txid'], True)
            # search for last address
            for vin in detailed_utxo['vin']:
                print('\t\tVIN from '+str(vin['txid'])+' on output '+str(vin['vout']))
                prev_utxo = host.call('getrawtransaction',vin['txid'], True)
                my_dest = prev_utxo['vout'][vin['vout']]['scriptPubKey']['address']
                print("\t\tfrom: "+str(my_dest))
            try:
                mycursor = mydb.cursor()
                sql = "INSERT IGNORE INTO transactions (utxo, sender, receiver, amount) VALUES (%s, %s, %s, %s)"
                val = (my_utxo, my_addr, my_dest, str(my_amount))
                mycursor.execute(sql, val)
                mydb.commit()
            except (MySQLdb.Error, MySQLdb.Warning) as e:
                print(e)
            print('---------------------------')
print('+++++++++++++++++++++')
mydb.close()
