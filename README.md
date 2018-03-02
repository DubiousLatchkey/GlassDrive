# GlassDrive

Tools for wireless storage and file sharing.

Ever thought USB drives were too clunky?  Here's your solution!

## Overview

GlassDrive allows any wireless-enabled device to create a Wi-Fi network that hosts a file sharing platform.
Any device can connect to the network and upload and download the hosted files, essentially acting as a portable file server.
The true power of GlassDrive is the implications on the IoT.  Hosting this on a mobile platform like a Raspberry Pi Zero allows for a local network of files to follow you anywhere you go.

## Supported platforms

Hopefully more to come!
* Linux

## GlassDrive Contributors

* Robin Zhong
* Owen Hu
* Arc676/Alessandro Vinciguerra
* Matthew Chen

## How to Use GlassDrive

1. Copy the setup scripts onto the target device
1. Run setup.sh to prepare the device
1. On another device, connect to the created Wi-Fi network
1. FTP to 192.168.1.1 to access the files or use the web interface by connecting to 192.168.1.1 in a browser

## GlassDrive services

### File Server

GlassDrive allows you to bring your files wherever you go without having to worry about cables or connection protocols. You can access files stored on a GlassDrive device via HTTP, FTP, or SSH.

### Universal Clipboard

GlassDrive comes with UniClip, a universal clipboard service. Copy some text on one device and paste it on another using the simple web interface or by downloading the UniClip programs.

If you want, you can use the UniClip library to build your own frontend to this service. UniClip uses the [SockTalk protocol](https://github.com/Arc676/SockTalk).

## Legal

GlassDrive software is open source. Each source file should include a copyright notice regarding licensing.
* BASh scripts under GPLv3
* UniClip and SockTalk libraries available under GPLv3
