
<?php

include "../../app.php";

$keahlian = $_POST['keahlian'];
$persentase = $_POST['persentase'];
$fotoSQL =$_FILES['foto']['tmp_name'];

$foto = time() . ".png";


move_uploaded_file($fotoSQL, "../../../storages/skill/" . $foto);


mysqli_query($connect, "INSERT INTO tb_skill (keahlian,persentase,foto) VALUES('$keahlian','$persentase','$foto')");

header('location: ../../pages/skill/index.php');
?>
