<?php
    require_once('conn.php');
    session_start();

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contra =md5( $_POST['contra'] );

    $consulta = "SELECT * FROM usuarios WHERE correo='$correo'";
    $result = $connect->query($consulta);
    $num_row = mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);

        if( $num_row == 0) {
            $insert_query = "INSERT INTO usuarios VALUES('$correo','$nombre','$telefono','$contra')";
            if($connect->query($insert_query) === TRUE){
                $_SESSION['correo'] = $correo;
                $_SESSION['nombre'] = $nombre;
                echo "1";
                header('location: menu.html');
            }
        }
?>
