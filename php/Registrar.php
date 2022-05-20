<?php
    include("ConexionDB.php");

    $nombre=$_POST['nombre'];
    $edad=$_POST['edad'];
    $email=$_POST['email'];

    $sql="INSERT INTO datos(nombre, edad, email) VALUES ('$nombre','$edad','$email')";

    $resultado=mysqli_query($conex,$sql);
?>