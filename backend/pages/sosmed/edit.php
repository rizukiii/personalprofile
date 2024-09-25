<?php $title = 'Edit Data Sosmed' ?>
<?php include "../../components/head.php" ?>

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
                        <?php include "../../app.php";

                        $id = $_GET['id'];
                        $getData = mysqli_query($connect, "SELECT * FROM tb_sosmed WHERE id ='$id'");
                        $row = $getData->fetch_object();
                        ?>
                        <form action="../../actions/sosmed/update.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="icon" class="form-label">Icon</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="icon"
                                    id="icon"
                                    value="<?= $row->icon ?>"
                                    placeholder="Masukan Icon" />
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="link"
                                    id="link"
                                    value="<?= $row->link ?>"
                                    placeholder="Masukan Link" />
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