<?php require APPROOT . '/views/inc/header.php'; ?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>

<!-- student Modal add -->
<div class="modal fade" id="studentsModal" tabindex="-1" role="dialog" aria-labelledby="studentsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentsModalLabel">Add student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h2>Add your new student below</h2>
                        <p>Please fill the informations below in order to add a new student.</p>
                        <p>Ps: Elements marked with "*" are important !</p>
                        <form action="<?php echo URLROOT; ?>/dashboards/creatStudent" method="post">

                            <div class="form-group">

                                <label for="studentname"> Le Nom complet: <sup>*</sup></label>
                                <input type="text" name="studentname" class="form-control form-control-lg
                        <?php echo (!empty($data['studentname_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['studentname']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['student_error']; ?> </span>
                            </div>

                            <div class="form-group">

                                <label for="gender"> Genre: <sup>*</sup></label>
                                <input type="text" name="studentgender" class="form-control form-control-lg
                        <?php echo (!empty($data['studentgender_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['studentgender']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['studentgender_error']; ?> </span>
                            </div>

                            <div class="form-group">

                                <label for="class"> Classe: <sup>*</sup></label>
                                <input type="text" name="studentclass" class="form-control form-control-lg
                        <?php echo (!empty($data['studentclass_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['studentclass']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['studentclass_error']; ?> </span>
                            </div>


                            <div class="form-group">

                                <label for="parents"> Parent de l'apprenant: <sup>*</sup></label>
                                <input type="text" name="parents" class="form-control form-control-lg
                        <?php echo (!empty($data['parents_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['parents']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['parents_error']; ?> </span>
                            </div>

                            <div class="form-group">

                                <label for="adress"> Adresse: <sup>*</sup></label>
                                <input type="text" name="studentadress" class="form-control form-control-lg
                        <?php echo (!empty($data['studentadress_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['studentadress']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['studentadress_error']; ?> </span>
                            </div>


                            <!-- student birth add input modal -->
                            <div class="form-group">

                                <label for="birthday"> Date of birth: <sup>*</sup></label>
                                <input type="text" name="studentbirth" class="form-control form-control-lg
                        <?php echo (!empty($data['studentbirth_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['studentbirth']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['studentbirth_error']; ?> </span>
                            </div>


                            <!-- student email add input modal -->
                            <div class="form-group">

                                <label for="email"> E-mail: <sup>*</sup></label>
                                <input type="email" name="studentemail" class="form-control form-control-lg
                        <?php echo (!empty($data['studentemail_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['studentemail']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['studentemail_error']; ?> </span>
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


                    <form action="<?php echo URLROOT; ?>/dashboards/search" class="px-2  pt-5" method="POST">
                        <input class="form-control py-1 px-3 bg-dark border-0 text-light h-50 " type="text" placeholder="Search" name="search" aria-label="Search">
                    </form>

                </div>
                <button type="button" class="navbar-toggler border-0 order-1" data-toggle="collapse" data-targer="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse p-5" id="nav">
                    <ul class="navbar-nav flex-column w-100 justify-content-center pt-5">
                        <li class="nav-item">
                            <h4> <a href="<?php echo URLROOT; ?>/dashboards/teachers/teachers" class="nav-link ">Teachers</a> </h4>
                        </li>
                        <li class="nav-item">
                            <h5> <a href="<?php echo URLROOT; ?>/dashboards/students/students" class="nav-link active ">Students</a> </h5>
                        </li>
                        <li class="nav-item">
                            <h5> <a href="<?php echo URLROOT; ?>/dashboards/parents/parents" class="nav-link ">Parents</a> </h5>
                        </li>
                        <li class="nav-item">
                            <h5> <a href="<?php echo URLROOT; ?>/dashboards/stats" class="nav-link ">Stats</a> </h5>
                        </li>
                    </ul>

                </div>

                <div class="pt-5" id="">
                    <ul class="pt-5" style="list-style-type: none;">
                        <li>

                            <a href="<?php echo URLROOT . '/admins/logout'; ?>" class="text-secondary" style=" text-decoration:none ">Logout
                                <img src="../../img/logout.png" alt="">
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
                                <!-- name add teacher a verifier -->
                                <button type="button" name="add_student" class="btn btn-light" data-toggle="modal" data-target="#studentsModal">
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
                                <th>Parents</th>
                                <th>Adresse</th>
                                <th>Date de naissance</th>
                                <th>Email</th>
                                <th>Manager</th>
                            </tr>
                        </thead>

                        <?php $count = 0; ?>
                        <?php foreach ($data['students'] as $student) : ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <p><?php echo $student->id; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $student->studentname; ?></p>
                                    </td>
                                    <td><?php echo $student->studentgender; ?></td>
                                    <td><?php echo $student->studentclass; ?></td>
                                    <td> <?php echo $student->parents; ?></td>
                                    <td> <?php echo $student->studentadress; ?></td>
                                    <td> <?php echo $student->studentbirth; ?></td>
                                    <td> <?php echo $student->studentemail; ?></td>



                                    <!-- modal update button -->
                                    <td>
                                        <button type="button" name="update_student" class="btn btn-0" data-toggle="modal" data-target="#updateModal<?php echo $count; ?>">
                                            <i class="fa fa-users-cog d-flex justify-content-center text-dark"></i>
                                        </button>




                                        <!-- Student Modal UpdateDelete -->
                                        <div class="modal fade" id="updateModal<?php echo $count; ?>" tabindex="-1" role="dialog" aria-labelledby="updateModal<?php echo $count; ?>Label" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="updateModal<?php echo $count; ?>Label">Update Student</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-10 mx-auto">
                                                                <h2>Update your teacher's informations below</h2>
                                                                <p>Please fill the informations below in order to update the teacher's informations.</p>
                                                                <p>Ps: Les éléments marqués avec "*" sont obligatoires !</p>
                                                                <form action="<?php echo URLROOT; ?>/dashboards/updateStudent ?>" method="post">


                                                                    <!-- form for updating student -->


                                                                    <div class="form-group">
                                                                        <label for="studentname"> Nom complet: <sup>*</sup></label>
                                                                        <input type="text" name="studentname" class="form-control form-control-lg
    <?php echo (!empty($data['studentname_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['students'][$count]->studentname; ?> "> <span class="invalid-feedback"> <?php echo $data['studentname_error']; ?> </span>
                                                                    </div>



                                                                    <div class="form-group">

                                                                        <label for="gender"> Genre: <sup>*</sup></label> <input type="text" name="studentgender" class="form-control form-control-lg<?php echo (!empty($data['studentgender_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['students'][$count]->studentgender; ?>"> <span class="invalid-feedback"> <?php echo $data['studentgender_error']; ?> </span>
                                                                    </div>


                                                                    <div class="form-group">

                                                                        <label for="class"> Classe: <sup>*</sup></label> <input type="text" name="studentclass" class="form-control form-control-lg<?php echo (!empty($data['studentclass_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['students'][$count]->studentclass; ?>"> <span class="invalid-feedback"> <?php echo $data['studentclass_error']; ?> </span>
                                                                    </div>



                                                                    <div class="form-group">
                                                                        <label for="parents"> Parent de l'apprenant: <sup>*</sup></label>
                                                                        <input type="text" name="parents" class="form-control form-control-lg
    <?php echo (!empty($data['parents_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['students'][$count]->parents; ?> "> <span class="invalid-feedback"> <?php echo $data['parents_error']; ?> </span>
                                                                    </div>



                                                                    <div class="form-group">

                                                                        <label for="adress"> Adresse: <sup>*</sup></label> <input type="text" name="studentadress" class="form-control form-control-lg<?php echo (!empty($data['studentadress_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['students'][$count]->studentadress; ?>"> <span class="invalid-feedback"> <?php echo $data['studentadress_error']; ?> </span>
                                                                    </div>


                                                                    <div class="form-group">

                                                                        <label for="studentbirth"> Date of birth: <sup>*</sup></label> <input type="text" name="studentbirth" class="form-control form-control-lg<?php echo (!empty($data['studentbirth_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['students'][$count]->studentbirth; ?>"> <span class="invalid-feedback"> <?php echo $data['studentbirth_error']; ?> </span>
                                                                    </div>

                                                                    <div class="form-group">

                                                                        <label for="studentmail"> E-mail : <sup>*</sup></label> <input type="email" name="studentemail" class="form-control form-control-lg<?php echo (!empty($data['studentemail_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['students'][$count]->studentemail; ?>"> <span class="invalid-feedback"> <?php echo $data['studentemail_error']; ?> </span>
                                                                    </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-inactive border-dark text-dark" data-dismiss="modal">Close</button>
                                                        <input type="submit" class="btn btn-dark text-light" value="Update">


                                                        </form>
                                                        <form action="<?php echo URLROOT; ?>/dashboards/deleteTeacher/<?php echo $data['teachers'][$count]->id ?>" method="post">

                                                            <input type="submit" name="delete" class="btn btn-danger text-light float-center" value="Delete">
                                                    </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>



                                        <!-- the modal of update inside the manager icon -->
                                    </td>
                                </tr>
                            </tbody>
                            <?php $count++; ?>
                            <!-- the end of loop -->
                        <?php endforeach; ?>
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