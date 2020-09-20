# Conociendo el Lenguaje Php (I)
####  Inserción de código en páginas web, variables, errores y mensajes de Error

#### Actividad 1

Convierte la página estática `index.html` facilitada, en un script php que muestre tu nombre y apellidos.
Utiliza código php para generar la salida
```php
    <?php
        echo "Nombre";
        echo "Apellidos";
        
```

#### Actividad 2

Modifica el programa anterior para que muestre tu dirección y tu número de teléfono. Cada dato
se debe mostrar en una línea diferente. Debes usar las etiquetas: `<p></p>`

#### Actividad 3

Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
`<table>` de HTML.

| Inglés        | Español    |
| :-------------: |:-------------:|
| Refactoring   | Refactorizar |
| Repository          | Repositorio      |
| Programing Language      | Lenguaje de Programación      |

#### Actividad 4

Escribe un programa que muestre tu horario de clase mediante una tabla. Los nombres de cada módulo deben estar 
dentro de una variable. Intenta repetir el menor código posible. 
Aunque se puede hacer integramente con HTML, utiliza las directivas `<?= ... ?>` para mostrar cada línea.

#### Actividad 5

Escribe un programa que cree la variable `$nombre`, le asigne tu nombre completo y muestre su valor por pantalla 
de forma que el resultado sea el mismo que el del ejercicio 1.

#### Actividad 6

Escribe un programa que declare 5 variables `$preferencia1`, `$preferencia2`,.. `$preferencia5`, almacena en cada 
una de ellas el nombre de un IDE para php y genere una página web con una lista ordenada. Recuerda 
que las listas ordenadas se crean haciendo uso de las etiquetas: `<ul><li></li></ul>`

1. PHPStorm
2. VisualStudio Code
3. Eclipse for developers
4. NetBeans
5. Atom

#### Actividad 7

1. Muestra por pantalla una pirámide hecha con asteriscos de base 9
2. Muéstrala vacia
3. Muéstrala invertida

#### Actividad 8

A partir del script php facilitado:

1. Establece la directiva correspondiente (en el propio script) para que el intérprete muestre todos los mensajes de **error,
   advertencia y alerta**.
   ```php
       <?php
           
           //Habilita la salida de errores por pantalla
           ini_set('display_errors', 1);
        
           //Muestra todos los errores de los diferentes niveles
           error_reporting(E_ALL);
           
           // Todos los errores de ejecución
           error_reporting(E_ERROR | E_WARNING | E_PARSE);
           
           //Todos los errores de ejecución + Alertas
           error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    ```   
Lee el siguiente enlace [Php.net Error Reporting](https://www.php.net/manual/es/function.error-reporting.php);

2. Escribe un comentario que se visualice en el html resultante sobre el tipo de mensaje que se está produciendo en cada caso. 
3. Refactoriza el código para que no se produzcan los errores. 
    **Nota** Comenta aquellos que no se necesiten para el correcto funcionamiento del programa
4. Describe el significado de cada error. ¿Quñe opción activarias para que solo se mostrase ese tipo de error?

#### Actividad 9
Escribe un programa que declare 2 variables ``$num1`` y ``$num2`` las inicialice con un número entero y muestre por pantalla
la suma, multiplicacion, division, resta, módulo y el resultado de aplicar a las 2 variables el operador postincremento y preincremento

#### Actividad 10
Busca en Internet la fórmula que calcula el IMC de una persona. Escribe un programa que calcule el IMC de una persona. 
Tanto el peso como la altura deben estar almacenadas en dos variables ``$altura`` y ``$peso``. 