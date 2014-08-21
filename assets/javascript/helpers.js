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

	/*$("#nav-apps").click(function() {
		if ($('#apps-list').is(':visible'))
			$('#apps-list').slideUp();
		else
			$('#apps-list').slideDown();
	});
	$("#apps-list li").css("width", $("ul.nav li").css("width"));*/

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