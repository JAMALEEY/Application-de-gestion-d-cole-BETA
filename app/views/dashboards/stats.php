<?php require APPROOT . '/views/inc/header.php'; ?>



<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });

        google.charts.load('current', {
            'packages': ['bar']
        });



        // google.charts.load('current', {
        //     'packages': ['corechart']
        // });



        google.charts.setOnLoadCallback(drawChartNbr);
        google.charts.setOnLoadCallback(drawChartPie);
        google.charts.setOnLoadCallback(drawChart);


        function drawChartPie() {
            var data = google.visualization.arrayToDataTable([
                ['Genre', "Nombre d'étudiant"],
                ['Hommes', <?php echo $data['theparentgender']; ?>],
                ['Femmes', <?php echo $data['theparents'] - $data['theparentgender']; ?>]
            ]);

            var options = {
                title: 'Pourcentage Hommes/Femmes (Parents):',
                is3D: true,
                slices: {
                    0: {
                        color: 'gray'
                    },

                    1: {
                        color: 'black'
                    },

                }
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }


        function drawChartNbr() {
            var data = google.visualization.arrayToDataTable([
                ['Classes', "Nombre d'étudiant"],
                ['NAMEK', <?php echo $data["class_students"]["classNAMEK"] ?>, ],
                ['BABYLONE', <?php echo $data["class_students"]["classBABYLONE"] ?>,],
                ['DailyCoders', <?php echo $data["class_students"]["classDailyCoders"] ?>, ]
            ]);

            var options = {
                chart: {
                    title: 'Nombre d\'étudiant par classe',
                    subtitle: 'Statistiques couvrant : 2019-2021',
              
                    series: {
                        0: {
                            color: 'black'
                        }
                    }
                },

            };
            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }


        function drawChart() {
            var data = google.visualization.arrayToDataTable([

                ['Age', '% Age'],
                ['Hommes', <?php echo $data['studentgender']; ?>],
                ['Femmes', <?php echo $data['students'] - $data['studentgender']; ?>]
            ]);

            var options = {
                title: 'Pourcentage Hommes/Femmes (étudiants):',
                pieHole: 0.4,
                slices: {
                    0: {
                        color: 'black'
                    },

                    1: {
                        color: 'gray'
                    },

                }
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>
</head>


<body>
    <div>

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
                                    <h5> <a href="<?php echo URLROOT; ?>/dashboards/theparents" class="nav-link">Parents</a> </h5>
                                </li>
                                <li class="nav-item">
                                    <h5><a href="<?php echo URLROOT; ?>/dashboards/stats" class="nav-link active">Stats</a> </h5>
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

                <div class="table-title py-1 px-4 pt-5 col-10">




                    <!-- LES PROPRIETES DU TQBLEAU -->
                    <div class="d-flex justify-content-between  " style="background-color: black;">

                        <div class="py-1 px-4 text-light">
                            <h2>Data <b>Stats</b></h2>
                        </div>



                        <div class="d-flex justify-content-end py-2 px-4">
                            <!-- name add teacher a verifier -->


                            <div class="pl-5">
                                <form action="<?php echo URLROOT; ?>/dashboards/excel" method="post">
                                    <button type="submit" name="export_data" class="btn btn-light"><i class="fa fa-file-download"></i> <span>Export to Excel</span></button>
                                </form>
                            </div>

                        </div>
                    </div>





                    <div class=" container col-10">


                        <div class="pt-4">

                            <div id="donutchart" style="width: 900px; height: 500px;"></div>

                        </div>

                    </div>

                    <div class="d-flex container">

                        <div class="pl-3 py-2 px-4" id="columnchart_material" style="width: 1000px; height: 400px;"></div>


                        <div class="pl-3  py-2 px-4" id="piechart" style="width: 100%; height: 100%;">

                        </div>
                    </div>




                </div>
            </div>

        </div>


</body>

</html>







</script>
<?php require APPROOT . '/views/inc/footer.php'; ?>