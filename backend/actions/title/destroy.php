<?php 
include "../../app.php";
include "./show.php";

$query = "DELETE FROM `tb_title` WHERE id=$title->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/title/index.php'</script>";
exit();