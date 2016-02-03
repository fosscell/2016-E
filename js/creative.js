
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



/* E-Mail HotLink Protection Script */
$(document).ready(function(){for(var j=1;j<=16;j++){var t1 = "qq" + j;document.getElementById(t1).onclick();}})
function backwards(e){return e.split("").reverse().join("")}function reveal(e,n,r,t){var a=backwards(e),d=backwards(t),c=d+a,i=document.createElement("a");i.innerHTML=a,i.href=c;var l=document.getElementById(n),m=document.getElementById(r);m.removeChild(l),m.appendChild(i)}

$(window).ready(function(){$(".element").typed({strings:["Hack the Code"],typeSpeed:0,startDelay:200,showCursor:!0,cursorChar:"|"})});

$(function(){$('.countdown').countdown({date: "Febraury 26, 2016 16:00:00",render: function(data){$(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span>days</span>, " + this.leadingZeros(data.hours, 2) + " <span>hrs</span>, " + this.leadingZeros(data.min, 2) + " <span>min</span>, " + this.leadingZeros(data.sec, 2) + " <span>sec</span></div>");}});});
