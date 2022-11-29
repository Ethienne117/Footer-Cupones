<?php
    //validar captcha
    session_start();
   /* if(empty($_COOKIE['user'])){
        
    }
    else{
        $_SESSION['user']=$_COOKIE['user'];  
        $_SESSION['id']=$_COOKIE['id'];
    }*/
    //$message = '';
    if(isset($_SESSION['cantidad'])){

    }else {
      $_SESSION['cantidad']=0;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <script src="js/load_captcha.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    
    

   
    
</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(-20deg, #fc6076 0%, #ff9a44 100%);">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <?php
          if (empty($_SESSION['user'])) {
              echo "<a class='nav-link' href='tienda.php'>Tienda</a>";
          }
          else{
           
            if($_SESSION['user']=="root"){
              echo "<a class='nav-link' href='inventario.php'>Inventario</a>";
            }
            else{
              echo "<a class='nav-link' href='tienda.php'>Tienda</a>";
            }
          }
        ?>
          
          
        
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acercaDeNos.php">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ayuda.php">Ayuda</a>
        </li>
      </ul>
      <span class="navbar-text">
        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <?php if (empty($_SESSION['user'])) {
                    echo 'Inicio de sesión';
                }
                else{
                    echo $_SESSION['user'];
                }
        ?></button>

      </span>
    </div>
    
  </div>
  
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">
        <?php if (empty($_SESSION['user'])) {
                    echo 'Inicio de sesión';
                }
                else{
                    echo $_SESSION['user'];
                    
                }
        ?></h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body" >
  <?php if (empty($_SESSION['user'])) {
                    ?>
        
    
    <form action="validar.php" method="post">
        <div class="mb-3">
            
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de usuario" name="user" required>
            
        </div>
        <div class="mb-3">
            <br>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="pass" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="remember" sid="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1" >Recuérdame</label>
        </div>
        <div class="mb-3">
            <label for="captcha">
                <?php
                    /*if($message){ ?>
                    <span><?php echo $message ;?></span>
                    <?php } */?>
            </label>
            <input type="text" name="securityCode" id="securityCode" placeholder="Código de seguridad">
            <label><img src="get_captcha.php?rand=<?php echo rand(); ?>" alt="captcha" id="captcha" style="border:1px solid #D3D0D0"></label>
            <!-- <a href="javascript:void(0)" id="reloadCaptcha"><span aria-hidden="true"></span>Recargar codigo</a> -->
        </div>
        <button type="submit" class="btn btn-danger">Entrar</button>
    </form>
    <br>
    ¿Aún no estás registrado?
    <br>
    <a href="registro.php">
        <button type="button" class="btn btn-warning">Registrarse</button>
    </a>
<?php
                }
                else{
                    echo '<a href="ragnarok.php">
                    <button type="button" class="btn btn-warning">Cerrar Sesion</button>
                </a>';
                }
        ?>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>