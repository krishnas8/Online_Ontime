
$(document).ready(function(){
	$.ajax({
		url: "http://localhost/graph/data1.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var month = [];
			var couriers = [];

			for(var i in data) {
				month.push("Month " + data[i].Month);
				couriers.push(data[i].count);
			}
			couriers.push(0);

			var chartdata = {
				labels: month,
				datasets : [
					{
						label: 'Courier Analysis',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: couriers
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});