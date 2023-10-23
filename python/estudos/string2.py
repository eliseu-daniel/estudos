<<<<<<< HEAD
#strings sao objetos em python
#pode aplicar metodos nas strings
#string = string.metodo()
a = "Eliseu"
b = "Mariano"

concatenar = a + " " + b
print(concatenar)

print(concatenar.lower()) #imprimir em minusculo
print(concatenar.upper()) #imprimmir maiusculo

#para trocar na variavel e deixar tudo em maiusculo
print(concatenar)
concatenar = concatenar.upper()
print(concatenar)

#remover espaços e caracteres especiais da string
concatenar = a + " " + b + "\n" #\n cria uma quebra de linha
print(concatenar)
print(concatenar.strip()) #aq vai tirar o espaço do \n

#converte sequencia em lista
minha_string = "o rato roeu a roupa do rei de Roma"

minha_lista = minha_string.split(" ")
print(minha_lista)

#busca na string
busca = minha_string.find("rei") #mostra o indice da palavra
print(busca)

print(minha_string[busca:]) # mostrar tudo dps da busca

#substituir partes de uma string
minha_string = minha_string.replace("o rei", "a rainha")
=======
#strings sao objetos em python
#pode aplicar metodos nas strings
#string = string.metodo()
a = "Eliseu"
b = "Mariano"

concatenar = a + " " + b
print(concatenar)

print(concatenar.lower()) #imprimir em minusculo
print(concatenar.upper()) #imprimmir maiusculo

#para trocar na variavel e deixar tudo em maiusculo
print(concatenar)
concatenar = concatenar.upper()
print(concatenar)

#remover espaços e caracteres especiais da string
concatenar = a + " " + b + "\n" #\n cria uma quebra de linha
print(concatenar)
print(concatenar.strip()) #aq vai tirar o espaço do \n

#converte sequencia em lista
minha_string = "o rato roeu a roupa do rei de Roma"

minha_lista = minha_string.split(" ")
print(minha_lista)

#busca na string
busca = minha_string.find("rei") #mostra o indice da palavra
print(busca)

print(minha_string[busca:]) # mostrar tudo dps da busca

#substituir partes de uma string
minha_string = minha_string.replace("o rei", "a rainha")
>>>>>>> 7f487fb7bee6ee4d62877714fcae5b1f9ae92e8d
print(minha_string)