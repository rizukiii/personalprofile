<?php $title = 'Detail Data Education' ?>
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
                            <h4 class="card-title">Data List Information</h4>
                            <h5 class="card-subtitle"></h5>
                        </div>
                        <div class="ms-auto">
                            <a href="index.php" class="btn btn-primary">
                                < kembali</a>
                        </div>
                    </div>
                    <!-- title -->
                    <div class="table-responsive">
                        <table class="table mb-0 table-hover align-middle text-nowrap">

                            <tbody>
                                <?php include "../../app.php" ?>
                                <?php include "../../actions/education/show.php" ?>
                                <tr>
                                    <th style="width: 100px;">Nama Sekolah</th>
                                    <th style="width: 10px;">:</th>
                                    <td><?= $education->namatempat ?></td>
                                </tr>
                                <tr>
                                    <th>Waktu</th>
                                    <th>:</th>
                                    <td><?= $education->waktu ?></td>
                                </tr>
                                <tr>
                                    <th>Tempat</th>
                                    <th>:</th>
                                    <td><?= $education->tempat ?></td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <th>:</th>
                                    <td><?= $education->deskripsi ?></td>
                                </tr>
                            </tbody>
                        </table>
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