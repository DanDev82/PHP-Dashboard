<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  
  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  
  <!-- My Styles -->
  <link rel="stylesheet" href="assets/css/style.css">


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawChart3);
      google.charts.setOnLoadCallback(drawChart4);
      
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          ['2016',  606],
          ['2017',  10000],
          ['2018',  12099]
        ]);

        var options = {
          title: 'Total Revenue',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        document.getElementById('rev').innerHTML = '$'+ data.jc[2][1].gf;
      }      

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2016',  600, 800],
          ['2017',  10000, 8000],
          ['2018',  12099, 5400]
        ]);

        var options = {
          title: 'Affiliate Revenue',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
        document.getElementById('aff').innerHTML = '$'+ data.wg[2].c[2].v;
      }      

      function drawChart3() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          ['2016',  10],
          ['2017',  8],
          ['2018',  0]
        ]);

        var options = {
          title: 'Refunds',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div3'));
        chart.draw(data, options);
        document.getElementById('ref').innerHTML = '$'+ data.wg[2].c[1].v;
        console.log(data.wg[2].c[1]);
      }

      function drawChart4() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          ['2016',  300],
          ['2017',  712],
          ['2018',  1250]
        ]);

        var options = {
          title: 'Average Revenue per user',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div4'));
        chart.draw(data, options);
        document.getElementById('avg').innerHTML = '$'+ data.jc[2][1].gf;
        console.log(data.jc[2][1].gf);
      }
    </script>

  <title>At A Glance</title>
</head>
<body>

