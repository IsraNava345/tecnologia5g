<?php
    include_once 'database.php';
    session_start();
    if(isset($_POST['email']) && isset ($_POST ['password'])){
        $server = new ConnectionServer();
        $conexion = $server->getConnection();
        $correo = $_POST['email'];
        $pass = md5(strip_tags($_POST['password']));
        $sql = "SELECT * FROM usuarios WHERE email='$correo' AND password='$pass'";
        $result = mysqli_query($conexion, $sql);
        $contar = mysqli_num_rows($result);
        if ($contar  == 1){
            $datos = mysqli_fetch_array($result, MYSQLI_ASSOC);

            //Creacion del token 
            $id=$datos["uid"];
            $nombre = $datos["nombre"];
            $apellidos = $datos ["apellidos"];
            $contra= $datos["password"];
            $tipo=$datos["tipo"];
            $expiracion = time() * 24 ; 

            ////
            if ($contra == $pass) {
                $datos_usuario= $nombre ."". $apellidos;
                $jwtp = base64_encode(md5(sha1(uniqid(rand(), true)))) . " . " . base64_encode($datos_usuario) . base64_encode ($expiracion);
                $auxiliar = strtr($jwtp, '+/', "-_"); //eliminara todas las / de la direccion url y cambiara por guiones
                $auxiliar2 = rtrim($auxiliar, '=');
                $jwt = $auxiliar2 . '.' . md5(sha1($id));

                $_SESSION['user_login'] = $datos["nombre"];
                $_SESSION['user_type'] = $datos["tipo"];
                $_SESSION['token'] = $jwt;
                $dominio = ($_SERVER['HTTP_HOST'] != 'localhost')  ? $_SERVER ['HTTP_HOST']: false;
                setcookie('token', $jwt, $expiracion, "/", $dominio, false, false);
                
                echo json_encode(
                    array(
                        "message" => "Successfull login",
                        "token" => $jwt,
                        "expiracion" => $expiracion
                    )
                    );
            }else{
            setcookie('token', '', time()-1, "/");
            }


            
            $server->closeConnection();
          
        }else{
            $server->closeConnection();
        }

    }
?>