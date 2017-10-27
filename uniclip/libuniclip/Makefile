CC=g++
FLAGS=-I ../libsocktalk -L ../libsocktalk -std=c++11 -c
LIB=-l socktalk

clean:
	rm *.a *.o

lib: uniclipserver.o
	ar rcs libuniclip.a *.o

uniclipserver.o:
	$(CC) $(FLAGS) uniclipserver.cpp $(LIB) -o uniclipserver
