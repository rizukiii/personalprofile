<?php include "../../components/head.php" ?>

<?php $title = 'Detail Data Skill' ?>
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
                                <?php 
                                include "../../actions/skill/show.php" ?>
                                <tr>
                                    <th style="width: 100px;">Logo</th>
                                    <th style="width: 10px;">:</th>
                                    <td><?= $skill->foto ?></td>
                                </tr>
                                <tr>
                                    <th>Keahlian</th>
                                    <th>:</th>
                                    <td><?= $skill->keahlian ?></td>
                                </tr>
                                <tr>
                                    <th>Persentase</th>
                                    <th>:</th>
                                    <td><?= $skill->persentase ?></td>
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