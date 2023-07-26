<?php
$conect = mysqli_connect("localhost","root","","crud");
if (!$conect) {
    die("Connection failed: " . mysqli_connect_error());
}