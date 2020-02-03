/* CODIGO DE SERVICIOS */
var FormMascota = document.getElementById("FormMascota");
var FormJuridica = document.getElementById("FormJuridica");
var FormFisioterapia = document.getElementById("FormFisioterapia");
var FormOdontologia = document.getElementById("FormOdontologia");
var FormCaritasPintadas = document.getElementById("FormCaritasPintadas");
var FormCorteCabello = document.getElementById("FormCorteCabello");
var FormManicure = document.getElementById("FormManicure");

var checktxt_Check_Tipo_Mascota = document.getElementById("txt_Check_Tipo_Mascota");
var checktxt_Check_Tipo_Juridica = document.getElementById("txt_Check_Tipo_Juridica");
var checktxt_Check_Tipo_Fisioterapia = document.getElementById("txt_Check_Tipo_Fisioterapia");
var checktxt_Check_Tipo_Odontologia = document.getElementById("txt_Check_Tipo_Odontologia");
var checktxt_Check_Tipo_Carpintadas = document.getElementById("txt_Check_Tipo_Carpintadas");
var checktxt_Check_Tipo_Corpelo = document.getElementById("txt_Check_Tipo_Corpelo");
var checktxt_Check_Tipo_Manicure = document.getElementById("txt_Check_Tipo_Manicure");

$("#txt_Check_Tipo_Mascota").click(function() {
    if (checktxt_Check_Tipo_Mascota.checked) {
        FormMascota.style.display = 'block';
        FormJuridica.style.display = 'none';
        FormFisioterapia.style.display = 'none';
        FormOdontologia.style.display = 'none';
        FormCaritasPintadas.style.display = 'none';
        FormCorteCabello.style.display = 'none';
        FormManicure.style.display = 'none';

        checktxt_Check_Tipo_Mascota.checked = true;
        checktxt_Check_Tipo_Juridica.checked = false;
        checktxt_Check_Tipo_Fisioterapia.checked = false;
        checktxt_Check_Tipo_Odontologia.checked = false;
        checktxt_Check_Tipo_Carpintadas.checked = false;
        checktxt_Check_Tipo_Corpelo.checked = false;
        checktxt_Check_Tipo_Manicure.checked = false;
    } else {
        FormMascota.style.display = 'none';
    }
})

$("#txt_Check_Tipo_Juridica").click(function() {
    if (checktxt_Check_Tipo_Juridica.checked) {
        FormMascota.style.display = 'none';
        FormJuridica.style.display = 'block';
        FormFisioterapia.style.display = 'none';
        FormOdontologia.style.display = 'none';
        FormCaritasPintadas.style.display = 'none';
        FormCorteCabello.style.display = 'none';
        FormManicure.style.display = 'none';

        checktxt_Check_Tipo_Mascota.checked = false;
        checktxt_Check_Tipo_Juridica.checked = true;
        checktxt_Check_Tipo_Fisioterapia.checked = false;
        checktxt_Check_Tipo_Odontologia.checked = false;
        checktxt_Check_Tipo_Carpintadas.checked = false;
        checktxt_Check_Tipo_Corpelo.checked = false;
        checktxt_Check_Tipo_Manicure.checked = false;
    } else {
        FormJuridica.style.display = 'none';
    }
})

$("#txt_Check_Tipo_Fisioterapia").click(function() {
    if (checktxt_Check_Tipo_Fisioterapia.checked) {
        FormMascota.style.display = 'none';
        FormJuridica.style.display = 'none';
        FormFisioterapia.style.display = 'block';
        FormOdontologia.style.display = 'none';
        FormCaritasPintadas.style.display = 'none';
        FormCorteCabello.style.display = 'none';
        FormManicure.style.display = 'none';

        checktxt_Check_Tipo_Mascota.checked = false;
        checktxt_Check_Tipo_Juridica.checked = false;
        checktxt_Check_Tipo_Fisioterapia.checked = true;
        checktxt_Check_Tipo_Odontologia.checked = false;
        checktxt_Check_Tipo_Carpintadas.checked = false;
        checktxt_Check_Tipo_Corpelo.checked = false;
        checktxt_Check_Tipo_Manicure.checked = false;
    } else {
        FormFisioterapia.style.display = 'none';
    }
})

