<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/experience/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_experience` WHERE id=$id";

$result = $connect->query($query);

$experience = $result->fetch_object();

if (!$experience) {
    die('Data Tidak Ditemukan!');
}
