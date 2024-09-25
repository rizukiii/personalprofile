<?php 

include "../../app.php";

$id = $_POST['id'];
$icon = $_POST['icon'];
$link = $_POST['link'];


mysqli_query($connect, "UPDATE tb_sosmed SET icon ='$icon',link='$link' WHERE id ='$id' ");

header('location: ../../pages/sosmed/index.php');