<?php 
include_once 'header.php';
?>

<?php
    require 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilos/est.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tienda</title>
</head>

<?php

$idbuscar = $_GET['id'];
if(str_contains($idbuscar, "'")){
    echo "puto";
}

?>
<body>
    
</body>

<?php
    include_once("Footer.php");
?>