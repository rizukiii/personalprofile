
<?php

include "../../app.php";

$namatempat = $_POST['namatempat'];
$waktu = $_POST['waktu'];
$tempat = $_POST['tempat'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($connect, "INSERT INTO tb_experience (namatempat,waktu,tempat,deskripsi) VALUES('$namatempat','$waktu','$tempat','$deskripsi')");

header('location: ../../pages/experience/index.php');
?>
