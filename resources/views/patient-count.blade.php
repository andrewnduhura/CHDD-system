
<div style="width:50%;height:10px;">
    
    <canvas id="patient-count-chart" width="400" height="400"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var dates = {!! $dates !!};
var counts = {!! $counts !!};
var csrfToken = "{{ csrf_token() }}";
//var location = "{!! $location !!}";

new Chart(document.getElementById('patient-count-chart'), {
    type: 'bar',
    data: {
        labels: dates,
        datasets: [{
            label: 'Number of patients ',
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
        plugins: {
                title: {
                    display: true,
                    text: 'Number of patients ',
                }
            },
        legend: {
            display: false,
        },
    }
});


</script>


