<?php
session_start();
if($_SESSION['user']!="root"){
    //echo "no root";
    header("location:home.php");
}
else{
    session_abort();
    //echo "root";
?>

<?php 
include_once 'header.php';
?>
<?php
    require 'conexion.php';
?>

<head>
    <link rel="stylesheet" href="estilos/est.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tienda/Modificar</title>
</head>

<body>
    <?php
        $sqli = "SELECT * FROM instrumento";
        $resultado = $conexion -> query($sqli);
    ?>
    <center>
    <div class="row row-cols-1 row-cols-md-3 g-4" style="width: 80%">
    <?php
        while($fila = $resultado ->fetch_assoc()){
    ?>
        <div class="col">
            <div class="card h-100">
            <a style="text-decoration: none; color: black" href="modificar.php?id=<?php echo $fila['Id'] ?>"><img src="<?php echo $fila['Archivo'] ?>" class="card-img-top" alt="..." height="200px"></a>
                <div class="card-body">
                    <a style="text-decoration: none" href="modificar.php?id=<?php echo $fila['Id'] ?>"><h5 class="card-title"><?php echo $fila['Nombre'] ?></h5></a>
                    <p class="card-text">
                        <?php
                            if($fila['oferta'] != '0'){?>
                                <h5>Precio de: $<del><?php echo $fila['Precio']?></del></h5>
                                <h5>a: $<span><?php echo $fila['Precio'] - $fila['oferta'] * $fila['Precio'] / 100 ?></span></h5>
                            <?php
                            }
                            else{?>
                                <h5>Precio: $<span><?php echo $fila['Precio']?></span></h5>
                            <?php
                            }
                        ?>
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><?php echo $fila['Descripcion'] ?></small>
                </div>
            </div>
        </div>
    <?php
        }
    ?>
    </div>
    </center>
    <?php
        include_once("Footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>


<?php
}
?>