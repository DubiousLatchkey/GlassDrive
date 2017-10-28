#include "uniclipclient.h"

void UniClipClient::send(const std::string &text) {
	SockTalkClient::send(text);
}

void UniClipClient::handleMessage(const std::string &msg, int type) {}
