@extends('layout')
@section('content')
{{$data}}
@endsection
<!-- <!DOCTYPE html>
<html>
<head>
  <title>Patient Chart</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
</head>
<body>
  <canvas id="patient-chart"></canvas>

  <script>
    var patients = @json($patients);
            var labels = patients.map(patient => patient.name);
            var counts = patients.map(patient => patient.count);

            var ctx = document.getElementById('patientsChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Number of Patients',
                        data: counts,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        yaxis: {
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    }
                }
            });
  </script>
</body>
</html> -->

<!-- {!! $chart->render() !!}

<!DOCTYPE html>
<html>
<head>
    <title>Generate Patient Charts</title>
</head>
<body>
    <h1>Generate Patient Charts</h1>

    <form action="{{ route('patients.chart') }}" method="GET">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>

        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required>

        <button type="submit">Generate Charts</button>
    </form>

    <!-- Display the charts using the $patients data -->
</body>
</html>

 -->
