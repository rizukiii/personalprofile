<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/skill/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_skill` WHERE id=$id";

$result = $connect->query($query);

$skill = $result->fetch_object();

if (!$skill) {
    die("Data tidak ada!");
}
