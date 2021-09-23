#include <stdio.h>
#include <string.h> 

int main()
{
	char texto[50], temp;
	printf("Escreva uma palavra: ");
	scanf("%s", &texto);

	
	int i, fim;  
	fim = strlen(texto) - 1; // Index da ultima letra
	// loop pra reverter
	for (i = 0; i < fim; i++)  
	{  
		temp = texto[i];  
		texto[i] = texto[fim];  
		texto[fim] = temp;  
		fim--;  
	}  
	
	printf("\nPalavra Reversa:");
	printf("\n%s\n\n\n", texto);
	
	system("pause");
	return 0;
}
