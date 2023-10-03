<?php
$server_host = $_SERVER['HTTP_HOST'];
$texto="";
echo "<p><strong>Tu Navegador es:</strong></p>";
foreach (getallheaders() as $key => $value) {
    if (str_contains($value,"Firefox")){
        $texto = "Mozilla Firefox"; 
 }
    else{
        $texto = "Chrome";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navegador</title>
</head>
<body>
    <?php
        echo $texto;
    ?>
</body>
</html>