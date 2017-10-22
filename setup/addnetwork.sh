#!/bin/bash

#addnetwork.sh - set up a new wifi network with wpa supplicant
#Copyright (C) 2017  Arc676/Alessandro Vinciguerra <alesvinciguerra@gmail.com>

#This program is free software: you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation (version 3)

#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.

#You should have received a copy of the GNU General Public License
#along with this program.  If not, see <http://www.gnu.org/licenses/>.

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
if [ "$path" == "" ]; then
	wpa_passphrase "$ssid" "$password" >> /etc/wpa_supplicant/wpa_supplicant.conf
else
	wpa_passphrase "$ssid" < "$path" >> /etc/wpa_supplicant/wpa_supplicant.conf
fi
unset password
unset path
unset ssid

echo -n 'Enter name of DHCP service: '
read dhcp
service $dhcp restart
echo -n 'Enter name of networking service: '
read networking
service $networking restart
echo -n 'Enter wireless interface: '
read wifi
ifup $wifi

unset dhcp
unset wifi
unset networking
