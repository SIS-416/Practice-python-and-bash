#!/bin/bash

while read ip name alias;do
	if [ ! -z "$name" ];then
		echo -en "IP is $ip - it's name is $name"
		if [ ! -z "$aaliasa" ];then
			echo "Aliases: $alias"
		else
		        echo	
        
               fi
	fi
done < /etc/hosts


