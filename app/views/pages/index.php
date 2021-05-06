<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>




<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo URLROOT; ?>../public/img/1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">


        <h5>Geeschool pour la gestion d'école sur internet & intranet</h5>
        <p>Application Web dédiée aux parents, élèves, enseignants et personnels administratifs.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo URLROOT; ?>../public/img/2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Geeschool pour la gestion d'école sur internet & intranet</h5>
        <p>Un site web qui permet de présenter l’école, ses activités, ses formations et de gérer ses actualités et ses événements.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo URLROOT; ?>../public/img/3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Geeschool pour la gestion d'école sur internet & intranet</h5>
        <p>Tester aujourd'hui Geeschool en ligne!
          Demander vos identifiants de démonstration en nous contacton.</p>
      </div>
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

<?php require APPROOT . '/views/inc/footer.php'; ?>