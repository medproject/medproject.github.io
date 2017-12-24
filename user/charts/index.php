<?php
session_start();
if(!isset($_SESSION['userId']))
header("location:../index.php");


$uid = $_SESSION['userId'];

require_once("../../includes/conn.php");
 
?>
   <?php

    $sql="select count('id') from appointments";
    $tesssst="select count('id') from tests";
    $docto="select count('id') from doctor";
    $exp="select count('id') from expense";
$pat="select count('id') from patients";


$result=mysqli_query($conn,$sql);
$tessst=mysqli_query($conn,$tesssst);
$doct=mysqli_query($conn,$docto);
$expen=mysqli_query($conn,$exp);
$pres=mysqli_query($conn,$pat);


$row=mysqli_fetch_array($result);
$tesst=mysqli_fetch_array($tessst);
$doc=mysqli_fetch_array($doct);
$expenc=mysqli_fetch_array($expen);
$ro=mysqli_fetch_array($pres);

$pat="$row[0]";
$test="$tesst[0]";
$do="$doc[0]";
$expence="$expenc[0]";
$pres="$ro[0]";
?>

<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
   

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {


        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Patients', <?php echo $pres; ?>],
          ['Appointments', <?php echo $pat; ?>],
          ['Tests', <?php echo $test; ?>],
          ['Doctors', <?php echo $do; ?>],
          ['Expenses', <?php echo $expence; ?>]
        ]);

        // Set chart options
        var options = {'title':'Hospital Record',
                       'width':500,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>