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

var txt_buscar_codigo = document.getElementById("txt_buscar_codigo");
txt_buscar_codigo.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txtcodigo = $("#txt_buscar_codigo").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "campana/Contro_registro/BuscarCodigo", { txtcodigo: txtcodigo }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.BuscarCodigo;
            if (data) {
                var codigo = data[0].CODIGO;
                nuevacodigo = codigo.trim();
                $("#txt_codigo_con").val(nuevacodigo);

                var nombre = data[0].NOMBRE;
                nuevanombre = nombre.trim();
                $("#txt_nombre_con").val(nuevanombre);

                var dni = data[0].NRODOCUM;
                nuevadni = dni.trim();
                $("#txt_dni_con").val(nuevadni);

                var teleofono = data[0].TELEFONO;
                nuevatelefono = teleofono.trim();
                $("#txt_telefono_con").val(nuevatelefono);

                var celular = data[0].CELULAR;
                nuevaceliular = celular.trim();
                $("#txt_celular_con").val(nuevaceliular);

                var correo = data[0].CORREO;
                nuevacorreo = correo.trim();
                $("#txt_correo_con").val(nuevacorreo);

                var direccion = data[0].DOMICILIO_FISCAL;
                nuevadireccion = direccion.trim();
                $("#txt_direccion_con").val(nuevadireccion);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_codigo_con").val("");
                $("#txt_nombre_con").val("");
                $("#txt_dni_con").val("");
                $("#txt_telefono_con").val("");
                $("#txt_celular_con").val("");
                $("#txt_correo_con").val("");
                $("#txt_direccion_con").val("");
            }

        });
    }
});

var txt_buscar_dni = document.getElementById("txt_buscar_dni");
txt_buscar_dni.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txtdni = $("#txt_buscar_dni").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "campana/Contro_registro/BuscarDni", { txtdni: txtdni }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.BuscarDni;
            if (data) {
                var codigo = data[0].CODIGO;
                nuevacodigo = codigo.trim();
                $("#txt_codigo_con").val(nuevacodigo);

                var nombre = data[0].NOMBRE;
                nuevanombre = nombre.trim();
                $("#txt_nombre_con").val(nuevanombre);

                var dni = data[0].NRODOCUM;
                nuevadni = dni.trim();
                $("#txt_dni_con").val(nuevadni);

                var teleofono = data[0].TELEFONO;
                nuevatelefono = teleofono.trim();
                $("#txt_telefono_con").val(nuevatelefono);

                var celular = data[0].CELULAR;
                nuevaceliular = celular.trim();
                $("#txt_celular_con").val(nuevaceliular);

                var correo = data[0].CORREO;
                nuevacorreo = correo.trim();
                $("#txt_correo_con").val(nuevacorreo);

                var direccion = data[0].DOMICILIO_FISCAL;
                nuevadireccion = direccion.trim();
                $("#txt_direccion_con").val(nuevadireccion);
            } else {
                Swal.fire('<span>Dni de contribuyente no encontrado</span>');
                $("#txt_codigo_con").val("");
                $("#txt_nombre_con").val("");
                $("#txt_dni_con").val("");
                $("#txt_telefono_con").val("");
                $("#txt_celular_con").val("");
                $("#txt_correo_con").val("");
                $("#txt_direccion_con").val("");
            }
        });
    }
});

var txt_buscar_nombre = document.getElementById("txt_buscar_nombre");
txt_buscar_nombre.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txtnombre = $("#txt_buscar_nombre").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "campana/Contro_registro/BuscarNombre", { txtnombre: txtnombre }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.Buscarnombre;
            if (data) {
                var codigo = data[0].CODIGO;
                nuevacodigo = codigo.trim();
                $("#txt_codigo_con").val(nuevacodigo);

                var nombre = data[0].NOMBRE;
                nuevanombre = nombre.trim();
                $("#txt_nombre_con").val(nuevanombre);

                var dni = data[0].NRODOCUM;
                nuevadni = dni.trim();
                $("#txt_dni_con").val(nuevadni);

                var teleofono = data[0].TELEFONO;
                nuevatelefono = teleofono.trim();
                $("#txt_telefono_con").val(nuevatelefono);

                var celular = data[0].CELULAR;
                nuevaceliular = celular.trim();
                $("#txt_celular_con").val(nuevaceliular);

                var correo = data[0].CORREO;
                nuevacorreo = correo.trim();
                $("#txt_correo_con").val(nuevacorreo);

                var direccion = data[0].DOMICILIO_FISCAL;
                nuevadireccion = direccion.trim();
                $("#txt_direccion_con").val(nuevadireccion);
            } else {
                Swal.fire('<span>Nombre de contribuyente no encontrado</span>');
                $("#txt_codigo_con").val("");
                $("#txt_nombre_con").val("");
                $("#txt_dni_con").val("");
                $("#txt_telefono_con").val("");
                $("#txt_celular_con").val("");
                $("#txt_correo_con").val("");
                $("#txt_direccion_con").val("");
            }
        });
    }
});
/* validacion para aceptar solo numeros */
window.addEventListener("load", function() {
    var el = document.getElementById("txt_buscar_codigo");
    el.addEventListener("keypress", soloNumeros, false);
    el.focus();
});

