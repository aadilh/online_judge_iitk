#include<cstdio>
using namespace std;

int main()
{
	int take;
	float money;
	scanf("%d %f",&take,&money);
	if (take%5!=0 || money<take)
	{
		printf("%.2f",money);
		return 0;
	}
	printf("%.2f",money-take-0.50);
	return 0;
}