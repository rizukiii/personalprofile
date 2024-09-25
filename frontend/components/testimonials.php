<?php 
$sql = mysqli_query($connect, "SELECT * FROM `tb_testimonial` ORDER BY id DESC LIMIT 3");
$row = mysqli_query($connect, "SELECT * FROM `tb_title`");
$title = $row->fetch_object();
?>
<!-- Testimonials -->
<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading"><?= $title->testimonial_title ?></h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
        <?php include  "../../config/connection.php";
                        
                        while ($row = $sql->fetch_object()): ?>

            <div class="col-lg-4">

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        
                            <p class="testimonial-text text-center"><?= $row->deskripsi ?></p>
                            <div class="details">
                                <img src="../../storages/testimonial/<?= $row->foto ?>" alt="" class="img-thumbnail">
                                <div class="text">
                                    <div class="testimonial-author"><?= $row->nama ?></div>
                                    <div class="occupation"><?= $row->jabatan ?></div>
                                    <div class="stars">
                                        <?php
                                        // ini adalah cara untuk bisa menyeting rating/bintang yang kita ingin kan di bagian carousel
                                        // variable 1 adalah 1 
                                        $rating = $row->rating;

                                        // kita pakai pengulangan menggunakan 'for'
                                        // jika rating yang di set kurang dari $i makan dia akan bertambah sampai setara "JIKA LEBIH KECIL DARI $RATING
                                        for ($i = 1; $i <= $rating; $i++) {
                                            // perintah dibawah ini untuk mencetak bintang yang full
                                            echo '<i style="color:#ffc107" class="bi bi-star-fill"></i>';
                                        }
                                        // ini untuk mencetak bintang yang kosong untuk muncul di halaman "JIKA DIBAWAH 5 
                                        for ($i = $rating + 1; $i <= 5; $i++) {
                                            // untuk mencetak bintang yang kosong
                                            echo '<i class="bi bi-star"></i>';
                                        }
                                        ?>

                                    </div>
                                </div> <!-- end of text -->
                            </div> <!-- end of testimonial-details -->
                        
                    </div>
                </div>
                <!-- end of card -->

            </div> <!-- end of col -->
            <?php endwhile; ?>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of testimonials -->