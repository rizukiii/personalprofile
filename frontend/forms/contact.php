<?php

include "../../config/connection.php";


$nama = $_POST['nama'];
$email = $_POST['email'];
$deskripsi = $_POST['deskripsi'];


$query = "INSERT INTO `tb_contact` (`nama`, `email`, `deskripsi`) VALUES ('$nama','$email','$deskripsi')";

$result = $connect->query($query);
echo "<script>window.location.href='../pages/index.php'</script>";
