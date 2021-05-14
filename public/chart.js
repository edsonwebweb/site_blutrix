      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Faltas'],
          ['Janeiro',  0],
          ['Fevereiro',  0],
          ['Março',  7],
          ['Abril',  50],
          ['Maio',  1],
          ['Junho',  0],
          ['Julho',  40],
          ['Agosto',  0],
          ['Setembro',  1],
          ['Outubro',  30],
          ['Novembro',  0],
          ['Dezembro',  70]
        ]);
        var options = {
          title: 'Balanço de faltas durante o Ano:',
          curveType: 'function',
          legend: { position: 'bottom'},
          lineWidth: 10,
          // colors: ['5dccff'],
          colors: ['#88adfc'],
          titleColor:'gray',
          chartArea:{
          left:0,
        //   top: 20,
          width: '100%',
          height: '350',
        
    }        
        };
        var chart = new google.visualization.LineChart(document.getElementById('chart'));
        chart.draw(data, options);
      }