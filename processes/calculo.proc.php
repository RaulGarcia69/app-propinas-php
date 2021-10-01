<?php


if (!empty($_POST['cuenta']) && !empty($_POST['servicio']) && !empty($_POST['personas']))
{
    $cuenta=$_POST['cuenta'];
    $servicio=$_POST['servicio'];
    $personas=$_POST['personas'];
    $resultado=$cuenta*$servicio/$personas;
    
    header("Location:../index.php?resultado=$resultado");
}
else {
    header("Location:../index.php");
}