$("#txt_Check_Tipo_Odontologia").click(function() {
    if (checktxt_Check_Tipo_Odontologia.checked) {
        FormMascota.style.display = 'none';
        FormJuridica.style.display = 'none';
        FormFisioterapia.style.display = 'none';
        FormOdontologia.style.display = 'block';
        FormCaritasPintadas.style.display = 'none';
        FormCorteCabello.style.display = 'none';
        FormManicure.style.display = 'none';

        checktxt_Check_Tipo_Mascota.checked = false;
        checktxt_Check_Tipo_Juridica.checked = false;
        checktxt_Check_Tipo_Fisioterapia.checked = false;
        checktxt_Check_Tipo_Odontologia.checked = true;
        checktxt_Check_Tipo_Carpintadas.checked = false;
        checktxt_Check_Tipo_Corpelo.checked = false;
        checktxt_Check_Tipo_Manicure.checked = false;
    } else {
        FormOdontologia.style.display = 'none';
    }
})

$("#txt_Check_Tipo_Carpintadas").click(function() {
    if (checktxt_Check_Tipo_Carpintadas.checked) {
        FormMascota.style.display = 'none';
        FormJuridica.style.display = 'none';
        FormFisioterapia.style.display = 'none';
        FormOdontologia.style.display = 'none';
        FormCaritasPintadas.style.display = 'block';
        FormCorteCabello.style.display = 'none';
        FormManicure.style.display = 'none';

        checktxt_Check_Tipo_Mascota.checked = false;
        checktxt_Check_Tipo_Juridica.checked = false;
        checktxt_Check_Tipo_Fisioterapia.checked = false;
        checktxt_Check_Tipo_Odontologia.checked = false;
        checktxt_Check_Tipo_Carpintadas.checked = true;
        checktxt_Check_Tipo_Corpelo.checked = false;
        checktxt_Check_Tipo_Manicure.checked = false;
    } else {
        FormCaritasPintadas.style.display = 'none';
    }
})

$("#txt_Check_Tipo_Corpelo").click(function() {
    if (checktxt_Check_Tipo_Corpelo.checked) {
        FormMascota.style.display = 'none';
        FormJuridica.style.display = 'none';
        FormFisioterapia.style.display = 'none';
        FormOdontologia.style.display = 'none';
        FormCaritasPintadas.style.display = 'none';
        FormCorteCabello.style.display = 'block';
        FormManicure.style.display = 'none';

        checktxt_Check_Tipo_Mascota.checked = false;
        checktxt_Check_Tipo_Juridica.checked = false;
        checktxt_Check_Tipo_Fisioterapia.checked = false;
        checktxt_Check_Tipo_Odontologia.checked = false;
        checktxt_Check_Tipo_Carpintadas.checked = false;
        checktxt_Check_Tipo_Corpelo.checked = true;
        checktxt_Check_Tipo_Manicure.checked = false;
    } else {
        FormCorteCabello.style.display = 'none';
    }
})

$("#txt_Check_Tipo_Manicure").click(function() {
    if (checktxt_Check_Tipo_Manicure.checked) {
        FormMascota.style.display = 'none';
        FormJuridica.style.display = 'none';
        FormFisioterapia.style.display = 'none';
        FormOdontologia.style.display = 'none';
        FormCaritasPintadas.style.display = 'none';
        FormCorteCabello.style.display = 'none';
        FormManicure.style.display = 'block';

        checktxt_Check_Tipo_Mascota.checked = false;
        checktxt_Check_Tipo_Juridica.checked = false;
        checktxt_Check_Tipo_Fisioterapia.checked = false;
        checktxt_Check_Tipo_Odontologia.checked = false;
        checktxt_Check_Tipo_Carpintadas.checked = false;
        checktxt_Check_Tipo_Corpelo.checked = false;
        checktxt_Check_Tipo_Manicure.checked = true;
    } else {
        FormManicure.style.display = 'none';
    }
})

