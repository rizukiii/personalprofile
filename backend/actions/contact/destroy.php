<?php 
include "../../app.php";
include "./show.php";

$query = "DELETE FROM `tb_contact` WHERE id=$contact->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/contact/index.php'</script>";
exit();