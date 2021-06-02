(function($) {
  $(document).ready(function() {

    $('.menu-item').addClass('nav-item');
    $('.menu-item').children().addClass('nav-link');

    AOS.init({
      easing: 'ease-in-out-sine'
  
    })

    $('.dinamic-hidden').hide();

    $('select#input_2_4').on('change', function() {
      var porcentaje = 'Porcentaje de apartamento';
      var cantidad = 'Cantidad exacta';
      console.log($(this).val());
      $('.dinamic-hidden').hide();
      if($(this).val() === cantidad) {
        $('#field_2_22').show();
      }
      if($(this).val() === porcentaje) {
        $('#field_2_18').show();
      }
    })

    $('#rangeField').change(function() {
      console.log(this, $(this).val());
      var valInput = $(this).val();
      var price = $('#priceField').val();
      var newVal = price * (valInput / 100);
      var newValParce = newVal.toFixed(2);
      $('.rangeField').val(valInput);
      $('#porcentaje').html(valInput + '%');
      $('#engancheField').html(Intl.NumberFormat("en-US").format(newValParce));
    })

    if($('.validation_message')) {
      $('.validation_message').html('Este campo es requerido.');
    }

  }); // document
})(jQuery);