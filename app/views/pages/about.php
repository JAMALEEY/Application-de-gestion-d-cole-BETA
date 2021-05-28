<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- start navbar -->
<nav class="navbar navbar-expand-lg navbar-mainbg">
  <a class="navbar-brand navbar-logo" href="<?php echo URLROOT; ?>/pages/home"><i class="fas fa-school"></i> GeeSchool</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars text-white"></i>
  </button>
  <!-- bootstrap navbar -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- MARGIN LEFT FOR MENU TO THE RIGHT -->
    <ul class="navbar-nav ml-auto">
      <div class="hori-selector">
        <!-- <div class="left"></div>
                <div class="right"></div> -->
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/home"><i class="fas fa-home"></i>Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about"><i class="fa fa-clone"></i>About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/stats"><i class="fas fa-chart-bar"></i>Stats</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>/admins/login"><i class="fas fa-user"></i>Sign-in</a>
      </li>

    </ul>
  </div>
</nav>

<!-- end navbar -->


<div class="container-fluid py-2">

  <div class="row align-items-center col align-items-center">



    <div class="col">
      <div class="hero-inner">
        <div class="hero-items active">
          <div class="row align-items-center mt-5">

            <div class="col-md py-2">
              <h1> La plateforme <strong> <?php echo $data['title']; ?> </strong> du management
                pédagogique.</h1> <br>
              <p> <?php echo $data['header']; ?> </p>
              <button type="button" class="btn btn-dark">
                <a class="text-light" href="<?php echo URLROOT; ?>/admins/login">Explore</a>
              </button>

            </div>

            <div class="col-xl py-2 mt-4">
              <img class="d-block img-fluid mt-5" src="../public/img/heroimg.png" alt="Hero Img">
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>


<!-- 
<div class="container">
    <h1 class="display-1">
        La plateforme <strong> <?php echo $data['title']; ?> </strong> du management
        pédagogique.
    </h1>
    
    <br>

    <P class="lead">
        
    </P>
</div>



<div class="card">
    <div class="row no-gutters">

        <div class="col">
            <div class="card-block px-2">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Description</p>
                <a href="#" class="btn btn-primary">BUTTON</a>
            </div>
        </div>



    </div>
    <div class="card-footer w-100 text-muted">
        Footer stating cats are CUTE little animals
    </div>
</div> -->
<?php require APPROOT . '/views/inc/footer.php'; ?>