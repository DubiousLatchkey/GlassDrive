CC=g++
FLAGS=-I ../libsocktalk -std=c++11 -c

clean:
	rm *.a *.o

lib: uniclipserver.o uniclipclient.o
	ar rcs libuniclip.a *.o

uniclipserver.o:
	$(CC) $(FLAGS) uniclipserver.cpp

uniclipclient.o:
	$(CC) $(FLAGS) uniclipclient.cpp
