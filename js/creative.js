/*!
 * Start Bootstrap - Creative Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    })

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Fit Text Plugin for Main Header
    $("h1").fitText(
        1.2, {
            minFontSize: '35px',
            maxFontSize: '65px'
        }
    );

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Initialize WOW.js Scrolling Animations
    new WOW().init();

})(jQuery); // End of use strict

$(document).ready(function()
{
for(var j=1;j<=4;j++){
	var t1 = "cttc" + j + "2";
	var t2 = "ctt" + j + "2";

	document.getElementById(t1).onclick();
	document.getElementById(t2).onclick();
}
}
)

/* E-Mail HotLink Protection Script */
function backwards(e){return e.split("").reverse().join("")}function reveal(e,n,r,t){var a=backwards(e),d=backwards(t),c=d+a,i=document.createElement("a");i.innerHTML=a,i.href=c;var l=document.getElementById(n),m=document.getElementById(r);m.removeChild(l),m.appendChild(i)}

$(window).ready(function(){$(".element").typed({strings:["Hack the Code"],typeSpeed:0,startDelay:200,showCursor:!0,cursorChar:"|"})});
