$(function () {
	
	var d1, data, chartOptions;

	var d1 = [[1262304000000, 50], [1264982400000, 90], [1267401600000, 120], [1270080000000, 210], [1272672000000, 150], [1275350400000, 220], [1277942400000, 250], [1280620800000, 180], [1283299200000, 250], [1285891200000, 300], [1288569600000, 350], [1291161600000, 200]];

	data = [{ 
		label: "Facebook", 
		data: d1
	}];

	chartOptions = {
		xaxis: {
			min: (new Date(2009, 11)).getTime(),
			max: (new Date(2010, 11)).getTime(),
			mode: "time",
			tickSize: [1, "month"],
			monthNames: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			tickLength: 0
		},
		yaxis: {

		},
		series: {
			lines: {
				show: true, 
				fill: false,
				lineWidth: 3,
			},
			points: {
				show: true,
				radius: 4,
				fill: true,
				fillColor: "#ffffff",
				lineWidth: 3
			}
		},
		 grid:{
			hoverable: true,
			clickable: true,
			borderWidth: 1,
			tickColor: '#f5f6fa',
			borderColor: '#f5f6fa',
		},
		shadowSize: 0,
		legend: {
			show: true,
			position: 'nw'
		},
		tooltip: true,
		tooltipOpts: {
			content: '%s: %y'
		},
		colors: ['#f23f3f', '#2698e2', '#ccecff'],
	};

	var holder = $('#line-chart');

	if (holder.length) {
		$.plot(holder, data, chartOptions );
	}
});