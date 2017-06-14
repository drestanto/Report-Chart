<html>
<head>
	<title>Chart</title>
	<script type="text/javascript" src="{!! asset('js/chart.min.js') !!}"></script>
</head>
<body>
	<h1> Daily Resports </h1>
	<canvas id="daily-reports" width="600" height="300"></canvas>
	<script>
		(function() {
			var ctx = document.getElementById('daily-reports').getContext('2d');
			var chart = {
				labels: {{ json_encode($dates) }},
				datasets: [{
					data: {{ json_encode($amounts) }}
					// fillColor : "#f8b1aa"
					// strokeColor : "#bb574e"
					// pointColor : "#ba5c3e"
				}]
			};

			new Chart(ctx).Line(chart); //new Chart(ctx).Bar(chart, {bezierCurve: false});
		})();
	</script>
</body>

</html>