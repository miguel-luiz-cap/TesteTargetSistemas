#include <stdio.h>
#include <stdlib.h>

int main() {
	int a, b, auxiliar, i, num, pertence;

	a = 0;
	b = 1;
	pertence = 0;
	
	inicio:
	printf("Verificar se pertence a sequencia de Fibonacci:\n-----> Digite um numero: ");
	scanf("%d", &num);

	
	printf("\n\nNumeros da sequencia:\n");
	
	printf("Posicao: 1 - Numero: 0\n");
	printf("Posicao: 2 - Numero: 1\n");
	if(num > 0) {
		for(i = 2; i < 45; i++) {
	
			auxiliar = a + b;
			a = b;
			b = auxiliar;
			printf("Posicao: %d - Numero: %d\n", i+1, auxiliar);
			
			if(auxiliar == num) {
				pertence = i+1;
				break;
			}
			else if(auxiliar > num) {
				pertence = 0;
				break;
			}
		}
	}

	else {
		pertence = 1;
	}
	
	printf("\n\n----------------------------------------------------\n");
	if(pertence > 0) {
		printf("--------> Pertence Sim\n");
		
		if(pertence == 3)
			printf("--------> Posicao ao qual pertence na sequencia: 2 e 3\n");
		else
			printf("--------> Posicao ao qual pertence na sequencia: %d\n", pertence);
	}
	else {
		printf("--------> Nao Pertence a sequencia\n");
	}
		printf("----------------------------------------------------\n");
	system("pause");
	return 0;
}
