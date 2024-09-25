<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/title/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_title` WHERE id=$id";

$result = $connect->query($query);

$title = $result->fetch_object();

if (!$title) {
    die('Data Tidak Ditemukan!');
}
