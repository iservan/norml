// JavaScript Document

/*

Author - WPTitans
Description - Main file for Javascript stuff for the theme. Powered by jQuery.

Index :-

1. Global Preloader
2. Titan Gallery Plugin
3. Main Code

*/

/* ================================================================================== */
/* == Global Preloader =============================================================== */
/* ================================================================================== */

 var preload = function(container,time,callback){
	   
	  temp = container.find("img");
	
	  temp.each(function(){
		  
		  $(this).bind("load error",function(){
		 
		  $(this).css({ "visibility": "visible" }).animate({ opacity:"1" },time);
		  
		  }).each(function(){
                if(this.complete || ($.browser.msie && parseInt($.browser.version) == 6)) { $(this).trigger('load'); callback(); }
            });
		  
	  });
	   
	  }
	  

	
			
/* ================================================================================== */
/* == Main Code Begin =============================================================== */
/* ================================================================================== */



/* ---------------------------------------------------------------------------------- */
/* -- Things need to be ready at first ---------------------------------------------- */
/* ---------------------------------------------------------------------------------- */

jQuery(document).ready(function(){
	
	
	$("#menu").addClass("clearfix");
	
	// remove unecessart p tags generated from autop
	$(".content").find("p:not(.separator)").each(function(){
	    if(jQuery.trim($(this).html())=="")
		$(this).remove();
	});

	
});	


/* ---------------------------------------------------------------------------------- */
/* -- When DOM is loaded  ----------------------------------------------------------- */
/* ---------------------------------------------------------------------------------- */


jQuery(function($){

/* ---------------------------------------------------------------------------------- */
/* -- Variables intializa  ----------------------------------------------------------- */
/* ---------------------------------------------------------------------------------- */
	
var obj,flickr_limit = 5,temp,temp_parent, i =0,sidebar = $(".sidebar"),menu = $("#menu");

/* ---------------------------------------------------------------------------------- */
/* -- Menu Stuff -------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------- */
  

	 $('.top-ads-section').cycle({
		fx: 'fade' , timeout: parseInt($("#bduration").val())
	});
	
$("#main-menu ul li").hover(function(){
	$(this).children(".sub-menu").slideDown('normal');
	
	},function(){
	
	$(this).children(".sub-menu").hide();	
		
		});


$("#menu>li").hover(function(){	$(this).children("a").animate({ color: "#aaaaaa" }, 600);
	
	},function(){	$(this).children("a").animate({ color: "#ffffff" }, 300);
		});


$("#topmenu>li").hover(function(){	$(this).children("a").animate({ color: "#333333" }, 600);
	
	},function(){	$(this).children("a").animate({ color: "#777777" }, 300);
		});


$("#topmenu li").hover(function(){
	
	
	
	$(this).children(".sub-menu").slideDown('normal');
	
	},function(){
	
	
	$(this).children(".sub-menu").hide();	
		
		});
		
		
var content = $(".two-third-width");


$('.footer-cols').each(function(){ $(this).find(".footer-wrap").last().css("border","none"); });


preload($(".posts"),500,function(){});

$(window).load(function(){
if(sidebar.height()>content.height())
content.height(sidebar.height()-30);
else
sidebar.height(content.height()+30);

if(! ( $.browser.msie && parseInt($.browser.version)==7 ) )
{
typewriter();
setInterval(function(){ typewriter() },60000);
}

});


$("#s").bind('focusin',function(){ $(this).val(''); });
function typewriter()
{
	 $("#s").val('');
	var i=0,str = "Type and hit enter to search …";
var timer = setInterval(function(){
	
	 	if(i==str.length) {
	clearInterval(timer);
	return;
		}
   
   $("#s").val($("#s").val()+str[i]);
   
  
	
	i++;
	},100);
}

$(".toggle-switch").toggle(function(){ 

$("#nivoslider,.quartz-slider").slideUp('normal'); $(this).addClass('inactive').removeClass('active'); 

 },function(){ 
 
 $("#nivoslider,.quartz-slider").slideDown('normal'); 
 
 $(this).addClass('active').removeClass('inactive');
 
   });



/* ==================================================================== */
/* == Ajax Loading===================================================== */
/* ==================================================================== */
/* 
$(".description h2 a").click(function(e){
	temp = $(this).attr('href');
	
	$(".two-third-width").animate({opacity:0,height:0},700,function(){
		
		$(this).remove();
		$(".ajax-wrapper").height(250);
		
		$(".sidebar").animate({opacity:0,height:0},500,function(){ 
		
		$(this).remove();
		$(".ajax-wrapper").load(temp+" .page",function(){
			
			$(".ajax-wrapper").css("height","auto");
			
			});
		
		
		});
		
		});
	
	e.preventDefault();
	});

*/

/* ==================================================================== */
/* == Misc Stuff ====================================================== */
/* ==================================================================== */

$("#comments_template .children").children("li").append("<span class='zapper'></span>");
$("#comments_template .commentlist>li").each(function(){
	
	if($(this).children(".children").length==0)
	$(this).css("background","none");
	
	});

$(".latest-tweets li").last().css("background","none");

// contact input settings
  
$("#qemail , #qmsg ,#qname").focusin(function(){ $(this).val('');});

// lightbox initialization 
  
$(".lightbox").prettyPhoto({animationSpeed:'slow'});

if($("#flickr-images").length>0)
{
		var temp,i,flickr_limit = $("#flickr-nos").val();
var fid =  $("#flickr-id").val();
	i =0;
	$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id="+fid+"&lang=en-us&format=json&jsoncallback=?", function(data){
		
$.each(data.items, function(i,item){
		
		if(i>=flickr_limit) 
		return;
		$("<img/>").css({  width:40,height:40 }).attr({
			"src": item.media.m,
			"alt" : item.media.m
			}).appendTo("#flickr-images").wrap("<a href='" + item.link + "'></a>");
			
		
		i++;
	});
	
  });
  
}


