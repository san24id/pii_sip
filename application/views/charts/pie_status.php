<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
    
        <div>
    <?php
    /* Mengambil query report*/
        $value_b[] = (float) 3;
        $value_e[] = (float) 6;
        $value_f[] = (float) 7;
        $value_g[] = (float) 4;
        $value_h[] = (float) 5;
        $value_i[] = (float) 2;
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
    "country": "COMPLETED",
    "value": <?php echo json_encode($value_e);?>,
    "color": "#33cc33"
  },{
    "country": "INCOMPLETED",
    "value": <?php echo json_encode($value_f);?>,
    "color": "#ff9933"
  },{
    "country": "FINISHED",
    "value": <?php echo json_encode($value_h);?>,
    "color": "#b380ff"
  },{
    "country": "DRAFTED",
    "value": <?php echo json_encode($value_i);?>,
    "color": "#99ffcc"
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

