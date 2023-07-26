<?php
    include('conect.php');
    
    $name=$_POST['name'];
    $lastName=$_POST['lastName'];
    $nit=$_POST['nit'];
    
    mysqli_query($conect,"insert into users (name, lastName, nit) values ('$name', '$lastName', '$nit')");
    header('location:index.php');

?>