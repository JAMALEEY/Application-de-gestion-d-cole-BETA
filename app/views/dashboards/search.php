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



                <button type="button" class="navbar-toggler border-0 order-1" data-toggle="collapse" data-targer="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse p-5" id="nav">
                    <ul class="navbar-nav flex-column w-100 justify-content-center pt-5">
                        <li class="nav-item">
                            <h4> <a href="<?php echo URLROOT; ?>/dashboards/teachers" class="nav-link">Teachers</a> </h4>
                        </li>
                        <li class="nav-item">
                            <h5> <a href="<?php echo URLROOT; ?>/dashboards/students" class="nav-link">Students</a> </h5>
                        </li>
                        <li class="nav-item">
                            <h5> <a href="<?php echo URLROOT; ?>/dashboards/parents" class="nav-link">Parents</a> </h5>
                        </li>
                        <li class="nav-item">
                            <h5><a href="<?php echo URLROOT; ?>/dashboards/stats" class="nav-link">Stats</a> </h5>
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
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h2>We've found your search query !!!</h2>
                    <p>There's your result.</p>

                    <?php if ([$data = $this->teacherModel->search()]) {
                        foreach ($data as $value) : ?>
                            <table class="table table-bordered table-hover ">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Teacher Name
                                        </th>
                                        <th>
                                           Teacher Gender
                                        </th>
                                        <th>
                                            Teacher Classe
                                        </th>
                                        <th>
                                            Teacher Matière
                                        </th>
                                        <th>
                                            Teacher Phone
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="table-success">
                                    <tr>


                                        <td>
                                            <?php echo $value->id; ?>
                                        </td>

                                        <td>
                                            <?php echo $value->teachername; ?>
                                        </td>

                                        <td>
                                            <?php echo $value->teachergender; ?>
                                        </td>

                                        <td>
                                            <?php echo $value->teacherclasse; ?>
                                        </td>


                                        <td>
                                            <?php echo $value->teachermatiere; ?>
                                        </td>


                                        <td>
                                            <?php echo $value->teacherphone; ?>
                                        </td>






                                    </tr>
                            <?php endforeach;
                    }  ?>
                                </tbody>




                            </table>


                            <?php if ([$data = $this->studentModel->search()]) {
                                foreach ($data as $value) : ?>
                                    <table class="table table-bordered table-hover ">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Student Name
                                                </th>
                                                <th>
                                                    Student Gender
                                                </th>
                                                <th>
                                                    Student Class
                                                </th>
                                                <th>
                                                    Student Parent
                                                </th>
                                                <th>
                                                    Student Adress
                                                </th>
                                                <th>
                                                    Student Birth
                                                </th>
                                                <th>
                                                    Student Email
                                                </th>
                                            </tr>
                                        </thead>



                                        <tbody class="table-success">
                                            <tr>


                                                <td>
                                                    <?php echo $value->id; ?>
                                                </td>

                                                <td>
                                                    <?php echo $value->studentname; ?>
                                                </td>

                                                <td>
                                                    <?php echo $value->studentgender; ?>
                                                </td>

                                                <td>
                                                    <?php echo $value->studentclass; ?>
                                                </td>


                                                <td>
                                                    <?php echo $value->stdparents; ?>
                                                </td>


                                                <td>
                                                    <?php echo $value->studentadress; ?>
                                                </td>

                                                <td>
                                                    <?php echo $value->studentbirth; ?>
                                                </td>


                                                <td>
                                                    <?php echo $value->studentemail; ?>
                                                </td>






                                            </tr>
                                    <?php endforeach;
                            }  ?>
                                        </tbody>




                                    </table>


                                    <?php if ([$data = $this->theparentModel->search()]) {
                                        foreach ($data as $value) : ?>
                                            <table class="table table-bordered table-hover ">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th>
                                                            Parent Name
                                                        </th>
                                                        <th>
                                                            Parent Gender
                                                        </th>
                                                        <th>
                                                            Parent Job
                                                        </th>
                                                        <th>
                                                            Parent Adress
                                                        </th>
                                                        <th>
                                                            Parent Phone
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody class="table-success">
                                                    <tr>


                                                        <td>
                                                            <?php echo $value->id; ?>
                                                        </td>

                                                        <td>
                                                            <?php echo $value->parentname; ?>
                                                        </td>

                                                        <td>
                                                            <?php echo $value->parentgender; ?>
                                                        </td>

                                                        <td>
                                                            <?php echo $value->parentjob; ?>
                                                        </td>


                                                        <td>
                                                            <?php echo $value->parentadress; ?>
                                                        </td>


                                                        <td>
                                                            <?php echo $value->parentphone; ?>
                                                        </td>






                                                    </tr>
                                            <?php endforeach;
                                    }  ?>
                                                </tbody>






                                            </table>

                </div>
            </div>




















        </div>

    </div>







    <?php require APPROOT . '/views/inc/footer.php'; ?>