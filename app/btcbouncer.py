from flask import Flask, request, send_from_directory
from flask_stache import render_template
from flask_qrcode import QRcode
from flask_socketio import SocketIO
from bitcoin_rpc_class import RPCHost
import os
import configparser
import mysql.connector
import json
import requests
import string
import random
from flask import jsonify

import numpy as np
import pandas as pd
from plotnine import *

app = Flask(__name__, static_url_path='/static')
qrcode = QRcode(app)

socketio = SocketIO(app)

config = configparser.RawConfigParser()
config.read('btcbouncer.conf')

rpcHost = config.get('BITCOIN', 'host')
rpcPort = config.get('BITCOIN', 'port')
rpcUser = config.get('BITCOIN', 'username')
rpcPassword = config.get('BITCOIN', 'password')
rpcPassphrase = config.get('BITCOIN', 'passphrase')
serverURL = 'http://{}:{}@{}:{}'.format(rpcUser, rpcPassword, rpcHost, rpcPort)

myHost = config.get('MYSQL', 'host')
myUser = config.get('MYSQL', 'username')
myPasswd = config.get('MYSQL', 'password')
myDatabase = config.get('MYSQL', 'database')

host = RPCHost(serverURL)
if (len(rpcPassphrase) > 0):
    result = host.call('walletpassphrase', rpcPassphrase, 60)


@app.route('/.well-known/<path:filename>')
def wellKnownRoute(filename):
    return send_from_directory('{}/well-known/'.format(app.root_path), filename, conditional=True)

@app.route('/')
def home():
    data = {
    }
    return render_template('home', **data)

@app.route('/about')
def about():
    data = {
    }
    return render_template('about', **data)

@app.route('/list')
def list():
    mydb = mysql.connector.connect(host=myHost, user=myUser, passwd=myPasswd, database=myDatabase)
    mycursor = mydb.cursor()
    sql = "SELECT timestamp, receiver, amount, tx FROM `transactions` ORDER BY `id` DESC LIMIT 100"
    mycursor.execute(sql)
    res = mycursor.fetchall()
    mydb.close()
    results = []
    for item in res:
        obj = {}
        obj['timestamp'] = item[0]
        obj['receiver'] = item[1]
        obj['amount'] = item[2]
        obj['tx'] = item[3]
        results.append(obj)

    mydb = mysql.connector.connect(host=myHost, user=myUser, passwd=myPasswd, database=myDatabase)
    mycursor = mydb.cursor()
    sql = "SELECT count(*) AS num, count(distinct(receiver)) as rec, sum(amount) as total FROM `transactions`"
    mycursor.execute(sql)
    res = mycursor.fetchone()
    mydb.close()


    data = {
        'numtx': res[0],
        'numaddr': res[1],
        'total': res[2],
        'results': results,
    }
    return render_template('list', **data)

if __name__ == '__main__':
    app.import_name = '.'
    socketio.run(app, host='0.0.0.0', port=5006)
