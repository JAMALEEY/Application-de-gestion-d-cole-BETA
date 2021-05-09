<?php require APPROOT . '/views/inc/header.php'; ?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* 
    body {
        min-height: 100vh;
        background-color: #fff;
    } */
</style>

<div class="container-fluid">
    <div class="row min-vh-100">
        <aside class=" col-12 col-md-3 col-xl-2 p-0  shadow-lg" style="background-color :black">
            <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-conter py-2 text-center sticky-top" id="sidebar">
                <div class="text-center p-1">
                    <img src="" alt="">

                    <form class="px-2  pt-5" method="POST">
                        <input class="form-control py-1 px-3 bg-dark border-0 text-light h-50 " type="text" placeholder="Search" name="search" aria-label="Search">
                    </form>

                </div>
                <button type="button" class="navbar-toggler border-0 order-1" data-toggle="collapse" data-targer="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse p-5" id="nav">
                    <ul class="navbar-nav flex-column w-100 justify-content-center pt-5">
                        <li class="nav-item">
                            <h4> <a href="" class="nav-link ">Teachers</a> </h4>
                        </li>
                        <li class="nav-item">
                            <h5> <a href="" class="nav-link active">Students</a> </h5>
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
                    <ul class="pt-5">
                        <li>
                            <a href="#" class="text-secondary">Logout
                                <img src="../public/img/logout.png" alt="">
                            </a>

                        </li>
                    </ul>
                </div>

            </nav>
        </aside>
        <!-- finish side bar -->




        <div class="container col-10 pt-5">
            <div class="table-responsive pt-5">
                <div class="table-wrapper">
                    <div class="table-title">
                        <!-- LES PROPRIETES DU TQBLEAU -->
                        <div class="row d-flex justify-content-between " style="background-color: black;">

                            <div class="py-1 px-4 text-light">
                                <h2>Students <b>Management</b></h2>
                            </div>
                            <div class="py-2 px-4">
                                <a href="#" class="btn btn-light"> <i class="fa fa-user-plus"></i> </i> <span>Add </span></a>
                                <a href="#" class="btn btn-dark"><i class="fa fa-file-download"></i> <span>Export to Excel</span></a>
                            </div>
                        </div>

                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom complet</th>
                                <th>Genre</th>
                                <th>Class</th>
                                <th>Matiere</th>
                                <th>Phone</th>
                                <th>Manager</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="#">
                                        Michael Holz</a>
                                </td>
                                <td>04/10/2013</td>
                                <td>3</td>
                                <td> Langue française</td>
                                <td> 0634437444</td>
                                <td>
                                    <a href="#" class=""> <i class="fa fa-users-cog d-flex justify-content-center text-dark"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <a href="#">
                                        Michael Holz</a>
                                </td>
                                <td>04/10/2013</td>
                                <td>3</td>
                                <td> Langue française</td>
                                <td> 0634437444</td>
                                <td>
                                    <a href="#" class=""> <i class="fa fa-users-cog d-flex justify-content-center text-dark"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <a href="#">
                                        Michael Holz</a>
                                </td>
                                <td>04/10/2013</td>
                                <td>3</td>
                                <td> Langue française</td>
                                <td> 0634437444</td>
                                <td>
                                    <a href="#" class=""> <i class="fa fa-users-cog d-flex justify-content-center text-dark"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <a href="#">
                                        Michael Holz</a>
                                </td>
                                <td>04/10/2013</td>
                                <td>3</td>
                                <td> Langue française</td>
                                <td> 0634437444</td>
                                <td>
                                    <a href="#" class=""> <i class="fa fa-users-cog d-flex justify-content-center text-dark"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <a href="#">
                                        Michael Holz</a>
                                </td>
                                <td>04/10/2013</td>
                                <td>3</td>
                                <td> Langue française</td>
                                <td> 0634437444</td>
                                <td>
                                    <a href="#" class=""> <i class="fa fa-users-cog d-flex justify-content-center text-dark"></i> </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="clearfix">
                        <div class="hint-text">Showing <b>5</b> out of <b>5</b> entries</div>
                        <ul class="pagination">
                            <li class="page-item "><a href="#" class="page-link bg-dark text-light">Previous</a></li>
                            <li class="page-item active"><a href="#" class="page-link bg-secondary border-dark">1</a></li>
                            <li class="page-item"><a href="#" class="page-link text-dark">2</a></li>
                            <li class="page-item "><a href="#" class="page-link text-dark">3</a></li>
                            <li class="page-item"><a href="#" class="page-link text-dark">4</a></li>
                            <li class="page-item"><a href="#" class="page-link text-dark">5</a></li>
                            <li class="page-item"><a href="#" class="page-link bg-dark text-light">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>










    </div>

</div>