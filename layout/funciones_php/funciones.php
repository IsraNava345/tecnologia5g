<?php
    //$conexion = mysqli_connect('localhost', 'root', '', 'tecnologia_5g');
    $conexion = mysqli_connect('localhost', 'dlujhujc_israel_nava', 'Vegito1810', 'dlujhujc_tecnologia_5g');
    //Agregar localhost, usuario, contraseña y base de datos de la plataforma
    if(!$conexion){
        die('Conexion Failed'.mysqli_connect($conexion));
    }
    if(isset($_POST['save'])){
        $nom = $_POST['name'];
        $correo = $_POST['email'];
        $tel = $_POST['phone'];
        $comen = $_POST['comment'];
        $fecha = $_POST['date'];

        $insertar = "INSERT INTO comentarios (nombre, fecha, comentario, correo, telefono)
            VALUES ('{$nom}','{$fecha}', '{$comen}', '{$correo}', '{$tel}')";
        if(mysqli_query($conexion, $insertar)){
            $id = mysqli_insert_id($conexion);
            $guardado = '
            <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                Por <a href="#"> "'. $nom .'" </a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">"'. $fecha .'"</time>
              </header>
              <div class="comcont">
                <p> "'. $comen .'" </p>
              </div>
            </article>
          </li>
            ';
            echo $guardado;
        }else{
           echo "Error: ".mysqli_error($conexion);
        }
        exit();
    }

    $consulta = "SELECT * FROM comentarios";
    $resultado = mysqli_query($conexion ,$consulta);
    $mostrar = "";
    while ( $fila = mysqli_fetch_array($resultado)){
        $mostrar .= '
        <li>
        <article>
          <header>
            <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
            <address>
            Por <a href="#"> "'. $fila['nombre'] .'" </a>
            </address>
            <time datetime="2045-04-06T08:15+00:00">"'. $fila['fecha'] .'"</time>
          </header>
          <div class="comcont">
            <p> "'. $fila['comentario'] .'" </p>
          </div>
        </article>
      </li>
        ';
    }
?>