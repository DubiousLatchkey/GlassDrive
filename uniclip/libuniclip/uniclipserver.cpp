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

void UniClipServer::run() {
	if (status != SUCCESS) {
		std::cout << "Failed to set up sockets\n";
		return;
	}
	while (1) {
		std::string input;
		cin >> input;
		if (input == "exit") {
			break;
		}
	}
	closeServer();
}

void UniClipServer::handleMessage(const std::string &msg) {
	std::ofstream file;
	file.open("uniclip", ios::app);
	file << msg << "\n\n";
	file.close();
}

int main(int argc, char * argv[]) {
	if (argc != 2) {
		std::cerr << "Must provide port\n";
		return 1;
	}
	int port = (int)strtol(argv[1], (char**)NULL, 10);
	new UniClipServer(port)->run();
	return 0;
}
