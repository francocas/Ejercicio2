<?php
echo("Ejercicio 1<br>");
$acumulador = 0;
$contador = 0;
while($acumulador <= 1000)
{
	$acumulador+= $contador;
	echo($contador.", ");
	
	$contador++;
}
echo("<br>");
echo($acumulador."<br><br>");

echo("<br>Ejercicio 2<br><br>");
$fecha = date("d, F, o");
$mes = date("F");
$dia = date("d");
$estacion;
switch($mes)
{
	case "March":
		if($dia < "21")
		{
			$estacion = "Verano";
		}
		elseif($dia>= "21")
		{
			$estacion = "Otono";
		}
		break;
	case "June":
		if($dia < "21")
		{
			$estacion = "Otono";
		}
		elseif($dia >= "21")
		{
			$estacion = "Invierno";
		}
		break;
	case "September":
		if($dia < "21")
		{
			$estacion = "Invierno";
		}
		elseif($dia >= "21")
		{
			$estacion = "Primavera";
		}
		break;
	case "December":
		if($dia < 21)
		{
			$estacion = "Primavera";
		}
		elseif($dia > 21)
		{
			$estacion = "Verano";
		}
		break;
}
echo($fecha.", ".$estacion);
echo("<br><br>Ejercicio 3<br>");
$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);
$NumeroMedio;
if($a >= $b && $a <= $c || $a <= $b && $a >= $c)
{
	$NumeroMedio = $a;
}
elseif($b >= $a && $b <= $c || $b <= $a && $b >= $c)
{
	$NumeroMedio = $b;
}
elseif($c >= $a && $c <= $b || $c <= $a && $c >= $b)
{
	$NumeroMedio = $c;
}
echo("A:".$a." B: ".$b." C:".$c."<br>");
echo("El numero medio es: ".$NumeroMedio."<br>");
echo("<br>Ejercicio 6<br>");
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

