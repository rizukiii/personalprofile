<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/testimonial/";

if(file_exists($storages . $testimonial->foto)){
    unlink($storages . $testimonial->foto);
}
$query = "DELETE FROM `tb_testimonial` WHERE id=$testimonial->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/testimonial/index.php'</script>";
exit();