window.addEventListener("load", function() {
    var el = document.getElementById("txt_buscar_dni");
    el.addEventListener("keypress", soloNumeros, false);
});
window.addEventListener("load", function() {
    var el = document.getElementById("txt_telefono_con");
    el.addEventListener("keypress", soloNumeros, false);
});

window.addEventListener("load", function() {
    var el = document.getElementById("txt_celular_con");
    el.addEventListener("keypress", soloNumeros, false);
});
window.addEventListener("load", function() {
    var el = document.getElementById("txt_dni_con");
    el.addEventListener("keypress", soloNumeros, false);
});
window.addEventListener("load", function() {
    var el = document.getElementById("txt_edad_con");
    el.addEventListener("keypress", soloNumeros, false);
});

window.addEventListener("load", function() {
    var el = document.getElementById("txt_dni_rela");
    el.addEventListener("keypress", soloNumeros, false);
});

window.addEventListener("load", function() {
    var el = document.getElementById("txt_edad_rela");
    el.addEventListener("keypress", soloNumeros, false);
});

window.addEventListener("load", function() {
    var el = document.getElementById("txt_telefono_rela");
    el.addEventListener("keypress", soloNumeros, false);
});
window.addEventListener("load", function() {
    var el = document.getElementById("txtcelular_rela");
    el.addEventListener("keypress", soloNumeros, false);
});

function soloNumeros(e) {
    var key = window.event ? e.which : e.keyCode;
    if (key < 48 || key > 57) {
        e.preventDefault();
    }
}

/* limpiar texto de busqueda */

$("#txt_buscar_codigo").click(function() {
    $("#txt_buscar_dni").val("");
    $("#txt_buscar_nombre").val("");
});
$("#txt_buscar_dni").click(function() {
    $("#txt_buscar_codigo").val("");
    $("#txt_buscar_nombre").val("");
});
$("#txt_buscar_nombre").click(function() {
    $("#txt_buscar_dni").val("");
    $("#txt_buscar_codigo").val("");
});

$(".op").click(function() {
    if ($(this).val() == 'FAMILIAR') {
        Limpiartextorelacionado();
        Abilitartextorelacionado();
    } else if ($(this).val() == 'EMPLEADO') {
        Limpiartextorelacionado();
        Abilitartextorelacionado();
    } else if ($(this).val() == 'REPRESENTANTE') {
        Limpiartextorelacionado();
        Abilitartextorelacionado();
    } else if ($(this).val() == 'ENCARGADO') {
        Limpiartextorelacionado();
        Abilitartextorelacionado();
    } else if ($(this).val() == 'TITULAR') {
        var nombre_contri = $("#txt_nombre_con").val();
        var dni_contri = $("#txt_dni_con").val();
        var edad_contri = $("#txt_edad_con").val();
        var sexo_contri = $("#txt_sexo_con").val();
        var telefono_contri = $("#txt_telefono_con").val();
        var celular_contri = $("#txt_celular_con").val();

        $("#txt_nom_rela").val(nombre_contri);
        $("#txt_dni_rela").val(dni_contri);
        $("#txt_edad_rela").val(edad_contri);
        $("#txt_sexo_rela").val(sexo_contri);
        $("#txt_vinculo_rela").val("TITULAR");
        $("#txt_telefono_rela").val(telefono_contri);
        $("#txtcelular_rela").val(celular_contri);
        //Desactivartextorelacionado();
    } else {
        //Desactivartextorelacionado();
        Limpiartextorelacionado();
    }
});

//$(".optiatencion").click(function() {
//  document.getElementById("btnregistrar").disabled = false;
//});

