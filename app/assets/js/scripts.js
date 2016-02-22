(function() {
			[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
				var menuItems = menu.querySelectorAll('.menu__link'),
					setCurrent = function(ev) {
						//ev.preventDefault();
						var item = ev.target.parentNode; // li
						// return if already current
						if (classie.has(item, 'menu__item--current')) {
							return false;
						}
						// remove current
						classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
						// set current
						classie.add(item, 'menu__item--current');
                        setTimeout(function() {
                            $(window).scroll();
                        },100);
					};
				[].slice.call(menuItems).forEach(function(el) {
                    el.addEventListener('click', setCurrent);
				});
			});
            
            
            
    var didScroll = false;
    var navFixed = false;
    var nav = document.getElementById('nav-wrapper');
    window.onscroll = doThisStuffOnScroll;
    var $sections = $('.section');
    var $menuItems = $('.menu__link');
    function doThisStuffOnScroll() {
        if(!didScroll)
        {
            
            setTimeout(function() {
                var focalPoint = window.pageYOffset + (window.innerHeight / 2);
                didScroll = true;
                var current = $sections[0];
                if(window.pageYOffset>window.innerHeight-10 && !$(nav).hasClass('background'))
                {
                    $(nav).addClass('background');
                }
                else if($(nav).hasClass('background') && window.pageYOffset<window.innerHeight-10){
                    $(nav).removeClass('background');
                }
                $sections.each(function(idx,section){
                    var $section = $(section);
                    if(focalPoint> $section.offset().top  && focalPoint< $section.offset().top + $section.height())
                        current = $section
                });
                var $link = $menuItems.filter(function(idx,item){
                    return current.attr &&$(item).attr('href') === '#'+current.attr('id');
                })
                
                    if($link.length >0 && !$link.parent().hasClass('menu__item--current'))
                    {
                        $('.menu__item--current').removeClass('menu__item--current');
                        $link.parent().addClass('menu__item--current')
                    }
                        
                
                
                    if(navFixed && window.pageYOffset <= 1)
                    {
                        navFixed = false;
                        classie.remove( nav, 'fixed' );   
                    }
                    else if(window.pageYOffset > 1){
                        navFixed = true;
                        classie.add( nav, 'fixed' );
                    }
                    didScroll = false;
                
            }, 50);
        }
    }

    
})(window);