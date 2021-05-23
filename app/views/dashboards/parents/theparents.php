<?php require APPROOT . '/views/inc/header.php'; ?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>

<!-- theparent Modal add -->
<div class="modal fade" id="theparentsModal" tabindex="-1" role="dialog" aria-labelledby="theparentsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="theparentsModalLabel">Add Parent</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h2>Add your new parent below</h2>
                        <p>Please fill the informations below in order to add a new theparent.</p>
                        <p>Ps: Elements marked with "*" are important !</p>
                        <form action="<?php echo URLROOT; ?>/dashboards/creatTheparent" method="post">

                            <div class="form-group">

                                <label for="theparentname"> Le Nom complet: <sup>*</sup></label>
                                <input type="text" name="theparentname" class="form-control form-control-lg
                        <?php echo (!empty($data['theparentname_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['theparentname']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['theparent_error']; ?> </span>
                            </div>

                            <div class="form-group">

                                <label for="gender"> Genre: <sup>*</sup></label>
                                <input type="text" name="theparentgender" class="form-control form-control-lg
                        <?php echo (!empty($data['theparentgender_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['theparentgender']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['theparentgender_error']; ?> </span>
                            </div>

                            <div class="form-group">

                                <label for="job"> Job: <sup>*</sup></label>
                                <input type="text" name="theparentjob" class="form-control form-control-lg
                        <?php echo (!empty($data['theparentjob_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['theparentjob']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['theparentclass_error']; ?> </span>
                            </div>



                            <div class="form-group">

                                <label for="adress"> Adresse du parent: <sup>*</sup></label>
                                <input type="text" name="theparentadress" class="form-control form-control-lg
                        <?php echo (!empty($data['theparentadress_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['theparentadress']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['theparentadress_error']; ?> </span>
                            </div>



                            <!-- theparent phone add input modal -->
                            <div class="form-group">

                                <label for="phone"> Phone: <sup>*</sup></label>
                                <input type="text" name="theparentphone" class="form-control form-control-lg
                        <?php echo (!empty($data['theparentphone_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['theparentphone']; ?>">
                                <span class="invalid-feedback"> <?php echo $data['theparentphone_error']; ?> </span>
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


                    <!-- search -->
                    <form action="<?php echo URLROOT; ?>/dashboards/search" class="px-2 pt-5 d-flex" method="POST">
                        <input class=" form-control py-1 px-3 bg-dark border-0 text-light h-50 rounded-pill" type="text" placeholder="Search ..." name="search">
                        <button name="find" type="submit" class="bg-dark border-0 text-secondary h-30 rounded-pill" style="position: absolute; right: 22%; bottom:85%; ">
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
                            <h4> <a href="<?php echo URLROOT; ?>/dashboards/teachers" class="nav-link ">Teachers</a> </h4>
                        </li>
                        <li class="nav-item">
                            <h5> <a href="<?php echo URLROOT; ?>/dashboards/students" class="nav-link">Students</a> </h5>
                        </li>
                        <li class="nav-item">
                            <h5> <a href="<?php echo URLROOT; ?>/dashboards/theparents" class="nav-link active ">Parents</a> </h5>
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
                                <img src="../img/logout.png" alt="">
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
                                <h2>Parents <b>Management</b></h2>
                            </div>
                            <div class="py-2 px-4">
                                <!-- name add teacher a verifier -->
                                <button type="button" name="add_theparent" class="btn btn-light" data-toggle="modal" data-target="#theparentsModal">
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
                                <th>Profession</th>
                                <th>Adresse</th>
                                <th>Numéro de téléphone</th>
                                <th>Manager</th>
                            </tr>
                        </thead>

                        <?php $count = 0; ?>
                        <?php foreach ($data['theparents'] as $theparent) : ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <p><?php echo $theparent->id; ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $theparent->parentname; ?></p>
                                    </td>
                                    <td><?php echo $theparent->parentgender; ?></td>
                                    <td><?php echo $theparent->parentjob; ?></td>
                                    <td> <?php echo $theparent->parentadress; ?></td>
                                    <td> <?php echo $theparent->parentphone; ?></td>



                                    <!-- modal update button -->
                                    <td>
                                        <button type="button" name="update_theparent" class="btn btn-0" data-toggle="modal" data-target="#updateModal<?php echo $count; ?>">
                                            <i class="fa fa-users-cog d-flex justify-content-center text-dark"></i>
                                        </button>




                                        <!-- theparent Modal UpdateDelete -->
                                        <div class="modal fade" id="updateModal<?php echo $count; ?>" tabindex="-1" role="dialog" aria-labelledby="updateModal<?php echo $count; ?>Label" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="updateModal<?php echo $count; ?>Label">Update parent</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-10 mx-auto">
                                                                <h2>Update your parent's informations below</h2>
                                                                <p>Please fill the informations below in order to update the teacher's informations.</p>
                                                                <p>Ps: Les éléments marqués avec "*" sont obligatoires !</p>
                                                                <form action="<?php echo URLROOT; ?>/dashboards/updatetheparent ?>" method="post">


                                                                    <!-- form for updating theparent -->


                                                                    <div class="form-group">
                                                                        <label for="theparentname"> Nom complet: <sup>*</sup></label>
                                                                        <input type="text" name="theparentname" class="form-control form-control-lg
    <?php echo (!empty($data['theparentname_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['theparents'][$count]->parentname; ?> "> <span class="invalid-feedback"> <?php echo $data['theparentname_error']; ?> </span>
                                                                    </div>



                                                                    <div class="form-group">

                                                                        <label for="gender"> Genre: <sup>*</sup></label> <input type="text" name="theparentgender" class="form-control form-control-lg<?php echo (!empty($data['theparentgender_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['theparents'][$count]->parentgender; ?>"> <span class="invalid-feedback"> <?php echo $data['theparentgender_error']; ?> </span>
                                                                    </div>


                                                                    <div class="form-group">

                                                                        <label for="class"> Job: <sup>*</sup></label> <input type="text" name="theparentjob" class="form-control form-control-lg<?php echo (!empty($data['theparentjob_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['theparents'][$count]->parentjob; ?>"> <span class="invalid-feedback"> <?php echo $data['theparentjob_error']; ?> </span>
                                                                    </div>



                                                                    <div class="form-group">
                                                                        <label for="phone"> Téléphone du parent: <sup>*</sup></label>
                                                                        <input type="text" name="theparentphone" class="form-control form-control-lg
<?php echo (!empty($data['parents_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['theparents'][$count]->parentphone; ?> "> <span class="invalid-feedback"> <?php echo $data['parents_error']; ?> </span>
                                                                    </div>



                                                                    <div class="form-group">

                                                                        <label for="adress"> Adresse: <sup>*</sup></label> <input type="text" name="theparentadress" class="form-control form-control-lg<?php echo (!empty($data['theparentadress_error'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['theparents'][$count]->parentadress; ?>"> <span class="invalid-feedback"> <?php echo $data['theparentadress_error']; ?> </span>
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