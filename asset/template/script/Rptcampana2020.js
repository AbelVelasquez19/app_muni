function RrtTotal() {
    var option = {
        chart: {
            backgroundColor: '#FFF',
            type: 'line',
            renderTo: 'reporte2020',
        },
        title: {
            text: 'RECAUDACIÓN HISTORICA - CAMPAÑAS GAT'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [],
            crosshair: true,
            labels: {
                style: {
                    //fontSize: '1px',
                    color: "BLACK"
                }
            }
        },
        yAxis: {
            title: {
                text: 'RECAUDACIÓN HISTORICA',
                style: {
                    color: 'BLACK'
                },
            },
            labels: {
                formatter: function() {
                    return this.value + '°';
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true,
                    format: 'S/.{point.y}',
                    style: {
                        color: 'BLACK'
                    },
                },
                marker: {
                    radius: 3,
                    lineColor: 'red',
                    lineWidth: 2
                }
            }
        },
        series: [{
            type: 'line',
            name: 'REPPORTE DE CAMPAÑA AÑO 2020',
            marker: {
                symbol: 'square'
            },
            data: [],

        }]
    }

    var urlphp = $("#url1").text();
    $.post("" + urlphp + "reportes/Contro_rptrecault/RptTotal", function(data) {
        var obj = JSON.parse(data);
        for (var i = 0; i < obj.length; i++) {
            option.xAxis.categories.push(obj[i].FE_LETRA);
            option.series[0].data.push(parseFloat(obj[i].Total));
        }
        chart = new Highcharts.Chart(option);
    });

    $.post("" + urlphp + "reportes/Contro_rptrecault/RptTotalRecaudadoCam", function(response) {
        var dat = JSON.parse(response);
        var objet = "";
        for (var r = 0; r < dat.length; r++) {
            objet = { text: 'Total Recaudado S/.' + dat[r].Total_recaudado };
            option.subtitle = objet;

        }

    });

}

function init() {
    RrtTotal();
}

init();