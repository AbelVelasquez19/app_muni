var txt_buscar_codigo = document.getElementById("buscarcodigo");
txt_buscar_codigo.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txtcodigo = $("#buscarcodigo").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "gestion/Contro_contacto/BuscarCodigo", { txtcodigo: txtcodigo }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.BuscarCodigo;
            if (data) {
                var codigo = data[0].CODIGO;
                nuevacodigo = codigo.trim();
                $("#codigo").val(nuevacodigo);

                var nombre = data[0].NOMBRE;
                nuevanombre = nombre.trim();
                $("#nombre").val(nuevanombre);

                var dni = data[0].DOMICILIO_FISCAL;
                nuevadni = dni.trim();
                $("#direccion").val(nuevadni);
                llenartablecontacto();
                EstadoCuenta();
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#codigo").val("");
                $("#nombre").val("");
                $("#direccion").val("");
            }

        });
    }
});


var buscardni = document.getElementById("txt_buscardni");
buscardni.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txtdni = $("#txt_buscardni").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "gestion/Contro_contacto/BuscarDni", { txtdni: txtdni }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.BuscarDni;
            if (data) {
                var codigo = data[0].CODIGO;
                nuevacodigo = codigo.trim();
                $("#codigo").val(nuevacodigo);

                var nombre = data[0].NOMBRE;
                nuevanombre = nombre.trim();
                $("#nombre").val(nuevanombre);

                var dni = data[0].DOMICILIO_FISCAL;
                nuevadni = dni.trim();
                $("#direccion").val(nuevadni);
                llenartablecontacto();
                EstadoCuenta();
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#codigo").val("");
                $("#nombre").val("");
                $("#direccion").val("");
            }

        });
    }
});

function llenartablecontacto() {
    var txtcodigo = $("#codigo").val();
    var urlphp = $("#url1").text();
    var html = "";
    var codigo = 1;
    $.post("" + urlphp + "gestion/Contro_contacto/Buscarcontacto", { txtcodigo: txtcodigo }, function(response) {
        var datos = JSON.parse(response);
        var data = datos.BuscarContacto;
        if (data) {
            for (var index = 0; index < data.length; index++) {
                html += "<tr>" +
                    "<td  scope='row'  style='padding:4px;border:2px #A21F12 solid'>" + codigo++ + "</td>" +
                    "<td  style='padding:4px; border:2px #A21F12 solid'>" + data[index].CELULAR + "</td>" +
                    "<td  style='padding:4px; border:2px #A21F12 solid'>" + data[index].TELEFONO + "</td>" +
                    "<td  style='padding:4px; border:2px #A21F12 solid'>" + data[index].CORREO + "</td>" +
                    "<td  style='padding:4px; border:2px #A21F12 solid;text-align:center;'>" +
                    "<button class='btn-editar' type='button' onclick='editar(" + data[index].ID + ")' data-toggle='modal' data-target='#ModalActuaizar'><i class='fa fa-pencil-square fa-1x' aria-hidden='true'></i></button>" +
                    "<button class='btn-editar' type='button' onclick='eliminar(" + data[index].ID + ")'><i class='fa fa-trash' aria-hidden='true'></i></button>" +
                    "</td>" +
                    "</tr>";
            }
            $("#tablecontacto").html(html);
            $("#mensajetable").html("");
        } else {
            $("#mensajetable").html("No se encontro ningun dato con el codigo " + '<span style="color:red">' + txtcodigo + '</span>' + " de contribuyente");
            $("#tablecontacto").html("");
        }
    });
}

