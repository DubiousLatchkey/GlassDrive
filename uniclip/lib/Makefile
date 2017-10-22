CC=g++
FLAGS=-std=c++11 -c

clean:
	rm *.a *.o

lib:
	ar rcs uniclip.a *.o

.o:
	$(CC) $(FLAGS) .cpp
