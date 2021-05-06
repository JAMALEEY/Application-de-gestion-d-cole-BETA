<?php require APPROOT . '/views/inc/header.php'; ?>


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



<?php require APPROOT . '/views/inc/footer.php'; ?>