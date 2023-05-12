
  $(document).ready(function() {
   
    $('.btnHabilitar').click(function() {
     
      var userId = $(this).attr('id');

      $.ajax({
        url: 'conexion_be.php',
        type: 'post',
        data: {id: userId},
        success: function(response) {
          // Verificar si la operación fue exitosa y habilitar o deshabilitar el botón.
          if (response === 'success') {
            $('#permiso').prop('disabled', false);
          } else {
            $('#permiso').prop('disabled', true);
          }
        }
      });
    });
  });

