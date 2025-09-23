#!/bin/bash

if [ -e /etc/resolv.conf ];then
	echo "DNS Configuration:"
	cat /etc/resolv.conf
else
	echo "No DNS resolv.conf file exists."
fi

