1) Construir una clase en PHP llamada Persona que siga las siguientes condiciones:

- Sus atributos son: nombre, edad, DNI, genero (H hombre, M mujer), peso y altura. No 
    queremos que se accedan directamente a ellos. 

- Un constructor con todos los atributos como parámetro. Por defecto, todos los atributos 
    menos el DNI serán valores por defecto según su tipo (0 números, cadena vacía para String, 
    etc.). Género será hombre por defecto, usa una constante para ello.

- Los métodos que se implementaran son:

    calcularIMC(): calculara si la persona está en su peso ideal (peso en kg/(altura^2 en 
    m)), si esta fórmula devuelve un valor menor que 20, la función devuelve un -1, si 
    devuelve un número entre 20 y 25 (incluidos), significa que esta por debajo de su 
    peso ideal la función devuelve un 0 y si devuelve un valor mayor que 25 significa 
    que tiene sobrepeso, la función devuelve un 1. Te recomiendo que uses constantes 
    para devolver estos valores.

- esMayorDeEdad(): indica si es mayor de edad, devuelve un booleano.

- toString(): devuelve toda la información en string del objeto.
- generaDNI(): genera un número aleatorio de 8 cifras, genera a partir de este su 
    número su letra correspondiente. Este método será invocado cuando se construya 
    el objeto.

- Métodos set de cada parámetro, excepto de DNI.

