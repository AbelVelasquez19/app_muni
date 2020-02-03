function reca_x_punto() {
    var option = {
        chart: {
            type: 'column',
            renderTo: 'reca_x_punto',
        },
        title: {
            text: 'RECAUDACÓN POR DIA - CAMPAÑA GAT'
        },
        subtitle: {
            text: ''
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
                text: 'recaudación 2020'
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
                data: []
            }

        ]


    }
    var urlphp = $("#url1").text();
    $.post("" + urlphp + "reportes/Contro_rptreca/Reporte_recaudacion", function(data) {
        var datos = JSON.parse(data);
        for (var index = 0; index < datos.length; index++) {
            var objeto = {
                name: datos[index].Pt1_recaudacion,
                y: parseFloat(datos[index].Sc1_recaudacion),
                color: "#FF9633"
            };
            var objeto1 = {
                name: datos[index].Pt2_recaudacion,
                y: parseFloat(datos[index].Sc2_recaudacion),
                color: "#8DFF33 "
            };
            var objeto2 = {
                text: 'Total S/. ' + datos[index].TOTAL
            };
            option.series[0].data.push(objeto);
            option.series[0].data.push(objeto1);
            option.subtitle = objeto2;
        }

        chart = new Highcharts.Chart(option);
    });


}

function init() {
    reca_x_punto();
};

init();