// mascota //
var txt_buscar_codigo = document.getElementById("txt_buscar_codigo");
txt_buscar_codigo.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txt_buscar_codigo = $("#txt_buscar_codigo").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "Contro_servicio/BuscarCodigo", { txt_buscar_codigo: txt_buscar_codigo }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.cod_contri_historial2020;

            if (data) {
                var Sig_contri_historial = data[0].Cod_relacionado;
                nuevaSig_contri_historial = Sig_contri_historial.trim();
                $("#txt_codigo_relacionado").val(nuevaSig_contri_historial);

                var txt_nombre_cont = data[0].Nom_contri_historial;
                nuevatxt_nombre_cont = txt_nombre_cont.trim();
                $("#txt_nombre_cont").val(nuevatxt_nombre_cont);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_codigo_relacionado").val("");
                $("#txt_nombre_cont").val("");
            }
        });
    }
});
var txt_buscar_dni = document.getElementById("txt_buscar_dni");
txt_buscar_dni.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txt_buscar_dni = $("#txt_buscar_dni").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "Contro_servicio/Buscardni", { txt_buscar_dni: txt_buscar_dni }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.dni_contri_historial2020;
            if (data) {
                var Sig_contri_historial = data[0].Cod_relacionado;
                nuevaSig_contri_historial = Sig_contri_historial.trim();
                $("#txt_codigo_relacionado").val(nuevaSig_contri_historial);

                var txt_nombre_cont = data[0].Nom_contri_historial;
                nuevatxt_nombre_cont = txt_nombre_cont.trim();
                $("#txt_nombre_cont").val(nuevatxt_nombre_cont);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_codigo_relacionado").val("");
                $("#txt_nombre_cont").val("");
            }
        });
    }
});
// juridica //
var txt_buscar_codigo_juri = document.getElementById("txt_buscar_codigo_juri");
txt_buscar_codigo_juri.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txt_buscar_codigo_juri = $("#txt_buscar_codigo_juri").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "Contro_servicio/BuscarCodigo", { txt_buscar_codigo: txt_buscar_codigo_juri }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.cod_contri_historial2020;
            if (data) {
                var Sig_contri_historial = data[0].Cod_relacionado;
                nuevaSig_contri_historial = Sig_contri_historial.trim();
                $("#txt_codigo_contr2020_juri").val(nuevaSig_contri_historial);

                var txt_nombre_cont = data[0].Nom_contri_historial;
                nuevatxt_nombre_cont = txt_nombre_cont.trim();
                $("#txt_nombre_cont_juri").val(nuevatxt_nombre_cont);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_codigo_contr2020_juri").val("");
                $("#txt_nombre_cont_juri").val("");
            }
        });
    }
});
var txt_buscar_dni_juri = document.getElementById("txt_buscar_dni_juri");
txt_buscar_dni_juri.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txt_buscar_dni_juri = $("#txt_buscar_dni_juri").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "Contro_servicio/Buscardni", { txt_buscar_dni: txt_buscar_dni_juri }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.dni_contri_historial2020;
            if (data) {
                var Sig_contri_historial = data[0].Cod_relacionado;
                nuevaSig_contri_historial = Sig_contri_historial.trim();
                $("#txt_codigo_contr2020_juri").val(nuevaSig_contri_historial);

                var txt_nombre_cont = data[0].Nom_contri_historial;
                nuevatxt_nombre_cont = txt_nombre_cont.trim();
                $("#txt_nombre_cont_juri").val(nuevatxt_nombre_cont);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_codigo_contr2020_juri").val("");
                $("#txt_nombre_cont_juri").val("");
            }
        });
    }
});
// fisioterapia //
var txt_buscar_codigo_fisiote = document.getElementById("txt_buscar_codigo_fisiote");
txt_buscar_codigo_fisiote.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txt_buscar_codigo_fisiote = $("#txt_buscar_codigo_fisiote").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "Contro_servicio/BuscarCodigo", { txt_buscar_codigo: txt_buscar_codigo_fisiote }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.cod_contri_historial2020;
            if (data) {
                var Sig_contri_historial = data[0].Cod_relacionado;
                nuevaSig_contri_historial = Sig_contri_historial.trim();
                $("#txt_cod_cont_fisiote").val(nuevaSig_contri_historial);

                var txt_nombre_cont = data[0].Nom_contri_historial;
                nuevatxt_nombre_cont = txt_nombre_cont.trim();
                $("#txt_nombre_cont_fisiote").val(nuevatxt_nombre_cont);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_cod_cont_fisiote").val("");
                $("#txt_nombre_cont_fisiote").val("");
            }
        });
    }
});
var txt_buscar_dni_fisiote = document.getElementById("txt_buscar_dni_fisiote");
txt_buscar_dni_fisiote.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txt_buscar_dni_fisiote = $("#txt_buscar_dni_fisiote").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "Contro_servicio/Buscardni", { txt_buscar_dni: txt_buscar_dni_fisiote }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.dni_contri_historial2020;
            if (data) {
                var Sig_contri_historial = data[0].Cod_relacionado;
                nuevaSig_contri_historial = Sig_contri_historial.trim();
                $("#txt_cod_cont_fisiote").val(nuevaSig_contri_historial);

                var txt_nombre_cont = data[0].Nom_contri_historial;
                nuevatxt_nombre_cont = txt_nombre_cont.trim();
                $("#txt_nombre_cont_fisiote").val(nuevatxt_nombre_cont);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_cod_cont_fisiote").val("");
                $("#txt_nombre_cont_fisiote").val("");
            }
        });
    }
});
var txt_buscar_codigo_odon = document.getElementById("txt_buscar_codigo_odon");
txt_buscar_codigo_odon.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txt_buscar_codigo_odon = $("#txt_buscar_codigo_odon").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "Contro_servicio/BuscarCodigo", { txt_buscar_codigo: txt_buscar_codigo_odon }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.cod_contri_historial2020;
            if (data) {
                var Sig_contri_historial = data[0].Cod_relacionado;
                nuevaSig_contri_historial = Sig_contri_historial.trim();
                $("#txt_cod_odon").val(nuevaSig_contri_historial);

                var txt_nombre_cont = data[0].Nom_contri_historial;
                nuevatxt_nombre_cont = txt_nombre_cont.trim();
                $("#txt_nombre_cont_odon").val(nuevatxt_nombre_cont);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_cod_odon").val("");
                $("#txt_nombre_cont_odon").val("");
            }
        });
    }
});
var txt_buscar_dni_odon = document.getElementById("txt_buscar_dni_odon");
txt_buscar_dni_odon.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txt_buscar_dni_odon = $("#txt_buscar_dni_odon").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "Contro_servicio/Buscardni", { txt_buscar_dni: txt_buscar_dni_odon }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.dni_contri_historial2020;
            if (data) {
                var Sig_contri_historial = data[0].Cod_relacionado;
                nuevaSig_contri_historial = Sig_contri_historial.trim();
                $("#txt_cod_odon").val(nuevaSig_contri_historial);

                var txt_nombre_cont = data[0].Nom_contri_historial;
                nuevatxt_nombre_cont = txt_nombre_cont.trim();
                $("#txt_nombre_cont_odon").val(nuevatxt_nombre_cont);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_cod_odon").val("");
                $("#txt_nombre_cont_odon").val("");
            }
        });
    }
});

