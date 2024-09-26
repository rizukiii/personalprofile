<?php include "../../components/head.php" ?>

<?php $title = 'Edit Data Skill' ?>
<body>
    <?php include "../../components/preloader.php" ?>

    <?php include "../../components/topbarheader.php" ?>

    <?php include "../../components/leftsidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>


    <!-- Table -->
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <div class="d-md-flex">
                        <div>
                            <h4 class="card-title">Edit data</h4>
                            <h5 class="card-subtitle"></h5>
                        </div>
                        <div class="ms-auto">
                            <a href="index.php" class="btn btn-primary">
                                < kembali </a>
                        </div>
                    </div>
                    <!-- title -->
                    <div class="table-responsive mt-3">
                    <?php 
                        
                        $id = $_GET['id'];
                        $getData = mysqli_query($connect, "SELECT * FROM tb_skill WHERE id ='$id'");
                        $row = $getData->fetch_object();
                        ?>
                        <form action="../../actions/skill/update.php" method="post" enctype="multipart/form-data">
                            
                            <div class="mb-3">
                                <label for="keahlian" class="form-label">Keahlian</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="keahlian"
                                    id="keahlian"
                                    value="<?= $row->keahlian ?>"
                                    placeholder="Masukan Keahlian" />
                            </div>
                            <div class="mb-3">
                                <label for="persentase" class="form-label">Persentase</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="persentase"
                                    id="persentase"
                                    value="<?= $row->persentase ?>"
                                    placeholder="Masukan Persentase" />
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Logo</label>
                                <textarea class="form-control" name="foto" id="foto" rows="3"><?= $row->foto ?></textarea>
                            </div>
                            <button
                                type="submit"
                                class="btn btn-primary"
                                name="tombol"
                                value="ubah">
                                Submit
                            </button>
                            <input type="hidden" name="id" value="<?php echo $row->id ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table -->


    <?php include "../../components/footer.php" ?>

    <?php include "../../components/script.php" ?>
</body>

</html>