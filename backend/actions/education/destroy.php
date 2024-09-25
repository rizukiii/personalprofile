<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/education/";

if(file_exists($storages . $education->foto)){
    unlink($storages . $education->foto);
}
$query = "DELETE FROM `tb_education` WHERE id=$education->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/education/index.php'</script>";
exit();