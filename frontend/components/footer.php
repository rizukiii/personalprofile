<!-- Footer -->
<div class="footer bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="social-container">
                    <?php 
                    $sql = mysqli_query($connect, "SELECT * FROM `tb_sosmed`");
                    while ($row = $sql->fetch_object()): ?>
                        <span class="fa-stack">
                            <a href="<?= $row->link ?>" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="<?= $row->icon ?>" ></i>
                            </a>
                        </span>
                    <?php endwhile; ?>
                </div> <!-- end of social-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->