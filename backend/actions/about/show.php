<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/about/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_about` WHERE id=$id";

$result = $connect->query($query);

$about = $result->fetch_object();

if (!$about) {
    die('Data Tidak Ditemukan!');
}
