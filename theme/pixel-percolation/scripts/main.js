'use strict';
jQuery(function($) {
    $('#fullpage').fullpage(
        {
            anchors: ['home', 'about', 'portfolio', 'team', 'contact'],
            menu:'.menu',
            scrollBar: true
        }
    );
});