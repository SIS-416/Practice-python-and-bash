#!/bin/bash

read -p "What is your fabourite fruit? " fruit

case $fruit in
	orange) echo "Let's make $fruit salad" ;;
	banana) echo "Let's make $fruit salad" ;;
	apple) echo "Let's make $fruit salad" ;;
        *) echo "I don't know what color a $fruit is." ;;
esac


