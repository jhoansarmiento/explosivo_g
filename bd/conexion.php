<?php
$conexion = mysqli_connect("localhost", "root", "", "explosivog-bd");
if (!$conexion){
    echo'ERROR al conectar a la base de datos';
}
