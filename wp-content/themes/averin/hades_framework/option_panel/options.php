<?php 

/* 

======================================================================================
------------------------------- Hades Option Panel -----------------------------------
======================================================================================

Version 1.0 
Current Elements - text, textarea, checkbox, toggle button, slider, color picker, drop down lists.
Sub Panel Activated - True
======================================================================================

*/

$cufon_fonts = array("Acid","akaDora","Aller","Androgyne","Champagne__Limousines","Colaborate","Delicious","DistrictThin","Existence_Light","GeosansLight");
$options = array (
 

  // ====================================== General Theme options [ Tab 1] ======================================

	array( 
		    "name" => "General",
	  	    "type" => "section"
		  ),
		  
	array( 
			"name" => $themename." Options",
			"type" => "information",
			"description" => "In this option panel your able to change the basic setting of Ambience. Just follow the info besides the functions and you will be ready in a snap."
		  ),
		  
	array( "type" => "open"), 
	
  // ======================================Sub Panel 1 Begins ======================================
 
				array(
						"name" => "&rarr; Basic" , 
						"type"=>"subtitle", 
						"id"=>"colorschemes"
					  ), 
			   
			 	array( 
						"name" => "Logo URL",
						"desc" => "Upload your logo. Please keep the dimensions 195x92. ",
						"id" => $shortname."_logo",
						"type" => "upload",
						"std" => URL."/images/logo.png"
					),
			
				
				array( 
						"name" => "Fav ICO",
						"desc" => "Upload your favicon.",
						"id" => $shortname."_favico",
						"type" => "upload",
						"std" => URL."/images/favico.ico"
					),	
					/*
			   array( 
						"name" => "Styles",
						"desc" => ".",
						"id" => $shortname."_stylesheet",
						"type" => "select",
						"options" => array("style.css","style1.css", "style2.css", "style3.css", "style4.css", "style5.css", "style6.css", "style7.css", "style8.css", "style9.css", "style10.css", "style11.css", "style12.css", "style13.css", "style14.css", "style15.css", "style16.css", "style17.css", "style18.css", "style19.css", "style20.css"),
						"std" => "style.css"
					  ),
					  */
					   
			 	array( 
						"name" => "Enter your feedburner ID",
						"desc" => "Add the ID from your FeedBurner account in here.",
						"id" => $shortname."_feedburner",
						"type" => "text",
						"std" => "http://feeds.feedburner.com/yourID"
					),
					
				
					
				
				  array( "name" => "Google API Key",
					"desc" => "Required for the Smart Sense url shortener to work. For more details <a href='http://code.google.com/apis/loader/signup.html'>visit</a> Google for more info about there API",
					"id" => $shortname."_api_key",
					"type" => "text",
					"std" =>  "" ),		
					
				  array( "name" => "ReCaptacha Public Key",
					"desc" => "Required for the captcha to work, get your key from <a href='http://www.google.com/recaptcha/whyrecaptcha'>here</a>",
					"id" => $shortname."_captcha_public_key",
					"type" => "text",
					"std" =>  "" ),		
				
				   array( "name" => "ReCaptacha Private Key",
					"desc" => "Required for the captcha to work, get your key from <a href='http://www.google.com/recaptcha/whyrecaptcha'>here</a>",
					"id" => $shortname."_captcha_private_key",
					"type" => "text",
					"std" =>  "" ),				
				
			
					
					
					  
							
				array("type"=>"close_subtitle"),
				
 // ================================ End of Sub panel ==============================================
  // ======================================Sub Panel 2 Begins ======================================				
				/*
				array(
						"name" => "Background" , 
						"type"=>"subtitle" , 
						"id"=>"pagebackground"
						),	
				
				  array( 
					  "name" => "Enable/Disable Background Color",
					  "desc" => "Enable or disable the background function color here.",
					  "id" => $shortname."_bg_color_toggle",
					  "type" => "toggle",
					  "std" => "false"
					),
				
				   array( 
						"name" => "Background color",
						"desc" => "When enabled select your background color here.",
						"id" => $shortname."_bg_color",
						"type" => "colorpickerfield",
						"std" => ""
					),	

					array( 
						"name" => "Background Image",
						"desc" => "Select your background image here, this image will be blended in the background color.",
						"id" => $shortname."_bg_image_option",
						"type" => "select",
						"options" => array("Image1","Image2", "Image3", "Image4"),
						"std" => "Image1"
					  ),
					  
					 array( 
					  "name" => "Custom Image Background Upload",
					  "desc" => "Want your own background image instead of using a preset one, enable it here.",
					  "id" => $shortname."_bg_image_toggle",
					  "type" => "toggle",
					  "std" => "false"
					),	
					
					 array( 
					  "name" => "Upload Background Image",
					  "desc" => "Ad the background image in here when you've enabled this function. 1920x1200 for full effect.",
					  "id" => $shortname."_bg_image",
					  "type" => "upload",
					  "std" => ""
					),
					  
					  array( 
						"name" => "Background Image Scale",
						"desc" => "Enable/Disable if your background image should fit the browser window or stay fixed",
						"id" => $shortname."_bg_image_scale",
						"type" => "toggle",					
						"std" => "true"
					  ),	  
				
				
						
			
				array("type"=>"close_subtitle"),
				*/
  // ======================================Sub Panel 2 Begins ======================================				
				array(
						"name" => "&rarr; Footer" , 
						"type"=>"subtitle" , 
						"id"=>"subfooter"
						),	
				
			
	
				array( 
						"name" => "Google Analytics Code",
						"desc" => "Add your Google Analytics code in here, it will be added at bottom of body tag.<br /> <strong>Do not include &lt;script tags</strong>.",
						"id" => $shortname."_ga",
						"type" => "textarea",
						"std" => ""
						),		
                array( 
						"name" => "Bottom footer text",
						"desc" => "This is your copyright text.",
						"id" => $shortname."_footer_bottom_text",
						"type" => "text",
						"std" => ""
					),
				array("type"=>"close_subtitle"),
              
			  
			  
			  array(
						"name" => "&rarr; 404 Not Found" , 
						"type"=>"subtitle" , 
						"id"=>"notfound"
						),	
				
					array( 
						"name" => "404 page title here",
						"desc" => "Add your 404 page title in here.",
						"id" => $shortname."_notfound_title",
						"type" => "text",
						"std" => ""
						),		
					
					array( 
						"name" => "404 image URL",
						"desc" => "Upload your 404 image.  ",
						"id" => $shortname."_notfound_logo",
						"type" => "upload",
						"std" => URL."/images/notfound.png"
					),	
				
	
				array( 
						"name" => "404 page text here",
						"desc" => "Add your 404 explanation here.",
						"id" => $shortname."_notfound_text",
						"type" => "textarea",
						"std" => ""
						),		
                
				array("type"=>"close_subtitle"),
				
			
				array(
						"name" => "&rarr; Top 768px x 90px Banner Settings " , 
						"type"=>"subtitle", 
						"id"=>"topbanner"
					  ), 
				
				
					array( 
						"name" => "Banner Type",
						"desc" => "Select between adsense banner or our custom build banner slider.",
						"id" => $shortname."_banner_type",
						"type" => "select",
						"options" => array("Image Banner",  "Adsense"),
						"std" => "Image Banner"
					  ),	
					  
				
				array( 
						"name" => "Enter Google adsense code(including script tags)",
						"desc" => "Enter your adsense banner code here.",
						"id" => $shortname."_ads_sense",
						"type" => "textarea",
						"std" => ""
						),
						
						
				
				array( 
						"name" => "Image 1 source",
						"desc" => "Upload image 1 with size 768 x 90px. ",
						"id" => $shortname."_banner_img1",
						"type" => "upload",
						"std" => URL."/images/top-banner.png"
					),
				array( 
						"name" => "Image 1 link",
						"desc" => "Add your iimage 1 link here text here.",
						"id" => $shortname."_banner_link1",
						"type" => "text",
						"std" => ""
						),	
				
				
				array( 
						"name" => "Image 2 source",
						"desc" => "Upload image 2 with size 768 x 90px. ",
						"id" => $shortname."_banner_img2",
						"type" => "upload",
						"std" => URL."/images/top-banner.png"
					),
				array( 
						"name" => "Image 2 link",
						"desc" => "Add your iimage 2 link here text here.",
						"id" => $shortname."_banner_link2",
						"type" => "text",
						"std" => ""
						),	
								
			   	
				
				array( 
						"name" => "Image 3 source",
						"desc" => "Upload image 3 with size 768 x 90px. ",
						"id" => $shortname."_banner_img3",
						"type" => "upload",
						"std" => URL."/images/top-banner.png"
					),
				array( 
						"name" => "Image 3 link",
						"desc" => "Add your iimage 3 link here text here.",
						"id" => $shortname."_banner_link3",
						"type" => "text",
						"std" => ""
						),	
							
				
				
				array( 
						"name" => "Image 4 source",
						"desc" => "Upload image 4 with size 768 x 90px. ",
						"id" => $shortname."_banner_img4",
						"type" => "upload",
						"std" => URL."/images/top-banner.png"
					),
				array( 
						"name" => "Image 4 link",
						"desc" => "Add your iimage 4 link here text here.",
						"id" => $shortname."_banner_link4",
						"type" => "text",
						"std" => ""
						),	
										
				
				array( 
						"name" => "Image 5 source",
						"desc" => "Upload image 5 with size 768 x 90px. ",
						"id" => $shortname."_banner_img5",
						"type" => "upload",
						"std" => URL."/images/top-banner.png"
					),
				array( 
						"name" => "Image 5 link",
						"desc" => "Add your iimage 5 link here text here.",
						"id" => $shortname."_banner_link5",
						"type" => "text",
						"std" => ""
						),	
												
				array("name"=>"Rotator Duration",
			          "desc"=>"set the duration here",
			     	   "id" => $shortname."_banner_limit",
				       "type"=>"slider",
				       "max"=>60,
				       "std"=>3,
				        "suffix"=>"seconds"),			
					  
					  	
          array("type"=>"close_subtitle"),
		  
		      	  
 // ================================ End of Sub panel ==============================================	
	array( "type" => "close"),


  // ======================================Tab 2 Begins ======================================			
 
 	array( 
			"name" => "Homepage",
			"type" => "section"
		  ),
		  
	array( 
			"name" => $themename." Options",
			"type" => "information",
			"description" => "In this option panel your able to change the slider settings of Ambience. Some cool options to chose from here and especially the Picemaker2 Slider is a cool addition."
		  ),
	
	array( "type" => "open"),
	
	
	array(
							"name" => "&rarr; General" , 
							"type"=>"subtitle", 
							"id"=>"homegen"
						), // Sub section 1 Title	
      
	  
	array( 
						"name" => "Sidebar Align",
						"desc" => "Select here your homepage sidebar alligment, left or right.",
						"id" => $shortname."_sidebar_align",
						"type" => "select",
						"options" => array("Right",  "Left"),
						"std" => "Right"
					  ),	


	 	array("type"=>"close_subtitle"),	
   // ======================================Sub Panel 1 Begins ======================================			
				array(
							"name" => "&rarr; Slider" , 
							"type"=>"subtitle", 
							"id"=>"homesliders"
						), // Sub section 1 Title	
				
					  
				array( 
						"name" => "Enable Slider",
						"desc" => "Want a homepage without a slider then disable it here.",
						"id" => $shortname."_enable_feature_slider",
						"type" => "toggle",
						"std" => "true"
					  ),
					  
				array( 
						"name" => "Auto play",
						"desc" => "Want to auto play or not then you can select it here.",
						"id" => $shortname."_auto_feature_slider",
						"type" => "toggle",
						"std" => "true"
					  ),
			
			array( 
						"name" => "Show description",
						"desc" => "You can select whether to show or hide slider description .",
						"id" => $shortname."_enable_slider_desc",
						"type" => "toggle",
						"std" => "true"
					  ),
					  
					  				
				array( "name" => "Slider Type",
					"desc" => "Select the slider type between a html5 slider with 7 effects, jQuery with more then 35 effect and the piecemaker2 slider.",
					"id" => $shortname."_feature_slider",
					"type" => "select",
					"options" => array("Nivo Slider","HTML 5 slider","jQuery Slider","Fade","Cubes Grow","Strips alternate","Strips fade","Strips half fade","Red Channel(html5)","Green Channel(html5)","Overlay","Color burn"),
					"std" => "Gallery Slider"),
				
				array( "name" => "Slider Duration",
					"desc" => "Set the time in between the effects.",
					"id" => $shortname."_feature_slider_duration",
					"type" => "text",
					"std" => "3000"),
					
				array("type"=>"close_subtitle"),	
	// ================================ End of Sub panel ==============================================			
		
	

	array( "type" => "close"),
	
	// ======================================End of Sub Panel ======================================		

 // ====================================== Tab 3 begins ======================================		
 
 
	 array( "name" => "Blog",
			"type" => "section"),
			array( "name" => $themename."blog",
			"type" => "information",
			"description" => "Enable or Disable social setting, author bio and edit your related posts here."
			),
	array( "type" => "open"),
		array("name" => "&rarr; Posts" , "type"=>"subtitle", "id"=>"postsettings"), // Sub section 1 Title	
	

					  	
	array( 
						"name" => "Show Author BIO",
						"desc" => "Don't you need an Author Bio then just disbale it here.",
						"id" => $shortname."_author_bio",
						"type" => "toggle",
						"std" => "true"
					  ),
					
	array( 
						"name" => "Show Related Posts",
						"desc" => "Want to show your related posts? Then enable them here.",
						"id" => $shortname."_popular",
						"type" => "toggle",
						"std" => "true"
					  ),
					
	array( 
						"name" => "Enable AddThis Social Set",
						"desc" => "Enable or disable the retweet button below the post.",
						"id" => $shortname."_social_set",
						"type" => "toggle",
						"std" => "true"
					  ),
	 array( 
						"name" => "Set AddThis Icon Style",
						"desc" => "In here you can decide which icon style you want.",
						"id" => $shortname."_social_set_style",
						"type" => "select",
						"std" => "Google Webfonts",
						"options" => array( "Style 1","Style 2","Style 3","Style 4","Style 5","Style 6","Style 7","Style 8","Style 9" )
					  ),
					  								  	
	  array("type"=>"close_subtitle"),
	    array(
						"name" => "&rarr; Social Links" , 
						"type"=>"subtitle", 
						"id"=>"sociallinks"
					  ),
				array( 
						"name" => "Twitter Profile ID",
						"desc" => "Add your twitter profile name to enable tweet button, this is for all twitter related stuff inside the Widgets and SmartSense.",
						"id" => $shortname."_twitter_id",
						"type" => "text",
						"std" => ""
						),	
				array( 
						"name" => "Facebook Fan Page Link",
						"desc" => "Add your Facebook page URL name to enable facebook like, this is for all facebook related stuff inside the Widgets and SmartSense.",
						"id" => $shortname."_fb_id",
						"type" => "text",
						"std" => ""
						),				
               
					  
				array("type"=>"close_subtitle"),
	  
	   
		  
	array( "type" => "close"),
	
   
	 // ====================================== Tab  begins ======================================	
	 array( "name" => "Typography",
			"type" => "section"),
			array( "name" => $themename." theme",
			"type" => "information",
			"description" => "This panel contains the settings of heading and body font sizes and other typography related settings."
			),
	    array( "type" => "open"),
	    
	            array(
						"name" => "&rarr; Font Size Settings" , 
						"type"=>"subtitle", 
						"id"=>"fontfamily"
					  ), 
					  
			  array( 
						"name" => "Body Font",
						"desc" => "Select the main font used all over the site.",
						"id" => $shortname."_body_font",
						"type" => "select",
						"options" => array("Droid Sans","Arial", "Georgia" , "Helvetica" ,"Lucida Sans" ,"Tahoma" ,"Verdana" ,"PT Sans","Arimo","Crimson","Droid Serif" ),
						"std" => "Droid Sans"
								),
	            array( 
						"name" => "Google Web font or Cufon Font",
						"desc" => "In here your able to switch between Google Fonts and Cufon Fonts. Be aware that this option is only made for titles and such. Body font is managed by google web font or websafe fonts",
						"id" => $shortname."_toggle_custom_font",
						"type" => "select",
						"std" => "Google Webfonts",
						"options" => array( "Google Webfonts","Cufon","None" )
					  ),
					  	
			  array( 
						"name" => "Cufon Font",
						"desc" => "When you've decided to go for Cufon Fonts then you need to select your font for the headings here.<strong>Note this is for titles only, if you want to use this font in your tags add class 'custom-font'.</strong>",
						"id" => $shortname."_cufon_font",
						"type" => "select",
						"options" =>  $cufon_fonts,
						"std" => "Androgyne"
								),		
										  
			  array( 
					    "name" => "Google Web Font",
						"desc" => "When you've decided to go for Google Web Fonts then you need to select your font for the headings here.",
						"id" => $shortname."_custom_font",
						"type" => "select",
						"options" =>  array("Droid","Kreon","Dancing Script","Gruppo","Cousine","Cabin","Copse","Droid Mono","Cuprum","Inconsolata","Cantarell","Lobster","Droid Sans","Yanone Kaffeesatz","Josefin Slab","Josefin Sans","Terminal Dosis Light","PT Sans Narrow"),
						"std" => "Droid"
								),
			
			 array( 
						"name" => "Custom Google Web Font On/Off",
						"desc" => "Don't like the fonts we've selected and want to use a different one then activate this option and enter the name of the font below",
						"id" => $shortname."_custom_g_font_enable",
						"type" => "toggle",
						"std" => "false"
					  ),
					  
			 array( 
						"name" => "Enter font name for Titles",
						"desc" => "you can select the fonts from <a href='http://www.google.com/webfonts'>here</a> , just enter the name of the font.",
						"id" => $shortname."_custom_g_font",
						"type" => "text",
						"std" => "",
								),		
								
								
								
			 array( 
						"name" => "Body Font size",
						"desc" => "Select the body font size used all over the site.",
						"id" => $shortname."_bd_size",
						"type" => "slider",
						"std" => "12",
						"max" => 18,
						"suffix" => "px"
								),		
								
			
			 array( 
						"name" => "H1 Font size",
						"desc" => "Select the h1 font size used all over the site.",
						"id" => $shortname."_h1",
						"type" => "slider",
						"std" => "28",
						"max" => 108,
						"suffix" => "px"
								),					
							
			
			 array( 
					"name" => "H2 Font size",
					"desc" => "Select the h2 font size used all over the site.",
					"id" => $shortname."_h2",
					"type" => "slider",
					"std" => "32",
					"max" => 26,
					"suffix" => "px"
							),					
							
			 array( 
					"name" => "H3 Font size",
					"desc" => "Select the h3 font size used all over the site.",
					"id" => $shortname."_h3",
					"type" => "slider",
					"std" => "24",
					"max" => 108,
					"suffix" => "px"
							),					
			 array( 
					"name" => "H4 Font size",
					"desc" => "Select the h1 font size used all over the site.",
					"id" => $shortname."_h4",
					"type" => "slider",
					"std" => "18",
					"max" => 108,
					"suffix" => "px"
							),					
																				
			 array( 
					"name" => "H5 Font size",
					"desc" => "Select the h5 font size used all over the site.",
					"id" => $shortname."_h5",
					"type" => "slider",
					"std" => "12",
					"max" => 108,
					"suffix" => "px"
							),					
										
			 array( 
					"name" => "H6 Font size",
					"desc" => "Select the h6 font size used all over the site.",
					"id" => $shortname."_h6",
					"type" => "slider",
					"std" => "10",
					"max" => 108,
					"suffix" => "px"
							),
			
			 array( 
					"name" => "Sidebar Title Font size",
					"desc" => "Select the sidebar title font size used all over sidebars.",
					"id" => $shortname."_sidebar_title",
					"type" => "slider",
					"std" => "16",
					"max" => 108,
					"suffix" => "px"
							),
																				
			 array( 
					"name" => "Footer Title Font size",
					"desc" => "Select the footer title font size used in the footer widgets.",
					"id" => $shortname."_footer_title",
					"type" => "slider",
					"std" => "16",
					"max" => 108,
					"suffix" => "px"
							),
							
							
												
	array("type"=>"close_subtitle"),	
		
	
					  			
	array( "type" => "close"),
	
	
	 // ====================================== Tab  begins ======================================	
	
	 array( "name" => "Visual",
			"type" => "section"),
			array( "name" => $themename." theme",
			"type" => "information",
			"description" => "This panel contains the settings for theme's background and color."
			),
	    array( "type" => "open"),
	    
	            array(
						"name" => "Header Settings " , 
						"type"=>"subtitle", 
						"id"=>"background"
					  ), 
	       
		   array( 
						  "name" => "Theme's Background Texture",
						  "desc" => "Select a different texture here.",
						  "id" => $shortname."_header_texture",
						  "type" => "select",
						  "options" => array("waves-texture","raster-texture","diagonal-texture","diamond-textures","morse-texture","checker-texture", "tile-texture" ,"noise-texture" , "bow-texture" , "threaded-texture" , "disco-texture" , "tartan-texture",'none'),
						  "std" => "waves-texture" 
				  	 ), 
					 
		 array( 
						"name" => "Custom Background Texture On/Off",
						"desc" => "Don't like the ones we've made then ad your own by activating this option and upload your own image below.",
						"id" => $shortname."_bg_custom",
						"type" => "toggle",
						"std" => "false"
					  ),
			
				  array( 
						"name" => "Upload Background texture",
						"desc" => "You can upload your background texture here, make sure the above selection is activated.",
						"id" => $shortname."_bg_custom_texture",
						"type" => "upload",
						"std" => ""
						),
													
			  array( 
						"name" => "Body Font Color",
						"desc" => "Your able to change the color for the body font here.",
						"id" => $shortname."_font_color",
						"type" => "colorpickerfield",
						"std" => "303030"
						),
													
			  array( 
						"name" => "Link Font Color",
						"desc" => "Your able to change the color for the link font here.",
						"id" => $shortname."_link_font_color",
						"type" => "colorpickerfield",
						"std" => "333333"
						),
												
			  array( 
						"name" => "Link Hover Font Color",
						"desc" => "Your able to change the color for the link font on hover here.",
						"id" => $shortname."_link_hover_font_color",
						"type" => "colorpickerfield",
						"std" => "777777"
						),
																		
			  array( 
						"name" => "Footer Link Color",
						"desc" => "Your able to change the color for the footer link .",
						"id" => $shortname."_footer_link_font_color",
						"type" => "colorpickerfield",
						"std" => "aaaaaa"
						),
			
			 array( 
						"name" => "Footer Link Color",
						"desc" => "Your able to change the color for the footer link .",
						"id" => $shortname."_footer_hover_link_font_color",
						"type" => "colorpickerfield",
						"std" => "ffffff"
						),
											  		  		  
					  
	array("type"=>"close_subtitle"),	
	
					  			
	array( "type" => "close"),

);

