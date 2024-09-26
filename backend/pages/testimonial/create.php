
<?php include "../../components/head.php" ?>

<?php $title = 'Create Data Testimonial' ?>
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
                  
                        <form action="../../actions/testimonial/store.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="nama"
                                    id="nama"

                                    placeholder="Masukan Nama" />
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="jabatan"
                                    id="jabatan"
                              
                                    placeholder="Masukan Jabatan"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="rating"
                                    id="rating"
                              
                                    placeholder="Masukan Rating"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" row="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Choose file</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    name="foto"
                                    id="foto"
                                   
                                />
                            </div>
                            
                            
                            <button
                                type="submit"
                                class="btn btn-primary"
                                name="tombol"
                                value="simpan">
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