/* global $ */

$( ".nav li" ).on( "click", function() {
    "use strict";
    $( ".nav li" ).removeClass( "active" );
    $( this ).addClass( "active" );
} );
