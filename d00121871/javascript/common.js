function myFunction()
{
	window.print();
	
}

$(document).ready(function(){
  $(window).scroll(function(){
	  $("main").css({'background-color':'black'});
	if($(this).scrollTop()>100)
	{
		$("nav").fadeOut(500);
	}
    if($(this).scrollTop()<70)
	{
		$("nav").fadeIn(300);	
	}
  });
});