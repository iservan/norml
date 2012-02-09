<?php


function createTab($atts,$content)
{
	extract(
	shortcode_atts(array(  
        "title" => 'Tab title'
	    ), $atts)); 
	$content = do_shortcode($content);	
	$tab = $title." <hades> ".$content ."<tabend>";
	return $tab;
}

add_shortcode("tab","createTab");

function createTabWidget($atts,$content)
{
	extract(
	shortcode_atts(array(  
        "title" => 'Tab title'
	    ), $atts)); 
		
	$data = explode("<tabend>",do_shortcode($content));
	array_pop($data);
	$i =0;

    $titles = array();
	$contents = array();
	for($i=0;$i<count($data);$i++)
	{
		
			$temp = explode("<hades>",$data[$i]);
			$titles[$i] = $temp[0]; 
			$contents[$i] = $temp[1];
		
	}

   $tab = "<div class='shortcodes-tabs'><ul>";
   
	for($i=0;$i<count($titles);$i++)
	$tab = $tab."<li><a href='#shortcodetabs-{$i}'> $titles[$i] </a></li>";
	
	$tab = $tab."</ul>";
	
	for($i=0;$i<count($contents);$i++)
	$tab = $tab." <div id='shortcodetabs-{$i}'> $contents[$i] </div>	";
	  
	  
   $tab = $tab."</div>";
	
	return $tab;
}
add_shortcode("tabs","createTabWidget");


function createSection($atts,$content)
{
	extract(
	shortcode_atts(array(  
        "title" => 'Tab title'
	    ), $atts)); 
		$content = do_shortcode($content);
	$tab =  "<h3><a href=\"#\" >$title</a></h3>	<div> $content 	</div>";
	return $tab;
}

add_shortcode("section","createSection");

function createAccordion($atts,$content)
{
	extract(
	shortcode_atts(array(  
       
		"width"=>"100%"
	    ), $atts)); 
		
	$data = do_shortcode($content);
	$data = "<div class='shortcodes-accordion' style='width:$width'> $data </div>";

	return $data;
}
add_shortcode("accordion","createAccordion");


function createToggleBox($atts,$content)
{
	extract(
	shortcode_atts(array(  
        "title" => 'Box title',
		"width"=>"100%"
	    ), $atts)); 
		
	$data = do_shortcode($content);
	$data = "<div class='shortcodes-togglebox' style='width:$width'> <div class='toggletitle shortcodes-slidedown custom-font'> $title </div>  <div class='togglecontent'>  $data  </div></div>";

	return $data;
}
add_shortcode("toggle","createToggleBox");

