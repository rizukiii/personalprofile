<?php 
include "../../app.php";
include "./show.php";

$query = "DELETE FROM `tb_sosmed` WHERE id=$sosmed->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/sosmed/index.php'</script>";
exit();