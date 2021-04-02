<style>
<!--	
	@import url('https://fonts.googleapis.com/css2?family=Lexend+Deca');
	body{
		font-family: Arial,Helvetica,sans-serif;
	}
	
	#eventform{
		background-color:#203764;
	}
	
	.font-fact{
		font-family: 'Lexend Deca', sans-serif;
	}
	
	.font-fact-highlight{
		font-weight:700; 
		color:#ffde00
	}
	
	
	.fact-of-the-day{
		font-size: 25px;
		color: white;
	}
	
	.card-fact-box{
		background-color:#203764;
		border-radius: 10px;
	}
	
	.blockquote-map-malaysia{
		margin-top:11%;
	}
	
	.card-map-malaysia, .card-miscarrige{
		width: 60%;
	}
	
	.image-miscarriage{
		width:170px;
	}
	
	.amchart-mmy {
	  width: 100%;
	  height: 370px;
	}
	
	.btn-cb-custom {
		background-color: #f18773;
		border-color: #f18773;
		width: 50%;
		padding: 10px;
		padding-bottom: 10px;
		font-size: 17px;
		font-weight: 600;
		outline:unset;
		box-shadow: unset;
	}
	
	.btn-cb-custom:hover, .btn-cb-custom:active, .btn-cb-custom:focus{
		background-color:#f9634e;
		border-color: #f9634e;
		outline:unset;
		box-shadow: unset;
	}
	
	@media (max-width: 767px) {
		.btn-cb-custom{
			width: 100%;
		}
	}
	
	
 /** end of css for form wizard **/
-->
</style>
<p>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/core.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/charts.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/plugins/annotation.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/themes/dataviz.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/themes/frozen.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/themes/animated.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
</p>

<div class="row" style="margin-top:50px;">
	<div class="row">
		<div class="col-md-12 text-center mb-4">
			<h3 class="font-fact fact-of-the-day"> Thank you for participating Clearblue Survey</h3>
		</div>
	</div>
	<div class="col-md-12">
		<div class="row text-center">
			<p class="font-fact fact-of-the-day">Look! This is how many women share the same source as you</p>
		</div>
		<div class="row">
			<div id="mmy-chartresult" class="amchart-mmy">
				<center><h3 class="mt-4"> Loading graph...</h3></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 px-2 text-center mt-4">
			<a href="https://www.motherhood.com.my/" class="btn btn-primary btn-cb-custom btn-next-customer" style="position: relative; right: 10px;">Home</a>
		</div>
	</div>
</div>

<div id="sponsored_content" sponsored_content="1"></div> <!-- disabled overlay banner --->
</div>
<p>
<script type="text/javascript">
	var chartresult = function(){
		// Themes begin
		am4core.useTheme(am4themes_animated);
		// Themes end

		var chart = am4core.create("mmy-chartresult", am4charts.XYChart);
		chart.padding(10, 10, 10, 10);
		chart.hiddenState.properties.opacity = 0; // this creates initial fade-in
		chart.responsive.enabled = true;

		chart.data = [
		  {
			category: "Advice from a gynecologist",
			quantity: 725
		  },
		  {
			category: "Tips from other mums",
			quantity: 625
		  },  
		  {
			category: "Track using fertility tools",
			quantity: 602
		  },
		  {
			category: "Pregnancy tips online",
			quantity: 509
		  },
		];

		var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
		categoryAxis.renderer.grid.template.location = 0;
		categoryAxis.dataFields.category = "category";
		categoryAxis.renderer.minGridDistance = 40;
		categoryAxis.fontSize = 13;
		categoryAxis.renderer.labels.template.dy = 5;
		categoryAxis.renderer.labels.template.fill = am4core.color("#ffffff");

		var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
		valueAxis.min = 0;
		valueAxis.renderer.minGridDistance = 30;
		valueAxis.renderer.baseGrid.disabled = false;
		valueAxis.renderer.grid.template.disabled = true;
		valueAxis.renderer.labels.template.fill = am4core.color("#ffffff");


		var series = chart.series.push(new am4charts.ColumnSeries());
		series.dataFields.categoryX = "category";
		series.dataFields.valueY = "quantity";
		series.columns.template.tooltipText = "{valueY.value}";
		series.columns.template.tooltipY = 0;
		series.columns.template.column.cornerRadiusTopLeft = 5;
		series.columns.template.column.cornerRadiusTopRight = 5;
		series.columns.template.strokeOpacity = 0;
		series.columns.template.width = am4core.percent(20);
		
		// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
		series.columns.template.adapter.add("fill", function(fill, target) {
		  return chart.colors.getIndex(target.dataItem.index);
		});

		var legend = new am4charts.Legend();
		legend.parent = chart.chartContainer;
		legend.itemContainers.template.togglable = false;
		legend.marginTop = 20;
		
		series.events.on("ready", function(ev) {
			var legenddata = [];
			series.columns.each(function(column) {
				
				legenddata.push({
					name: column.dataItem.categoryX + " : " + column.dataItem.valueY,
					fill: column.fill,
					columnDataItem: column.dataItem,
				})
			});
		  legend.data = legenddata;
		});
		
		/*  legend items toggle related columns as well as show tooltip on a column when rolled over a legend item. */
		legend.itemContainers.template.events.on("hit", function(ev) {
		  //console.log("Clicked on ", ev.target.dataItem.className);
			console.log(ev.target);
			if (!ev.target.isActive) {
				ev.target.isActive = true;
				ev.target.dataItem.dataContext.columnDataItem.hide();
			}
			else {
				ev.target.isActive = false;
				ev.target.dataItem.dataContext.columnDataItem.show();
			}
		});

		legend.itemContainers.template.events.on("over", function(ev) {
			ev.target.dataItem.dataContext.columnDataItem.column.isHover = true;
			ev.target.dataItem.dataContext.columnDataItem.column.showTooltip();
		});

		legend.itemContainers.template.events.on("out", function(ev) {
			ev.target.dataItem.dataContext.columnDataItem.column.isHover = false;
			ev.target.dataItem.dataContext.columnDataItem.column.hideTooltip();
		});
		
		legend.labels.template.fill = am4core.color("#ffffff");
		chart.responsive.rules.push({
		  relevant: function(target) {
			if (target.pixelWidth <= 400) {
				categoryAxis.renderer.labels.template.disabled  = true;
				valueAxis.renderer.labels.template.disabled = true;
				chart.padding(20, 20, 20, 20);
				return true;
			}
			return false;
		  },
		  state: function(target, stateId) {
			return;
		  }
		});
	}
	
	
	
	$(function(){
		$(window).load(function() {
		  $.uniform.restore(".noUniform");
		});
	
		chartresult();		
	});
</script>
</p>
