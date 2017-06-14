<html>
<head>
	<title>Chart</title>
	<script type="text/javascript" src="{!! asset('js/chart.min.js') !!}"></script>
</head>
<body>
	<h1> Daily Resports </h1>
	<canvas id="daily-reports" width="300" height="300"></canvas>
	<script>
		(function() {
			var ctx = document.getElementById('daily-reports').getContext('2d');
			var chart = {
				labels: ['January', 'February', 'March'],
				datasets: [{
					data: [100, 423, 719]
				}]
			};

			new Chart(ctx).Line(chart);
		})();
	</script>
</body>

</html>