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

EXIT_SUCCESS=0
EXIT_NO_ROOT=1
EXIT_BAD_ARGS=2
EXIT_APT_FAILED=3

if [ "$EUID" -ne 0 ]; then
	echo 'Error: This script must be run with administrator privileges.'
	exit $EXIT_NO_ROOT
fi

. ./deps.sh

GlassDrivePath=$(dirname $(readlink -f $0))
echo $GlassDrivePath
cp /etc/rc.local rc.local.old
sed -e "s/exit.*/$GlassDrivePath\/checknetwork.sh/" /etc/rc.local > rc.local.new
mv /etc/rc.local.new /etc/rc.local

. ./adhoc.sh $(./serial.sh)
