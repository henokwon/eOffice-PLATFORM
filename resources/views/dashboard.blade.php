<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6  bg-white shadow-md dark:bg-dark-eval-1">
      <div class="wrapper" class="highcharts-figure">
       <figure class="highcharts-figure">
          <div id="container"></div>
       <figure>
       <div class="row">
            <div class="column"><div id="containerOpen"></div></div>    
            <div class="column"><div id="containerClosed"></div></div>    
        </div>
        <div class="row">
            <div class="column"><div id="containerProgress"></div></div>    
            <div class="column"><div id="containerUploaded"></div></div>    
        </div>
        <div class="row">
            <div class="column"><div id="containerShared"></div></div>    
            <div class="column"><div id="containerPending"></div></div>    
        </div>
    </div>

    </div>
</x-app-layout>

<link rel="stylesheet" type="text/css"  href="{{asset('../css/ChartStyles.css')}}">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script type="text/javascript">
var userData = <?php echo json_encode($userData)?>;
var allIndex=[0,1,2,3,4,5];
var dataDynamic,title;

var Open = [100,190,280,120,230,320,308,460,390,540,650,252];
var Closed = [1020,80,180,150,230,420,358,560,390,540,540,322];
var Progress = [20,60,150,243,230,320,358,560,260,540,580,122];
var Pending = [30,59,180,170,230,480,358,560,230,540,490,202];
var Shared = [150,79,230,200,230,520,358,560,390,540,590,190];
var Uploaded = [180,90,150,200,230,420,358,560,250,540,590,230];

Highcharts.chart('container', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'Monthly File Report'
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 0.4,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
    },
    xAxis: {
        categories: [5,10,15,20,25,30] ,
         title: {
            text: 'Day'
        }
    },
    yAxis: {
        title: {
            text: 'Number of Files'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: ' Files'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5
        }
    },
    series: [{
        name: 'Previous Month',
        data: [13, 44, 63, 150, 48, 110]
    }, {
        name: 'Current Month',
        data: [32, 83, 94, 103, 73, 150]
    }]
});


function drawChartAll(type){
   var typeString = type.toString();
   //console.log(type+":"+ typeString);
   switch(typeString){
    case '0':
        dataDynamic = Open;  
        title ="Open";  
        break;
    case '1':
        dataDynamic = Closed;   
        title ="Closed"; 
        break;   
    case '2':
        dataDynamic = Progress;  
        title ="Progress";  
        break; 
    case '3':
        dataDynamic = Pending;   
        title ="Pending"; 
        break;
    case '4':
        dataDynamic = Shared;  
        title ="Shared";  
        break;
    case '5':
        dataDynamic = Uploaded;
        title ="Uploaded";    
        break;
    }

    var titleString = `container${title}`;
    //console.log(dataDynamic,title,typeString,type,titleString);
    // Actual Graph
    Highcharts.chart(`${titleString}`, {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: `${title} Files Report`
    },
    subtitle: {
        text: 'Source: e-Office Database'
    },
    xAxis: [{
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        crosshair: true
    }],
    yAxis: [{ 
        labels: {
            format: '{value} ',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: 'Number of Files',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }],
    tooltip: {
        shared: true
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        x: 100,
        verticalAlign: 'top',
        y: 120,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    },
    series: [ {
        name: 'Annual Report',
        type: 'spline',
        data: dataDynamic,
        tooltip: {
            valueSuffix: ''
        }
    }]
});
}   // End of drawChartAll

for(var i= 0; i < 6; i++) {
    drawChartAll(i);
};

</script>