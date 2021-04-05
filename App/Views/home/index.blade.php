<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   <h1>hola</h1>
</body>
</html>
<?php
require_once __DIR__ .'/../../Config/_env.php';

$app_name = getenv('APP_URL');
var_dump($app_name);
echo '<pre>';

echo $app_name;

echo '</pre>';

?>