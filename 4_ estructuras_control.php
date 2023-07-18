<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>
<body>
    <h1> Estructuras de control</h1>
    <?php
        // if, if-else:
        echo "<h1>if</h1>";
        //Ejemplo 1
        $color = " rojo";
        if($color = "rojo" )
        {
            print(" efectivamente, el color es rojo");
        }
        echo "<br>";
        // Ejemplo 2
        $x = 10;
        $y = 15;
        if($x == $y)
        {
            print(" x e y son iguales");
        }
        elseif($x > $y)
        {
            print(" x es mayor que y");
        }
        elseif($x < $y)
        {
            print(" x es menor que y");
        }
        // while 
        // Indica que mientras no cumpla una determinada condición, no se saldra del bucle y no
        // Saltara a la siguiente linea de código
        echo "<h1>while</h1>";
        echo "<br>";
        $x = 10;
        while(--$x)
        {
            echo "<big>";
            echo "<b>";
            print("Número : ".$x);
            echo "<br>";
            echo "<hr>";
        }

        //do-while

        // 
        // for
        // será utilizado para ejecutar un determinado número de veces, hasta que cumpla una condición

        echo "<h1>while</h1>";
        echo "<br>";
        for($x= 5; $x < 10; $x++)
        {
            print("Número:".$x."<br>" );
        }
            //require
        //Sirve para incluir archvos en nuestras paginas y solo será necesario hacer referencia a este archivo
        //con la instruccion que se requiere. Se usa principalmente para definir variables, y estas estarán listas
        //una vez hagamos la llamada ala rchivo donde esten guardadas


        //include
        //Funciona igual que la función require(), con al diferencia de que si puede procesar el codigo 
        //tantas veces como la llamemos a esa pagina externa. Ejemplo:
        echo "<h1>Include</h1>";
        include("variables.php");
        echo "<br>";
        print("$x"."$z"."$y");

        //switch
        //Se utiliza para comprobar un dato entre varias posibilidades
        echo "<h1>switch</h1>";
        echo "<br>";
        $color = "negro";
        switch($color)
        {
            case "blanco";
                $sector = "claro";
                break;
            case "naranja";
                $sector = "normal";
                break;
            case "negro";
                $sector = "oscuro";
                break;
    
        }
        print($sector);
    ?>
</body>
</html>