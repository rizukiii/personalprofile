<?php 

include "../../app.php";

$id = $_POST['id'];
$foto = $_FILES['foto']['tmp_name'];

$result = mysqli_query($connect, "SELECT foto FROM tb_carousel WHERE id='$id'");

$row = $result->fetch_object();

$foto_lama = $row->foto;

if($_FILES['foto']['error'] == UPLOAD_ERR_OK) {
    
    $foto_baru = time() . ".png";

    move_uploaded_file($_FILES['foto']['tmp_name'], "../../../storages/carousel/" . $foto_baru);

    mysqli_query($connect, "UPDATE tb_carousel SET foto = '$foto_baru' WHERE id='$id'");

    if(file_exists("../../../storages/carousel/" . $foto_lama))
        unlink("../../../storages/carousel/" . $foto_lama);

}
header('location: ../../pages/carousel/index.php');