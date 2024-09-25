<?php 

include "../../app.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$rating = $_POST['rating'];
$deskripsi = $_POST['deskripsi'];
$foto = $_FILES['foto']['tmp_name'];

$result = mysqli_query($connect, "SELECT foto FROM tb_testimonial WHERE id='$id'");

$row = $result->fetch_object();

$foto_lama = $row->foto;

if($_FILES['foto']['error'] == UPLOAD_ERR_OK) {
    
    $foto_baru = time() . ".png";

    move_uploaded_file($_FILES['foto']['tmp_name'], "../../../storages/testimonial/" . $foto_baru);

    mysqli_query($connect, "UPDATE tb_testimonial SET foto = '$foto_baru' WHERE id='$id'");

    if(file_exists("../../../storages/testimonial/" . $foto_lama))
        unlink("../../../storages/testimonial/" . $foto_lama);

}

$allData = mysqli_query($connect, "UPDATE tb_testimonial SET nama = '$nama', jabatan = '$jabatan', rating = '$rating', deskripsi = '$deskripsi' WHERE id='$id'");

header('location: ../../pages/testimonial/index.php');