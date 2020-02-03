var actualizarhora = function() {
    var fecha = new Date(),
        horas = fecha.getHours(),
        ampm,
        minutos = fecha.getMinutes(),
        segundos = fecha.getSeconds(),

        // PARA OBTENER DIA MES A�O//
        diasemana = fecha.getDay(),
        dia = fecha.getDate(),
        mes = fecha.getMonth(),
        year = fecha.getFullYear();

    var pHoras = document.getElementById('horas'),
        pAMPM = document.getElementById('ampm'),
        pMinutos = document.getElementById('minutos'),
        pSegundos = document.getElementById('segundos'),
        pDiasemana = document.getElementById('diaSemana'),
        pDia = document.getElementById('dia'),
        pMes = document.getElementById('mes'),
        pYear = document.getElementById('year');

    var semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
    pDiasemana.textContent = semana[diasemana];
    pDia.textContent = dia;
    var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    pMes.textContent = meses[mes];
    pYear.textContent = year;

    if (horas >= 12) {
        horas = horas - 12;
        ampm = 'PM';
    } else {
        ampm = 'AM';
    };

    if (horas == 0) {
        horas = 12;
    };


    if (horas <= 9) {
        horas = "0" + horas;

    };

    if (minutos <= 9) {
        minutos = "0" + minutos;

    };

    if (segundos <= 9) {
        segundos = "0" + segundos;

    };

    pHoras.textContent = horas;
    pAMPM.textContent = ampm;

    pMinutos.textContent = minutos;
    pSegundos.textContent = segundos;
};
actualizarhora();
var intervalo = setInterval(actualizarhora, 1000);

var fecha_asistencia = function() {
    var fecha = new Date(),
        // PARA OBTENER DIA MES A�O//
        diasemana = fecha.getDay(),
        dia = fecha.getDate(),
        mes = fecha.getMonth(),
        year = fecha.getFullYear();

    var pDiasemana = document.getElementById('txt_diasemana'),
        pDia = document.getElementById('txt_dia'),
        pMes = document.getElementById('txt_mes'),
        pYear = document.getElementById('txt_ano');

    var semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
    pDiasemana.textContent = semana[diasemana].toUpperCase();

    pDia.textContent = dia;

    var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    pMes.textContent = meses[mes].toUpperCase();

    pYear.textContent = year;
}
fecha_asistencia();
var intervalo1 = setInterval(fecha_asistencia, 1000);


function listar_asistencia() {
    var urlphp = $("#url").text();
    $.ajax({
        type: 'post',
        url: urlphp + 'Contro_asistencia/Listar_Asistencia',
        success: function(data) {
            var html = "";
            var i;
            var datos = JSON.parse(data);
            for (i = 0; i < datos.length; i++) {
                html += '<div class="col-sm-12 col-md-12 col-lg-1 col-xl-1 colms_faltas">' +
                    '<div class="card card_faltas">' +
                    '<img src="' + urlphp + 'asset/template/img/Perfil/' + datos[i].Fot_personal + '" class="card-img-top" alt="...">' +
                    '<i class="fa fa-check-square icon_asistencia" aria-hidden="true"></i>' +
                    '</div>' +
                    '</div>';
            }
            $("#html_asistencia").html(html);
        },
        error: function() {
            alert("no hay datos en el servidor");
        }
    });
}

