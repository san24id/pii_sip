



<script src="<?php echo base_url(); ?>assets/chartjs/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<div id="chartdiv"></div>

<style type="text/css">
	

#chartdiv {
  width: 450px;
  height: 200px;
}   

</style>                                         

<script type="text/javascript">


var chart = AmCharts.makeChart("chartdiv", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [{
    "country": "Lithuania",
    "litres": 501.9
  }, {
    "country": "Czech Republic",
    "litres": 301.9
  }, {
    "country": "Ireland",
    "litres": 201.1
  }, {
    "country": "Germany",
    "litres": 165.8
  }, {
    "country": "Australia",
    "litres": 139.9
  }, {
    "country": "Austria",
    "litres": 128.3
  }, {
    "country": "UK",
    "litres": 99
  }, {
    "country": "Belgium",
    "litres": 60
  }, {
    "country": "The Netherlands",
    "litres": 50
  }],
  "valueField": "litres",
  "titleField": "country",
  "labelRadius": 1,
  "balloon": {
    "fixedPosition": true
  },
  "export": {
    "enabled": false,
    "menu": []
  }
});

function exportChart() {
  chart["export"].capture({}, function() {

    // SAVE TO PNG
    this.toPNG({}, function(base64) {

      // We have now a Base64-encoded image data
      // which we can now transfer to server via AJAX
      // i.e. jQuery.post( "saveimage.php", { "data": base64 } )
      console.log(base64);
    });
  });
}

</script>