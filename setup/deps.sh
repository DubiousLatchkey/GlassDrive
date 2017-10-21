#!/bin/bash

#deps.sh - sets up the machine for GlassDrive
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

function installDep {
	echo "Installing $1..."
	apt install $1
	error=$?
	if [ $error -eq 0 ]; then
		echo 'Done'
	else
		echo "Failed to install $1. apt exited with error code: $error"
		exit $EXIT_APT_FAILED
	fi
}

echo 'Installing dependencies...'
installDep 'apache2'
installDep 'vsftpd'
installDep 'udhcpd'
echo 'Dependencies installed successfully.'
