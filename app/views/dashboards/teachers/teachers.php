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


<!-- teachers Modal add -->
<div class="modal fade" id="teachersModal" tabindex="-1" role="dialog" aria-labelledby="teachersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teachersModalLabel">Add Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <!-- <div class="card card-body bg-info mt-5 text-center"> -->
                        <h2>Add your new teacher below</h2>
                        <p>Please fill the informations below in order to add a new teacher.</p>
                        <p>Ps: Les éléments marqués avec "*" sont obligatoires !</p>
                        <form action="<?php echo URLROOT; ?>/dashboards/creat" method="post">

                            <div class="form-group">

                                <label for="teachername"> Le Nom complet: <sup>*</sup></label>
                                <input type="text" name="teachername" class="form-control form-control-lg
                        <?php echo (!empty($data['teachername_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['teachername']; ?> ">
                                <span class="invalid-feedback"> <?php echo $data['name_error']; ?> </span>
                            </div>

                            <div class="form-group">

                                <label for="gender"> Genre: <sup>*</sup></label>
                                <input type="text" name="teachergender" class="form-control form-control-lg
                        <?php echo (!empty($data['teachergender_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['teachergender']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['teachergender_error']; ?> </span>
                            </div>

                            <div class="form-group">

                                <label for="class"> Classe: <sup>*</sup></label>
                                <input type="text" name="teacherclasse" class="form-control form-control-lg
                        <?php echo (!empty($data['teacherclasse_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['teacherclasse']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['teacherclasse_error']; ?> </span>
                            </div>


                            <div class="form-group">

                                <label for="matiere"> Matiere: <sup>*</sup></label>
                                <input type="text" name="teachermatiere" class="form-control form-control-lg
                        <?php echo (!empty($data['teachermatiere_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['teachermatiere']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['teachermatiere_error']; ?> </span>
                            </div>

                            <div class="form-group">

                                <label for="phone"> Phone: <sup>*</sup></label>
                                <input type="text" name="teacherphone" class="form-control form-control-lg
                        <?php echo (!empty($data['teacherphone_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['teacherphone']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['teacherphone_error']; ?> </span>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-inactive border-dark text-dark" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-dark text-light" value="Add">
            </div>
            </form>

            <!-- </div> -->

        </div>
    </div>
</div>















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
                            <h4> <a href="" class="nav-link active">Teachers</a> </h4>
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
                    <ul class="pt-5">
                        <li>
                            <a href="#" class="text-secondary">Logout
                                <img src="../../public/img/logout.png" alt="">
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
                                <h2>Teachers <b>Management</b></h2>
                            </div>
                            <div class="py-2 px-4">
                                <!-- name add teacher a verifier -->
                                <button type="button" name="add_teacher" class="btn btn-light" data-toggle="modal" data-target="#teachersModal">
                                    <i class="fa fa-user-plus"></i> Add
                                </button>


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
                                <th>Classe</th>
                                <th>Matiere</th>
                                <th>Phone</th>
                                <th>Manager</th>
                            </tr>
                        </thead>
                        <?php $count = 0; ?>
                        <?php foreach ($data['teachers'] as $teacher) : ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $teacher->id; ?></td>
                                    <td>
                                        <p><?php echo $teacher->teachername; ?></p>
                                    </td>
                                    <td><?php echo $teacher->teachergender; ?></td>
                                    <td><?php echo $teacher->teacherclasse; ?></td>
                                    <td> <?php echo $teacher->teachermatiere; ?></td>
                                    <td> <?php echo $teacher->teacherphone; ?></td>
                                    <td>

                                        <button type="button" name="update_teacher" class="btn btn-0" data-toggle="modal" data-target="#updateModal<?php echo $count; ?>">
                                            <i class="fa fa-users-cog d-flex justify-content-center text-dark"></i>
                                        </button>

            <!-- teachers Modal updatedelete -->
            <div class="modal fade" id="updateModal<?php echo $count; ?>" tabindex="-1" role="dialog" aria-labelledby="updateModal<?php echo $count; ?>Label" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModal<?php echo $count; ?>Label">Update Teacher</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <!-- <div class="card card-body bg-info mt-5 text-center"> -->
                                    <h2>Update your teacher's informations below</h2>
                                    <p>Please fill the informations below in order to update the teacher's informations.</p>
                                    <p>Ps: Les éléments marqués avec "*" sont obligatoires !</p>
    <form action="<?php echo URLROOT; ?>/dashboards/updateTeachers/<?php echo $count; ?>" method="post">
    <div class="form-group">
        <label for="teachername"> Nom complet: <sup>*</sup></label>
        <input type="text" name="teachername" class="form-control form-control-lg
    <?php echo (!empty($data['teachername_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['teachername']; ?> ">
                    <span class="invalid-feedback"> <?php echo $data['name_error']; ?> </span>
                </div>

                <div class="form-group">

                    <label for="gender"> Genre: <sup>*</sup></label>
                    <input type="text" name="teachergender" class="form-control form-control-lg
<?php echo (!empty($data['teachergender_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['teachergender']; ?>">
                            <span class="invalid-feedback"> <?php echo $data['teachergender_error']; ?> </span>
                        </div>

                        <div class="form-group">

                            <label for="class"> Classe: <sup>*</sup></label>
                            <input type="text" name="teacherclasse" class="form-control form-control-lg
                        <?php echo (!empty($data['teacherclasse_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['teacherclasse']; ?>">
                            <span class="invalid-feedback"> <?php echo $data['teacherclasse_error']; ?> </span>
                        </div>


                        <div class="form-group">

                            <label for="matiere"> Matiere: <sup>*</sup></label>
                            <input type="text" name="teachermatiere" class="form-control form-control-lg
                        <?php echo (!empty($data['teachermatiere_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['teachermatiere']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['teachermatiere_error']; ?> </span>
                            </div>

                            <div class="form-group">

                                <label for="phone"> Phone: <sup>*</sup></label>
                                <input type="text" name="teacherphone" class="form-control form-control-lg
                        <?php echo (!empty($data['teacherphone_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['teacherphone']; ?>">
                                        <span class="invalid-feedback"> <?php echo $data['teacherphone_error']; ?> </span>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-inactive border-dark text-dark" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-dark text-light" value="Update">
                        
                    </div>
                    </form>
<input type="submit" class="btn btn-danger text-light" value="Delete">
                                                    <!-- </div> -->

                                                </div>
                                            </div>
                                        </div>

                                        <!-- the modal of update inside the manager icon -->


                                    </td>
                                </tr>
                            </tbody>
                            <?php $count++; ?>
                            <!-- the end of loop counting which is the responsible of every id of the modal unique -->
                        <?php endforeach; ?>
                        <!-- end looping through data in our db -->
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







<?php require APPROOT . '/views/inc/footer.php'; ?>