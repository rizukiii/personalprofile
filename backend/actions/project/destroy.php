<?php
include "../../app.php";
include "./show.php";

$storages = "../../../storages/project/";

if(file_exists($storages . $project->foto)){
    unlink($storages . $project->foto);
}
$query = "DELETE FROM `tb_project` WHERE id=$project->id";

$result = $connect->query($query);

echo "<script>window.location.href='../../pages/project/index.php'</script>";
exit();