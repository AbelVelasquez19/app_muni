function cargarGraficacolumnas() {
    var options = {
            chart: {
                backgroundColor: '#FFF',
                renderTo: 'ContainerColumna2020',
                type: 'column'

            },
            title: {
                text: 'RECAUDACIÓN HISTORICA - CAMPAÑAS GAT'
            },
            subtitle: {
                text: '',
                fontSize: '50px'
            },
            xAxis: {
                type: 'category',
                crosshair: true,
                labels: {
                    style: {
                        //fontSize: '1px',
                        color: "black"
                    }
                }
            },
            yAxis: {
                title: {
                    text: 'RECAUDACIÓN HISTORICA',
                    style: {
                        color: 'black'
                    },
                }

            },
            legend: {
                enabled: true
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    pointWidth: 50,
                    color: "black",
                    dataLabels: {
                        enabled: true,
                        format: 'S/.{point.y}',
                        style: {
                            color: 'black'
                        },
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>S/.{point.y}</b><br/>'
            },
            series: [{
                name: "",
                colorByPoint: false,
                color: "#FFF",
                data: []
            }]
        }
        //$("#div_grafica_barras").html( $("#cargador_empresa").html());
    var urlphp = $("#url1").text();
    $.post("" + urlphp + "reportes/Contro_rptrecault/RptFecha", function(data) {
        var datos = JSON.parse(data);

        for (var index = 0; index < datos.length; index++) {
            var objeto = { name: datos[index].FE_LETRA, color: datos[index].COLORSE };
            options.series.push(objeto);
        }

        for (var i = 0; i < datos.length; i++) {
            var objeto1 = { name: datos[i].Pt1_recaudacion, y: parseFloat(datos[i].Sc1_recaudacion), color: datos[i].COLORSE };
            var objeto2 = { name: datos[i].Pt2_recaudacion, y: parseFloat(datos[i].Sc2_recaudacion), color: datos[i].COLORSE };
            options.series[0].data.push(objeto1);
            options.series[0].data.push(objeto2);
        }
        chart = new Highcharts.Chart(options);
    });

    $.post("" + urlphp + "reportes/Contro_rptrecault/RptTotalRecaudadoCam", function(response) {
        var dat = JSON.parse(response);
        var objet = "";
        for (var r = 0; r < dat.length; r++) {
            objet = { text: 'Total Recaudado S/.' + dat[r].Total_recaudado };
            options.subtitle = objet;

        }

    });
}

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
    cargarGraficacolumnas();
}

init();