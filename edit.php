<?php
    include('conect.php');
    
    $id=$_GET['id'];
    
    $name=$_POST['name'];
    $lastName=$_POST['lastName'];
    $nit=$_POST['nit'];
    
    mysqli_query($conect,"update users set name='$name', lastName='$lastName', nit='$nit' where idUser='$id'");
    header('location:index.php');

?>