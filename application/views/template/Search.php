    <!-- Page Content -->
    <div class="container">

<div class="row">
    <h1 class="my-4">Resultat de la recherche</h1>
      <div class="col-lg-4 col-md-6 mb-4">
      <?php foreach ($Valiny2 as $valiny) { ?>
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?php echo base_url()?>assets/images/produits/<?php echo $valiny['photo']; ?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php echo $valiny['produit']; ?></a>
            </h4>
            <h5><?php echo $valiny['prix']; ?></h5>
            <h3  class="card-text"><?php echo $valiny['proprio']; ?></h3>
            <p class="card-text"><?php echo $valiny['descri']; ?></p>
            <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Clicker pour faire l'echange</a>
          </div>
          <?php    } ?>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div> 
    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>