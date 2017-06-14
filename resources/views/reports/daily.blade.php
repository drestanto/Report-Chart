<html>
<body>
	<h1> Daily Resports </h1>
	<canvas id="daily-reports" width="300" height="300"></canvas>

</body>
<script src="/public/js/chart.min.js"></script>
<script>
	(function() {
		var ctx = document.getElementById('daily-reports').getContext('2d');
		var chart = {
			labels: ['January', 'February', 'March'],
			dataset: [{
				data: [100, 423, 719]
			}]
		};

		new Chart(ctx).Line(chart);
	})();
</script>
</html>