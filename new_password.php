<?php
if(empty($_GET['token'])){
  header("Location: login.php");
}
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login Tecnologia 5G">
    <meta name="author" content="Israel Nava Reyes">
    <meta name="generator" content="Isra345">
    <title>Nueva Contraseña Tecnología 5G</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="layout/styles/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">

    <img class="mb-4" src="images/demo/5G-PNG-Transparent.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal"><font face="Comic Sans MS,arial,verdana" class="text-success">Por favor! Ingresa una nueva contraseña</font></h1>

    <?php
      include("layout/funciones_php/database.php");
      $token = $_GET['token'];
      $bd = new ConnectionServer();
      $conexion = $bd->getConnection();
      
      $sql = "SELECT * FROM usuarios WHERE token='$token'";
      $result = mysqli_query($conexion, $sql);
      $contar = mysqli_num_rows($result);
      if ($contar ==1) {
        $datos = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $uid = $datos['uid'];
        echo '<h3>Bienvenido '.$datos['nombre'].'</h3>
        <form action="#" method="post">
        
        <input type="hidden" name="id" value="'.$uid.'">
        <div class="form-floating">
      <input type="password" class="form-control" id="new_password" placeholder="newpassword" required>
      <label for="password">Nueva Contraseña</label>
    </div>
     <br>

    <button class="w-100 btn btn-lg btn-success" name="new_pass" type="button" value="Guardar new password" id="new_pass">Actualizar Contraseña</button>
    <div class="form-floating mt-2">
    </div>
    <p class="mt-5 mb-3 text-muted" id="respuesta">&copy; 2017-2021</p>
  </form>';
      }else{
        echo '<h3>La página que buscas no esta disponible</h3>';
      }
      mysqli_close($conexion);


    ?>
  
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./layout/scripts/jquery3.js"></script>
<script src="./layout/scripts/admin_login.js"></script>

    
  </body>
</html>