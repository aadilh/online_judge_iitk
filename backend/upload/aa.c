#include <stdio.h>
int main()
{
int T;
scanf("%d",&T);
while(T--)
{
	int n,q;
	int A[200000];
	scanf("%d",&n);
	int i,j;
	for(i=0;i<n;++i)
		scanf("%d",A+i);
	scanf("%d",&q);
	while(q--)
	{
		int l, r;
		scanf("%d%d",&l,&r);
		l--,r--;
		long long ans = 0;
		for(i=l;i<=r;++i)
		ans += A[i];
		printf("%lld\n",ans);
	}
}
return 0;
}
