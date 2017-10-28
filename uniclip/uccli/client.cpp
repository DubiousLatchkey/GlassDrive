#include "uniclipclient.h"

int main(int argc, char * argv[]) {
	if (argc != 4) {
		return 1;
	}
	int port = (int)strtol(argv[1], (char**)NULL, 10);
	std::string host = std::string(argv[2]);
	UniClipClient* client = new UniClipClient(port, host, "PlaceholderUsername");
	if (client->getStatus() != SUCCESS) {
		delete client;
		return 1;
	}
	std::string message = std::string(argv[3]);
	client->send(message);
	client->closeClient();
	delete client;
	return 0;
}
