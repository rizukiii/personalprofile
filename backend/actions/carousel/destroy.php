<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/carousel/";

if(file_exists($storages . $carousel->foto)){
    unlink($storages . $carousel->foto);
}
$query = "DELETE FROM `tb_carousel` WHERE id=$carousel->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/carousel/index.php'</script>";
exit();