<html>
    <head>
        <title>test</title>
        <script src="highcharts.js"></script>
    </head>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const chart = Highcharts.chart('container', {
                chart: {
                    type: 'spline'
                },
                title: {
                    text: 'Chamados por Técnico'
                },
                xAxis: {
                    categories: ['Abril','Maio', 'Junho']
                },
                yAxis: {
                    title: {
                        text: 'chamados atendidos'
                    }
                },
                series: [{
                    name: 'Ricardo',
                    data: [62, 69,3]
                },{
                    name: 'Leonardo',
                    data: [56, 116,25]
                }, {
                    name: 'Luan',
                    data: [52, 85,25]
                }]
            });
        });
    </script>
    <body>
        <div id="container" style="width:100%; height:400px;"></div>
    </body>
</html>