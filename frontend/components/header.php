<!-- Header -->
<header id="header" class="header">
  <div class="container">
    <div class="row">
      <div class="col-6">

        <div class="text-container">
          <?php include "../app.php" ?>
          <?php include "../../backend/actions/about/" ?>
          <h1 class="h1-large"><?= $about->deskripsi ?></h1>
          <a class="btn-solid-lg page-scroll" href="#about">Lebih lanjut</a>
          <a class="btn-outline-lg page-scroll" href="#contact"><i class="fas fa-user"></i>Contact Saya</a>
        </div> <!-- end of text-container -->
        
      </div> <!-- end of col -->
      <div class="col-6">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <?php
              // pemanggilan seperti biasa 

              $query = mysqli_query($connect, "SELECT * FROM `tb_carousel`");
              $active = 'active';
              while ($item = $query->fetch_object()):
              ?>
                <div class="carousel-item <?= $active ?>">
                  <img src="../../storages/carousel/<?= $item->foto ?>" class="d-block w-100 img-fluid rounded-3" alt="...">
                </div>
              <?php $active = '';
              endwhile; ?>
            </div>
          </div>
        </div>
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->