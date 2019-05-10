   $(window).on( 'load', function() {
        var enviar = $('#enviar');
        setTimeout(function() {
            $('#enviar').click();
        })
        var rand = $('#rand');
        enviar.on( 'click', function() {
            $.ajax({
                type: "POST",
                data: rand,
                dataType:'json',
                url: 'RandEnviar',
                success: function(data) {   
                    alert(data); 
                },
                error: function(data) {
                    console.log(data)
                }
            });
     });
});