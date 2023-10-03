<?php
    $idioma = ($_GET["idioma"] ?? ($_COOKIE["idioma"] ?? "en"));
    setcookie("idioma". $idioma, time() + 30 * 24 *60 *60);

?>
<script>

</script>

<!DOCTYPE html>
<html lang= <?= $idioma ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
</style>

</head>
<body>
<a href="Idioma.php?idioma=en">Cambiar idioma a Inglés</a>
</br>
<a href="Idioma.php?idioma=es">Cambiar idioma a Español</a>
    
</body>
</html>