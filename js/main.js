//レスポンシブ画像切り替え
$('noscript[data-large][data-small]').each(function(){
	var src = screen.width >= 480 ? $(this).data('large') : $(this).data('small');
	$('<img src="' + src + '" alt="' + $(this).data('alt') + '" />').insertAfter($(this));
});

//プルダウンメニュー
$(function(){
	/* prepend menu icon */
	$('#grobalNav').prepend('<div id="toggleMenu"><i class="icon-reorder"></i></div>');
	/* toggle nav */
	$('#toggleMenu').on('click', function(){
		$('#menuItems').slideToggle();
		$(this).toggleClass('active');
	});
});

//タグアイコン
$(function(){
	$('.postTag a').prepend('<i class="icon-tag"></i> ');
});

$(function(){
	$('.first a').html('<i class="icon-double-angle-left"></i>');
	$('.last a').html('<i class="icon-double-angle-right"></i>');
});

//ページ内スクロール
$(function(){
	$('a[href^=#]').click(function(){
		var Hash = $(this.hash);
		var HashOffset = $(Hash).offset().top;
		$('html,body').animate({
			scrollTop: HashOffset
		}, 400);
		return false;
	});
});

//window幅での処理判別
$(function(){
	var w = $(window).width();
	var x = 940;
	if (w >= x) { //幅940以上での処理
		//トップヘ戻る
		$('.topControl').hide();
		$(window).scroll(function() {
			if ($(this).scrollTop() > 300) {
				$('.topControl').fadeIn();
			} else {
				$('.topControl').fadeOut();
			}
		});
		$('.topControl a').click(function() {
			$('html,body').animate({
				scrollTop:0
			}, 300);
			return false;
		});
		$(".postInfo").insertAfter("#entries > h1");
		$(".postUrl i").addClass("icon-external-link");
	} else { //幅940より小さい幅での処理
		$(".postUrl a").each(function() {
			$(this).html("OFFICIAL SITE<i></i>");
		});
		$(".postUrl i").addClass("icon-chevron-sign-right");
		$("#profile img").insertBefore("#profile > h1");
	}
});



//外部リンク別ウィンドウ遷移
$(function(){
	$("a[href^='http://']").attr("target","_blank");
	$("a[href^='http://www.madebyfault.net']").attr("target","_self");
	$("a[href^='https://']").attr("target","_blank");
});

//SNSアイコン差し替え
$(function() {
	$('#social a').each(function() {
		var snsicons = $(this).text();
		$(this).html('<i class="icon-'+snsicons+'"></i>');
	});
});

//慣性スクロール＆スクロールバー = jquery.nicescroll.min.js
$(function(){
	$("body").niceScroll({
		cursorcolor: "#000",
		scrollspeed: 80,
		mousescrollstep: 40
	});
});

$(function(){
	$('img').lazyload({
		effect: 'fadeIn',
		effectspeed: 1500
	});
});

//google analytics
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-20743582-3', 'auto');
	ga('send', 'pageview');