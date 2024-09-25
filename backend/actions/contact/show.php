<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/contact/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_contact` WHERE id=$id";

$result = $connect->query($query);

$contact = $result->fetch_object();

if (!$contact) {
    die('Data Tidak Ditemukan!');
}
