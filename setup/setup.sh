#!/bin/bash

#setup.sh - sets up the machine for GlassDrive
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