/* ==================================================================== */
/* == Top of Page Anchor stuff ======================================== */
/* ==================================================================== */ 

var scroll_button = $(".back-to-top").css("left",$(".page").offset().left-48);	


scroll_button.click(function(e){
	$('html, body').animate({scrollTop:0}, 'normal');
	e.preventDefault();
	});

$(window).scroll(function(e){
	
	if(scroll_button.position().top<220)
	scroll_button.fadeOut('fast');
	else
	scroll_button.fadeIn('fast');
	
	});	
	
/* ==================================================================== */
/* == Contact Form Settings =========================================== */
/* ==================================================================== */ 
	
	
	$("#qsubmit").click(function(e){
	 temp = $(this).parent().find(".loader");
	 //temp.fadeIn("slow");
	 var loader = $(this).parent().find(".ajax-loading-icon").fadeIn("slow");
	 
	 $.post( $(this).parent().find("#ajax_contact_path").val(),{ 
	 notify_email : $(this).parent().find("#notify_email").val(),
	 name : $(this).parent().find("#qname").val(),
	 email : $(this).parent().find("#qemail").val(),
	 message : $(this).parent().find("#qmsg").val()
	 
	 },function(data){
		
		
		if(data=="success") {
		loader.fadeOut("slow",function(){
			 temp.addClass('success-box').removeClass('error-box').fadeToggle("slow");
			 setTimeout(function(){ temp.fadeToggle("normal"); },4000);
			 });
			 
		 }
		else
		{
		  loader.fadeOut("slow");
			temp.removeClass('success-box').addClass('error-box').html("<p>Error</p>");
			 temp.fadeToggle("slow");
			 setTimeout(function(){ temp.fadeToggle("normal"); },4000);
			 
		}	 
		
		});
		
		
		e.preventDefault();
		
	});
    
	$(".d_submit").click(function(e){
		
		
		obj = $(this);
		var msg = obj.parents(".dynamic_forms").find(".loader");
		var array = obj.parent().serializeArray();
		var loader = $(this).parents(".dynamic_forms").find(".ajax-loading-icon").fadeIn("slow");
		
		$.post( obj.parent().attr("action"), { key:obj.parent().find(".form_key").val() , values : array , notify_email : obj.parent().find(".notify_email").val() , recaptcha_challenge_field:obj.parent().find("#recaptcha_challenge_field").val()   , recaptcha_response_field:obj.parent().find("#recaptcha_response_field").val()  } , function(data){
			
			if(data=="success")
			{
				loader.fadeOut("slow");
			    msg.addClass('success-box').removeClass('error-box').html("<p> Your Message been sent </p>");
			    msg.fadeIn("slow");
			}
			else
			{
				loader.fadeOut("slow");
				msg.removeClass('success-box').addClass('error-box').html("<p>"+data+"</p>");
				msg.fadeIn("slow");
			}
			
			}  );
		
		e.preventDefault();
		
		});
	
/* ==================================================================== */
/* == Comment Stylings ================================================ */
/* ==================================================================== */ 
$(".form-submit").append('<span class="comment-loader"></span>');
	
var comment_loader = $(".comment-loader");

	if(! ( $.browser.msie && $.browser.version <= 8 ) )
	$("#submit").live('click',function(e){
		var form = $(this).parents('form');
		var comment_url = form.attr('action');
		$(".comment-loader").fadeIn('normal');
		var json = form.serializeObject();
		
	
		
		$.post(comment_url, json ,function(data){
			
			var temp = jQuery(data);
			
			
				
				
				
			
			$("#comments_template").html(temp.find("#comments_template").html());
			$(".comment-loader").fadeOut('normal');
			$(".form-submit").append('<span class="comment-loader"></span>');
			});
		
		e.preventDefault();
		});

			
	});
	

