<?php require APPROOT . '/views/inc/header.php'; ?>



<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Genre', "Nombre d'étudiant"],
                ['Hommes', <?php echo $data['gender_student']; ?>],
                ['Femmes', <?php echo $data['students'] - $data['gender_student']; ?>]
            ]);

            var options = {
                title: '',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>

</html>



<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Classes', "Nombre d'étudiant"],
                ['NAMEK', <?php echo $data["class_students"]["classNAMEK"] ?>],
                ['BABYLONE', <?php echo $data["class_students"]["classBABYLONE"] ?>],
                ['NAMELESS', <?php echo $data["class_students"]["classNAMELESS"] ?>],
            ]);

            var options = {
                chart: {
                    title: 'Nombre d\'étudiant par classe',
                    subtitle: 'Statistiques couvrant : 2019-2021',
                }
            };
            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
</head>

<body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
</body>

</html>







</script>
<?php require APPROOT . '/views/inc/footer.php'; ?>