<?php



$query = "SELECT * FROM `tb_about`";

$result = $connect->query($query);

$about = $result->fetch_object();

if (!$about) {
    die('Data Tidak Ditemukan!');
}
