<?php
$path = __FILE__;
$pathwp = explode( 'wp-content', $path );
$wp_url = $pathwp[0];

require_once( $wp_url.'/wp-load.php' );

$bg_texture = get_option("hades_header_texture");
if($bg_texture!="none")
$bg_texture = (!$bg_texture) ?  URL.'/sprites/textures/'."raster-texture.png" :  URL.'/sprites/textures/'.$bg_texture.".png"; 
else
$bg_texture = '';	

if(get_option("hades_bg_custom")=="true")
$bg_texture = get_option("hades_bg_custom_texture");	

$bd_bg = "#f1f1f1" ; 	

$h1 = get_option("hades_h1");
$h1 = (!$h1) ? "28px" : $h1."px"; 

$h2 = get_option("hades_h2");
$h2 = (!$h2) ? "26px" : $h2."px"; 

$h3 = get_option("hades_h3");
$h3 = (!$h3) ? "24px" : $h3."px"; 

$h4 = get_option("hades_h4");
$h4 = (!$h4) ? "18px" : $h4."px"; 

$h5 = get_option("hades_h5");
$h5 = (!$h5) ? "12px" : $h5."px"; 

$h6 = get_option("hades_h6");
$h6 = (!$h6) ? "10px" : $h6."px"; 


$fwf = get_option("hades_footer_title");
$fwf = (!$fwf) ? "16px" : $fwf."px"; 

$swf = get_option("hades_sidebar_title");
$swf = (!$swf) ? "16px" : $swf."px"; 

$body_size = get_option("hades_bd_size");
$body_size = (!$body_size) ? "12px" : $body_size."px"; 


$linkc = get_option("hades_link_font_color");
$linkc = (!$linkc) ? "#333333" : "#".$linkc; 

$linkhc = get_option("hades_link_hover_font_color");
$linkhc = (!$linkhc) ? "#777777" : "#".$linkhc; 

$footerlc = get_option("hades_footer_link_font_color");
$footerlc = (!$footerlc) ? "#aaaaaa" : "#".$footerlc; 

$footerhlc = get_option("hades_footer_hover_link_font_color");
$footerhlc = (!$footerhlc) ? "#ffffff" : "#".$footerhlc; 
$excode =  '';
if(get_option("hades_enable_slider_desc")=="false")
$excode = ".nivo-caption , .quartz .description{display:none!important; }  ";

?>

<style type="text/css">

body{ background-color:<?php echo $bd_bg?>; background-image:url(<?php echo $bg_texture ?>); font-size:<?php echo $body_size; ?> ; }
<?php echo $excode;?>
.content h1 { font-size:<?php echo $h1; ?> ; }
.content  h2 { font-size:<?php echo $h2; ?> ; } 
.content  h3 { font-size:<?php echo $h3; ?> ; }
.content  h4 { font-size:<?php echo $h4; ?> ; }
.content  h5 { font-size:<?php echo $h5; ?> ; }
.content  h6 { font-size:<?php echo $h6; ?> ; } 
.content a { color:<?php echo $linkc; ?> !important;  }
.content a:hover { color:<?php echo $linkhc; ?>!important ;  }

 .footer-wrap .custom-box-title , .footer-wrap h4  { font-size:<?php echo $fwf; ?> ;  }
 .sidebar-wrap .custom-box-title ,  .sidebar-wrap h5   { font-size:<?php echo $swf; ?> ; }
 .footer-wrap a { color:<?php echo $footerlc; ?>!important;  }
 .footer-wrap a:hover { color:<?php echo $footerhlc; ?>!important;  }
</style>