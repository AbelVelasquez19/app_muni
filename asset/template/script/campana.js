function listarRecaudacion(valor, pagina) {
    var urlphp = $("#url").text();

    $.ajax({
        url: urlphp + "Contro_recaudacion/listar_recaudacion",
        type: "POST",
        data: { buscar: valor, numeropagina: pagina },
        dataType: "json",
        success: function(response) {
            //var num = 1;
            var filas = "";
            var estado_ecaudacion = "";
            var opciones = "";
            var htmlpagin = "";
            $.each(response.recaudacion, function(key, item) {

                estado_ecaudacion = (item.Est_recaudacion == 0) ? '<p class="text-danger">INACTIVO</p>' :
                    '<p class="text-primary">ACTIVO</p>';
                opciones = (item.Est_recaudacion == 0) ? "<button class='btn_estado_activo_reca' onclick='desactivar(" + item.Cod_recaudacion + ");' title='Activar Estado'><i class='fa fa-check' aria-hidden='true'></i></button>" :
                    "<button class='btn_estado_reca' onclick='activar(" + item.Cod_recaudacion + ");' title='Desactivar Estado'><i class='fa fa-trash' aria-hidden='true'></i></button>";
                filas += "<tr>" +
                    //"<td class='text-center'>"+ num++ +"</td>"+
                    "<td>" + item.FE_LETRA + "</td>" +


                    "<td>" + item.Pt1_recaudacion + "</td>" +
                    "<td class='text-center'>" + 'S/. ' + item.Sc1_recaudacion + "</td>" +
                    "<td>" + item.Pt2_recaudacion + "</td>" +
                    "<td class='text-center'>" + 'S/. ' + item.Sc2_recaudacion + "</td>" +
                    "<td class='text-center'>" + 'S/. ' + item.Total + "</td>" +
                    "<td class='text-center'>" + estado_ecaudacion + "</td>" +
                    "<td class='text-center'>" +
                    "<button class='btn_editar_reca' data-toggle='modal' data-target='.Modal_Actualizar' onclick='mostrar_recaudacion(" + item.Cod_recaudacion + ");'><i class='fa fa-pencil-square' aria-hidden='true'></i></button>&nbsp;" +
                    opciones +
                    "</td>" +
                    "</tr>";
            });
            $("#tb_recaudacion").html(filas);
            linksseleccionado = Number(pagina);
            // total de registros
            totalregistros = response.totalregistros;
            //cantidad de registros por pagina
            cantidadregistros = response.cantidad;

            numerolinks = Math.ceil(totalregistros / cantidadregistros);

            // recoremos con un for
            htmlpagin += '<ul class="pagination  justify-content-end">';
            if (linksseleccionado > 1) {
                htmlpagin += "<li class='page-item'><a href='1'><span class='page-link'><i class='fa fa-fast-backward' aria-hidden='true'></i></span></a></li>";
                htmlpagin += "<li class='page-item'><a href='" + (linksseleccionado - 1) + "'><span class='page-link'><i class='fa fa-step-backward' aria-hidden='true'></i></span></a></li>";
            } else {
                htmlpagin += "<li class='page-item disabled'><a href=''><span class='page-link'><i class='fa fa-fast-backward' aria-hidden='true'></i></span></a></li>";
                htmlpagin += "<li class='page-item disabled'><a href=''><span class='page-link'><i class='fa fa-step-backward' aria-hidden='true'></i></span></a></li>";
            }
            for (var i = 1; i <= numerolinks; i++) {
                if (i == linksseleccionado) {
                    htmlpagin += '<li class="page-item active"><a class="page-link" href="javascript:void(0)">' + i + '</a></li>';
                } else {
                    htmlpagin += '<li class="page-item"><a class="page-link" href="' + i + '">' + i + '</a></li>';
                }
            }
            if (linksseleccionado < numerolinks) {
                htmlpagin += "<li class='page-item'><a href='" + (linksseleccionado + 1) + "'><span class='page-link'><i class='fa fa-step-forward' aria-hidden='true'></i></span></a></li>";
                htmlpagin += "<li class='page-item'><a href='" + numerolinks + "'><span class='page-link'><i class='fa fa-fast-forward' aria-hidden='true'></i></span></a></li>";
            } else {
                htmlpagin += "<li class='page-item disabled'><a href='#'><span class='page-link'><i class='fa fa-step-forward' aria-hidden='true'></i></span></a></li>";
                htmlpagin += "<li class='page-item disabled'><a href='#'><span class='page-link'><i class='fa fa-fast-forward' aria-hidden='true'></i></span></a></li>";
            }
            htmlpagin += '</ul>';
            $("#paginador_html").html(htmlpagin);
        }
    });

}

$("#txt_buscar").keyup(function() {
    this.value = this.value.toUpperCase();
    var buscar = $("#txt_buscar").val();
    listarRecaudacion(buscar, 1);
});

$("body").on("click", ".pagination li a", function(e) {
    e.preventDefault();
    var valorhref = $(this).attr("href");
    var valorbuscar = $("input[name=txt_buscar_reca]").val();
    listarRecaudacion(valorbuscar, valorhref);
});

function desactivar(codigo) {
    var urlphp = $("#url").text();
    $.post("" + urlphp + "Contro_recaudacion/Desactivar_Estado", { codigo: codigo }, function(response) {
        listarRecaudacion("", 1);
    });
}

function activar(codigo) {
    var urlphp = $("#url").text();
    $.post("" + urlphp + "Contro_recaudacion/activar_Estado", { codigo: codigo }, function(response) {
        listarRecaudacion("", 1);
    });
}

