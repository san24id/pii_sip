

<script src="<?php echo base_url(); ?>assets/chartjs/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/examples/export.config.default.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<div id="chartdiv"></div>      

<style type="text/css">
	

#chartdiv {
  width: 100%;
  height: 500px;
}                                           


</style>                                         

<script type="text/javascript">
	

/**
 * Add items to default Export menu
 * This demo includes a default menu configuration from here:
 * https://www.amcharts.com/lib/3/plugins/export/examples/export.config.default.js
 * We're going to add custom items to it and use for our export config
 */
AmCharts.exportCFG.menu[0].menu.push({
  "label": "My action",
  "click": function() {
    alert("Clicked my custom item. Wow cool!");
  }
});

/**
 * Define data
 */
var chartData = [{
  "country": "USA",
  "visits": 100,
  "color": "#FF0F00"
}, {
  "country": "China",
  "visits": 200,
  "color": "#FF6600"
}, {
  "country": "Japan",
  "visits": 200,
  "color": "#FF9E01"
}, {
  "country": "Germany",
  "visits": 100,
  "color": "#FCD202"
}, {
  "country": "UK",
  "visits": 300,
  "color": "#F8FF01"
}, {
  "country": "France",
  "visits": 500,
  "color": "#B0DE09"
}, {
  "country": "India",
  "visits": 984,
  "color": "#04D215"
}, {
  "country": "Spain",
  "visits": 711,
  "color": "#0D8ECF"
}, {
  "country": "Netherlands",
  "visits": 665,
  "color": "#0D52D1"
}, {
  "country": "Russia",
  "visits": 580,
  "color": "#2A0CD0"
}, {
  "country": "South Korea",
  "visits": 443,
  "color": "#8A0CCF"
}, {
  "country": "Canada",
  "visits": 441,
  "color": "#CD0D74"
}, {
  "country": "Brazil",
  "visits": 395,
  "color": "#754DEB"
}, {
  "country": "Italy",
  "visits": 386,
  "color": "#DDDDDD"
}, {
  "country": "Australia",
  "visits": 384,
  "color": "#999999"
}, {
  "country": "Taiwan",
  "visits": 338,
  "color": "#333333"
}, {
  "country": "Poland",
  "visits": 328,
  "color": "#000000"
}];

/**
 * Create the chart
 */
var chart = AmCharts.makeChart("chartdiv", {
  "theme": "light",
  "type": "serial",
  "dataProvider": chartData,
  "categoryField": "country",
  "depth3D": 20,
  "angle": 30,

  "categoryAxis": {
    "labelRotation": 90,
    "gridPosition": "start"
  },

  "valueAxes": [{
    "title": "Visitors"
  }],

  "graphs": [{
    "valueField": "visits",
    "colorField": "color",
    "type": "column",
    "lineAlpha": 0.1,
    "fillAlphas": 1
  }],

  /**
   * Now let's use the AmCharts.exportCFG we modified
   */
  "export": AmCharts.exportCFG
});


</script>