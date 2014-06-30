// Sets the height of the list items of the nav
// bar to the same height of the nav bar.
$(document).ready(function()
{
	var height = $('nav').height();
	$("nav ul li").css("height", height);
	$("nav ul li a").css("height", height);
	//$("nav ul li").css("line-height", height);
	//$("nav ul li a").css("line-height", height);
});

$('nav').each(function(clickable)
{
	var list = clickable.getElements('li');

	list.bind('click', function() {
		var link = $(this).first('a');
		if ($(this).first('a')) {
			window.location = link
		}
	});
});

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