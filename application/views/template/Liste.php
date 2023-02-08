    <!-- Page Content -->
    <div class="container">

<div class="row">

  <div class="col-lg-3">

    <h1 class="my-4">Liste de tous les produits</h1>
    <div class="list-group">
      <a href="#" class="list-group-item">Category 1</a>
      <a href="#" class="list-group-item">Category 2</a>
      <a href="#" class="list-group-item">Category 3</a>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">

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

    <div class="row">
    <h1 class="my-4">Categorie: Vetement</h1>
    <!-- Eto no mipotra ny liste ny produit -->
    <?php for ($i=0; $i < 8 ; $i++) { ?>

      <div class="col-lg-4 col-md-6 mb-4">

        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Nike Air Max One ?></a>
            </h4>
            <h5>$12.50</h5>
            <h3  class="card-text">User: Fanilo</h3>
            <p class="card-text">Tres bon tennis jamais porte</p>
            <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Clicker pour faire l'echange</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>

      </div> 
    <?php    } ?>

    <div class="row">
    <h1 class="my-4">Categorie: Objet</h1>
    <!-- Eto no mipotra ny liste ny produit -->
    <?php for ($i=0; $i < 8 ; $i++) { ?>

      <div class="col-lg-4 col-md-6 mb-4">

        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Ordinateur Portable ?></a>
            </h4>
            <h5>$12.50</h5>
            <h3  class="card-text">User: Loick</h3>
            <p class="card-text">Ordinateur neuf</p>
            <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Clicker pour faire l'echange</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>

      </div> 
    <?php    } ?>



    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>