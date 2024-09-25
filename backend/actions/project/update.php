<?php

include "../../app.php";

include "./show.php";

if (isset($_POST['tombol'])) {
    $nama      = escapeString($_POST['nama']);
    $deskripsi = escapeString($_POST['deskripsi']);
    

    $fotoSQL   = "";
    if ($_FILES['foto']['name']) {
        $foto = date('Y m d H.i.s') . ' - ' . $_FILES['foto']['name'];
        // 2024 9 2 21.39.53.23
        $file = $_FILES['foto']['tmp_name'];
        $storages = "../../../storages/project/";

        if (file_exists($storages . $project->foto)) {
            unlink($storages . $project->foto);
        }
        if (move_uploaded_file($file, $storages . $foto)) {
            $fotoSQL = ", `foto`='$foto'";
        }
    }

    $query = "UPDATE `tb_project` SET `nama`='$nama',`deskripsi`='$deskripsi'$fotoSQL WHERE id=$project->id";

    
    $result = $connect->query($query);
    

    if ($result) {
        echo "<script>window.location.href='../../pages/project/index.php'</script>";
    } else {
        echo "<script>window.location.href='../../pages/project/edit.php'</script>";
    }
    exit();
}
