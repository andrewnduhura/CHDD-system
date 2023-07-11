
// resources/views/patients/graphs_show.blade.php

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Patient Graphs</h1>

        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('patient.graphs.show') }}">
                    @csrf
                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" name="start_date" class="form-control" id="start_date" required>
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" name="end_date" class="form-control" id="end_date" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Generate Graphs</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script>
        var ctx = document.getElementById('patients-chart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($patients->pluck('date')) !!},
                datasets: [{
                    label: 'Patients Created',
                    data: {!! json_encode($patients->pluck('count')) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
