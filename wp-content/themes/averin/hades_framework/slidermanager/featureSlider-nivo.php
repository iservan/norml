
<div class="slider-wrapper-shade">
      
     <div class="slider-shade"> 
    <div id="nivoslider"><!-- Start of featured slider -->
       
       
       
        <?php 
		
	$slides = get_option('hades_slides');
		$i =1;
		if(!is_array($slides))
		$slides = array();
		 foreach($slides as $slide) :
		 ?>  
        
            <?php
             $theImageSrc = $slide["src"];
							global $blog_id;
							if (isset($blog_id) && $blog_id > 0) {
							$imageParts = explode('/files/', $theImageSrc);
							if (isset($imageParts[1])) {
								$theImageSrc = '/blogs.dir/' . $blog_id . '/files/' . $imageParts[1];
							}
						}
				 ?>
                    <a href="<?php echo $slide['link'];  ?>">
			         <?php 	                   
	echo "<img src='".URL."/hades_framework/slidermanager/timthumb.php?src=".urlencode($theImageSrc)."&amp;h=305&amp;w=632'  title='#nivocaption{$i}' alt='".$slide['title']."'  />";
	
			 ?></a>
             
        
        <?php 
		 $i++;
		endforeach; 
		?>
       
        
        </div><!-- End of featured slider -->
        
           <a href="" class="toggle-switch active"></a>
        
        <?php $i = 1; foreach($slides as $slide) :?>
         <div id='nivocaption<?php echo $i; ?>' class="nivo-html-caption">
         <h2><?php echo $slide['title']; ?></h2>
           <p><?php echo $slide['description']; ?></p>
         </div>
        
        <?php $i++; endforeach; ?>
        </div>
        
        
 </div>   
    
   
     
    