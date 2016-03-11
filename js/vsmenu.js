jQuery(document).ready(function(){
	//<b class="caret"></b>

	var menu_title = "Menu";
	var scr_width = 400;

	//show the submenu when one of submenu item is active? 1 is true, 0 is false
	var show_active_submenu = 1;


	var vsmenu = jQuery('.vsmenu');
	vsmenu.find('li > ul').css('display', 'none');
	vsmenu.find('li > ul').parent().append("<b class='caret'></b>");
	//vsmenu.find('li > ul > li > ul').parent().append("<b class='caret caret_submenu'></b>");

	vsmenu.find('li > ul').closest('li').children('a').on('click', function(e){
		e.preventDefault();
		jQuery(this).closest('li').children('ul').stop().slideToggle('slow');
		jQuery(this).closest('li').siblings().find('ul').slideUp('slow');
	});

	if(show_active_submenu == 1){
		vsmenu.find('li.active').parents("ul").show();
	}
	

	
	//<li class="menu_head"><a href="#">Menu</a></li>
	vsmenu.prepend('<li class="menu_head"><a href="#">'+ menu_title +'</a></li>');
	vsmenu.find('li.menu_head').append("<b class='caret_big'></b>");
	vsmenu.find('.menu_head').css('display', 'none');

	if(jQuery(window).width() < scr_width){
		vsmenu.find('li').css('display', 'none');
		vsmenu.find('.menu_head').css('display', 'block');
	}

	jQuery(window).resize(function() {

			if(jQuery(window).width() < scr_width){
					
					vsmenu.find('li').css('display', 'none');
					vsmenu.find('.menu_head').css('display', 'block');
			}else{
					
					vsmenu.find('li').css('display', 'block');
					vsmenu.find('.menu_head').css('display', 'none');
			}	

	});

	var open = 0;
	vsmenu.find('.menu_head > a').on('click',function(e){
		e.preventDefault();
		if(open == 0){
			vsmenu.find('li').css('display', 'block');
			open = 1;
		}else{
			vsmenu.find('li').not('.menu_head').css('display', 'none');
			open = 0;
		}
	});

	
});