
<?php include "../../components/head.php" ?>

<?php $title = 'Edit Data Title' ?>
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
                        <?php 
                        $query = "SELECT * FROM `tb_title`";

                        $result = $connect->query($query);

                        $title = $result->fetch_object(); ?>
                        <form action="../../actions/title/update.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="skill_title_besar" class="form-label">Skill_title_besar</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="skill_title_besar"
                                    id="skill_title_besar"
                                    value="<?= $title->skill_title_besar ?>"
                                    placeholder="Masukan Skill_title_besar" />
                            </div>
                            <div class="mb-3">
                                <label for="skill_title_kecil" class="form-label">Skill_title_kecil</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="skill_title_kecil"
                                    id="skill_title_kecil"
                                    value="<?= $title->skill_title_kecil ?>"
                                    placeholder="Masukan Skill_title_kecil" />
                            </div>
                            <div class="mb-3">
                                <label for="project_title_besar" class="form-label">project_title_besar</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="project_title_besar"
                                    id="project_title_besar"
                                    value="<?= $title->project_title_besar ?>"
                                    placeholder="Masukan project_title_besar" />
                            </div>
                            <div class="mb-3">
                                <label for="project_title_kecil" class="form-label">project_title_kecil</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="project_title_kecil"
                                    id="project_title_kecil"
                                    value="<?= $title->project_title_kecil ?>"
                                    placeholder="Masukan project_title_kecil" />
                            </div>
                            <div class="mb-3">
                                <label for="testimonial_title" class="form-label">testimonial_title</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="testimonial_title"
                                    value="<?= $title->testimonial_title ?>"
                                    id="testimonial_title" />
                            </div>
                            <div class="mb-3">
                                <label for="contact_title_besar" class="form-label">contact_title_besar</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="contact_title_besar"
                                    id="contact_title_besar"
                                    value="<?= $title->contact_title_besar ?>"
                                    placeholder="Masukan contact_title_besar" />
                            </div>
                            <div class="mb-3">
                                <label for="contact_title_kecil" class="form-label">contact_title_kecil</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="contact_title_kecil"
                                    id="contact_title_kecil"
                                    value="<?= $title->contact_title_kecil ?>"
                                    placeholder="Masukan contact_title_kecil" />
                            </div>
                            <div class="mb-3">
                                <label for="contact_title_email" class="form-label">contact_title_email</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="contact_title_email"
                                    id="contact_title_email"
                                    value="<?= $title->contact_title_email ?>"
                                    placeholder="Masukan contact_title_email" />
                            </div>
                            <button
                                type="submit"
                                class="btn btn-primary"
                                name="tombol"
                                value="Ubah">
                                Submit
                            </button>
                            <div class="mb-3">
                                <label for="" class="form-label"></label>
                                <input
                                    type="hidden"
                                    class="form-control"
                                    name="id"
                                    id=""
                                    value="<?= $title->id ?>"
                                    aria-describedby="helpId"
                                    placeholder="" />
                                
                            </div>

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