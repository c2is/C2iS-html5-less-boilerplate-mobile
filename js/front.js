/* Project: NOMPROJET - Date: 20120806 - Author: C2iS.fr > TRI */

$(function() { //domReady
    //addClassGtIe(); // Test msie version and add class .gt-ieX x n // ne pas utiliser si utilisation de head.extended.js

    // ScrollTop onload (mobile) si il n'y a pas d'ancre
    if(/mobile/i.test(navigator.userAgent) && !location.hash){
        window.scrollTo(0, 1);
    }

// Test log exe front.js
    consoleLog('Execution front.js : ok');

// Test html5 form capacties andif do polyfills
    if(!Modernizr.input.placeholder){ //ie. placeholder
        polyfillPlaceholder();
    }

// Gestion du click sur le parent
    if( $('.linkParent').length > 0 ) {
        $('.linkParent').addLinkBlock();
    }

});




















