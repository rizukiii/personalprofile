<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/skill/";

if(file_exists($storages . $skill->foto)){
    unlink($storages . $skill->foto);
}
$query = "DELETE FROM `tb_skill` WHERE id=$skill->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/skill/index.php'</script>";
exit();