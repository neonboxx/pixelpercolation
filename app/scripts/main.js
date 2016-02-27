'use strict';
jQuery(function($) {
    $('#fullpage').fullpage(
        {
            anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'lastPage'],
            menu:'.menu',
            scrollBar: true
        }
    );
});