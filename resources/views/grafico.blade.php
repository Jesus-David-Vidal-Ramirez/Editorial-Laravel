{{-- <h1>GRAFICOS</h1> --}}

{{-- @foreach ($graficos as $item)
    
    <label>{{ $item->Datos }} = {{ $item->Valor }}</label>
    <br>
        
@endforeach --}}
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Graficos</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


{{--     
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="/js/highstock.js"></script>
<script src="/js/highmaps.js"></script>
<script src="/js/highcharts.js"></script>
<script src="/js/modules/stock.js"></script>
<script src="/js/modules/map.js"></script>

<div id="container" style="width:100%; height:400px; "></div>
<script>
document.addEventListener('DOMContentLoaded', function () {
        const chart = Highcharts.chart('container', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Fruit Consumption'
            },
            xAxis: {
                categories: ['Apples', 'Bananas', 'Oranges']
            },
            yAxis: {
                title: {
                    text: 'Fruit eaten'
                }
            },
            series: [{
                name: 'Jane',
                data: [1, 0, 4]
            }, {
                name: 'John',
                data: [5, 7, 3]
            }]
        });
    });
    
</script>

<script type="text/javascript" src="/js/themes/gray.js"></script> --}}
<hr>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<div id="container" class="container">
<figure class="highcharts-figure">
   
        A basic column chart compares rainfall values between four cities.
        Tokyo has the overall highest amount of rainfall, followed by New York.
        The chart is making use of the axis crosshair feature, to highlight
        months as they are hovered over.
  
   
</figure>

</div>


{{ $datos = 16   }}

{{ $graficos }}
{{ $dato1=1 }}
{{ $dato2=2 }}
{{ $dato3=3 }}
@foreach($graficos as $key => $item)
   

    @switch($key)
        @case(1)
            {{ $dato1 = $item->Valor }}
            @break
        @case(2)
            {{ $dato2 = $item->Valor }}
            @break
        @case(3)
            {{ $dato3 = $item->Valor }}
            @break
        @case(4)
            {{ $dato4 = $item->Valor }}
            @break
        @default
            
    @endswitch

    <label>{{ $item->Datos }} = {{ $item->Valor }}</label>
    <br>
        
@endforeach

{{ $dato3 }}

<script>

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average Rainfall'
    },
    subtitle: {
        text: 'Este es mi nuevo texto'
    },
    xAxis: {
        categories: [
            'Dato1',
            'Dato2',
            'Dato3',
            'Dato4'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Promedio (%)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.1,
            borderWidth: 0
        }
    },
    series: [
    
    {
        name: 'Dato1',
        data:  [<?= $dato1 ?>]
        

    },
    {
        name: 'Dato2',
        data: [ <?= $dato2  ?>]

    },
    {
        name: 'Dato3',
        data: [ <?= $dato3  ?>]

    },
    {
        name: 'Dato4',
        data: [ <?= $dato4  ?>]

    }
    
    // , {
    //     name: 'Berlin',
    //     data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

    // },
]
   
});

</script>

  </body>
</html>



