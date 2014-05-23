#include<stdio.h>
 
int main()
{
    int i,j,n,t,z;
    scanf("%d",&t);
    for (z=0;z<t;z++)
    {
        int k,count;
        scanf("%d",&n);
        for (i=2,count=0;count<n;i++)
        {
            k=0;
            for (j=2;j<i;j++)
                if (i%j==0)
                {
                    k=1;
                    break;
                }
            if (k==0)
            {
                count++;
            }
        }
        printf("%d\n",i-1);
    }
    return 0;
}
