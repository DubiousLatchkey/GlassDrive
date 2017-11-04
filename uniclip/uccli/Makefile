CC=g++
FLAGS=-std=c++11
LD=-I ../libuniclip -I ../libsocktalk -L ../libuniclip -L ../libsocktalk -L /usr/local/lib
LIB=-l uniclip -l socktalk -l ssl -l crypto
THREAD=-pthread

all:
	make server
	make client

client:
	$(CC) $(FLAGS) $(LD) client.cpp $(LIB) $(THREAD) -o client

server:
	$(CC) $(FLAGS) $(LD) server.cpp $(LIB) $(THREAD) -o server

clean:
	rm server client
