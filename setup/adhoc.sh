#!/bin/bash

#adhoc.sh - sets up an ad-hoc WiFi network
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

echo 'Creating ad-hoc network...'

if [ $# -ne 1 ]; then
	echo 'Error: must provide SSID suffix'
	exit 1
fi

ifconfig wlan0 up
iwconfig wlan0 key off
iwconfig wlan0 mode ad-hoc
iwconfig wlan0 essid "GlassDrive-$1"

echo "Created ad-hoc network GlassDrive-$1"

echo 'Setting IP address...'
ifconfig wlan0 192.168.1.1 netmask 255.255.255.0
echo 'IP address: 192.168.1.1'

echo 'Copying udhcp configuration file...'
cp -f ./udhcpd /etc/default

echo 'Killing DHCP...'
echo -n 'Enter name of DHCP service: '
read dhcp
service $dhcp stop
