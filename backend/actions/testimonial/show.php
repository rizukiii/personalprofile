<?php

if (!isset($_GET['id'])) {
    echo "<script>window.location.href='../../pages/testimonial/index.php'</script>";
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM `tb_testimonial` WHERE id=$id";

$result = $connect->query($query);

$testimonial = $result->fetch_object();

if (!$testimonial) {
    die("Data Tidak Ditemukan!");
}
