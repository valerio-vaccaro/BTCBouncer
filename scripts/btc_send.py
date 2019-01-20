import ConfigParser
import json
import mysql.connector
from bitcoin_rpc_class import RPCHost

config = ConfigParser.RawConfigParser()
config.read('bouncer.conf')
rpcHost = config.get('BTC', 'host')
rpcPort = config.get('BTC', 'port')
rpcUser = config.get('BTC', 'username')
rpcPassword = config.get('BTC', 'password')
rpcWallet = config.get('BTC', 'wallet')
legacy = config.get('BTC', 'legacy')
p2sh = config.get('BTC', 'p2sh')
bech32 = config.get('BTC', 'bech32')
serverURL = 'http://' + rpcUser + ':' + rpcPassword + '@'+rpcHost+':' + str(rpcPort)+'/wallet/' + rpcWallet

mydb = mysql.connector.connect(
        host=config.get('MYSQL', 'host'),
        user=config.get('MYSQL', 'username'),
        passwd=config.get('MYSQL', 'password'),
        database=config.get('MYSQL', 'database')
)

host = RPCHost(serverURL)

mycursor = mydb.cursor()
sql = "SELECT * FROM transactions WHERE tx='' "
if True:
   # Execute the SQL command
   mycursor.execute(sql)
   results = mycursor.fetchall()
   for row in results:
        id = row[0]
        utxo = row[1]
        timestamp = row[2]
        sender = row[3]
        receiver = row[4]
        amount = row[5] - 0.00001000
        try:
            print 'send transaction from '+sender+' to '+receiver+' amount '+str(amount)+' with OP_RETURN'
            string = 'BTCBouncer.com'.encode('hex')
            print string
            print 'create'
            raw_transaction = host.call('createrawtransaction', [] , {'data':string, receiver:str(amount)})
            print 'fund'
            funded_raw_transaction = host.call('fundrawtransaction', raw_transaction)
            print 'sign'
            signed_transaction = host.call('signrawtransactionwithwallet', funded_raw_transaction['hex'])
            print 'send'
            res = host.call('sendrawtransaction', signed_transaction['hex'])
            print 'Result: '+res
        except Exception as e:
            print(e)
            res="1"

        try:
            mycursor2 = mydb.cursor()
            mycursor2.execute("UPDATE transactions SET tx='"+str(res)+"' WHERE id= "+str(id)+"")
            mydb.commit()
        except Exception as e:
            print(e)
        print '---------------------------'

print '+++++++++++++++++++++'
mydb.close()
