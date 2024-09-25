<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/project/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_project` WHERE id=$id";

$result = $connect->query($query);

$project = $result->fetch_object();

if (!$project) {
    die("Data Tidak Ditemukan!");
}
