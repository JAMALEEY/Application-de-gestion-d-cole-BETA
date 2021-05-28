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
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about"><i class="fa fa-clone"></i>About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/pages/stats"><i class="fas fa-chart-bar"></i>Stats</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo URLROOT; ?>/admins/login"><i class="fas fa-user"></i>Sign-in</a>
            </li>

        </ul>
    </div>
</nav>

<!-- end navbar -->



<!-- <div class="container py-5" style="height:88vh"> -->
<!-- WE GONNA TAKE 100% OF HEIGHT (container's height which means 88vh) -->
<!-- <div class="row h-100 d-flex justify-content-center">

        <div class="col-3 bg-danger ">
            D
        </div>
        <div class="col-3 bg-dark">
            D
        </div>




    </div> -->

<!-- </div> -->

<section class="Form my-4 mx-5">
    <div class="container">
        <div class="row no-gutters rounded ">
            <div class="col-lg-5 shadow">
                <img src="../public/img/fr.png" alt="loginimg" class="img-fluid">
            </div>


            <div class="col-lg-7 px-5 shadow-lg p-3 mb-6  bg-white rounded">
                <div class="col-lg-12 d-flex justify-content-center py-3 ">
                    <img src="../public/img/shield.png" alt="shieldimg" class="img-fluid">
                </div>
                <form action="<?php echo URLROOT; ?>/admins/login" method="post">
                    <div class="form-row d-flex justify-content-center py-3">
                        <div class="col-lg-7">
                            <h5>
                                E-mail
                            </h5>
                            <input type="email" name="email" placeholder="Your-email@mail.com" class="form-control <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                            <!-- if the email is invalid -->
                            <span class="invalid-feedback">
                                <?php echo $data['email_error']; ?>
                            </span>
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-center py-3">
                        <div class="col-lg-7">
                            <label for="password">
                                <h5> Password </h5>
                            </label>
                            <input type="password" name="password" placeholder="************" class="form-control form-control-lg 
                        <?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['password']; ?>">
                            <span class="invalid-feedback"> <?php echo $data['password_error']; ?> </span>
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-center py-3">
                        <div class="col-lg-7">
                            <button type="submit" class="btn btn-dark btn-lg btn-block">Login</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</section>




<?php require APPROOT . '/views/inc/footer.php'; ?>