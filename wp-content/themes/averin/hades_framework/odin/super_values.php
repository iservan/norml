<?php

$h_slides = array();
$h_images_sources = array(URL."/images/1.png",URL."/images/2.png",URL."/images/3.png",URL."/images/4.png");
$h_description =  array(
"Aliquam commodo, justo scelerisque suscipit varius, purus ligula posuere justo, gravida dictum odio neque in quam. Vestibulum luctus placerat tincidunt. Sed a est magna, at semper nulla. Fusce pretium bibendum vestibulum. ",
"In pretium blandit mi. Proin odio massa, sagittis a euismod ac, varius non nunc. In hac habitasse platea dictumst. Nullam commodo, urna a blandit faucibus, turpis dui porta lorem, ac varius massa est quis arcu.",
"Morbi porttitor, magna sed rhoncus semper, sapien ipsum auctor orci, in pretium orci nisi a ipsum. Morbi ut ligula purus, a blandit ante. Nullam suscipit, quam non varius tempus, mi tellus vulputate nulla, in pharetra elit ante nec tortor. ",
"Aliquam commodo, justo scelerisque suscipit varius, purus ligula posuere justo, gravida dictum odio neque in quam. Vestibulum luctus placerat tincidunt. Sed a est magna, at semper nulla. Fusce pretium bibendum vestibulum. ");
$h_title =  array(
"Aliquam commodo justo scelerisque. ",
"Vestibulum luctus placerat tincidunt",
"Morbi porttitor, magna sed rhoncus semper ",
"Nullam commodo urna a blandit faucibus. ",
);

$i =0;
foreach($h_title as $title)
{
	$h_slides[] = array(
				'src' => $h_images_sources[$i],
				'link' => "http://themeforest.net/user/wptitans/portfolio" ,
				'description' => $h_description[$i++] ,
				'type' => "upload",
				'id' => "",
				'title' => $title
				);
}



function enable_widgets()
{

$sidebars = get_option("sidebars_widgets");
$sidebars["sidebar-1"] = array("search-2","twitterrsscount-2","custombox-2","popularpost-2","viewedpost-2","recent-comments-2");
$sidebars["sidebar-2"] = array ( "twitter_widget-2" , "feedburnersubscribe-2");
$sidebars["sidebar-3"] = array ( "categories-2" , "links-2");
$sidebars["sidebar-4"] = array ( "tag_cloud-2" , "contactform-2");

      
update_option("sidebars_widgets",$sidebars);

$search = get_option("widget_search");	
$search[2] =array("title" => "");
$search["_multiwidget"] =   1 ;
update_option("widget_search",$search);


$twitter_rss = get_option("widget_twitterrsscount");	
$twitter_rss[2] =array("twitter_id" => "envatowebdev", "feedburner_address" => "http://feeds.feedburner.com/nettuts" , "title" => "" , "default_rss_count" => "85,318" );
$twitter_rss["_multiwidget"] =   1 ;
update_option("widget_twitterrsscount",$twitter_rss);

$custom_box = get_option("widget_custombox");	
array_pop($custom_box);
$custom_box[2] =array(
	"link" => "",
	"description" => "Fusce feugiat posuere congue. Etiam laoreet odio nec eros interdum laoreet. Aliquam ullamcorper porttitor sapien, eget vulputate dui interdum id. Vivamus et eros magna. 

Nam sed justo id leo lobortis accumsan. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.",
	"title" => "About us",
	"intro_image_link" => ""
	
	
	);
 			 
$custom_box["_multiwidget"] =   1 ;
update_option("widget_custombox",$custom_box);
		
	
$popposts = get_option("widget_popularpost");	
$popposts[2] = array(
"title" => "Popular Posts",
"count" => "5");
$popposts["_multiwidget"] =   1 ;
update_option("widget_popularpost",$popposts);

$viewed = get_option("widget_viewedpost");	
$viewed[2] = array(
"title" => "Most Viewed",
"count" => "5");
$viewed["_multiwidget"] =   1 ;
update_option("widget_viewedpost",$viewed);



$twitter = get_option("widget_twitter_widget");	
$twitter[2] =array("title" => "Latest from Twitter" , "username" => "WPTitan", "tweet_count" => 3);
$twitter["_multiwidget"] =   1 ;
update_option("widget_twitter_widget",$twitter);


$feeds = get_option("widget_feedburnersubscribe");	
$feeds[2] =array("link" => "nettuts" , "description" => "Sed diam metus, porttitor eget viverra vel, posuere eget purus. Donec libero nunc, ornare quis ultricies non, viverra eu metus. Vestibulum pulvinar, lorem sit amet eleifend pulvinar, purus augue congue quam.", "title" => "Subscribe to our feeds" );
$feeds["_multiwidget"] =   1 ;
update_option("widget_feedburnersubscribe",$feeds);


$categories = get_option("widget_categories");	
$categories[2] =array("title" => "Categories" , "count" => "1", "hierarchical" => "0" , "dropdown" =>"0");
$categories["_multiwidget"] =   1 ;
update_option("widget_categories",$categories);		
		
	
$links = get_option("widget_links");	
$links[2] = array( "images" => 1 , "name" => 1 , "description" =>  0 ,"rating" => 0, "category" => 0);
$links["_multiwidget"] =   1 ;
update_option("widget_links",$links);		

$tags = get_option("widget_tag_cloud");	
$tags[2] = array( "title" => "Tags " , "taxonomy" => "post_tag");
$tags["_multiwidget"] =   1 ;
update_option("widget_tag_cloud",$tags);	


$contact = get_option("widget_contactform");	
$contact[2] = array(
"title" => "Quick Contact",
"email" => "test@testingemail.com",
 "messsage" =>""

);
$contact["_multiwidget"] =   1 ;
update_option("widget_contactform",$contact);

}



function enable_theme_content(){
	
	 global $wpdb;
	 
	 $wpdb->query("UPDATE $wpdb->usermeta SET meta_value=\"false\" WHERE meta_key = \"show_admin_bar_front\"");
	 
	$contact_forms = array ( 
	 
	 array ( "key" => "LHX639NL36" , "email_notification" => "" , "captacha_verification" => "" , "auto_respond" => "", "layout_style" => "block" ,  "label_values" => array ( "Name","Email","Service","Subject" ) , "name_value" => array ("","","","" ), "form_element" => array ( "text" , "text" ,"select : Web Development, Wordpress, Graphic Design" ,"textarea" ) ,"email_notification_mail" => ""), 
		 
	 array ( "key" => "5UX0G72F38","email_notification" =>"", "captacha_verification" => true ,"auto_respond" => true ,"layout_style" => "block", "label_values" => array ( "Name","Address","Subject","What's it about","Comment" ) ,"name_value" => array ( "","","","","" ) ,"form_element" => array ( "text", "text" ,"text", "select" ,"textarea" ) ,"email_notification_mail" =>"" ) ) ;
	$tflag = true;
 for($i=1;$i<=5;$i++)
 {
		 update_option("hades_banner_link{$i}","#");
		 if($tflag)
		{ 
		  update_option("hades_banner_img{$i}",URL."/images/top-banner.png");
		  $tflag = false;
		}
		else
		{
		  update_option("hades_banner_img{$i}",URL."/images/ads72890.jpg");
		  $tflag = true;
		}
	
	 
 }
   
	update_option("hades_forms",""); 
	 
	}	
	
