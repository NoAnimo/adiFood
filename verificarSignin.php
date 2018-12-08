<?php
    require_once('conn.php');
    session_start();

    $usuario = $_POST['correo'];
    $contrasena = md5($_POST['contra']);
    $consulta = "SELECT * FROM usuarios WHERE correo='$usuario' AND contra='$contrasena'";

    $result = $connect->query($consulta);
    $num_row = mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);

    if( $num_row >=1 ) {
        echo "1";
        $_SESSION['correo']=$row['correo'];
        $_SESSION['nombre'] =$row['nombre'];
    }
?>
