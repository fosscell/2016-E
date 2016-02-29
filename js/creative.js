!function(t){"use strict";t("a.page-scroll").bind("click",function(e){var i=t(this);t("html, body").stop().animate({scrollTop:t(i.attr("href")).offset().top-50},1250,"easeInOutExpo"),e.preventDefault()}),t("body").scrollspy({target:".navbar-fixed-top",offset:51}),t(".navbar-collapse ul li a").click(function(){t(".navbar-toggle:visible").click()}),t("h1").fitText(1.2,{minFontSize:"35px",maxFontSize:"65px"}),t("#mainNav").affix({offset:{top:100}}),(new WOW).init()}(jQuery);

/* E-Mail HotLink Protection Script */
$(document).ready(function(){for(var j=1;j<=16;j++){var t1 = "qq" + j;document.getElementById(t1).onclick();}})
function backwards(e){return e.split("").reverse().join("")}function reveal(e,n,r,t){var a=backwards(e),d=backwards(t),c=d+a,i=document.createElement("a");i.innerHTML=a,i.href=c;var l=document.getElementById(n),m=document.getElementById(r);m.removeChild(l),m.appendChild(i)}

/* tagline init */
$(window).ready(function(){$(".element").typed({strings:["Hack the Code"],typeSpeed:0,startDelay:200,showCursor:!0,cursorChar:"|"})});
/* countdown timer */
/* Time Countdown
	-------------------------------------------------------------------*/
	var today = new Date();
	var fm16 = new Date("Fri Feb 26 2016 16:00:30 GMT+0530 (India Standard Time)");

	var one_sec = 1000;
	var secl = Math.floor((fm16.getTime()-today.getTime())/one_sec);

	var minl = Math.floor(secl / 60);
	secl = secl % 60;
	var hrsl = Math.floor(minl / 60);
	minl = minl % 60;
	var daysl = Math.floor(hrsl / 24);
	hrsl = hrsl % 24;

	$('#time_countdown').countDown({

        // targetDate: {
        //     'day': 30,
        //     'month': 9,
        //     'year': 2015,
        //     'hour': 0,
        //     'min': 0,
        //     'sec': 0
        // },
        // omitWeeks: true

         targetOffset: {
            'day':      daysl,
            'month':    0,
            'year':     0,
            'hour':     hrsl,
            'min':      minl,
            'sec':      secl
		},
		omitWeeks: true

	    });
