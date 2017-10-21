#!/bin/bash

echo 'Welcome to GlassDrive!'
echo 'This script will help you set it up for the first time.'

echo 'Installing dependencies...'

echo -n 'Enter the SSID of the desired network: '
read SSID

echo 'How would you like to authenticate? (P)lain text or (f)ile?  [p/F]: '
read -n 1 choice
if [ $choice == "p" ]; then
	echo 'You have selected plain text mode. Note that this method may be less secure.'
	echo -n 'Enter the password of the network: '
	stty -echo
	read password
	stty echo
	./addnetwork.sh -s "$SSID" -p "$password"
	unset password
else
	echo 'You have selected file mode.'
	echo -n 'Enter the relative path to the file containing just the password: '
	read path
	./addnetwork.sh -s "$SSID" -f "$path"
	unset path
fi
unset SSID
