$(document).ready(function(){
    $("#formulario").dataType();

});

$("#formulario").submit(function(e){;
    e.preventDefault();
    id = $.trim($("#id"). val());
    nombre = $.trim($("#nombre").val());
    cedula = $.trim($("#cedula").val());
    fecha = $.trim($("#fecha").val());
    numero = $.trim($("#numero").val());
    $,ajax({
        url: "crud.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, cedula:cedula, fecha:fecha, numero:numero},
        success: function(date){
            var datos = JSON.parse(data);
            id = datos[0].id;
            nombre = datos[0].nombre;
            cedula = datos[0].cedula;
            fecha = datos[0].fecha;
            numero = datos[0].numero;
            tablaPersonas.row.add((id,nombre,cedula,fecha,numero)).draw();
        }
    })
})