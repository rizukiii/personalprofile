
<?php

include "../../app.php";

$icon = $_POST['icon'];
$link = $_POST['link'];


mysqli_query($connect, "INSERT INTO tb_sosmed (icon,link) VALUES('$icon','$link')");

header('location: ../../pages/sosmed/index.php');
?>
