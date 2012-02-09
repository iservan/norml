
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
	echo "<img src='".URL."/timthumb.php?src=".urlencode($theImageSrc)."&amp;h=305&amp;w=632&zc=0'  title='#nivocaption{$i}'  />";
	
			 ?></a>
             
        
        <?php 
		 $i++;
		endforeach; 
		?>
       
        
        </div><!-- End of featured slider -->
        
        <a href="" class="toggle-switch"></a>
        
        <?php $i = 1; foreach($slides as $slide) :?>
         <div id='nivocaption<?php echo $i; ?>' class="nivo-html-caption">
         <h2><?php echo stripslashes($slide['title']); ?></h2>
           <p><?php echo stripslashes($slide['description']); ?></p>
         </div>
        
        <?php $i++; endforeach; ?>

    