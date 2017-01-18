@extends('layout')
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Most Popular Anime</div>
                <div class="panel-body">
                    <canvas id="canvas" height="280" width="600"></canvas>

  <script type="text/javascript" src="https://github.com/chartjs/Chart.js/releases/download/v2.4.0/Chart.bundle.js"></script>
  <script>

      var anime_name = <?php echo $result; ?>;
      var anime_data = <?php echo $count; ?>;


      var barChartData = {

          labels: anime_name,
          datasets: [{
              label: 'Amount Of Post',
              backgroundColor: "rgba(151,187,205,0.5)",
              data: anime_data
          }]
      };

      window.onload = function() {
          var ctx = document.getElementById("canvas").getContext("2d");
          window.myBar = new Chart(ctx, {
              type: 'line',
              data: barChartData,
              options: {
                  elements: {
                      rectangle: {
                          borderWidth: 2,
                          borderColor: 'rgb(0, 255, 0)',
                          borderSkipped: 'bottom'
                      }
                  },
                  responsive: true,
                  title: {
                      display: true,
                      text: 'Anime'
                  },

                  scales: {
                    yAxes: [{
                      display: true,
                      ticks: {
                        suggestedMin: 0,    // 0 so if value is 1 it wont look flat
                        beginAtZero: true   // minimum value will be 0.
                      }
                    }]
                  }
              }
          });
      };
  </script>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection