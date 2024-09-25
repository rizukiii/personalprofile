
<?php

include "../../app.php";



$foto       = $_FILES['foto']['tmp_name'];
$nama       = $_POST['nama'];
$jabatan    = $_POST['jabatan'];
$rating     = $_POST['rating'];
$deskripsi  = $_POST['deskripsi'];


$foto_baru = time() . ".png";
move_uploaded_file($foto, "../../../storages/testimonial/" . $foto_baru);

mysqli_query($connect, "INSERT INTO tb_testimonial (foto,nama,jabatan,rating,deskripsi) VALUES('$foto_baru','$nama','$jabatan','$rating','$deskripsi')");


header('location: ../../pages/testimonial/index.php');
?>