function listar_faltas() {
    var urlphp = $("#url").text();
    $.ajax({
        type: 'post',
        url: urlphp + 'Contro_asistencia/listar_faltas',
        success: function(data) {
            var html = "";
            var i;
            var datos = JSON.parse(data);
            for (i = 0; i < datos.length; i++) {


                html += '<div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 colms_faltas">' +
                    '<div class="card card_faltas">' +
                    '<img src="' + urlphp + 'asset/template/img/Perfil/' + datos[i].Fot_personal + '" class="card-img-top" alt="...">' +
                    '<i class="fa fa-times icon_faltas" aria-hidden="true"></i>' +
                    '</div>' +
                    '</div>';
            }
            $("#html_faltas").html(html);
        },
        error: function() {
            alert("no hay datos en el servidor");
        }
    });
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
HoraActual();
var intervalo = setInterval(HoraActual, 1000);

// funcion para obtener una fecha acutal//
function fecha_actual() {
    var fecha = new Date();
    var dia = fecha.getDate();
    var mes = fecha.getMonth() + 1;
    var year = fecha.getFullYear();
    return fecha_obtenida = year + '-' + mes + '-' + dia;
}

// function para buscar usuario por dni
$('#txt_numero_personal').keyup(function(e) {
    e.preventDefault();
    setTimeout(function() {
        $("#mensaje").fadeIn(500);
        $("#mensaje").html("");
    }, 500);
    var urlphp = $("#url").text();
    var txt_numero_personal = $("#txt_numero_personal").val();
    var maxLength = 8;
    var strLength = $("#txt_numero_personal").val().length;
    parametro = {
        "txt_numero_personal": txt_numero_personal
    }
    $.ajax({
        type: 'post',
        async: false,
        data: parametro,
        url: urlphp + 'Contro_asistencia/Buscar_personal',
        success: function(data) {
            var res = JSON.parse(data);
            if (strLength >= maxLength) {
                for (var index = 0; index < res.length; index++) {
                    var nombre = res[index].NOMBRE;
                    var codigo = res[index].Cod_personal;
                    var foto = res[index].Fot_personal;
                }
                //validacion del imagen //
                if (codigo) {
                    $("#txt_nombre_personal").val(nombre);
                    $("#txt_Cod_personal").val(codigo);
                    var horacutal = HoraActual();

                    if (horacutal >= '05:00:00' && horacutal <= '09:00:00') {
                        AbiliEntrada();
                        //DesabiSalida();
                    } else {
                        DessabiEntrada();
                        //AbiliEntrada();
                    }
                    if (horacutal >= '13:00:00' && horacutal <= '22:00:00') {
                        AbilitSalida();
                        //DessabiEntrada();
                    } else {
                        DesabiSalida();
                        //AbilitSalida();
                    }
                    // console.log(horacutal);
                } else {
                    $("#txt_nombre_personal").val('');
                    $("#txt_Cod_personal").val('');
                    document.getElementById("imgenesprueba").innerHTML = "<img src='" + urlphp + "asset/template/img/Perfil/perfil1.jpg' class='img-css'>";
                }
                if (foto) {
                    document.getElementById("imgenesprueba").innerHTML = "<img src='" + urlphp + "asset/template/img/Perfil/" + foto + "' class='img-css'>";
                } else {
                    document.getElementById("imgenesprueba").innerHTML = "<img src='" + urlphp + "asset/template/img/Perfil/perfil1.jpg' class='img-css'>";
                }
            } else {
                $("#txt_nombre_personal").val('');
                $("#txt_Cod_personal").val('');
                document.getElementById("imgenesprueba").innerHTML = "<img src='" + urlphp + "asset/template/img/Perfil/perfil1.jpg' class='img-css'>";

            }
        },
        error: function() {
            alert("no hay datos en el servidor");
        }
    });
});

$("#registrarasistencia").click(function() {
    $("#ModalRegAsis").modal();
});

function DesabiBtn() {
    document.getElementById("btn-entrada").className = "label-entrada_desabilitado";
    $('#btn-entrada').attr("disabled", true);

    document.getElementById("btn-salida").className = "label-salida_desabilitado";
    $('#btn-salida').attr("disabled", true);
}

function DesabiSalida() {
    document.getElementById("btn-salida").className = "label-salida_desabilitado";
    $('#btn-salida').attr("disabled", true);
}

function DessabiEntrada() {
    document.getElementById("btn-entrada").className = "label-entrada_desabilitado";
    $('#btn-entrada').attr("disabled", true);
}

function AbiliEntrada() {
    document.getElementById("btn-entrada").className = "label-entrada";
    $('#btn-entrada').attr("disabled", false);
}

function AbilitSalida() {
    document.getElementById("btn-salida").className = "label-salida";
    $('#btn-salida').attr("disabled", false);
}


function LimpiarCajasTextos() {
    var urlphp = $("#url").text();
    $("#txt_numero_personal").val("");
    $("#txt_nombre_personal").val("");
    $("#txt_Cod_personal").val("");
    $("#txt_numero_personal").focus();
    document.getElementById("imgenesprueba").innerHTML = "<img src='" + urlphp + "asset/template/img/Perfil/perfil1.jpg' class='img-css'>";
}

//registrar la entrada 
$("#btn-entrada").click(function(e) {
    e.preventDefault();
    //recoperar el valor de nombre
    var urlphp = $("#url").text();
    var txt_nombre_personal = $("#txt_nombre_personal").val();
    var txt_Cod_personal = $("#txt_Cod_personal").val();
    var fecha_entrada = fecha_actual();
    var hora_entrada = HoraActual();
    parametro = {
        'txt_Cod_personal': txt_Cod_personal,
        'fecha_entrada': fecha_entrada,
        'hora_entrada': hora_entrada
    }
    $.ajax({
        type: 'post',
        async: false,
        data: parametro,
        url: urlphp + 'Contro_asistencia/Insertar_asistencia',
        success: function(response) {
            var html = ("<span class='mensajeregistro texto_mensaje' id='text_mesaje'>" + txt_nombre_personal + "</span>")
            $("#mensaje").html(response + html);
            DesabiBtn();
            setTimeout(function() {
                $("#mensaje").fadeOut(1500);

            }, 2000);
            LimpiarCajasTextos();
            listar_asistencia();
            listar_faltas();
        }
    });
});

$("#btn-salida").click(function(e) {
    e.preventDefault();
    var urlphp = $("#url").text();
    var txt_nombre_personal = $("#txt_nombre_personal").val();
    var txt_Cod_personal = $("#txt_Cod_personal").val();
    var fecha_entrada = fecha_actual();
    var hora_entrada = HoraActual();
    parametro = {
        'txt_Cod_personal': txt_Cod_personal,
        'fecha_entrada': fecha_entrada,
        'hora_entrada': hora_entrada
    }
    $.ajax({
        type: 'post',
        async: false,
        data: parametro,
        url: urlphp + 'Contro_asistencia/Actualizar_asistencia',
        success: function(response) {
            var html = ("<span class='mensajeregistro texto_mensaje' id='text_mesaje'>" + txt_nombre_personal + "</span>")
            $("#mensaje").html(response + html);
            DesabiBtn();
            setTimeout(function() {
                $("#mensaje").fadeOut(1500);

            }, 2000);
            LimpiarCajasTextos();
            listar_asistencia();
            listar_faltas();
        }
    });
});

$("#desbloquiarlink").click(function(e) {
    e.preventDefault();
});

function init() {
    listar_asistencia();
    listar_faltas();
    DesabiBtn();
    $("#txt_numero_personal").focus();
    var urlphp = $("#url").text();
    $("#ModalRegAsis").modal();
    document.getElementById("imgenesprueba").innerHTML = "<img src='" + urlphp + "asset/template/img/Perfil/perfil1.jpg' class='img-css'>";
}

init();