var txt_buscar_codigo_cariPin = document.getElementById("txt_buscar_codigo_cariPin");
txt_buscar_codigo_cariPin.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txt_buscar_codigo_cariPin = $("#txt_buscar_codigo_cariPin").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "Contro_servicio/BuscarCodigo", { txt_buscar_codigo: txt_buscar_codigo_cariPin }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.cod_contri_historial2020;
            if (data) {
                var Sig_contri_historial = data[0].Cod_relacionado;
                nuevaSig_contri_historial = Sig_contri_historial.trim();
                $("#txt_cod_cariPin").val(nuevaSig_contri_historial);

                var txt_nombre_cont = data[0].Nom_contri_historial;
                nuevatxt_nombre_cont = txt_nombre_cont.trim();
                $("#txt_nombre_cont_cariPin").val(nuevatxt_nombre_cont);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_cod_cariPin").val("");
                $("#txt_nombre_cont_cariPin").val("");
            }
        });
    }
});
var txt_buscar_dni_cariPin = document.getElementById("txt_buscar_dni_cariPin");
txt_buscar_dni_cariPin.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txt_buscar_dni_cariPin = $("#txt_buscar_dni_cariPin").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "Contro_servicio/Buscardni", { txt_buscar_dni: txt_buscar_dni_cariPin }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.dni_contri_historial2020;
            if (data) {
                var Sig_contri_historial = data[0].Cod_relacionado;
                nuevaSig_contri_historial = Sig_contri_historial.trim();
                $("#txt_cod_cariPin").val(nuevaSig_contri_historial);

                var txt_nombre_cont = data[0].Nom_contri_historial;
                nuevatxt_nombre_cont = txt_nombre_cont.trim();
                $("#txt_nombre_cont_cariPin").val(nuevatxt_nombre_cont);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_cod_cariPin").val("");
                $("#txt_nombre_cont_cariPin").val("");
            }
        });
    }
});
var txt_buscar_codigo_corte = document.getElementById("txt_buscar_codigo_corte");
txt_buscar_codigo_corte.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txt_buscar_codigo_corte = $("#txt_buscar_codigo_corte").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "Contro_servicio/BuscarCodigo", { txt_buscar_codigo: txt_buscar_codigo_corte }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.cod_contri_historial2020;
            if (data) {
                var Sig_contri_historial = data[0].Cod_relacionado;
                nuevaSig_contri_historial = Sig_contri_historial.trim();
                $("#txt_cod_corte").val(nuevaSig_contri_historial);

                var txt_nombre_cont = data[0].Nom_contri_historial;
                nuevatxt_nombre_cont = txt_nombre_cont.trim();
                $("#txt_nombre_cont_corte").val(nuevatxt_nombre_cont);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_cod_corte").val("");
                $("#txt_nombre_cont_corte").val("");
            }
        });
    }
});
var txt_buscar_dni_corte = document.getElementById("txt_buscar_dni_corte");
txt_buscar_dni_corte.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txt_buscar_dni_corte = $("#txt_buscar_dni_corte").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "Contro_servicio/Buscardni", { txt_buscar_dni: txt_buscar_dni_corte }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.dni_contri_historial2020;
            if (data) {
                var Sig_contri_historial = data[0].Cod_relacionado;
                nuevaSig_contri_historial = Sig_contri_historial.trim();
                $("#txt_cod_corte").val(nuevaSig_contri_historial);

                var txt_nombre_cont = data[0].Nom_contri_historial;
                nuevatxt_nombre_cont = txt_nombre_cont.trim();
                $("#txt_nombre_cont_corte").val(nuevatxt_nombre_cont);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_cod_corte").val("");
                $("#txt_nombre_cont_corte").val("");
            }
        });
    }
});
var txt_buscar_codigo_manicure = document.getElementById("txt_buscar_codigo_manicure");
txt_buscar_codigo_manicure.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txt_buscar_codigo_manicure = $("#txt_buscar_codigo_manicure").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "Contro_servicio/BuscarCodigo", { txt_buscar_codigo: txt_buscar_codigo_manicure }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.cod_contri_historial2020;
            if (data) {
                var Sig_contri_historial = data[0].Cod_relacionado;
                nuevaSig_contri_historial = Sig_contri_historial.trim();
                $("#txt_cod_manicure").val(nuevaSig_contri_historial);

                var txt_nombre_cont = data[0].Nom_contri_historial;
                nuevatxt_nombre_cont = txt_nombre_cont.trim();
                $("#txt_nombre_cont_manicure").val(nuevatxt_nombre_cont);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_cod_manicure").val("");
                $("#txt_nombre_cont_manicure").val("");
            }
        });
    }
});
var txt_buscar_dni_manicure = document.getElementById("txt_buscar_dni_manicure");
txt_buscar_dni_manicure.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var txt_buscar_dni_manicure = $("#txt_buscar_dni_manicure").val();
        var urlphp = $("#url1").text();
        $.post("" + urlphp + "Contro_servicio/Buscardni", { txt_buscar_dni: txt_buscar_dni_manicure }, function(response) {
            var datos = JSON.parse(response);
            var data = datos.dni_contri_historial2020;
            if (data) {
                var Sig_contri_historial = data[0].Cod_relacionado;
                nuevaSig_contri_historial = Sig_contri_historial.trim();
                $("#txt_cod_manicure").val(nuevaSig_contri_historial);

                var txt_nombre_cont = data[0].Nom_contri_historial;
                nuevatxt_nombre_cont = txt_nombre_cont.trim();
                $("#txt_nombre_cont_manicure").val(nuevatxt_nombre_cont);
            } else {
                Swal.fire('<span>Código de contribuyente no encontrado</span>');
                $("#txt_cod_manicure").val("");
                $("#txt_nombre_cont_manicure").val("");
            }
        });
    }
});

