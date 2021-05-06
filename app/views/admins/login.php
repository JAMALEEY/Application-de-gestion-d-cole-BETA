<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- start navbar -->
<nav class="navbar navbar-expand-lg navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="#"><i class="fas fa-school"></i> GeeSchool</a>
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


<!-- start page elements -->

<div class="d-lg-flex align-items-lg-center height-85vh--lg">
    <div class="container space-2 space-0--lg mt-lg-8">
        <div class="row align-items-lg-center">
            <div class="col-lg-5">
                <!-- Signup Form -->
                <div class="bg-white shadow-sm rounded p-6">
                    <form class="js-validate" novalidate="novalidate">
                        <div class="mb-4">
                            <h2 class="h4">Get started for free</h2>
                        </div>

                        <!-- Input -->
                        <div class="js-form-message mb-3">
                            <div class="js-focus-state input-group input-group form">
                                <input type="text" class="form-control form__input" name="username" required="" placeholder="Enter your username" aria-label="Enter your username">
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="js-form-message mb-3">
                            <div class="js-focus-state input-group input-group form">
                                <input type="email" class="form-control form__input" name="email" required="" placeholder="Enter your email address" aria-label="Enter your email address">
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="js-form-message mb-3">
                            <div class="js-focus-state input-group input-group form">
                                <input type="password" class="form-control form__input" name="password" required="" placeholder="Enter your password" aria-label="Enter your password">
                            </div>
                        </div>
                        <!-- End Input -->

                        <button type="submit" class="btn btn-block btn-primary">Get Started</button>
                    </form>
                </div>
                <!-- End Signup Form -->
            </div>
        </div>
    </div>
</div>



<?php require APPROOT . '/views/inc/footer.php'; ?>