$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};
	
	
/*
 * jQuery Cycle Lite Plugin
 * http://malsup.com/jquery/cycle/lite/
 * Copyright (c) 2008-2011 M. Alsup
 * Version: 1.3 (01-JUN-2011)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 * Requires: jQuery v1.3.2 or later
 */
(function($) {

var ver = 'Lite-1.3';

$.fn.cycle = function(options) {
    return this.each(function() {
        options = options || {};
        
        if (this.cycleTimeout) clearTimeout(this.cycleTimeout);
        this.cycleTimeout = 0;
        this.cyclePause = 0;
        
        var $cont = $(this);
        var $slides = options.slideExpr ? $(options.slideExpr, this) : $cont.children();
        var els = $slides.get();
        if (els.length < 2) {
            window.console && console.log('terminating; too few slides: ' + els.length);
            return; // don't bother
        }

        // support metadata plugin (v1.0 and v2.0)
        var opts = $.extend({}, $.fn.cycle.defaults, options || {}, $.metadata ? $cont.metadata() : $.meta ? $cont.data() : {});
		var meta = $.isFunction($cont.data) ? $cont.data(opts.metaAttr) : null;
		if (meta)
			opts = $.extend(opts, meta);
            
        opts.before = opts.before ? [opts.before] : [];
        opts.after = opts.after ? [opts.after] : [];
        opts.after.unshift(function(){ opts.busy=0; });
            
        // allow shorthand overrides of width, height and timeout
        var cls = this.className;
        opts.width = parseInt((cls.match(/w:(\d+)/)||[])[1]) || opts.width;
        opts.height = parseInt((cls.match(/h:(\d+)/)||[])[1]) || opts.height;
        opts.timeout = parseInt((cls.match(/t:(\d+)/)||[])[1]) || opts.timeout;

        if ($cont.css('position') == 'static') 
            $cont.css('position', 'relative');
        if (opts.width) 
            $cont.width(opts.width);
        if (opts.height && opts.height != 'auto') 
            $cont.height(opts.height);

        var first = 0;
        $slides.css({position: 'absolute', top:0, left:0}).each(function(i) { 
            $(this).css('z-index', els.length-i) 
        });
        
        $(els[first]).css('opacity',1).show(); // opacity bit needed to handle reinit case
        if ($.browser.msie) els[first].style.removeAttribute('filter');

        if (opts.fit && opts.width) 
            $slides.width(opts.width);
        if (opts.fit && opts.height && opts.height != 'auto') 
            $slides.height(opts.height);
        if (opts.pause) 
            $cont.hover(function(){this.cyclePause=1;}, function(){this.cyclePause=0;});

        var txFn = $.fn.cycle.transitions[opts.fx];
		txFn && txFn($cont, $slides, opts);
        
        $slides.each(function() {
            var $el = $(this);
            this.cycleH = (opts.fit && opts.height) ? opts.height : $el.height();
            this.cycleW = (opts.fit && opts.width) ? opts.width : $el.width();
        });

        if (opts.cssFirst)
            $($slides[first]).css(opts.cssFirst);

        if (opts.timeout) {
            // ensure that timeout and speed settings are sane
            if (opts.speed.constructor == String)
                opts.speed = {slow: 600, fast: 200}[opts.speed] || 400;
            if (!opts.sync)
                opts.speed = opts.speed / 2;
            while((opts.timeout - opts.speed) < 250)
                opts.timeout += opts.speed;
        }
        opts.speedIn = opts.speed;
        opts.speedOut = opts.speed;

 		opts.slideCount = els.length;
        opts.currSlide = first;
        opts.nextSlide = 1;

        // fire artificial events
        var e0 = $slides[first];
        if (opts.before.length)
            opts.before[0].apply(e0, [e0, e0, opts, true]);
        if (opts.after.length > 1)
            opts.after[1].apply(e0, [e0, e0, opts, true]);
        
        if (opts.click && !opts.next)
            opts.next = opts.click;
        if (opts.next)
            $(opts.next).bind('click', function(){return advance(els,opts,opts.rev?-1:1)});
        if (opts.prev)
            $(opts.prev).bind('click', function(){return advance(els,opts,opts.rev?1:-1)});

        if (opts.timeout)
            this.cycleTimeout = setTimeout(function() {
                go(els,opts,0,!opts.rev)
            }, opts.timeout + (opts.delay||0));
    });
};

function go(els, opts, manual, fwd) {
    if (opts.busy) return;
    var p = els[0].parentNode, curr = els[opts.currSlide], next = els[opts.nextSlide];
    if (p.cycleTimeout === 0 && !manual) 
        return;

    if (manual || !p.cyclePause) {
        if (opts.before.length)
            $.each(opts.before, function(i,o) { o.apply(next, [curr, next, opts, fwd]); });
        var after = function() {
            if ($.browser.msie)
                this.style.removeAttribute('filter');
            $.each(opts.after, function(i,o) { o.apply(next, [curr, next, opts, fwd]); });
        };

        if (opts.nextSlide != opts.currSlide) {
            opts.busy = 1;
            $.fn.cycle.custom(curr, next, opts, after);
        }
        var roll = (opts.nextSlide + 1) == els.length;
        opts.nextSlide = roll ? 0 : opts.nextSlide+1;
        opts.currSlide = roll ? els.length-1 : opts.nextSlide-1;
    }
    if (opts.timeout)
        p.cycleTimeout = setTimeout(function() { go(els,opts,0,!opts.rev) }, opts.timeout);
};

// advance slide forward or back
function advance(els, opts, val) {
    var p = els[0].parentNode, timeout = p.cycleTimeout;
    if (timeout) {
        clearTimeout(timeout);
        p.cycleTimeout = 0;
    }
    opts.nextSlide = opts.currSlide + val;
    if (opts.nextSlide < 0) {
        opts.nextSlide = els.length - 1;
    }
    else if (opts.nextSlide >= els.length) {
        opts.nextSlide = 0;
    }
    go(els, opts, 1, val>=0);
    return false;
};

$.fn.cycle.custom = function(curr, next, opts, cb) {
    var $l = $(curr), $n = $(next);
    $n.css(opts.cssBefore);
    var fn = function() {$n.animate(opts.animIn, opts.speedIn, opts.easeIn, cb)};
    $l.animate(opts.animOut, opts.speedOut, opts.easeOut, function() {
        $l.css(opts.cssAfter);
        if (!opts.sync) fn();
    });
    if (opts.sync) fn();
};

$.fn.cycle.transitions = {
    fade: function($cont, $slides, opts) {
		$slides.not(':eq(0)').hide();
		opts.cssBefore = { opacity: 0, display: 'block' };
		opts.cssAfter  = { display: 'none' };
		opts.animOut = { opacity: 0 };
		opts.animIn = { opacity: 1 };
    },
    fadeout: function($cont, $slides, opts) {
		opts.before.push(function(curr,next,opts,fwd) {
			$(curr).css('zIndex',opts.slideCount + (fwd === true ? 1 : 0));
			$(next).css('zIndex',opts.slideCount + (fwd === true ? 0 : 1));
		});
		$slides.not(':eq(0)').hide();
		opts.cssBefore = { opacity: 1, display: 'block', zIndex: 1 };
		opts.cssAfter  = { display: 'none', zIndex: 0 };
		opts.animOut = { opacity: 0 };
    }
};

$.fn.cycle.ver = function() { return ver; };

// @see: http://malsup.com/jquery/cycle/lite/
$.fn.cycle.defaults = {
	animIn:        {},
	animOut:       {},
	fx:           'fade',
    after:         null, 
    before:        null, 
	cssBefore:     {},
	cssAfter:      {},
    delay:         0,    
    fit:           0,    
    height:       'auto',
	metaAttr:     'cycle',
    next:          null, 
    pause:         0,    
    prev:          null, 
    speed:         1000, 
    slideExpr:     null,
    sync:          1,    
    timeout:       4000 
};

})(jQuery);




