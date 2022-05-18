@extends("layouts.admin_structure")

@section("admin_description")
La page d'administration du sondage de BigScreen
@endsection

@section("admin_title")
Tableau de bord
@endsection

@section("admin_content")
@extends("components.admin_sidebar")

@section("sidebar")

<div class="container">
  <style>
    /* BEGIN BODY CSS */
    h2 {
      color: white;
      text-align: center;
      padding: 15px;
    }
    
    .col_dim {
      margin-bottom: 5%;
    }
    /* END BODY CSS */
  </style>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <h2>Tableau de bord</h2>
  
  <div class="row">
    
    
    {{-- First Chart --}}
    <div class="col-md-6 col_dim">
      <canvas id="PieChart1"></canvas>
      <script>
        var xValues = @json($question_six);
        var yValues = @json($six);
        var barColors = [
        "rgba(0,0,255,1.0)",
        "rgba(0,0,255,0.8)",
        "rgba(0,0,255,0.6)",
        "rgba(0,0,255,0.4)",
        "rgba(0,0,255,0.2)",
        ];
        
        new Chart("PieChart1", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "World Wide Wine Production"
            }
          }
        });
      </script>
    </div>
    
    {{-- Second Chart --}}
    <div class="col-md-6 col_dim">
      <canvas id="PieChart2"></canvas>
      <script>
        var xValues = @json($question_seven);
        var yValues = @json($seven);
        var barColors = [
        "rgba(0,0,255,1.0)",
        "rgba(0,0,255,0.8)",
        "rgba(0,0,255,0.6)",
        "rgba(0,0,255,0.4)",
        "rgba(0,0,255,0.2)",
        ];
        
        new Chart("PieChart2", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "World Wide Wine Production"
            }
          }
        });
      </script>
    </div>
    
    {{-- Third Chart --}}
    <div class="col-md-6">
      <canvas id="PieChart3"></canvas>
      <script>
        
        var xValues = @json($question_ten);
        var yValues = @json($ten);
        var barColors = [
        "rgba(0,0,255,1.0)",
        "rgba(0,0,255,0.8)",
        "rgba(0,0,255,0.6)",
        "rgba(0,0,255,0.4)",
        "rgba(0,0,255,0.2)",
        ];
        
        new Chart("PieChart3", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "World Wide Wine Production"
            }
          }
        });
      </script>
    </div>
    
    {{-- Fourth Chart --}}
    <div class="col-md-6">
      
      <canvas id="RadarChart"></canvas>
      <script>
        const data = {
          labels: @json($radar_label),
          datasets: [{
            label: 'Question n°11',
            data: @json($eleven),
            fill: true,
            backgroundColor: 'rgba(0, 216, 255, 0.2)',
            borderColor: 'rgb(0, 216, 255)',
            pointBackgroundColor: 'rgb(0, 216, 255)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(0, 216, 255)'
          }, {
            label: 'Question n°12',
            data: @json($twelve),
            fill: true,
            backgroundColor: 'rgba(35, 0, 255, 0.2)',
            borderColor: 'rgb(35, 0, 255)',
            pointBackgroundColor: 'rgb(35, 0, 255)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(35, 0, 255)'
          }, {
            label: 'Question n°13',
            data: @json($thirteen),
            fill: true,
            backgroundColor: 'rgba(255, 37, 60, 0.2)',
            borderColor: 'rgb(255, 37, 60)',
            pointBackgroundColor: 'rgb(255, 37, 60)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(255, 37, 60)'
          }, {
            label: 'Question n°14',
            data: @json($fourteen),
            fill: true,
            backgroundColor: 'rgba(180, 0, 73, 0.2)',
            borderColor: 'rgb(180, 0, 73)',
            pointBackgroundColor: 'rgb(180, 0, 73)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(180, 0, 73)'
          }, {
            label: 'Question n°15',
            data: @json($fifteen),
            fill: true,
            backgroundColor: 'rgba(199, 51, 255, 0.2)',
            borderColor: 'rgb(199, 51, 255)',
            pointBackgroundColor: 'rgb(199, 51, 255)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(199, 51, 255)'
          }]
        };
        
        const config = {
          type: 'radar',
          data: data,
          options: {
            elements: {
              line: {
                borderWidth: 3
              }
            }
          },
        };
        
        const myChart = new Chart(
        document.getElementById('RadarChart'),
        config
        );
      </script>
    </div>
    
  </div>
  
</div>
@endsection
@endsection

