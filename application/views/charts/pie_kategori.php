<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
    
        <div>
    <?php
    /* Mengambil query report*/
        $value_a[] = (float) 2;
        $value_b[] = (float) 3;
        $value_c[] = (float) 5;
        $value_d[] = (float) 3;
        $value_e[] = (float) 1;
    /* end mengambil query*/
    ?>

        </div>

<style>
#chartdiv {
  width: 100%;
  height: 100%;
}                   
</style>

<!-- Resources -->
<script src="<?php echo base_url(); ?>assets/chartjs/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- Chart code -->
<script>
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "pie",
  "theme": "light",
  "fontSize": 10,
  "dataProvider": [{
    "country": "Pemerintah<br>Pusat",
    "value": <?php echo json_encode($value_a);?>,
    "color": "#ffcc99"
  },{
    "country": "Pemerintah<br>Daerah",
    "value": <?php echo json_encode($value_b);?>,
    "color": "#ffff66"
  },{
    "country": "BUMN",
    "value": <?php echo json_encode($value_c);?>,
    "color": "#ff99ff"
  },{
    "country": "BUMD",
    "value": <?php echo json_encode($value_d);?>,
    "color": "#66ff33"
  },{
    "country": "Lain",
    "value": <?php echo json_encode($value_e);?>,
    "color": "#c2d6d6"
  }],
  "valueField": "value",
  "titleField": "country",
  "colorField": "color",
  //"labelsEnabled":true,
  "labelText": "[[country]] : [[value]]",
  "color": "#000",
  "labelRadius": 5,
  "outlineAlpha": 0.4,
  "depth3D": 10,
  "balloonText": "<span style='font-size:11px'><b>[[title]]</b><br>[[value]] ([[percents]]%)</span>",
  "angle": 30,
  "startDuration":0,
  "export": {
    "enabled": false
  }
} );
</script>
    </head>
    <body>
    <div id="chartdiv"></div>
    </div>
</div>

