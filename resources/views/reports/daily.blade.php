<html>
<head>
	<title>Chart</title>
	<script type="text/javascript" src="{!! asset('js/chart.min.js') !!}"></script>
</head>
<body>
	<h1> Daily Resports </h1>

	{{-- GRAPHS --}}
	<canvas id="daily-reports" width="600" height="300"></canvas>
	<script>
		(function() {
			var dates = new Array();
		    <?php foreach($dates as $key => $val){ ?>
		        dates.push('<?php echo $val; ?>');
		    <?php } ?>
			var amounts = new Array();
		    <?php foreach($amounts as $key => $val){ ?>
		        amounts.push('<?php echo $val; ?>');
		    <?php } ?>
			var ctx = document.getElementById('daily-reports').getContext('2d');
			var chart = {
				labels: dates,
				datasets: [{
					data: amounts,
					// fillColor : "#f8b1aa",
					// strokeColor : "#bb574e",
					// pointColor : "#ba5c3e",
				}]
			};

			new Chart(ctx).Line(chart); //new Chart(ctx).Bar(chart, {bezierCurve: false});
		})();
	</script>

	{{-- LIST --}}
	<h2> Drill Down </h2>
	@for ($i = 0; $i < sizeof($dates) ; $i++)
		<li><strong>{{$dates[$i]}} : </strong>{{$amounts[$i]}}</li>
	@endfor

</body>

</html>