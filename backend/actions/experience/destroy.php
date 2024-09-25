<?php 
include "../../app.php";
include "./show.php";

$query = "DELETE FROM `tb_experience` WHERE id=$experience->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/experience/index.php'</script>";
exit();