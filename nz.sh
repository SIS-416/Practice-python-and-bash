#!/bin/bash

input=""

while [ -z "$input" ];do
	read -p "Please give your input: " input
done
echo "Thank you for saying $input"

