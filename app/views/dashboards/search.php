<?php require APPROOT . '/views/inc/header.php'; ?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>


<div class="container-fluid">
    <div class="row min-vh-100">
        <aside class=" col-12 col-md-3 col-xl-2 p-0  shadow-lg" style="background-color :black">
            <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-conter py-2 text-center sticky-top" id="sidebar">
                <div class="text-center p-1 ">


                    <form class="px-4 pt-5 d-flex" method="POST">
                        <input class="form-control py-1 px-3 bg-dark border-0 text-light h-50 justify-content-between" type="text" placeholder="Search" name="search" id="search" aria-label="Search">
                        <button type="button" name="find" class="bg-dark border-0 text-light ">
                            <i class="fa fa-search"></i>
                        </button>

                    </form>

                </div>
                <button type="button" class="navbar-toggler border-0 order-1" data-toggle="collapse" data-targer="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse p-5" id="nav">
                    <ul class="navbar-nav flex-column w-100 justify-content-center pt-5">
                        <li class="nav-item">
                            <h4> <a href="<?php echo URLROOT; ?>/dashboards/teachers/teachers" class="nav-link active">Teachers</a> </h4>
                        </li>
                        <li class="nav-item">
                            <h5> <a href="" class="nav-link ">Students</a> </h5>
                        </li>
                        <li class="nav-item">
                            <h5> <a href="" class="nav-link ">Parents</a> </h5>
                        </li>
                        <li class="nav-item">
                            <h5> <a href="" class="nav-link ">Stats</a> </h5>
                        </li>
                    </ul>

                </div>

                <div class="pt-5" id="">
                    <ul class="pt-5" style="list-style-type: none;">
                        <li>

                            <a href="<?php echo URLROOT . '/admins/logout'; ?>" class="text-secondary" style=" text-decoration:none ">Logout
                                <img src="../public/img/logout.png" alt="">
                            </a>

                        </li>
                    </ul>
                </div>


            </nav>
        </aside>
        <!-- finish side bar -->




        <div class="container col-10 pt-5">
            <div class="">
                <?php
                var_dump($data);
                ?>
            </div>
        </div>




















    </div>

</div>







<?php require APPROOT . '/views/inc/footer.php'; ?>