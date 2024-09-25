<?php 
$sql = mysqli_query($connect, "SELECT * FROM `tb_skill`");
$item = mysqli_query($connect, "SELECT * FROM `tb_title`");
$title = $item->fetch_object();
?>
<!-- Services -->
<div id="services" class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading"><?= $title->skill_title_besar ?></h2>
                <p class="p-heading"><?= $title->skill_title_kecil ?></p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <?php include  "../../config/connection.php";
            
            while ($row = $sql->fetch_object()): ?>
                <div class="col-4">
                    <div class="text-box text-center border-0 shadow-sm">
                        <?= $row->foto ?>
                        <h4><?= $row->keahlian ?></h4>
                        <p><?= $row->persentase ?></p>
                        <!-- <p>Saya suka mendesign terutama bagian front end saya kerap memcoba coba hal baru.</p> -->
                    </div> <!-- end of text-box -->

                </div> <!-- end of col -->
            <?php endwhile; ?>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of services -->