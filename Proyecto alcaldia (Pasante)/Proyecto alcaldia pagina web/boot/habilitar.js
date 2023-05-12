function activacion(req) {
    var parametros = {
        idOrdenanza: req
    }
    var petition = $.ajax({
        url: "habilitar.php",
        type: "POST",
        data: parametros,
        dataType: "json",
        success: function (response) {
            if (response.paso == 1) {
                $('#' + req).attr('readonly', true)
            }
        }
    })
}

function descargar(req) {
    console.log
    var parametros = {
        idOrdenanza: req
    }
    var petition = $.ajax({
        url: "descargar.php",
        type: "POST",
        data: parametros,
        dataType: "json",
        success: function (response) {
            if(response.tipo==1){
            window.location.href = "ordenanzas/orde.docx";
            } else if(response.tipo==2){
            window.location.href = "ordenanzas/orde.docx";
            } else if(response.tipo==3){
            window.location.href = "ordenanzas/orde.docx";
            }else if(response.tipo==4){
            window.location.href = "ordenanzas/orde.docx";
            }else if(response.tipo==5){
            window.location.href = "ordenanzas/orde.docx";
            }else if(response.tipo==6){
            window.location.href = "ordenanzas/orde.docx";
            }
        }
    })
}

function aceptar() {
    var petition = $.ajax({
        url: "admin.php",
        type: "POST",
        dataType: "json",
        success: function (response) {
            
        }
    })
}

$(document).ready(function () {
    $('.btnHabilitar').on('click', function () {
        activacion($(this).attr("id"))
    })
    $('.btnDescargar').on('click', function () {
        descargar($(this).attr("id"))
    })
})