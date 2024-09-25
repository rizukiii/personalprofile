<?php $title = 'Title' ?>
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
                        <?php include "../../app.php";
                            
                            $query = "SELECT * FROM `tb_title`";
                            
                            $result = $connect->query($query);
                            
                            $title = $result->fetch_object();
                            ?>
                            <a href="edit.php?id=<?= $title->id ?>" class="btn btn-primary">Edit Data</a>
                        </div>
                    </div>
                    <!-- title -->
                    <div class="table-responsive">
                        <table class="table mb-0 table-hover align-middle text-nowrap">

                            <tbody>
                                <?php 
                            
                                $query = "SELECT * FROM `tb_title`";
                                
                                $result = $connect->query($query);
                                
                                $title = $result->fetch_object();
                                ?>
                                
                                <tr>
                                    <th style="width: 100px;">Skill_title_besar</th>
                                    <th style="width: 10px;">:</th>
                                    <td><?= $title->skill_title_besar ?></td>
                                </tr>
                                <tr>
                                    <th>skill_title_kecil</th>
                                    <th>:</th>
                                    <td><?= $title->skill_title_kecil ?></td>
                                </tr>
                                <tr>
                                    <th>Project_title_besar</th>
                                    <th>:</th>
                                    <td><?= $title->project_title_besar ?></td>
                                </tr>
                                <tr>
                                    <th>Project_title_kecil</th>
                                    <th>:</th>
                                    <td><?= $title->project_title_kecil ?></td>

                                </tr>
                                <tr>
                                    <th>Testimonial_title</th>
                                    <th>:</th>
                                    <td><?= $title->testimonial_title ?></td>
                                </tr>
                                <tr>
                                    <th>Contact_title_besar</th>
                                    <th>:</th>
                                    <td><?= $title->contact_title_besar ?></td>
                                </tr>
                                <tr>
                                    <th>Contact_title_kecil</th>
                                    <th>:</th>
                                    <td><?= $title->contact_title_kecil ?></td>
                                </tr>
                                <tr>
                                    <th>Contact_title_email</th>
                                    <th>:</th>
                                    <td><?= $title->contact_title_email ?></td>
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