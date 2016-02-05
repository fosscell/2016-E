/**
 * cbpAnimatedHeader.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
var cbpAnimatedHeader=function(){function n(){window.addEventListener("scroll",function(n){o||(o=!0,setTimeout(e,250))},!1)}function e(){var n=t();n>=c?classie.add(r,"navbar-shrink"):classie.remove(r,"navbar-shrink"),o=!1}function t(){return window.pageYOffset||a.scrollTop}var a=document.documentElement,r=document.querySelector(".navbar-default"),o=!1,c=300;n()}();