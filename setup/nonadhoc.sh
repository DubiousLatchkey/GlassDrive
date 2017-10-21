#!/bin/bash

#nonadhoc.sh - disable the ad-hoc network so the device can be reconnected to normal WiFi networks
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

echo 'Restarting networking service...'
service networking restart
if [ $? -eq 0 ]; then
	echo 'Done'
else
	echo 'Failed to restart networking service'
fi
