<?php

$homebar = array(
  'name' => 'Blog Sidebar',
  'description' => 'Widgets in this area will be shown in the right blog sidebar.',
  'before_widget' => '<div class="sidebar-wrap clearfix">',
  'after_widget' => '</div>',
  'before_title' => '<h5 class="custom-font heading">',
  'after_title' => '</h5>',
);

$footerbar1 = array(
  'name' => ("Footer Column 1"),
  'description' => 'Widgets will be shown in the footer.',
  'before_widget' => '<div class="footer-wrap clearfix">',
  'after_widget' => '</div>',
  'before_title' => '<h4 class="custom-font heading">',
  'after_title' => '</h4>',
);

$footerbar2 = array(
  'name' => ("Footer Column 2"),
  'description' => 'Widgets will be shown in the footer.',
  'before_widget' => '<div class="footer-wrap clearfix">',
  'after_widget' => '</div>',
  'before_title' => '<h4 class="custom-font heading">',
  'after_title' => '</h4>',
);

$footerbar3 = array(
  'name' => ("Footer Column 3"),
  'description' => 'Widgets will be shown in the footer.',
  'before_widget' => '<div class="footer-wrap clearfix">',
  'after_widget' => '</div>',
  'before_title' => '<h4 class="custom-font heading">',
  'after_title' => '</h4>',
);

$sidebars = array($homebar,$footerbar1,$footerbar2,$footerbar3);

if(function_exists('register_sidebars')){
	
	foreach($sidebars as $sidebar)
	register_sidebar($sidebar);
	

} 



$dynamic_active_sidebars = get_option("hades_active_sidebars");
if($dynamic_active_sidebars=="")
$dynamic_active_sidebars = array();



foreach($dynamic_active_sidebars as  $widget)
{
	
	$temp_widget = array(
  'name' => __( $widget),
  'description' => __('This is a dynamic sidebar'),
  'before_widget' => '<div class="dynamic-wrap sidebar-wrap clearfix">',
  'after_widget' => '</div>',
  'before_title' => '<h5 class="custom-font heading">',
  'after_title' => '</h5>',
);

register_sidebar($temp_widget);

}

