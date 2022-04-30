<?php
if(empty($_POST['new_password']) || empty($_POST['id'])){
  header("Location: ../../login.php");
}
include("database.php");
        $server = new ConnectionServer();
        $conexion = $server->getConnection();

        $nueva = strip_tags($_POST['new_password']);
        $id = $_POST['id'];

        $sql = "UPDATE usuarios SET password='$nueva', token ='' WHERE uid=$id";

        $result = mysqli_query($conexion, $sql);
        $contar = mysqli_num_rows($result);
        
        if($contar == 1)
        echo "Correcto";

        mysqli_close($conexion);


?>