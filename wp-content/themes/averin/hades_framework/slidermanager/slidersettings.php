<?php
$slider_type = (!get_option("hades_feature_slider")) ? "Gallery Slider" : get_option("hades_feature_slider");
	
	
	switch($slider_type){   
	 case "Scrollable Slider" : include('featureSlider-scroller.php'); break; 
    case "Gallery Slider" : include('featureSlider.php'); break; 
	case "Accordion" : include('featureSlider-accordian.php'); break;
    case "Nivo Slider" :  include('featureSlider-nivo.php'); break;
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
	 case "jQuery Slider" :  include('featureSlider-jquery.php'); break;
	case "3D Slider" : include('init_piecemaker.php'); break;
	}