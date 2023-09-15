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

        $Nombre = $_GET["nombre"] ?? "Hector Caño Alvarez";

        $NoEspacio = trim($Nombre, " ");

        $Longitud = strlen($Nombre);

        $Mayusculas = mb_strtoupper($Nombre);

        $Minusculas = mb_strtolower($Nombre);

        $Prefijo = $_GET["prefijo"] ?? "Hec";

        $c= " ";
        
        $Coinciden = strpos($Nombre , $Prefijo);

            if($Coinciden=false){
                $c= "Empieza por el prefijo ". $Prefijo;
            }
            else{
                $c= "No empieza por el prefijo ". $Prefijo;
            }
        $CuantasA = substr_count($Mayusculas,"A");

        $PrimeraA = stripos($Nombre, "A");
            if($PrimeraA == -1){
                $PrimeraA = "No hay ninguna A";
            }
        $Reemplaza = str_ireplace("o","0",$Nombre);
        

        echo( "El nombre es: " .
            $Nombre . "<br> " .

             "<br> ".

            "La longitud del nombre es: " . 
            $Longitud . "<br> ". 

             "<br> ".

            "El nombre en mayúsculas es: " .
            $Mayusculas . "<br> ".

             "<br> ".

            "El nombre en minúsculas es: " .
            $Minusculas . "<br> ". 

             "<br> ".

            "El prefijo es: " .
            $Prefijo . "<br> ".

             "<br> ".

            "El nombre: " .
            $c . "<br> ". 

            "<br> ".

            "Hay ".
            $CuantasA .
            " A". "<br> ".

            "<br> ".

            "La primera A se encuentra en el lugar: ".
            $PrimeraA . "<br> ".

            "<br> ".

            "Las o reemplazadas por 0: " .
            $Reemplaza . "<br> "
         );

    ?>
</body>
</html>