// Sets the height of the list items of the nav
// bar to the same height of the nav bar.
$(document).ready(function()
{
	var height = $('nav').height();
	var str_height = height + "px";
	$("ul.nav li").css("height", height);
	$("ul.nav li a").css("height", height);
	$("ul.nav li").css("line-height", str_height);

	$("nav h1").css("line-height", str_height);
	$("label").css("line-height", str_height);

	//FitTextSize("nav h1");
	//FitTextSize("nav ul div li");
});

/*$(document).ready(function()
{
	var info_box_height = $('div.info-box').height();
	var window_height = $(window).height();
	var nav_height = $('nav').height();
	if (window_height - nav_height > info_box_height)
		$('div.info-box').css('bottom', '0');
	else
		$('div.info-box').css('bottom', 'auto');
});*/

/*$('nav ul.nav').click(function()
{
	var state = $('ul.nav li').css('display');
	if (state == 'inline')
		$('ul.nav li').css('display', 'block');
});*/

/*$(window).resize(function() {
	var height = $('nav').height();
	var str_height = height + "px";
	$("nav ul li").css("height", height);
	$("nav ul li a").css("height", height);
	$("nav ul li").css("line-height", str_height);

	$("h1").css("line-height", str_height);

	FitTextSize("nav h1");
	FitTextSize("nav ul div li");
});*/

$('ul.nav').each(function(clickable)
{
	var list = clickable.getElements('li');

	list.bind('click', function() {
		var link = $(this).first('a');
		if ($(this).first('a')) {
			window.location = link
		}
	});
});

function FitTextSize(elem)
{
	var step = 1;
	if ($(elem).width() > $(elem).parent().width() || $(elem).height() > $(elem).parent().height())
	{
		var change_size = $(elem).css("font-size").substr(0, 2) - step;
		$(elem).css("font-size", change_size);
		FitTextSize(elem);
	}
}

function GetPage()
{
	var path = window.location.pathname;
	var path_array = path.split('/');
	return path_array[path_array.length - 2];
}

function UnloadInfoBox(page_unload)
{
	$(".box").show( "blind", 
        {direction: "vertical"}, 1000 );
}

function ReloadInfoBox(page_load)
{
	$(".box").hide( "blind", 
        {direction: "vertical"}, 1000 );
}

function NavClick(page_load)
{
	var current_page = GetPage();
	if (current_page == '')
		ReloadInfoBox(page_load);
	else if (current_page != page_load)
	{
		UnloadInfoBox('.' + current_page);
		ReloadInfoBox(page_load);
	}
	else
		return;
}