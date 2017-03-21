<?php
    //Ejercicio 6
    // Constructor
    $array = array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10));
    $acumulador = 0;
    //var_dump($array);
    for($i = 0; $i < 5; $i++)
    {
        echo($array[$i]."<br>");
    $acumulador = $acumulador + $array[$i];
    }
    if($acumulador/5 > 6)
    {
        echo("El promedio es mayor que 6<br>");
    }
    else
    {
        if($acumulador/5 == 6)
        {
        echo("El promedio es igual a 6<br>");
        }
        else
        {
            echo("El promedio es menor a 6<br>");
        }
    }

    // [0]
    $array2[0] = rand(1,10);
    $array2[1] = rand(1,10);
    $array2[2] = rand(1,10);
    $array2[3] = rand(1,10);
    $array2[4] = rand(1,10);
    $acumulador3 = 0;
        for($i = 0; $i < 5; $i++)
    {
        echo($array2[$i]."<br>");
    $acumulador3 = $acumulador3 + $array2[$i];
    }
        if($acumulador3/5 > 6)
    {
        echo("El promedio es mayor que 6<br>");
    }
    else
    {
        if($acumulador3/5 == 6)
        {
        echo("El promedio es igual a 6<br>");
        }
        else
        {
            echo("El promedio es menor a 6<br>");
        }
    }

    //.push()
    $array3 = array();
    $acumulador2 = 0;
    for($i = 0; $i < 5; $i++)
    {
        $numero = rand(1,10);   
        array_push($array3,rand(1,10));  
        echo($array3[$i]."<br>");

        $acumulador2 = $acumulador2 +  $array3[$i];
    }
        if($acumulador2/5 > 6)
    {
        echo("El promedio es mayor que 6<br>");
    }
    else
    {
        if($acumulador2/5 == 6)
        {
        echo("El promedio es igual a 6<br>");
        }
        else
        {
            echo("El promedio es menor a 6<br>");
        }        
    }

    //var_dump (m:array);

?>