#!/bin/sh
cd /opt/BTCBouncer/scripts
/usr/bin/python3 ./btc_fetch.py
#/usr/bin/python ./btc_fetch_mem.py
/usr/bin/python3 ./btc_send.py
