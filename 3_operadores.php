<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores</title>
</head>
<body>
   <h1> OPERADORES </h1> 
   <?php
   echo "<h1> Operadores Aritméticos </h1>";
   // suma:+
   // resta: -
   // Multiplicación:*
   // División:/
   // Modulo:%
   //Incremento: ++
   // Decremento: --
   // Exponenciación: **
   $x = 9;
   echo ("x = ".$x."<br>");
   $y = 3;
   echo ("x = ".$y."<br>");
   $z = 5;
   echo ("x = ".$z."<br>");

   $suma = $x + $y;
   echo ("suma = ".$suma."<br>");

   $resta = $x - $z;
   echo ("resta = ".$resta."<br>");

   $multiplicacion =$suma*$resta;
   echo ("multiplicacion = ".$multiplicacion."<br>");

   $final =$multiplicacion++;
   echo ("final = ".$final."<br>");

   echo ("multiplicacion = ".$multiplicacion."<br>");
   

   // Operadores Aritméticos
   //En PHP, los operadores aritméticos se utilizan para realizar operaciones matemáticas en variables y valores. Los operadores aritméticos básicos son el de la suma que se utiliza para sumar dos valores. Ejemplo:
   
   echo '<hr>';

   $a = 2;
   $b = 10;
   $resultado = $a + $b ;
   echo $resultado;
    echo"<br>";
    echo '</hr>';
   //Operadores de comparación
   // igual: ==
   // Idéntico: ===
   // Diferente: !=
   //Menor: <
   //Mayor : >
   //Menor o igual: <=
   //Mayor o igual: >=
   
   //En PHP, los operadores de comparación se utilizan para comparar dos valores y determinar si son iguales, diferentes, mayores, menores, mayores o iguales, o menores o iguales. Ejemplos:
    echo '<hr>';

    echo "<h1> Operadores de Comparación </h1>";
    $x = 5;
    $y = 5;
    echo ( $x == $y);
    echo ( $x <= $y);
    echo "<br>";
    echo '<hr>';

    $a = 10;
    $b = 10;
    if ($a == $b) {
        echo "Los valores son iguales";
    } else {
         echo "Los valores no son iguales";
    }
    echo '<hr>';

   // Operadores  lógicos
   // AND o &&: $a && sb es true si $a y $b son verdaderos 
   // OR o ||: $a|| sb es true si $a o $b son verdaderos 
   // XOR: $a XOR $b es true si $a es verdadero o $b es verdadero, pero no los dos 
   // !: $a es true si $a es False 


   echo "<h1> Operadores Lógicos  </h1>";
   //Un operador lógico en PHP es un símbolo o conjunto de símbolos que se utilizan para combinar o negar expresiones lógicas. Estos operadores permiten evaluar condiciones múltiples y determinar el resultado lógico en función de esas condiciones. Ejemplo:

$edad = 15;
$ciudad = "New York";

if ($edad > 18 && $ciudad == "New York") {
    echo "Puede ingresar al evento.";
} else {
    echo "No puede ingresar al evento.";
}
echo '<hr>';
$x = 4;
$y = 5;
if(($x ==4) && ($y == 5))
{
     print("Estas en lo correcto");
}
echo "<br>";
if(($x==4) OR ($y==3))
{
     print("La segunda operación también es correcta");
}

   // Operadores  de unión de cadenas
   echo "<h1> Operadores de Unión con Cadenas</h1>";
   //El operador de unión a cadenas en PHP es el punto (´.´). Se utiliza para concatenar o unir dos cadenas de texto en una sola cadena.Cuando se utiliza el operador de unión a cadenas, PHP toma los operandos (que pueden ser cadenas de texto o variables que contienen cadenas) y los combina en un solo resultado, que es una cadena que contiene la concatenación de los operandos. Ejemplo:
   
   $nombre = "Irismenia";
   $apellido = "Alviarez";

   $nombreCompleto = $nombre . " " . $apellido;

   echo $nombreCompleto;
   echo "<br>";
   echo '<hr>';
   // para la union de cadenas se emplea el punto (.)
   $t = "Ejemplo";
   $w = 'ola';
   $x = "de";
   $y = "cadenas";
   $z = '';
   $resultado1 = $t;
   $resultado2 = $t.$z.$x.$z.$w.$z.$x.$z.$y;
   echo '<b><h1>';
   echo $resultado1;
   echo '<hr>';
   echo $resultado2;
   echo '</b></h1>';


?>

</body>
</html>