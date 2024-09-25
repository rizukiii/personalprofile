<?php 

include "../../app.php";

$id = $_POST['id'];
$keahlian = $_POST['keahlian'];
$persentase = $_POST['persentase'];
$foto = $_POST['foto'];



$allData = mysqli_query($connect, "UPDATE tb_skill SET keahlian = '$keahlian', `persentase` = '$persentase', `foto` = '$foto' WHERE id='$id'");

header('location: ../../pages/skill/index.php');