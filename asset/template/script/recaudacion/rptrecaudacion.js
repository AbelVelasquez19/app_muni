function reca_x_punto() {
    var option = {
        chart: {
            type: 'column',
            renderTo: 'reca_x_punto',
        },
        title: {
            text: 'fecha'
        },
        subtitle: {
            text: 'subtitulo'
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'mensaje izquierd'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: 'S/. {point.y:.2f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>S/. {point.y:.2f}'
        },

        series: [{
                name: "REPORTE DEL CAMPAÑA GAT",
                colorByPoint: true,
                data: [{
                        name: "SECTOROR UNO",
                        y: 62.74,
                        drilldown: "SECTOROR UNO",
                        color: "#FF5533"
                    },
                    {
                        name: "SECTOROR DOS",
                        y: 10.57,
                        drilldown: "SECTOR DOS",
                        color: "#FFFF33"
                    }
                ]
            }

        ]


    }
}

function init() {
    reca_x_punto();
};
init();