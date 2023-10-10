/**
 * common.js
 *
 *  version --- 1.0
 *  updated --- 2017/11/30
 */


/* !stack ------------------------------------------------------------------- */
jQuery(document).ready(function($) {
	pageScroll();
	rollover();
});

/* !isUA -------------------------------------------------------------------- */
var isUA = (function(){
	var ua = navigator.userAgent.toLowerCase();
	indexOfKey = function(key){ return (ua.indexOf(key) != -1)? true: false;}
	var o = {};
	o.ie      = function(){ return indexOfKey("msie"); }
	o.fx      = function(){ return indexOfKey("firefox"); }
	o.chrome  = function(){ return indexOfKey("chrome"); }
	o.opera   = function(){ return indexOfKey("opera"); }
	o.android = function(){ return indexOfKey("android"); }
	o.ipad    = function(){ return indexOfKey("ipad"); }
	o.ipod    = function(){ return indexOfKey("ipod"); }
	o.iphone  = function(){ return indexOfKey("iphone"); }
	return o;
})();

/* !rollover ---------------------------------------------------------------- */
var rollover = function(){
	var suffix = { normal : '_no.', over   : '_on.'}
	$('a.over, img.over, input.over').each(function(){
		var a = null;
		var img = null;

		var elem = $(this).get(0);
		if( elem.nodeName.toLowerCase() == 'a' ){
			a = $(this);
			img = $('img',this);
		}else if( elem.nodeName.toLowerCase() == 'img' || elem.nodeName.toLowerCase() == 'input' ){
			img = $(this);
		}

		var src_no = img.attr('src');
		var src_on = src_no.replace(suffix.normal, suffix.over);

		if( elem.nodeName.toLowerCase() == 'a' ){
			a.bind("mouseover focus",function(){ img.attr('src',src_on); })
			 .bind("mouseout blur",  function(){ img.attr('src',src_no); });
		}else if( elem.nodeName.toLowerCase() == 'img' ){
			img.bind("mouseover",function(){ img.attr('src',src_on); })
			   .bind("mouseout", function(){ img.attr('src',src_no); });
		}else if( elem.nodeName.toLowerCase() == 'input' ){
			img.bind("mouseover focus",function(){ img.attr('src',src_on); })
			   .bind("mouseout blur",  function(){ img.attr('src',src_no); });
		}

		var cacheimg = document.createElement('img');
		cacheimg.src = src_on;
	});
};
/* !pageScroll -------------------------------------------------------------- */
var pageScroll = function(){
	jQuery.easing.easeInOutCubic = function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	}; 
	
	$(window).on('load resize',function(){
		//var scrolltop = $('#headerIn').height(); //header fixed
		$('a.scroll, .scroll a').each(function(){
			$(this).unbind('click').bind("click keypress",function(e){
				e.preventDefault();
				var target  = $(this).attr('href');
				//var targetY = $(target).offset().top-scrolltop; //header fixed
				var targetY = $(target).offset().top;
				var parent  = ( isUA.opera() )? (document.compatMode == 'BackCompat') ? 'body': 'html' : 'html,body';
				$(parent).animate(
					{scrollTop: targetY },
					400
				);
				return false;
			});
		});
	});
	
	$('.pageTop a').click(function(){
		$('html,body').animate({scrollTop: 0}, 'slow','swing');
		return false;
	});
}



/* !common --------------------------------------------------- */
$(function(){
	//スマホグローバルナビ
	$('.btnMenu').on('click',function(){
		var target = $(this).data('target');
		if($(target).hasClass("on")){
			$(target).removeClass("on");
			$('.btnMenu').removeClass("active"); 
			$('.navBg').fadeOut();
		}else{
			$(target).addClass("on");
			$('.btnMenu').addClass("active"); 
			$('.navBg').fadeIn();
		}
    });   
	$('.gNavi a,.navBg,.headLinks').click(function(){ 
		$('.gNavi').removeClass("on");
		$('.btnMenu').removeClass("active"); 
		$('.navBg').fadeOut();
	});
  
	$('.biggerlink').biggerlink();  
 
});


