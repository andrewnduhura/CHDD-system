
<div>
    
    <canvas id="patient-count-chart" width="150" height="100"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var dates = {!! $dates !!};
var counts = {!! $counts !!};
var csrfToken = "{{ csrf_token() }}";

new Chart(document.getElementById('patient-count-chart'), {
    type: 'bar',
    data: {
        labels: dates,
        datasets: [{
            label: 'Number of patients',
            data: counts,
            borderColor: '',
            fill: true,
        }]
    },
    options: {
        scales: {
            xAxes: [{
                type: 'time',
                time: {
                    displayFormats: {
                        day: 'MMM D'
                    }
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Date'
                }
            }],
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    precision: 0,
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Number of patients'
                }
            }]
        },
        legend: {
            display: false,
        },
    }
});


</script>


