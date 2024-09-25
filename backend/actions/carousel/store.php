
<?php

include "../../app.php";


$fotoSQL =$_FILES['foto']['tmp_name'];

$foto = time() . ".png";


move_uploaded_file($fotoSQL, "../../../storages/carousel/" . $foto);


mysqli_query($connect, "INSERT INTO tb_carousel (foto) VALUES('$foto')");

header('location: ../../pages/carousel/index.php');
?>
