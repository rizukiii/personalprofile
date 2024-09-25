<?php 
include  "../../config/connection.php";
$sql = mysqli_query($connect, "SELECT * FROM `tb_sosmed` LIMIT 2");
$p = mysqli_query($connect, "SELECT * FROM `tb_about` ");
$about = $p->fetch_object();
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            
            <!-- Image Logo -->
            
            <a class="navbar-brand logo-image" href="#"><b><?= $about->nama ?></b></a>  
            

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Mark</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#services">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#projects">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>

                <span class="nav-item social-icons">
                <?php
                    while ($row = $sql->fetch_object()): ?>
                    <span class="fa-stack">
                        <a href="<?= $row->link ?>" target="_blank">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="<?= $row->icon ?>"></i>
                        </a>
                    </span>
                    <?php endwhile; ?>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->