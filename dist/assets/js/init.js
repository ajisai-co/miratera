
/**
 * モバイル判定
 */
let isMobile = window.matchMedia("(max-width: 768px)");
if(isMobile.matches) {

}
/**
 * パララックス
 */
gsap.utils.toArray('.js-parallax').forEach(wrap => {
    const y = wrap.getAttribute('data-y') || -150;
    
    gsap.to(wrap, {
        y: y,    
        scrollTrigger: {
            trigger: wrap,
            start: 'top bottom',
            end: 'bottom center+=100px',
            scrub: 0.8,
        }
    })
});
/**
 * フェードイン
 */
gsap.utils.toArray('.js-fadein').forEach(target => {
    gsap.fromTo(target, {
        opacity: 0,
        ease: "power1.inOut",
        }, {
            opacity: 1,
            scrollTrigger: {
                trigger: target,
                scrub: 1,
                start: "top bottom",
                end: "center center"
            },
        }
    );
});

$(function(){
	
	/** 
	 * 共通ページ
	 * ハンバーガーメニューの開閉を行う
	 */
	nav();

});

var nav = function(){
	// クラス名は合わせる
	$('.js-navBtn').click(function() {
		$(this).toggleClass('-active');
		$('.js-navTarget').fadeToggle(400);
	});
}
