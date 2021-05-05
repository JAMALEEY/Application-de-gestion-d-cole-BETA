<?php require APPROOT . '/views/inc/header.php'; ?>


<nav class="navbar navbar-expand-lg navbar-mainbg">
  <a class="navbar-brand navbar-logo" href="#"><i class="fas fa-school"></i> GeeSchool</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars text-white"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <div class="hori-selector">
        <div class="left"></div>
        <div class="right"></div>
      </div>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo URLROOT; ?>home.php"><i class="fas fa-home"></i>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0);"><i class="fa fa-clone"></i>About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0);"><i class="fas fa-chart-bar"></i>Stats</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0);"><i class="fas fa-user"></i>Sign-in</a>
      </li>

    </ul>
  </div>
</nav>



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