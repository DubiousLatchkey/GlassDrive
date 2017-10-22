# GlassDrive

Library, applications, and other tools for wireless storage and file sharing.

Ever thought USB drives were too clunky?  Here's your solution!

## Overview

GlassDrive allows any wireless-enabled device to create a Wi-Fi network that hosts a file sharing platform.
Any device can connect to the network and upload and download the hosted files, essentially acting as a portable file server.
GlassDrive also allows for connections over Bluetooth for file transfers.
The true power of GlassDrive is the implications on the IoT.  Hosting this on a mobile platform like a Raspberry Pi Zero allows for a local network of files to follow you anywhere you go.


## GlassDrive Contributors

* Owen Hu
* Arc676/Alessandro Vinciguerra
* Robin Zhong
* Matthew Chen

## How to Use GlassDrive

1. Copy the setup scripts onto the target device
1. Run setup.sh to prepare the device
1. On another device, connect to the created Wi-Fi network
1. FTP to 192.168.1.1 to access the files
