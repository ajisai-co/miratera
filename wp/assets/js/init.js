let isMobile=window.matchMedia("(max-width: 768px)");isMobile.matches,gsap.utils.toArray(".js-parallax").forEach(t=>{var a=t.getAttribute("data-y")||-150;gsap.to(t,{y:a,scrollTrigger:{trigger:t,start:"top bottom",end:"bottom center+=100px",scrub:.8}})}),gsap.utils.toArray(".js-fadein").forEach(t=>{gsap.fromTo(t,{opacity:0,ease:"power1.inOut"},{opacity:1,scrollTrigger:{trigger:t,scrub:1,start:"top bottom",end:"center center"}})}),$(function(){nav()});var nav=function(){$(".js-navBtn").click(function(){$(this).toggleClass("-active"),$(".js-navTarget").fadeToggle(400)})};