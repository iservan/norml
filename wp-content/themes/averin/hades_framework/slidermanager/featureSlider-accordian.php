
<div class="slider-wrapper">
         
    <div class="accordian-slider"><!-- Start of featured slider -->
       
       
        <ul class="kwicks clearfix ">
        <?php 
		
		
		$slides = get_option('hades_slides');
		
		if(!is_array($slides))
		$slides = array( array() );
		
		$feature_count = count($slides);	
		$width =  980/( (int)$feature_count );
		//The Loop
        
		 foreach($slides as $slide) :
		 ?>  
         <li class="clearfix" style="width:<?php echo $width; ?>px;"><!-- Start of featured slide -->
            <div class="imageholder"><a href="#"><?php
			 $theImageSrc = $slide["src"];
							global $blog_id;
							if (isset($blog_id) && $blog_id > 0) {
							$imageParts = explode('/files/', $theImageSrc);
							if (isset($imageParts[1])) {
								$theImageSrc = '/blogs.dir/' . $blog_id . '/files/' . $imageParts[1];
							}
						}
						
			echo "<img src=".URL."/timthumb.php?src=".urlencode($theImageSrc)."&amp;w=980&amp;h=461&zc=0'  />";
		 
			 ?></a></div>
           <div class="description">
            <h2 class="custom-font"><?php echo stripslashes($slide['title']); ?> </h2>
                <p>   <?php echo stripslashes($slide['description']); ?> </p>
             </div>
          </li><!-- End of featured slide -->
        <?php 
		 
		endforeach; 
		?>
        </ul>
        
        </div><!-- End of featured slider -->
 </div>   
    
    
    