<?php $title = 'Edit Data Testimonial' ?>
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
                        $getData = mysqli_query($connect, "SELECT * FROM tb_testimonial WHERE id ='$id'");
                        $row = $getData->fetch_object();
                        ?>
                        <form action="../../actions/testimonial/update.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="nama"
                                    id="nama"
                                    value="<?= $row->nama ?>"
                                    placeholder="Masukan Nama" />
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="jabatan"
                                    id="jabatan"
                                    value="<?= $row->jabatan ?>"
                                    placeholder="Masukan Jabatan" />
                            </div>
                            <div class="mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <input
                                    type="number"
                                    max="5"
                                    class="form-control"
                                    name="rating"
                                    id="rating"
                                    value="<?= $row->rating ?>"
                                    placeholder="Masukan Rating" />
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3"><?= $row->deskripsi ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    name="foto"
                                    id="foto"
                                    value="<?= $row->foto ?>"
                                    placeholder="Masukan Foto" />
                            </div>
                            <button
                                type="submit"
                                class="btn btn-primary"
                                name="tombol"
                                value="simpan">
                                Submit
                            </button>
                            <input type="hidden" name="id" value="<?= $row->id ?>">
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