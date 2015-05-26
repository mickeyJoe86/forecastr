
$(document).ready(function () {

	//glyphicon toggle
 	$('a[data-toggle="collapse"]').click(function () {
 		$(this).find('span.toggle-icon').toggleClass('glyphicon-plus-sign  glyphicon-minus-sign');
 	});

	//Create new chart

    var buyers = document.getElementById('buyers').getContext('2d');



    //define dataset variables
    var data = {
        labels: hours,
        datasets: [
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: rainPercent
            }
        ]
    };

    //Chart.defaults.global.animation = false;
    Chart.defaults.global.responsive = true;

    new Chart(buyers).Line(data);

});
