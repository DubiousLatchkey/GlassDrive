//Universal Clipboard Server
//Written by Alessandro Vinciguerra <alesvinciguerra@gmail.com>
//Copyright (C) 2017  Arc676/Alessandro Vinciguerra

//This program is free software: you can redistribute it and/or modify
//it under the terms of the GNU General Public License as published by
//the Free Software Foundation (version 3), except using the OpenSSL library is allowed.

//This program is distributed in the hope that it will be useful,
//but WITHOUT ANY WARRANTY; without even the implied warranty of
//MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//GNU General Public License for more details.

//You should have received a copy of the GNU General Public License
//along with this program.  If not, see <http://www.gnu.org/licenses/>.
//See LICENSE for full GPL text.

#include "uniclipserver.h"

int main(int argc, char * argv[]) {
	if (argc != 2) {
		std::cerr << "Must provide port\n";
		return 1;
	}
	int port = (int)strtol(argv[1], (char**)NULL, 10);
	UniClipServer* serv = new UniClipServer(port);
	serv->run();
	return 0;
}
