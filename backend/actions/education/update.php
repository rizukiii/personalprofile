<?php 

include "../../app.php";

$id = $_POST['id'];
$namatempat = $_POST['namatempat'];
$waktu = $_POST['waktu'];
$tempat = $_POST['tempat'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($connect, "UPDATE tb_education SET namatempat ='$namatempat',waktu='$waktu',tempat='$tempat',deskripsi='$deskripsi' WHERE id ='$id' ");

header('location: ../../pages/education/index.php');