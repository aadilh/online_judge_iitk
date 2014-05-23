#include<unistd.h>
#include<stdio.h>
#include<string.h>
int main(int argc,char** argv)
{
	chdir("/var/chroot");
        if (chdir("/var/chroot") != 0) {
        return 127;//failed to open chroot
        }
	if(!strcmp(argv[3],"cpp")){
	    //char cmd[]={"g++ -pipe -lm -s -fomit-frame-pointer "};
	    char cmd[]={"g++ "};
	    strcat(cmd,argv[2]);
	    strcat(cmd," -o ");
	    strcat(cmd,argv[1]);
	    strcat(cmd," -lm");
	    system(cmd);
	    }
	else if (!strcmp(argv[3],"java"))
	{
		char cmd[]={"javac "};
	    strcat(cmd,argv[2]);
	    strcat(cmd," -d /var/chroot");
	    //strcat(cmd,argv[1]);
	    //strcat(cmd," -lm");
	    system(cmd);
	}
	else{
	    //char cmd[]={"gcc -pipe -lm -s -fomit-frame-pointer "};
	    char cmd[]={"gcc "};
	    strcat(cmd,argv[2]);
	    strcat(cmd," -o ");
	    strcat(cmd,argv[1]);
	    strcat(cmd," -lm");
	    printf("%s\n",cmd);
	    system(cmd);
	}
	return 0;
}	
