

<?php include "../../components/head.php" ?>
<?php $title = 'Create Data Education' ?>
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
                            <h4 class="card-title">Tambah Data</h4>
                            <h5 class="card-subtitle"></h5>
                        </div>
                        <div class="ms-auto">
                            <a href="index.php" class="btn btn-primary">
                                < kembali </a>
                        </div>
                    </div>
                    <!-- title -->
                    <div class="table-responsive mt-3">
                        
                        <form action="../../actions/education/store.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="namatempat" class="form-label">Nama Tempat</label>
                                <input type="text" class="form-control" name="namatempat" id="namatempat"
                                    placeholder="Masukan Nama Tempat" />
                            </div>
                            <div class="mb-3">
                                <label for="waktu" class="form-label">Waktu</label>
                                <input type="text" class="form-control" name="waktu" id="waktu"
                                    placeholder="Masukan Waktu" />
                            </div>
                            <div class="mb-3">
                                <label for="tempat" class="form-label">Tempat</label>
                                <input type="text" class="form-control" name="tempat" id="tempat"
                                    placeholder="Masukan Tempat" />
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" id="deskripsi"
                                    placeholder="Masukan Deskripsi" />
                            </div>


                            <button type="submit" class="btn btn-primary" name="tombol" value="simpan">
                                Submit
                            </button>

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