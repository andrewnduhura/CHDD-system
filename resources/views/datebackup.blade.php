
<!-- <div>
    
        <canvas id="graph-container"></canvas>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Event listener for date selection changes
        document.addEventListener('DOMContentLoaded', function () {
            // Function to fetch graph data and render the chart
            function fetchGraphData() {
                $('#date-form').on('submit', function(event) {
                event.preventDefault();

                var startDate = $('#startdate').val();
                var endDate = $('#enddate').val();
                $.ajax({
                    url: '{{ route("fetch-graph-data") }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        start_date: startDate,
                        end_date: endDate,
                        ('#date-form').serialize(),
                    },
                    success: function(response) {
                        var dates = response.dates.map(function(date) {
                            return new Date(date);
                        });
                        var counts = response.counts.map(function(count) {
                             return parseInt(count);
                        });

                        // Generate and render the chart using Chart.js
                        var ctx = document.getElementById('graph-container').getContext('2d');
                    new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: dates,
                        datasets: [{
                            label: 'Number of patients',
                            data: counts,
                            backgroundColor: 'rgba(75, 192, 192, 0.6)',
                            borderWidth: 1,
                            borderColor: 'black' 
                            //fill: true
                        }]
                    },
                    options: {
                        responsive: true, // Ensure the chart resizes correctly
                        maintainAspectRatio: false,
                        scales: {
                            x: {
                                display: true,
                                title: {
                                    display: true,
                                    text: 'Date'
                                }
                            },
                            y: {
                                display: true,
                                title: {
                                    display: true,
                                    text: 'Number of Patients'
                                },
                                ticks: {
                                    beginAtZero: true // Start the y-axis from zero

                            }
                        }
                    }
                });
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }
    $('#date-form').submit(function (e) {
        e.preventDefault();
        fetchGraphData();

    });
        </script> -->
        