#ifndef UNICLIPCLIENT_H
#define UNICLIPCLIENT_H

#include "socktalkclient.h"

class UniClipClient : public SockTalkClient {
    public:
	using SockTalkClient::SockTalkClient;
	void send(const std::string&);
	virtual void handleMessage(const std::string&, int);
};

#endif
