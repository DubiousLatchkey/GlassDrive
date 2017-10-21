#!/bin/bash
ssid=""
password=""
path=""
while getopts "s:p:f:" opt; do
	case $opt in
		s) ssid=$OPTARG ;;
		p) password=$OPTARG ;;
		f) path=$OPTARG ;;
		*)
			echo 'Invalid flag: -'$opt
			exit 1 ;;
	esac
done
if [ $path == "" ]; then
	wpa_passphrase "$ssid" "$password" >> /etc/wpa_supplicant/wpa_supplicant.conf
else
	wpa_passphrase "$ssid" < "$path" >> /etc/wpa_supplicant/wpa_supplicant.conf
fi
unset password
unset path
unset ssid
