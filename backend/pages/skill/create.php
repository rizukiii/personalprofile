<?php $title = 'Create Data Skill' ?>

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
                        <?php include "../../app.php" ?> 
                        <form action="../../actions/skill/store.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="keahlian" class="form-label">Keahlian</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="keahlian"
                                    id="keahlian"
                              
                                    placeholder="Masukan Keahlian"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="persentase" class="form-label">Persentase</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="persentase"
                                    id="persentase"
                              
                                    placeholder="Masukan Persentase"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Logo</label>
                                <input
                                    type="text"
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