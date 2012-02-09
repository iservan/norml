<?php

if(is_admin())
return;

function init_slider_scripts(){ 
$slider = (!get_option("hades_feature_slider")) ? "Nivo Slider" : get_option("hades_feature_slider");
$auto = (!get_option("hades_auto_feature_slider")) ? "true" : get_option("hades_auto_feature_slider");


switch($slider){   
		  case "Scrollable Slider" : wp_enqueue_script("jquery-tools", URL. "/js/jquery.tools.min.js", array('jquery'), "1.0"); break; 
		  case "Accordion" :  wp_enqueue_script("jquery-kwick", URL . "/js/jquery.kwicks-1.5.1.js", array('jquery'), "1.0"); 
		   case "Nivo Slider" : wp_enqueue_script("jquery-nivo-slider",URL . "/js/jquery.nivo.slider.pack.js", array('jquery'), "2.5.1"); break;
		  case "Fade" : 
		  case "HTML 5 slider" : 
		  case "Cubes Grow Center"  :
		  case "Cubes Grow"  : 
		  case "Strips alternate" :
		  case "Strips fade" :
		  case "Strips half fade" :
		  case "Cube side grow" :
		  case "Blue Channel(html5)" :
		  case "Red Channel(html5)" : 
		  case "Green Channel(html5)" :
		  case "Overlay" :
		  case "Color burn" :
		  case "Screen" :
		  case "jQuery Slider" : 
		  break;
	}
	
}
add_action('init', 'init_slider_scripts');


function slidersettings(){ 
$slider = (get_option("hades_feature_slider")=="") ? "Nivo Slider" : get_option("hades_feature_slider");
$auto = (get_option("hades_auto_feature_slider")=="") ? "true" : get_option("hades_auto_feature_slider");
$slider_duration = (get_option("hades_feature_slider_duration")=="") ? "3000" : get_option("hades_feature_slider_duration");

$autoplay = ', autoplay: true';
if($auto=="false")
$autoplay = ', autoplay: false';

?>
<script type="text/javascript">
jQuery(function($){
<?php

switch($slider){   
   case "Scrollable Slider" :
	if($auto=="true"){ ?>
	var featureSlider = $(".featured-slider").scrollable({circular: true}).autoscroll({ api:true , interval:<?php echo $slider_duration; ?> });
   <?php } else { ?>
   var featureSlider = $(".featured-slider").scrollable({ api:true  ,circular: true});
   <?php } ?>
   
    $(".f-next").click(function(e){ featureSlider.next(); e.preventDefault(); });
	 $(".f-prev").click(function(e){ featureSlider.prev(); e.preventDefault(); });
	<?php break;  
	
    case "Accordion" : ?>
	 $('.kwicks').kwicks({  
        max : 880,  
        spacing : 0  
    });
	var elt;
	$('.kwicks li').hover(function(){
	elt = $(this);
		elt.children(".description").css("visibility","visible").delay(700).animate({opacity:1},1000);
		},function(){
			
			$(this).children(".description").stop(true,true).css({"visibility":"hidden","opacity":0 });
			
			});
	
	<?php break; 
     case "HTML 5 slider" : ?>
		$(".quartz-slider>ul").quartzslider({ time:<?php echo $slider_duration; ?>, arrowControls:false ,height:305,width:632 , mode:'html5' <?php echo $autoplay; ?> , controls:true });	
	<?php break; 
	 case "jQuery Slider" : ?>
		$(".quartz-slider>ul").quartzslider({ time:<?php echo $slider_duration; ?> , arrowControls:false,height:305,width:632 , mode:'default'<?php echo $autoplay; ?> , controls:true});	
	<?php break; 
	case "Fade" : ?>
		$(".quartz-slider>ul").quartzslider({ time:<?php echo $slider_duration; ?> , arrowControls:false,height:305,width:632 ,  effect:0  <?php echo $autoplay; ?>, controls:true});	
	<?php break; 
	case "Cubes Grow Center"  : ?>
		$(".quartz-slider>ul").quartzslider({ time:<?php echo $slider_duration; ?> , arrowControls:false,height:305,width:632 ,  effect:1 <?php echo $autoplay; ?> , controls:true});	
	<?php break; 
	case "Cubes Grow"  : ?>
		$(".quartz-slider>ul").quartzslider({ time:<?php echo $slider_duration; ?> , arrowControls:false,height:305,width:632 ,  effect:2 <?php echo $autoplay; ?> , controls:true});	
	<?php break; 
	case "Strips alternate" : ?>
		$(".quartz-slider>ul").quartzslider({ time:<?php echo $slider_duration; ?>, arrowControls:false ,height:305,width:632 ,  effect:4 <?php echo $autoplay; ?> , controls:true});	
	<?php break; 
	case "Strips fade" : ?>
		$(".quartz-slider>ul").quartzslider({ time:<?php echo $slider_duration; ?>, arrowControls:false ,height:305,width:632 ,  effect:3 <?php echo $autoplay; ?> , controls:true});	
	<?php break; 
	case "Strips half fade" : ?>
		$(".quartz-slider>ul").quartzslider({time:<?php echo $slider_duration; ?> , arrowControls:false, height:305,width:632 ,  effect:5 <?php echo $autoplay; ?> , controls:true});	
	<?php break; 
	case "Cube side grow" : ?>
		$(".quartz-slider>ul").quartzslider({ time:<?php echo $slider_duration; ?>, arrowControls:false ,height:305,width:632 ,  effect:6<?php echo $autoplay; ?>  , controls:true});	
	<?php break; 
	case "Blue Channel(html5)" : ?>
		$(".quartz-slider>ul").quartzslider({ time:<?php echo $slider_duration; ?> , arrowControls:false,height:305,width:632 ,  effect:26 <?php echo $autoplay; ?> , controls:true});	
	<?php break; 
	case "Red Channel(html5)" : ?>
		$(".quartz-slider>ul").quartzslider({ time:<?php echo $slider_duration; ?> , arrowControls:false,height:305,width:632 ,  effect:27 <?php echo $autoplay; ?> , controls:true});	
	<?php break; 
	case "Green Channel(html5)" : ?>
		$(".quartz-slider>ul").quartzslider({ time:<?php echo $slider_duration; ?> , arrowControls:false,height:305,width:632 ,  effect:28  <?php echo $autoplay; ?>, controls:true});	
	<?php break; 
	case "Overlay" : ?>
		$(".quartz-slider>ul").quartzslider({ time:<?php echo $slider_duration; ?> , arrowControls:false,height:305,width:632 ,  effect:29 <?php echo $autoplay; ?> , controls:true});	
	<?php break; 
	case "Color burn" : ?>
		$(".quartz-slider>ul").quartzslider({ time:<?php echo $slider_duration; ?>, arrowControls:false ,height:305,width:632 ,  effect:30 <?php echo $autoplay; ?> , controls:true});	
	<?php break; 
	case "Screen" : ?>
		$(".quartz-slider>ul").quartzslider({time:<?php echo $slider_duration; ?>, arrowControls:false , height:305,width:632 ,  effect:31  <?php echo $autoplay; ?>, controls:true});	
	<?php break; 
   case "Nivo Slider" : ?>
        
		<?php if($auto=="true"){ ?>
        $('#nivoslider').nivoSlider({ pauseTime:<?php echo $slider_duration; ?> , height:305,width:632 });
		<?php } else { ?>
		$('#nivoslider').nivoSlider({ pauseTime:<?php echo $slider_duration; ?> , height:305,width:632 ,  manualAdvance:true });
	<?php } break; 	
	}
?>

});
</script>
<?php
	
}
add_action("wp_head","slidersettings");
