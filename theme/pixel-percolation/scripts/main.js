'use strict';
window.scrollTo(0,1);

jQuery(function($) {
    $('#fullpage').fullpage(
        {
            anchors: ['home', 'about', 'portfolio', 'team', 'contact'],
            menu:'.menu',
            scrollBar: true
        }
    );
});


$(function(){
    $('.toggle-nav').click(function(){
        if($('body').hasClass('show-nav')){
            $('body').removeClass('show-nav').addClass('hide-nav');
            setTimeout(function(){
                $('body').removeClass('hide-nav');
            },500);
        }else{
            $('body').removeClass('hide-nav').addClass('show-nav');
        }
        return false;
    });
    $('#body-nav a').click(function(){
        $('body').removeClass('show-nav').addClass('hide-nav');
    });
});
$(document).keyup(function(e){
    if(e.keyCode==27){
        if($('body').hasClass('show-nav')){
            $('body').removeClass('show-nav').addClass('hide-nav');
            setTimeout(function(){
                $('body').removeClass('hide-nav');
            },500);
        }else{
            $('body').removeClass('hide-nav').addClass('show-nav');
        }
    }
});