$("#btnregistrar").click(function() {
    setTimeout(function() {
        $("#mensaje").fadeIn(2000);
        $("#mensaje").html("");
    }, 2000);
    var txt_codigo_con = $("#txt_codigo_con").val();
    var txt_nombre_con = $("#txt_nombre_con").val();
    var txt_edad_con = $("#txt_edad_con").val();
    var txt_sexo_con = $("#txt_sexo_con").val();
    var txt_dni_con = $("#txt_dni_con").val();
    var txt_telefono_con = $("#txt_telefono_con").val();
    var txt_celular_con = $("#txt_celular_con").val();
    var txt_correo_con = $("#txt_correo_con").val();
    var txt_direccion_con = $("#txt_direccion_con").val();
    var txt_tipo_atencion = $('input:radio[name=txt_tipo_atencion]:checked').val();
    var txt_observacion_con = $("#txt_observacion_con").val();
    var txt_fecha_con = fecha_actual_number();
    var txt_hora_con = HoraActual();


    var txt_nom_rela = $("#txt_nom_rela").val();
    var txt_dni_rela = $("#txt_dni_rela").val();
    var txt_sexo_rela = $("#txt_sexo_rela").val();
    var txt_edad_rela = $("#txt_edad_rela").val();
    var txt_Tip_relacionado = $('input:radio[name=txt_Tip_relacionado]:checked').val();
    var txt_telefono_rela = $("#txt_telefono_rela").val();
    var txtcelular_rela = $("#txtcelular_rela").val();
    var txt_vinculo_rela = $("#txt_vinculo_rela").val();
    var txt_cod_usuario = $("#txt_cod_usuario").val();

    var urlphp = $("#url1").text();
    parametro = {
        "txt_codigo_con": txt_codigo_con,
        "txt_nombre_con": txt_nombre_con,
        "txt_edad_con": txt_edad_con,
        "txt_sexo_con": txt_sexo_con,
        "txt_dni_con": txt_dni_con,
        "txt_telefono_con": txt_telefono_con,
        "txt_celular_con": txt_celular_con,
        "txt_correo_con": txt_correo_con,
        "txt_direccion_con": txt_direccion_con,
        "txt_tipo_atencion": txt_tipo_atencion,
        "txt_observacion_con": txt_observacion_con,
        "txt_fecha_con": txt_fecha_con,
        "txt_hora_con": txt_hora_con,
        /* datos del relacionado */
        "txt_nom_rela": txt_nom_rela,
        "txt_dni_rela": txt_dni_rela,
        "txt_sexo_rela": txt_sexo_rela,
        "txt_edad_rela": txt_edad_rela,
        "txt_Tip_relacionado": txt_Tip_relacionado,
        "txt_telefono_rela": txt_telefono_rela,
        "txtcelular_rela": txtcelular_rela,
        "txt_vinculo_rela": txt_vinculo_rela,
        "txt_cod_usuario": txt_cod_usuario
    }
    $.ajax({
        type: 'post',
        async: false,
        data: parametro,
        url: urlphp + 'Contro_registro/Registrarcontrihistorial',
        success: function(response) {
            /*$("#mensaje").html(response);*/
            if (response == "success") {
                Limpiartextorelacionado();
                LimpiarTextoContriHistorial();
                document.querySelectorAll('[id=txt_tipo_atencion]').forEach((x) => x.checked = false);
                document.querySelectorAll('[id=txt_Tip_relacionado]').forEach((x) => x.checked = false);
                document.getElementById("btnregistrar").disabled = true;
                alert("bien");
            } else if (response == "error") {
                alert("error");
            }
            /*setTimeout(function() {
                $("#mensaje").fadeOut(1000);
            }, 1000);*/
        }
    });

});

function Limpiartextorelacionado() {
    $("#txt_nom_rela").val("");
    $("#txt_dni_rela").val("");
    $("#txt_edad_rela").val("");
    $("#txt_sexo_rela").val("");
    $("#txt_vinculo_rela").val("");
    $("#txt_telefono_rela").val("");
    $("#txtcelular_rela").val("");
}

function Desactivartextorelacionado() {
    $("#txt_nom_rela").attr('disabled', 'disabled');
    $("#txt_dni_rela").attr('disabled', 'disabled');
    $("#txt_edad_rela").attr('disabled', 'disabled');
    $("#txt_sexo_rela").attr('disabled', 'disabled');
    $("#txt_vinculo_rela").attr('disabled', 'disabled');
    $("#txt_telefono_rela").attr('disabled', 'disabled');
    $("#txtcelular_rela").attr('disabled', 'disabled');
}

function Abilitartextorelacionado() {
    $("#txt_nom_rela").removeAttr('disabled');
    $("#txt_dni_rela").removeAttr('disabled');
    $("#txt_edad_rela").removeAttr('disabled');
    $("#txt_sexo_rela").removeAttr('disabled');
    $("#txt_vinculo_rela").removeAttr('disabled');
    $("#txt_telefono_rela").removeAttr('disabled');
    $("#txtcelular_rela").removeAttr('disabled');
}

function LimpiarTextoContriHistorial() {
    $("#txt_codigo_con").val("");
    $("#txt_nombre_con").val("");
    $("#txt_edad_con").val("");
    $("#txt_sexo_con").val("M");
    $("#txt_dni_con").val("");
    $("#txt_telefono_con").val("");
    $("#txt_celular_con").val("");
    $("#txt_correo_con").val("");
    $("#txt_direccion_con").val("");
    $("#txt_observacion_con").val("");
}

function init() {
    //document.getElementById("btnregistrar").disabled = true;
    //document.getElementById("txt_codigo_con").disabled = true;
    //document.getElementById("txt_nombre_con").disabled = true;
}

init();