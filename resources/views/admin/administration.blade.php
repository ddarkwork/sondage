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

<style>
    /* BEGIN BODY CSS */
    h2 {
        color: white;
        text-align: center;
        padding: 15px;
    }

    /* END BODY CSS */
</style>

<h2>Tableau de bord</h2>

{{-- <div>
    <canvas id="myChart"></canvas>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const labels = [
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
    ];
  
    const data = {
      labels: labels,
      datasets: [{
        label: 'My First dataset',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [0, 10, 5, 2, 20, 30, 45],
      }]
    };
  
    const config = {
      type: 'line',
      data: data,
      options: {}
    };
    
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  </script> --}}

@endsection
@endsection