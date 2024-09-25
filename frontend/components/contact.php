<?php 
$row = mysqli_query($connect, "SELECT * FROM `tb_title`");
$title = $row->fetch_object(); ?>
<!-- Contact -->
<div id="contact" class="form-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><?= $title->contact_title_besar ?></h2>
                    <p class="p-heading"><?= $title->contact_title_kecil ?><a class="blue no-line" href="mailto:muhammadrizqy695@gmail.com" target="_blank"><?= $title->contact_title_email ?></a></p>
                    <p></p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Contact Form -->
                     
                    <form action="../forms/contact.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="nama" name="nama" required>
                            <label class="label-control" for="nama">Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="email" name="email" required>
                            <label class="label-control" for="email">Email</label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="deskripsi" name="deskripsi" required></textarea>
                            <label class="label-control" for="deskripsi">Message</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button" name="tombol" value="kirim">Submit</button>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->  
    <!-- end of contact -->