$(function(){

	$('.fixedBox .close').click(function(){
		$('.fixedBox').fadeOut(300);
	});

	$('.minclose').click(function(){
		$('#sideRight').toggleClass("active");
	});

	$('.huntBtn span').click(function(){
		$('#sideRight').removeClass("active");
	});

	/* carSlider*/
	  $('.carSlider ul').slick({
		arrows: false,
		infinite: true,
		autoplay: true,
    	dots: true,
		autoplaySpeed: 2000,
		slidesToShow: 1,
		centerMode: true,
		variableWidth: true,
		responsive: [
	      {
	        breakpoint: 768,
	        settings: {
	          slidesToShow: 1,
			  autoplay: true,
			  centerMode: true,
			  variableWidth: false
	        }
	      }
	    ]
	  });
$('.carSlider ul').on('beforeChange', function(event, slick, currentSlide, nextSlide){
 	muchHeight();
});
	/* popularSlider*/
  $('.popularSlider ul').slick({
    dots: false,
    infinite: true,
    pauseOnHover: false,
    autoplay: false,
    arrows: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
    	  slidesToScroll: 1,
		  centerMode: true,
		  variableWidth: true
        }
      }
    ]
  });

	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
		slidesToShow: 8,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		arrows: false,
		centerMode: false,
		focusOnSelect: true
	});





});

$(function(){
	$('.tabWrap').each(function(){
		var rwdTab = $(this);
	    var btnElm = rwdTab.children('.tabCtrl').find('a'),
	    contentsArea = rwdTab.children('.tabBox');
		btnElm.click(function(){
			var target = $(this).attr('href');
			btnElm.removeClass('btnAcv');
			$(this).addClass('btnAcv');
			contentsArea.removeClass('show')
			$(target).addClass('show');
	      	
	        return false;
	      });
	});   
});

$(function(){
	$('.mypageWrap').each(function(){
      var $this = $(this),
          $btn = $this.find('.mypageBtnDetail'),
          $box = $this.find('.mypageBox');
      		$btn.click(function(){
      	if($(this).hasClass('active')){
      		$box.stop().slideUp(300);
        	$(this).removeClass('active');
      	}else{
      		$box.stop().slideDown(300);
        	$(this).addClass('active');
      	}
        return false;
      });
    });
});

$(function(){
	$('.closeWrap').each(function(){
      var $this = $(this),
          $btn = $this.find('.closeBtn'),
          $box = $this.find('.closeBox');
      		$btn.click(function(){
      	if($(this).hasClass('active')){
      		$box.stop().slideUp(300);
        	$(this).removeClass('active');
      	}else{
      		$box.stop().slideDown(300);
        	$(this).addClass('active');
      	}
        return false;
      });
    });
});

// $(function() {
// 	$(".descBtn").click(function() {
// 		var td = $('.descNote');
// 		var txt = td.text();
// 		var input = $("<input type='textarea' value='" + txt + "'/ >");
// 		td.html(input);
// 		input.click(function() { return false; });
// 		input.trigger("focus");
// 		input.blur(function() {
// 			var newtxt = input.val();
// 			if (newtxt != txt) {
// 			td.html(newtxt);
// 			}
// 			else
// 			{
// 			td.html(newtxt);
// 			}
// 		});
// 	});
// });


$(function(){
	$('.js-showBtn').click(function(){
        var $parents = $(this).parents('.js-showMore'),
            $item = $parents.find('.js-showItems').not('.is_block'),
            _total = $item.length,
            _count = $(this).data('count');
        if(_total > _count){
            $item.each(function(i){
                if(i < _count){
                    $(this).addClass('is_block');
                }else{
                    return false;
                }
            });
        }else{
            $item.addClass('is_block');
            $(this).hide();
        }
    });

});


$(function(){
	$('.usWrap').each(function(){
		var rwdTab = $(this);
	    var btnElm = rwdTab.children('.usCtrl').find('a'),
	    contentsArea = rwdTab.children('.usBox');
		btnElm.click(function(){
			var target = $(this).attr('href');
			btnElm.removeClass('btnAcv');
			$(this).addClass('btnAcv');
			contentsArea.removeClass('show')
			$(target).addClass('show');
	      	
	        return false;
	      });
	});   
});

$(function(){
	$('.qwqWrap').each(function(){
      var $this = $(this),
          $btn = $this.find('.qwqBtn'),
          $box = $this.find('.qwqBox');
      		$btn.click(function(){
      	if($(this).hasClass('active')){
      		$box.stop().slideUp(300);
        	$(this).removeClass('active');
      	}else{
      		$box.stop().slideDown(300);
        	$(this).addClass('active');
      	}
        return false;
      });
    });
});