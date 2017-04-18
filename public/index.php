<?php
    session_start();
    $_SESSION['definitions'] = [];
    $_SESSION['debug'] = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://v4-alpha.getbootstrap.com/favicon.ico">

    <title>sample</title>

    <!-- Bootstrap core CSS -->
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .demo {
            border-radius: 0px;
            background: linear-gradient( rgba(20,20,20, .5), rgba(20,20,20, .5)), url('img/background.jpg');
            background-repeat: no-repeat;
            background-position: center;
            color: white;
        }
        .demostats { color: white; } .demotitle { color: yellow;} .headshot { padding-right: 5px }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://v4-alpha.getbootstrap.com/examples/jumbotron/jumbotron.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="?page=home">Florida Property & Casualty Co</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="?page=home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=system">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=manager">Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=customer">Customers</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid" style="padding-top: 2em">
    <?php if (isset($_GET['page'])&&!empty($_GET['page'])) { include "../pages/{$_GET['page']}.php";} else { include "../pages/home.php";} ?>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var api = function() { return Math.floor(Math.random() * 20);};
        var data = google.visualization.arrayToDataTable([
            ['Week', 'Approved', 'Pending', 'Fraud', 'Block'],
            ['Mon', 500, 89 , 25, 80],
            ['Tue', 245, 52 , 55, 24],
            ['Wed', 89, 72 , 250, 44],
            ['Thu', 27, 22 , 125, 62],
            ['Fri', 563, 53 , 250, 150]
        ]);

        var options = {
            title: 'Brickell Miami Location',
            legend: {position: 'top', maxLines: 3},
            hAxis: {title: 'Weekly Snapshot',  titleTextStyle: {color: '#333'}},
            vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>
</body>
</html>