function obtenertipoTratamiento() {
    var urlphp = $("#url").val();
    $.post("" + urlphp + "Contro_servicio/MostrarTipoTratamiento", function(response) {
        var data = JSON.parse(response);
        var html = "";
        for (var index = 0; index < data.length; index++) {
            html += "<option value='" + data[index].Cod_tratamiento + "'>" + data[index].Nom_tratamiento + "</option>";
        }
        $("#txttipotratamiento").html(html);
    });
}

$("#btnguardar").click(function() {
    $("#mensaje").html("");
    setTimeout(function() {
        $("#mensaje").fadeIn();
    }, 200);
    var urlphp = $("#url").val();
    var Tip_atencion = $("input:checkbox[id=txt_Check_Tipo_Mascota]:checked").val();
    var Cod_relacionado = $("#txt_codigo_relacionado").val();
    var Cod_usuario = $("#txt_cod_usuario").val();

    var Nom_mascota = $("#txtnombremascota").val();
    var Eda_mascota = $("#ttxedadmascota").val();
    var Raz_mascota = $("#txtrazamascota").val();
    var Tip_mascota = $("#txttipomascota").val();
    var Obs_mascota = $("#txt_observacion").val();
    var Cod_tratamiento = $("#txttipotratamiento").val();

    parametros = {
        "Tip_atencion": Tip_atencion,
        "Cod_relacionado": Cod_relacionado,
        "Cod_usuario": Cod_usuario,

        "Nom_mascota": Nom_mascota,
        "Eda_mascota": Eda_mascota,
        "Raz_mascota": Raz_mascota,
        "Tip_mascota": Tip_mascota,
        "Obs_mascota": Obs_mascota,
        "Cod_tratamiento": Cod_tratamiento,
    }

    $.ajax({
        type: 'post',
        async: false,
        data: parametros,
        url: urlphp + 'Contro_servicio/RegistrarAtencionMascota',
        success: function(response) {
            var res = response;
            if (res) {
                $("#mensaje").html(response);
                setTimeout(function() {
                    $("#mensaje").fadeOut(1000);
                }, 1000);
                LimpiarCajas();
            } else {
                $("#mensaje").html("Error al registrar");
                setTimeout(function() {
                    $("#mensaje").fadeOut(1000);
                }, 1000);
            }
        }
    });
})

