
$(document).ready(function () {

	//glyphicon toggle
 	$('a[data-toggle="collapse"]').click(function () {
 		$(this).find('span.toggle-icon').toggleClass('glyphicon-plus-sign  glyphicon-minus-sign');
 	});

	//Create new chart
    var hourlyGraph = document.getElementById('hourlyGraph').getContext('2d');

    //define dataset variables label and data objects echoed from Forecastr controller
    var data = {
        labels: hours,
        datasets: [
            {
                label: "Hourly Rain",
                fillColor: "rgba(151,187,205,0.5)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: rainPercent
            },
            {
                label: "Hourly Temperature",
                fillColor: "rgba(255,200,0,0.1)",
                strokeColor: "rgba(255,200,0,1)",
                pointColor: "rgba(255,200,0,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: hourlyTemp
            }
        ]
    };

    Chart.defaults.global.responsive = true;

    new Chart(hourlyGraph).Line(data);

});
