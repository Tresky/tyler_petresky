// Sets the height of the list items of the nav
// bar to the same height of the nav bar.
$(document).ready(function()
{
	var height = $('nav').height();
	$(".nav li").css("height", height);
	$(".nav li a").css("height", height);
});

$('.nav').each(function(clickable)
{
	var list = clickable.getElements('li');

	list.bind('click', function() {
		var link = $(this).first('a');
		if ($(this).first('a')) {
			window.location = link
		}
	});
});