$("#guardarcarit").click(function() {
    $("#mensajecar").html("");
    setTimeout(function() {
        $("#mensajecar").fadeIn();
    }, 200);
    var urlphp = $("#url").val();
    var Tip_atencion = $("input:checkbox[id=txt_Check_Tipo_Carpintadas]:checked").val();
    var Cod_relacionado = $("#txt_cod_cariPin").val();
    var Cod_usuario = $("#txt_cod_usuario").val();

    var nom_caritapint = $("#nom_caritapint").val();
    var dni_caritapint = $("#dni_caritapint").val();
    var edad_caritapint = $("#edad_caritapint").val();
    var sexo_caritapint = $("#sexo_caritapint").val();
    var obs_caritPi = $("#obs_caritPi").val();

    parametros = {
        "Tip_atencion": Tip_atencion,
        "Cod_relacionado": Cod_relacionado,
        "Cod_usuario": Cod_usuario,

        "nom_caritapint": nom_caritapint,
        "dni_caritapint": dni_caritapint,
        "edad_caritapint": edad_caritapint,
        "sexo_caritapint": sexo_caritapint,
        "obs_caritPi": obs_caritPi,
    }

    $.ajax({
        type: 'post',
        async: false,
        data: parametros,
        url: urlphp + 'Contro_servicio/RegistrarAtencionCarPint',
        success: function(response) {
            var res = response;
            if (res) {
                $("#mensajecar").html(response);
                setTimeout(function() {
                    $("#mensajecar").fadeOut(1000);
                }, 1000);
                LimpiarCajasCaritPint();
            } else {
                $("#mensajecar").html("Error al registrar");
                setTimeout(function() {
                    $("#mensajecar").fadeOut(1000);
                }, 1000);
            }
        }
    });
})
$("#guardar_cortecabell").click(function() {
    $("#mensajecorte").html("");
    setTimeout(function() {
        $("#mensajecorte").fadeIn();
    }, 200);
    var urlphp = $("#url").val();
    var Tip_atencion = $("input:checkbox[id=txt_Check_Tipo_Corpelo]:checked").val();
    var Cod_relacionado = $("#txt_cod_corte").val();
    var Cod_usuario = $("#txt_cod_usuario").val();

    var nombre_cortecabell = $("#nombre_cortecabell").val();
    var dni_cortecabell = $("#dni_cortecabell").val();
    var edad_cortecabell = $("#edad_cortecabell").val();
    var sexo_cortecabell = $("#sexo_cortecabell").val();
    var obs_cortecabell = $("#obs_cortecabell").val();

    parametros = {
        "Tip_atencion": Tip_atencion,
        "Cod_relacionado": Cod_relacionado,
        "Cod_usuario": Cod_usuario,

        "nombre_cortecabell": nombre_cortecabell,
        "dni_cortecabell": dni_cortecabell,
        "edad_cortecabell": edad_cortecabell,
        "sexo_cortecabell": sexo_cortecabell,
        "obs_cortecabell": obs_cortecabell,
    }

    $.ajax({
        type: 'post',
        async: false,
        data: parametros,
        url: urlphp + 'Contro_servicio/RegistrarAtencionCorteCabell',
        success: function(response) {
            var res = response;
            if (res) {
                $("#mensajecorte").html(response);
                setTimeout(function() {
                    $("#mensajecorte").fadeOut(1000);
                }, 1000);
                LimpiarCajasCaritPint();
            } else {
                $("#mensajecorte").html("Error al registrar");
                setTimeout(function() {
                    $("#mensajecorte").fadeOut(1000);
                }, 1000);
            }
        }
    });
})
$("#guardar_manicure").click(function() {
    $("#mensajemanicure").html("");
    setTimeout(function() {
        $("#mensajemanicure").fadeIn();
    }, 200);
    var urlphp = $("#url").val();
    var Tip_atencion = $("input:checkbox[id=txt_Check_Tipo_Manicure]:checked").val();
    var Cod_relacionado = $("#txt_cod_manicure").val();
    var Cod_usuario = $("#txt_cod_usuario").val();

    var nom_manicure = $("#nom_manicure").val();
    var dni_manicure = $("#dni_manicure").val();
    var edad_manicure = $("#edad_manicure").val();
    var sexo_manicure = $("#sexo_manicure").val();
    var obs_manicure = $("#obs_manicure").val();

    parametros = {
        "Tip_atencion": Tip_atencion,
        "Cod_relacionado": Cod_relacionado,
        "Cod_usuario": Cod_usuario,

        "nom_manicure": nom_manicure,
        "dni_manicure": dni_manicure,
        "edad_manicure": edad_manicure,
        "sexo_manicure": sexo_manicure,
        "obs_manicure": obs_manicure,
    }

    $.ajax({
        type: 'post',
        async: false,
        data: parametros,
        url: urlphp + 'Contro_servicio/RegistrarAtencionManicure',
        success: function(response) {
            var res = response;
            if (res) {
                $("#mensajemanicure").html(response);
                setTimeout(function() {
                    $("#mensajemanicure").fadeOut(1000);
                }, 1000);
                Limpiarmanicure();
            } else {
                $("#mensajemanicure").html("Error al registrar");
                setTimeout(function() {
                    $("#mensajemanicure").fadeOut(1000);
                }, 1000);
            }
        }
    });
})

