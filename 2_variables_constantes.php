<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variables y constantes</h1>
    <!--script php-->
    <?php
        //1. La forma de representar las variables en php es anteponiendo el simbolo $ a la palabra que utilizaremos como variable. Ejemplo: $edad*/
        
        /*2. Debemos prestar atención a las mayúsculas y minúsculas, ya que PHP reconoce la diferencia entre las dos. $valor es diferente de $VALOR*/
        
        /*3.¿Para que se utilizan las variables? Graciaas a ellas podremos realizar operaciones aritmeticas y operaciones con cadenas.*/

        /*4.Las variables las utilizaremos como y cuando queramos en una misma página ya que no existe limitación en cuanto a su uso*/

        /*5.Hay que prestar atención a no provocar errores por utilizar como variables palabras reservadas sobre el lenguaje. Ejemplo: $os se genera un error porque en una variable no definida. */

        /*6. También se debe evitar el error de empezar una variable por un número. Por ejemplo: $35var = 45 es un error */

        /* En PHP no es necesario identificar el tipo de variable, pero si debemos saber cuando utilizar las comillas a la hora de definirlas, ya que su uso indicaria que se esta hablando de una cadena. Ejemplo: $cuenta = 7, $nombre ="nestor2  */

        /*Podemos mostrar las variables en pantalla de varias maneras: una de ellas puede ser utilizando la opción echo(): otra puede ser mediante print(); */

        $a = 5;
        $b = "7";
        echo "<b><h1>";
        echo($a);
        echo"<br>";
        echo($b);
        echo"</b></h1>";

        //CONSTANTES
        // La forma de definir una constante es mediante la funcion define
        //Sintaxis: define("nombre_variable,"valor_variable")
        define("capital_colombia","bogota");
        define("habitantes",7000000);
    ?>
</body>
</html>