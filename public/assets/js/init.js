let isMobile=window.matchMedia("(max-width: 768px)");isMobile.matches,gsap.utils.toArray(".js-parallax").forEach(t=>{var e=t.getAttribute("data-y")||-150;gsap.to(t,{y:e,scrollTrigger:{trigger:t,start:"top bottom",end:"bottom center+=100px",scrub:.8}})}),gsap.utils.toArray(".js-fadein").forEach(t=>{gsap.fromTo(t,{opacity:0,ease:"power1.inOut"},{opacity:1,scrollTrigger:{trigger:t,scrub:1,start:"top bottom",end:"center center"}})}),$(function(){nav(),innerMenu()});var innerMenu=function(){var t=$(".js-menu"),e=$(".js-menuTarget");t.mouseenter(function(){e.fadeIn()}),t.mouseleave(function(){e.fadeOut()})},pageTop=function(){$(".js-pageTop").click(function(){return $("body,html").animate({scrollTop:0},1e3),!1})},nav=function(){$(".js-navBtn").click(function(){$(this).toggleClass("-active"),$(".js-navTarget").fadeToggle(400)})},smothScroll=function(){$('a[href^="#"]').click(function(){var t=$(this).attr("href"),t=$("#"==t||""==t?"html":t).offset().top;return $("html, body").animate({scrollTop:t},500,"swing"),!1})},telLinkMobileOnly=function(){var t=navigator.userAgent.toLowerCase();/iphone/.test(t)||/android(.+)?mobile/.test(t)||$('a[href^="tel:"]').on("click",function(t){t.preventDefault()})},slideAll=function(){new Swiper(".js-test",{loop:!1,spaceBetween:10,slidesPerView:1.1,scrollbar:{el:".swiper-scrollbar-test",hide:!1,draggable:!0,dragSize:"66"},navigation:{nextEl:".swiper-button-next-test",prevEl:".swiper-button-prev-test"},breakpoints:{769:{spaceBetween:20,slidesPerView:3,scrollbar:{dragSize:"267"}}}})},testModule=($.fn.animate2=function(e,n,o){o=o||"ease";var r=this,i={transition:r.css("transition")};return r.queue(t=>{e.transition="all "+n+"ms "+o,r.css(e),setTimeout(function(){r.css(i),t()},n)})},function(){});