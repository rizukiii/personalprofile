<!-- About-->
<div id="about" class="basic-1 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="text-container first">
                    <h2><?= $about->sapaan ?></h2>
                    <p><?= $about->pekerjaan ?></p>
                    <a href="./cv_riski.pdf" target="__blank" class="btn btn-secondary text-light"><i class="fas fa-download me-2"></i>Download CV</a>
                </div> <!-- end of text-container -->

            </div> <!-- end of col -->
            <div class="col-lg-4 ">
                <h4 style="margin-left: 1.2rem;">Education</h4>
                <ul class="timeline-3">
                    <?php include  "../../config/connection.php";
                    $sql = mysqli_query($connect, "SELECT * FROM `tb_education`");
                    while ($row = $sql->fetch_object()): ?>
                        <li>
                            <a href="#!"><?= $row->namatempat ?></a>
                            <a href="#!" class="float-end"><?= $row->waktu ?></a>
                            <p class="mt-2"><?= $row->deskripsi ?></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="col-lg-4 ">
                <h4 style="margin-left: 1.2rem;">Experience</h4>

                <ul class="timeline-3">
                    <?php
                    $sql = mysqli_query($connect, "SELECT * FROM `tb_experience`");
                    while ($row = $sql->fetch_object()): ?>
                        <li>
                            <a href="#!"><?= $row->namatempat ?></a>
                            <a href="#!" class="float-end"><?= $row->waktu ?></a>
                            <p class="mt-2"><?= $row->deskripsi ?></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div> <!-- end of text-container -->
    </div> <!-- end of col -->

</div> <!-- end of row -->
</div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of about -->