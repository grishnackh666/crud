<?php
    include('conect.php');
    $id=$_GET['id'];
    mysqli_query($conect,"delete from users where idUser='$id'");
    header('location:index.php');
?>