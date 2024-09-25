<?php $title = 'Carousel' ?>
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
                            <a href="create.php" class="btn btn-primary">Tambah Data +</a>
                        </div>
                    </div>
                    <!-- title -->
                    <div class="table-responsive">
                        <table class="table mb-0 table-hover align-middle text-nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th></th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include "../../app.php" ?>
                                <?php include "../../actions/carousel/showAll.php";
                                $no = 1;
                                while ($item = $result->fetch_object()): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><img src="../../../storages/carousel/<?= $item->foto ?>" alt="foto carousel"
                                                style="width: 150px; height: 150px; object-fit: cover; object-position: center;" onerror="this.style.display='none'"></td>

                                        <td style="width: 5%;"><a href="detail.php?id=<?= $item->id ?>" class="btn btn-info mdi mdi-information-variant text-light"></a></td>
                                        <td style="width: 5%;"><a
                                                href="edit.php?id=<?= $item->id ?>" class="btn btn-warning mdi mdi-pen"></a></td>
                                        <td style="width: 5%;"><a
                                                href="../../actions/carousel/destroy.php?id=<?= $item->id ?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger mdi mdi-delete text-light"></a></td>
                                    </tr>
                                <?php endwhile; ?>
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