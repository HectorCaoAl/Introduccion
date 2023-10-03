<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ArrayNombre= Array("Uno","Dos","Tres","Cuatro");
    $ContarNombre= count($ArrayNombre);
    $NombreString= implode(" ",$ArrayNombre);
    $Reversed = array_reverse($ArrayNombre);
    $Donde= array_search("Dos", $ArrayNombre);
    echo "El Array contiene: ";
    print_r($ArrayNombre);
    echo(
            "<br> ".
        "El Array tiene ". $ContarNombre. " Elementos".
            "<br> ".
        "Como String, separado por espacios: ". $NombreString.
            "<br> "
);
asort($ArrayNombre);

    echo("El array ordenado  alfabéticamente es: ");

print_r($ArrayNombre);

    echo(
        "<br>".
        "Sin las posiciones, pero ordenado alfabéticamente: ".
        implode(" ",$ArrayNombre).
        "<br>".
        "Array dado la vuelta: "
);

print_r($Reversed);

    echo(
        "El número 2 está en la posición: ". $Donde. " Respecto al array.".
        "<br>" 

);

$Alumnos = array(
    array(
        'first_name'=>"Pete",
        'edad'=>"19",
        "id"=> "123123123"),
    array(
        'first_name'=>"Sally", 
        'edad' =>"32", 
        "id" => "100000000"),
    array(
        'first_name'=>"Cap", 
        'edad' =>"21", 
        'id' =>"1112434535")
  );

echo "<table border=1 >";
echo "<tr>";
echo "  <th> <u> Nombre </u>  </th>";
echo "  <th>  <u> Id </u>  </th>";
echo "  <th>  <u> Edad </u>  </th>";
echo "</tr>";
foreach($Alumnos as $students){
echo "<tr>";
echo "<td> " . $students["first_name"]. "</td>";
echo "<td> " . $students["id"] . "</td>";
echo "<td> " . $students["edad"] . "</td>";
echo "</tr>";
}
echo "</table>";

$nombres = array_column($Alumnos, 'first_name');
print_r($nombres);


$a = array(2, 4, 6, 8, 3, 3, 1, 4, 9, 1);
echo "La suma de los números del array es: " . array_sum($a) . "\n";
    ?>

</body>
</html>