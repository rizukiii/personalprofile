<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/carousel/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_carousel` WHERE id=$id";

$result = $connect->query($query);

$carousel = $result->fetch_object();

if (!$carousel) {
    die("Data Tidak Ditemukan!");
}