$("#btn_refresh").click(function() {
    var txtcodigo = $("#codigo").val();
    var urlphp = $("#url1").text();
    var html = "";
    var codigo = 1;
    $.post("" + urlphp + "gestion/Contro_contacto/Buscarcontacto", { txtcodigo: txtcodigo }, function(response) {
        var datos = JSON.parse(response);
        var data = datos.BuscarContacto;
        if (data) {
            for (var index = 0; index < data.length; index++) {
                html += "<tr>" +
                    "<td  scope='row'  style='padding:4px;border:2px #A21F12 solid'>" + codigo++ + "</td>" +
                    "<td  style='padding:4px; border:2px #A21F12 solid'>" + data[index].CELULAR + "</td>" +
                    "<td  style='padding:4px; border:2px #A21F12 solid'>" + data[index].TELEFONO + "</td>" +
                    "<td  style='padding:4px; border:2px #A21F12 solid'>" + data[index].CORREO + "</td>" +
                    "<td  style='padding:1px; border:2px #A21F12 solid;text-align:center;'>" +
                    "<button class='btn-editar' type='button' onclick='editar(" + data[index].ID + ")' data-toggle='modal' data-target='#ModalActuaizar'><i class='fa fa-pencil-square fa-1x' aria-hidden='true'></i></button>" +
                    "<button class='btn-editar' type='button' onclick='eliminar(" + data[index].ID + ")'><i class='fa fa-trash' aria-hidden='true'></i></button>" +
                    "</td>" +
                    "</tr>";
            }
            $("#tablecontacto").html(html);
            $("#mensajetable").html("");
        } else {
            $("#mensajetable").html("No se encontro ningun dato con el codigo " + '<span style="color:red">' + txtcodigo + '</span>' + " de contribuyente");
            $("#tablecontacto").html("");
        }
    });
})

function init() {
    $("#mensajetable").html("Buscar Contribuyente");
    $("#buscarcodigo").focus();
}

init();

$("#btn-titular").click(function() {
    var nombre = $("#nombre").val();
    $("#txtrepresentante").val(nombre);
});

$("#btn-guardar-contacto").click(function() {
    setTimeout(function() {
        $("#mensajeregistro").fadeIn();
    }, 200);
    var urlphp = $("#url1").text();
    var CODIGO = $("#codigo").val();
    var TELEFONO = $("#txttelefono").val();
    var CELULAR = $("#txtcelular").val();
    var CORREO = $("#txtcorreo").val();
    var REPRESENTANTE = $("#txtrepresentante").val();
    parametros = {
        "CODIGO": CODIGO,
        "TELEFONO": TELEFONO,
        "CELULAR": CELULAR,
        "CORREO": CORREO,
        "REPRESENTANTE": REPRESENTANTE
    }
    $.ajax({
        type: 'post',
        async: false,
        data: parametros,
        url: urlphp + 'gestion/Contro_contacto/Registrarcontacto',
        success: function(response) {
            $("#mensajeregistro").html(response);
            llenartablecontacto();
            $("#codigo").val()
            $("#txttelefono").val("")
            $("#txtcelular").val("")
            $("#txtcorreo").val("");

            setTimeout(function() {
                $("#mensajeregistro").fadeOut(1000);
            }, 1000);

        }
    });
});

function editar(codigo) {
    var urlphp = $("#url1").text();
    $.post("" + urlphp + "gestion/Contro_contacto/Mostrar_Contacto", { codigo: codigo }, function(response) {
        var datos = JSON.parse(response);
        var data = datos.contacto;
        $("#txtid_actualizar").val(data[0].ID);
        $("#txtrepresentante_actualizar").val(data[0].REPRESENTANTE);
        $("#txtcelular_actualizar").val(data[0].CELULAR);
        $("#txttelefono_actualizar").val(data[0].TELEFONO);
        $("#txtcorreo_actualizar").val(data[0].CORREO);
        $("#txtcodigo_actualizar").val(data[0].CODIGO);


    });
}

function eliminar(codigo) {
    var urlphp = $("#url1").text();
    $.post("" + urlphp + "gestion/Contro_contacto/EliminarContacto", { codigo: codigo }, function(response) {
        llenartablecontacto();
    });
}

$("#btn-actualizar-contacto").click(function() {
    var urlphp = $("#url1").text();
    var ID = $("#txtid_actualizar").val();
    var TELEFONO = $("#txttelefono_actualizar").val();
    var CELULAR = $("#txtcelular_actualizar").val();
    var CORREO = $("#txtcorreo_actualizar").val();
    var REPRESENTANTE = $("#txtrepresentante_actualizar").val();
    parametros = {
        "ID": ID,
        "TELEFONO": TELEFONO,
        "CELULAR": CELULAR,
        "CORREO": CORREO,
        "REPRESENTANTE": REPRESENTANTE
    }
    $.ajax({
        type: 'post',
        async: false,
        data: parametros,
        url: urlphp + 'gestion/Contro_contacto/ActualizarContacto',
        success: function(response) {
            $("#mensajeactualizar").html(response);
            llenartablecontacto();
        }
    });
});

