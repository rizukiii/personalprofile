<?php 

include "../../app.php";

$id = $_POST['id'];
$skill_title_besar = $_POST['skill_title_besar'];
$skill_title_kecil = $_POST['skill_title_kecil'];
$project_title_besar = $_POST['project_title_besar'];
$project_title_kecil = $_POST['project_title_kecil'];
$testimonial_title = $_POST['testimonial_title'];
$contact_title_besar = $_POST['contact_title_besar'];
$contact_title_kecil = $_POST['contact_title_kecil'];
$contact_title_email = $_POST['contact_title_email'];




mysqli_query($connect, "UPDATE tb_title SET 
skill_title_besar ='$skill_title_besar',
skill_title_kecil='$skill_title_kecil',
project_title_besar='$project_title_besar',
project_title_kecil='$project_title_kecil',
testimonial_title='$testimonial_title',
contact_title_besar='$contact_title_besar',
contact_title_kecil='$contact_title_kecil',
contact_title_email='$contact_title_email' WHERE id=$id ");

header('location: ../../pages/title/index.php');