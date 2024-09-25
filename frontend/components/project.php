<?php 
$item = mysqli_query($connect, "SELECT * FROM `tb_title`");
$title = $item->fetch_object(); ?>
<!-- Projects -->
<div id="projects" class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading"><?= $title->project_title_besar ?></h2>
                    <p class="p-heading"><?= $title->project_title_kecil ?></p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of projects -->