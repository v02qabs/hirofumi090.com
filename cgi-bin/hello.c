#include <stdio.h>
#include <stdlib.h>

int main(){
	printf("Hello.\n");
	system("sqlite3 --version");
	system("gcc --version");
	system("mysql --version");
	return 0;
}