addComment = {
	moveForm : function(commId, parentId, respondId, postId) {
		var t = this, div, comm = t.I(commId), respond = t.I(respondId), cancel = t.I('cancel-comment-reply-link'), parent = t.I('comment_parent'), post = t.I('comment_post_ID');

		if ( ! comm || ! respond || ! cancel || ! parent )
			return;

		t.respondId = respondId;
		postId = postId || false;
        
		jQuery(respond).hide();
		
		if ( ! t.I('wp-temp-form-div') ) {
			div = document.createElement('div');
			div.id = 'wp-temp-form-div';
			div.style.display = 'none';
			respond.parentNode.insertBefore(div, respond);
		}

		comm.parentNode.insertBefore(respond, comm.nextSibling);
		
		jQuery(respond).slideDown(700);
		
		if ( post && postId )
			post.value = postId;
		parent.value = parentId;
		cancel.style.display = '';

		cancel.onclick = function() {
			var t = addComment, temp = t.I('wp-temp-form-div'), respond = t.I(t.respondId);

			if ( ! temp || ! respond )
				return;
            
			jQuery(respond).slideUp(500,function(){
				
			t.I('comment_parent').value = '0';
		 	temp.parentNode.insertBefore(respond, temp);
			temp.parentNode.removeChild(temp);
	       $(this).show();
	         
				
				});
			
	       this.style.display = 'none';
		   this.onclick = null;
			
			return false;
		}

		try { t.I('comment').focus(); }
		catch(e) {}

		return false;
	},

	I : function(e) {
		return document.getElementById(e);
	}
}
