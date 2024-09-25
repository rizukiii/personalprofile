<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/education/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_education` WHERE id=$id";

$result = $connect->query($query);

$education = $result->fetch_object();

if (!$education) {
    die("Data tidak ada!");
}
