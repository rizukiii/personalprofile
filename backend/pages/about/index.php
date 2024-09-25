<?php $title = 'About' ;
include "../../app.php";
$query = "SELECT COUNT(*) as total FROM `tb_about`";
$result = $connect->query($query);
$row = $result->fetch_object();
?>
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
                            <h4 class="card-title">Data List</h4>
                            <h5 class="card-subtitle"></h5>
                        </div>
                        <div class="ms-auto">
                            <?php
                            if ($row->total > 0) {
                                
                                echo '<a href="edit.php" class="btn btn-primary">Edit Data</a>';
                            } else {
                                echo '<a href="create.php" class="btn btn-primary">Tambah Data</a>';
                            } ?>

                        </div>
                    </div>
                    <!-- title -->
                    <div class="table-responsive">
                        <table class="table mb-0 table-hover align-middle text-nowrap">

                            <tbody>
                                <?php
                                include "../../actions/about/show.php" ?>
                                    <tr>
                                        <th>Foto</th>
                                        <th>:</th>
                                        <td><img src="../../../storages/about/<?= $about->foto ?>" alt=""
                                                style="width: 150px; height: 150px; object-fit: cover; object-position: center;" onerror="this.style.display='none'"></td>
                                        </td>
                                    </tr>
                                <tr>
                                    <th style="width: 100px;">Nama</th>
                                    <th style="width: 10px;">:</th>
                                    <td><?= $about->nama ?></td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan</th>
                                    <th>:</th>
                                    <td><?= $about->pekerjaan ?></td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <th>:</th>
                                    <td><?= $about->deskripsi ?></td>

                                </tr>
                                <tr>
                                    <th>Sapaan</th>
                                    <th>:</th>
                                    <td><?= $about->sapaan ?></td>

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