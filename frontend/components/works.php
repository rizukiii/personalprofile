<!-- Works -->
<div class="basic-4">
    <div class="container">
        <div class="row">
        <?php 
                    $sql = mysqli_query($connect, "SELECT * FROM `tb_project` ORDER BY id DESC LIMIT 3");
                    while ($row = $sql->fetch_object()): ?>
             
            <div class="col-lg-4 mb-3">
                <img class="img-thumbnail" src="../../storages/project/<?= $row->foto ?>" alt="alternative" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row->id ?>" style="width: 100%; height: 200px; object-fit:cover; ">
            </div> <!-- end of col -->
            
             <!-- Modal -->
             <div class="modal fade" id="exampleModal<?= $row->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $row->nama ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="../../storages/project/<?= $row->foto ?>" alt="" class="img-thumbnail" style="width: 100%;">
                            <p style="word-wrap: break-word"><?= $row->deskripsi ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
</div>

</div> <!-- end of row -->

</div> <!-- end of container -->
</div> <!-- end of basic-4 -->
<!-- end of works -->