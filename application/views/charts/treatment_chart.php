<!-- BEGIN CONTENT -->

            <?php
    /* Mengambil query report*/
   
        $level_high_s[] = 20;
        $value_high_s[] = (float) 20;
    
   
        $level_high_v[] = 30;
        $value_high_v[] = (float) 30;
    

  
        $level_moderate_s[] = 40;
        $value_moderate_s[] = (float) 40;
    
   
        $level_moderate_v[] = 50;
        $value_moderate_v[] = (float) 50;
   

   
        $level_low_s[] = 60;
        $value_low_s[] = (float) 60;
    
   
        $level_low_v[] = 70;
        $value_low_v[] = (float) 70;
    
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
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- Chart code -->
<script>
var chart = AmCharts.makeChart("chartdiv", {
    "theme": "light",
    "type": "serial",
    "fontSize": 9,
    "dataProvider": [{
        "level":  'Low',
        "result": <?php echo json_encode($value_low_v);?>,
        "result2": <?php echo json_encode($value_low_s);?>,
        "color": "#009933",
        "color2": "#66ff66"
    }, {
        "level": 'Moderate',
        "result": <?php echo json_encode($value_moderate_v);?>,
        "result2": <?php echo json_encode($value_moderate_s);?>,
        "color" : "#ffcc00",
        "color2" : "#ffff99"
    }, {
        "level": 'High',
        "result": <?php echo json_encode($value_high_v);?>,
        "result2": <?php echo json_encode($value_high_s);?>,
        "color": "#ff3300",
        "color2" : "#ff9966"
    }],
     "valueAxes": [{
        "stackType": "regular",
        "axisAlpha": 0.5,
        "gridAlpha": 0
    }],
   "graphs": [{
        "balloonText": "<span style='font-size:11px'><b>[[category]]</b>:[[value]]</span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 1,
        "type": "column",
        "color": "#000000",
        "valueField": "result",
        "fillColorsField": "color"
    }, {
        "balloonText": "<span style='font-size:11px'><b>[[category]]</b>:[[value]]</span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 1,
        //"title": "",
        "type": "column",
        "color": "#000000",
        "valueField": "result2",
        "fillColorsField": "color2"
    },],
    "depth3D": 10,
    "angle": 20,
    "rotate": true,
    "categoryField": "level",
    "categoryAxis": {
        "gridPosition": "start",
        "fillAlpha": 0.05,
        "position": "left"
    },
    "export": {
      "enabled": false
     }
});
</script>

    <div id="chartdiv"></div>