function LimpiarCajasMas() {
    $("#txtnombremascota").val("");
    $("#ttxedadmascota").val("");
    $("#txtrazamascota").val("");
    $("#txt_observacion").val("");
}

function LimpiarCajasCaritPint() {
    $("#nom_caritapint").val("");
    $("#dni_caritapint").val("");
    $("#edad_caritapint").val("");
    $("#obs_caritPi").val("");
}

function LimpiarCajasCorteCabello() {
    $("#nombre_cortecabell").val("");
    $("#dni_cortecabell").val("");
    $("#edad_cortecabell").val("");
    $("#obs_cortecabell").val("");
}

function Limpiarmanicure() {
    $("#nom_manicure").val("");
    $("#dni_manicure").val("");
    $("#edad_manicure").val("");
    $("#obs_manicure").val("");
}
$("#cancelar").click(function() {
        LimpiarCajas();
        $("#mensaje").html("");
    })
    /* validacion para aceptar solo numeros */

function soloNumeros(e) {
    var key = window.event ? e.which : e.keyCode;
    if (key < 48 || key > 57) {
        e.preventDefault();
    }
}
window.addEventListener("load", function() {
    var el = document.getElementById("dni_caritapint");
    el.addEventListener("keypress", soloNumeros, false);
});
window.addEventListener("load", function() {
    var el = document.getElementById("dni_cortecabell");
    el.addEventListener("keypress", soloNumeros, false);
});
window.addEventListener("load", function() {
    var el = document.getElementById("dni_manicure");
    el.addEventListener("keypress", soloNumeros, false);
});

function init() {
    obtenertipoTratamiento();
    document.getElementById("txt_nombre_cont").disabled = true;
    document.getElementById("txt_nombre_cont_juri").disabled = true;
    document.getElementById("dni_caritapint").maxLength = "8";
    document.getElementById("dni_cortecabell").maxLength = "8";
    document.getElementById("dni_manicure").maxLength = "8";
}

init();