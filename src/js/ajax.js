(function($) {
  $(document).ready(function() {

    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5e15f9d67e39ea1242a3a769/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();

   
        $.ajax({
          url: window.directory.ajax_url,
          method: 'GET',
          dataType: 'json',
          data: {
            action: 'send_levels_data',
          },
          beforeSend: function(data) {
          },
          success: function(data) {
          if(data) {
              // console.log('ajax',data);
              return data;
            }
          },
        });
   
        if(term) {
          $.ajax({
            url: window.directory.ajax_url,
            method: 'GET',
            dataType: 'json',
            data: {
              action: 'send_apartments_data',
              term_id: term 
            },
            beforeSend: function(data) {
            },
            success: function(data) {
            if(data) {
                // console.log('ajax',data);
                return data;
              }
            },
          });
        }


    
  }); // document
})(jQuery);