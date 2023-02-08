    <!-- Page Content -->
  <div class="container">
      <div class="row">
              <div class="col-lg-12">
                <h1 class="my-4">Vos produits</h1>
              </div>
              
              <?php foreach($anazy as $prop){ ?>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="<?php echo base_url()?>assets/images/produits/<?php echo $prop['photo']; ?>" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                    </h4>
                    <h3><?php echo $prop['produit']; ?></h3>
                    <h5><?php echo $prop['prix']; ?> Ar</h5>
                    <p class="card-text"><?php echo $prop['description']; ?>.</p>
                    <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Faire une echange</a>
                  </div> 
                  <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  </div>
                </div>
              </div>
              <?php } ?>
        </div>
            <!-- /.row -->
    <div class="row">


      <div class="col-lg-12">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
        
        <h1 class="my-4">Liste de tous les produits</h1>

        <div class="row">
          <?php foreach($liste as $produit){ ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?php echo base_url()?>assets/images/produits/<?php echo $produit['photo']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $produit['produit']; ?></a>
                </h4>
                <h5><?php echo $produit['prix']; ?> Ar</h5>
                <h3><?php echo $produit['proprietaire'] ?></h3>
                <p class="card-text"><?php echo $produit['description'];?></p>
                <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Echanger</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>


      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>