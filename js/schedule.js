var h_gl=$(window).height();
var w_hd=1920,h_hd=1080,h;
var animating=0;

function resize()
{
	var w=$(window).width();
	h=(w*h_hd)/w_hd;
	var fs=(w*6)/w_hd+'em';
	var magna=(w*4)/w_hd+'em';
	var t_ar,t_sec;
}

$(document).ready(function()
{
	$('#speakers_icon').click(function()
	{
	    $('html, body').stop().animate({
	        scrollTop:$('#speakers_tab').offset().top
	    },1500,function(){animating=0;});
	});
	$('.wait').click(function()
	{
	    $('html, body').stop().animate({
	        scrollTop:13*h/2
	    },1500,function(){animating=0;});	
	});
	$('#sponsors_icon').click(function()
	{
	    $('html, body').stop().animate({
	        scrollTop:$('#sponsors').offset().top
	    },1500,function(){animating=0;});
	});
		$('#contacts_icon').click(function()
	{
	    $('html, body').stop().animate({
	        scrollTop:$('#footer').offset().top
	    },1500,function(){animating=0;});	
	});		
	$('.lg').click(function()
	{
	    $('html, body').stop().animate({
	        scrollTop:0
	    },1500,function(){animating=0;});
	});
	resize();
	//day and night
	var d= new Date();
	if((d.getHours()>6)&&(d.getHours()<18))
		$('#footer').css({'background-position':'100% 0'});
	else
		$('#footer').css({'background-position':'0 0'});	
});

$(document).ready(function()
{
	resize();
});

$(window).resize(function()
{
	resize();
});