function fecha_actual() {
    var fecha = new Date();
    var dia = fecha.getDate();
    var mes = fecha.getMonth();
    var year = fecha.getFullYear();

    var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    pMes = meses[mes].toUpperCase();
    if (dia <= 9) {
        dia = "0" + dia;
    };
    return fecha_obtenida = dia + ' ' + pMes + ' ' + year;

}

function fecha_actual_number() {
    var fecha = new Date();
    var dia = fecha.getDate();
    var mes = fecha.getMonth() + 1;
    var year = fecha.getFullYear();
    if (dia <= 9) {
        dia = "0" + dia;
    };
    if (mes <= 9) {
        mes = "0" + mes;
    };
    return fecha_obtenida = year + '-' + mes + '-' + dia;
}
// funcion de hora actual//
var HoraActual = function() {
    var date = new Date();
    var horas = date.getHours();
    var minutos = date.getMinutes();
    var segundos = date.getSeconds();
    if (horas <= 9) {
        horas = "0" + horas;
    };
    if (minutos <= 9) {
        minutos = "0" + minutos;
    };
    if (segundos <= 9) {
        segundos = "0" + segundos;
    };
    var horaobtenido = horas + ':' + minutos + ':' + segundos;
    return horaobtenido;
}

function obtenerfecha() {
    var fecha = fecha_actual();
    $("#txt_fecha").val(fecha);
}

function obtenerfechanumber() {
    var fecha = fecha_actual_number();
    $("#txt_fecha_number").val(fecha);
}

$("#btn_guardar").click(function() {
    var txt_sector1 = $("#txt_sector1").val();
    var txt_total1 = $("#txt_total1").val();
    var txt_sector2 = $("#txt_sector2").val();
    var txt_total2 = $("#txt_total2").val();
    var txt_fecha = $("#txt_fecha").val();
    var txt_fecha_number = $("#txt_fecha_number").val();
    var txt_color = $("#txt_color").val();
    var urlphp = $("#url").text();
    parametro = {
        'txt_sector1': txt_sector1,
        'txt_total1': txt_total1,
        'txt_sector2': txt_sector2,
        'txt_total2': txt_total2,
        'txt_fecha': txt_fecha,
        'txt_fecha_number': txt_fecha_number,
        'txt_color': txt_color
    }
    $.ajax({
        type: 'post',
        async: false,
        data: parametro,
        url: urlphp + 'Contro_recaudacion/Insertar_recaudacion',
        success: function(response) {
            //var html=("<span class='mensajeregistro texto_mensaje' id='text_mesaje'>"+txt_nombre_personal+"</span>")
            $("#mensaje").html(response);
            listarRecaudacion("", 1);
            Limpiar_textos();
            setTimeout(function() {
                $("#mensaje").fadeOut(1500);
            }, 2000);
        }
    });

});

$("#btn_modificar").click(function() {
    var Cod_recaudacion = $("#txt_codigo_recaudacion").val();
    var txt_sector1 = $("#txt_sector1_actualizar").val();
    var txt_total1 = $("#txt_total1_actualizar").val();
    var txt_sector2 = $("#txt_sector2_actualizar").val();
    var txt_total2 = $("#txt_total2_actualizar").val();
    var txt_fecha = $("#txt_fecha_actualizar").val();
    var txt_fecha_number = $("#txt_fecha_number_actualizar").val();
    var txt_color = $("#txt_color").val();
    var urlphp = $("#url").text();

    parametro = {
        'Cod_recaudacion': Cod_recaudacion,
        'txt_sector1': txt_sector1,
        'txt_total1': txt_total1,
        'txt_sector2': txt_sector2,
        'txt_total2': txt_total2,
        'txt_fecha': txt_fecha,
        'txt_fecha_number': txt_fecha_number,
        'txt_color': txt_color
    }
    $.ajax({
        type: 'post',
        async: false,
        data: parametro,
        url: urlphp + 'Contro_recaudacion/Actualizar_recaudacion',
        success: function(response) {
            //var html=("<span class='mensajeregistro texto_mensaje' id='text_mesaje'>"+txt_nombre_personal+"</span>")
            $("#mensaje").html(response);
            listarRecaudacion("", 1);
            setTimeout(function() {
                $("#mensaje").fadeOut(1500);
            }, 2000);
        }
    });
});

function mostrar_recaudacion(codigo) {
    var urlphp = $("#url").text();
    $.post("" + urlphp + "Contro_recaudacion/Mostrar_recaudacion", { codigo: codigo }, function(response) {
        var datos = JSON.parse(response);
        var data = datos.recaudacion;
        $("#txt_codigo_recaudacion").val(data[0].Cod_recaudacion);
        $("#txt_sector1_actualizar").val(data[0].Pt1_recaudacion);
        $("#txt_total1_actualizar").val(data[0].Sc1_recaudacion);
        $("#txt_sector2_actualizar").val(data[0].Pt2_recaudacion);
        $("#txt_total2_actualizar").val(data[0].Sc2_recaudacion);
        $("#txt_fecha_actualizar").val(data[0].FE_LETRA);
        $("#txt_fecha_number_actualizar").val(data[0].fec_recaudacion);
    });
}

function Limpiar_textos() {
    $("#txt_total1").val("");
    $("#txt_total2").val("");
    $("#txt_sector1").val("");
    $("#txt_sector2").val("");
}

function init() {
    listarRecaudacion("", 1);
    obtenerfecha();
    obtenerfechanumber();
}

init();