
      google.charts.load('current', {'packages':['corechart']});
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable1);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawChart3);
      google.charts.setOnLoadCallback(drawChart4);
      google.charts.setOnLoadCallback(drawChart5);
      google.charts.setOnLoadCallback(drawChart6);
      google.charts.setOnLoadCallback(drawChart7);
      google.charts.setOnLoadCallback(drawChart8);
      google.charts.setOnLoadCallback(drawChart9);
      google.charts.setOnLoadCallback(drawChart10);
      google.charts.setOnLoadCallback(drawChart11);
      google.charts.setOnLoadCallback(drawChart12);
      google.charts.setOnLoadCallback(drawChart13);
      google.charts.setOnLoadCallback(drawTable);
      
      function drawTable1() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'User');
        data.addColumn('number', 'Action');
        data.addColumn('number', 'Date/Time');
        data.addColumn('boolean', 'Complete');
        data.addRows([
          ['Admin',  {v: 10000, f: 'Added User'}, {v: 1, f: '12/5/2018 09:34:23'}, true],
          ['Dan',  {v: 10000, f: 'Updated Profile'}, {v: 1, f: '12/6/2018 14:55:00'}, true],
          ['Thomas',  {v: 10000, f: 'Removed User'}, {v: 1, f: '12/4/2018 11:15:38'}, true],
          ['Admin',  {v: 10000, f: 'Sent Refund'}, {v: 1, f: '12/6/2018 12:26:15'}, false]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div1'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
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
      }

      function drawChart5() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2016',  10000, 8000],
          ['2017',  5000, 11000],
          ['2018',  12099, 6000]
        ]);

        var options = {
          title: 'Customer Acquisitions',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
          height: '400px'
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div5'));
        chart.draw(data, options);
      }      

      function drawChart6() {
        var data = google.visualization.arrayToDataTable([
          ['Desc', 'Rating'],
          ['Quality',     10],
          ['Smell',      2],
          ['Side Effects',  1],
          ['Popularity', 8],
          ['Price',    3]
        ]);

        var options = {
          title: 'Product Details',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div6'));
        chart.draw(data, options);
      }

      function drawChart7() {
        var data = google.visualization.arrayToDataTable([
          ['Desc', 'Rating'],
          ['Quality',     10],
          ['Smell',      2],
          ['Side Effects',  1],
          ['Popularity', 8],
          ['Price',    3]
        ]);

        var options = {
          title: 'Product Details',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div7'));
        chart.draw(data, options);
      }

      function drawChart8() {
        var data = google.visualization.arrayToDataTable([
          ['Desc', 'Rating'],
          ['Quality',     10],
          ['Smell',      2],
          ['Side Effects',  1],
          ['Popularity', 8],
          ['Price',    3]
        ]);

        var options = {
          title: 'Product Details',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div8'));
        chart.draw(data, options);
      }

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Campaign');
        data.addColumn('number', 'Revenue');
        data.addColumn('boolean', 'Active');
        data.addRows([
          ['Campaign 1',  {v: 10000, f: '$10,000'}, true],
          ['Campaign 2',   {v:8000,   f: '$8,000'},  false],
          ['Campaign 3', {v: 12500, f: '$12,500'}, false],
          ['Campaign 4',   {v: 7000,  f: '$7,000'},  true]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }

      function drawChart9() {
        var data = google.visualization.arrayToDataTable([
          ["Element", "Density", { role: "style" } ],
          ["Camp 1", 8.94, "#7386D5"],
          ["Camp 2", 10.49, "#DC3912"],
          ["Camp 3", 19.30, "#FFEA00"],
          ["Camp 4", 21.45, "#00C853"]
        ]);
  
        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                         2]);
  
        var options = {
          title: "Top Campaigns",
          width: '100%',
          height: 'auto',
          bar: {groupWidth: "95%"},
          legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
      }

      function drawChart10() {
        var data = google.visualization.arrayToDataTable([
          ['Desc', 'Rating'],
          ['Quality',     10],
          ['Smell',      2],
          ['Side Effects',  1],
          ['Popularity', 8],
          ['Price',    3]
        ]);

        var options = {
          title: 'Product Details',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div10'));
        chart.draw(data, options);
      }      

      function drawChart11() {
        var data = google.visualization.arrayToDataTable([
          ['Desc', 'Rating'],
          ['Quality',     10],
          ['Smell',      2],
          ['Side Effects',  1],
          ['Popularity', 8],
          ['Price',    3]
        ]);

        var options = {
          title: 'Invoice Warnings',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div11'));
        chart.draw(data, options);
      }     
      
      function drawChart12() {
        var data = google.visualization.arrayToDataTable([
          ['Desc', 'Rating'],
          ['Quality',     10],
          ['Smell',      2],
          ['Side Effects',  1],
          ['Popularity', 8],
          ['Price',    3]
        ]);

        var options = {
          title: 'Product Details',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div12'));
        chart.draw(data, options);
      } 
            
      function drawChart13() {
        var data = google.visualization.arrayToDataTable([
          ['Desc', 'Rating'],
          ['Quality',     10],
          ['Smell',      2],
          ['Side Effects',  1],
          ['Popularity', 8],
          ['Price',    3]
        ]);

        var options = {
          title: 'Product Details',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div13'));
        chart.draw(data, options);
      }       