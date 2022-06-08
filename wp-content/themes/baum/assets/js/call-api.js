(function($) {
    $( '#lista_eventos_filtro' ).change( function(  ) {
        if( $( this ).find( ':selected' ).val() != '') {
            var eventoSel = $( this ).find( ':selected' );
            $( '#titulo_filtro' ).html( 'Artistas del evento ' + eventoSel.text(  ) );
    
            $.ajax({
                url: baum.apiurl+'eventos-api/'+eventoSel.val(  ),
                method: 'GET',
                beforeSend: function(  ) {
                    $( '#lista_artistas_filtro' ).html( '<li>Cardango...</li>' );
                },
                success: function( data ) {
                    let html = '';
                    data.forEach( item => {
                        html += '<li>'+item+'</li>'; 
                    });
                    $( '#lista_artistas_filtro' ).html( html );
                }
            });
        }
    } );
})(jQuery);