$("#btn-cerrar_guardar").click(function() {
    $('#ModalRegistro').modal('hide');
    $("#mensajeregistro").html("");
})

$("#btn-cerrar_actualizar").click(function() {
    $('#ModalActuaizar').modal('hide');
    $("#mensajeactualizar").html("");
})

window.addEventListener("load", function() {
    var el = document.getElementById("txttelefono_actualizar");
    el.addEventListener("keypress", soloNumeros, false);
    el.focus();
});

window.addEventListener("load", function() {
    var el = document.getElementById("txtcelular_actualizar");
    el.addEventListener("keypress", soloNumeros, false);
    el.focus();
});

window.addEventListener("load", function() {
    var el = document.getElementById("txttelefono");
    el.addEventListener("keypress", soloNumeros, false);
    el.focus();
});

window.addEventListener("load", function() {
    var el = document.getElementById("txtcelular");
    el.addEventListener("keypress", soloNumeros, false);
    el.focus();
});

window.addEventListener("load", function() {
    var el = document.getElementById("buscarcodigo");
    el.addEventListener("keypress", soloNumeros, false);
    el.focus();
});

window.addEventListener("load", function() {
    var el = document.getElementById("txt_buscardni");
    el.addEventListener("keypress", soloNumeros, false);
    el.focus();
});

function soloNumeros(e) {
    var key = window.event ? e.which : e.keyCode;
    if (key < 48 || key > 57) {
        e.preventDefault();
    }
}

$("#btn-titular-actualizar").click(function() {
    var nombre = $("#nombre").val();
    $("#txtrepresentante_actualizar").val(nombre);
});

function EstadoCuenta() {
    var txtcodigo = $("#codigo").val();
    var urlphp = $("#url1").text();
    var html = "";
    var codigo = 1;
    $.post("" + urlphp + "gestion/Contro_contacto/EstadoCuenta", { txtcodigo: txtcodigo }, function(response) {
        var datos = JSON.parse(response);
        var data = datos.EstadoCuenta;
        if (data) {
            html += '<tr>' +
                '<td  scope="row"  style="padding:4px;border:2px #A21F12 solid">Años Anteriores</td>' +
                '<td  style="padding:4px; border:2px #A21F12 solid; text-align:center">S/. ' + data[0].PRE_AANT + '</td>' +
                '<td  style="padding:4px; border:2px #A21F12 solid; text-align:center">S/. ' + data[0].ARB_AANT + '</td>' +
                '<td  style="padding:4px; border:2px #A21F12 solid; text-align:center">S/. ' + data[0].DEU_AANT + '</td>' +
                '<td  style="padding:4px; border:2px #A21F12 solid;text-align:center;">S/. ' + data[0].DEU_AANT_CDscto + '</td>' +
                '</tr>';
            html += '<tr>' +
                '<td  scope="row"  style="padding:4px;border:2px #A21F12 solid">Años 2020</td>' +
                '<td  style="padding:4px; border:2px #A21F12 solid;text-align:center">S/. ' + data[0].PRE_2020 + '</td>' +
                '<td  style="padding:4px; border:2px #A21F12 solid;text-align:center">S/. ' + data[0].ARB_2020 + '</td>' +
                '<td  style="padding:4px; border:2px #A21F12 solid;text-align:center">S/. ' + data[0].DEU_2020 + '</td>' +
                '<td  style="padding:4px; border:2px #A21F12 solid;text-align:center;">S/. ' + data[0].DEU_2020_CDscto + '</td>' +
                '</tr>';
            html += '<tr style="background:rgb(153, 17, 17);color:#fff;padding-top:0px;text-align:center">' +
                '<td  scope="row"  style="padding:4px;border:2px #A21F12 solid">TOTAL</td>' +
                '<td  style="border:2px #A21F12 solid">S/. ' + data[0].PRED_TOT + '</td>' +
                '<td  style="border:2px #A21F12 solid">S/. ' + data[0].ARB_TOT + '</td>' +
                '<td  style="border:2px #A21F12 solid">S/. ' + data[0].DEU_TOTAL_SDscto + '</td>' +
                '<td  style="border:2px #A21F12 solid;text-align:center;">S/. ' + data[0].DEU_TOTAL_CDscto + '</td>' +
                '</tr>';
        }

        $("#tableestadocuenta").html(html);
    });
}