<?php 
    
	get_header(); 
	$hasSidebar = "";
	
	$sidebar =    get_post_meta($post->ID,'_enable_sidebar',true);
	$sidebar = ($sidebar=="") ? "false" : $sidebar;	
	
  
	$align =    get_post_meta($post->ID,'_sidebar_align',true);
	if($align=="")
  	$align = "right";
	
	if($sidebar=="true") {
		
	if($align == "right")	
	$hasSidebar = "hasRightSidebar";
	else
	$hasSidebar = "hasLeftSidebar";
	}
	
	$image_flag = false;
	?>   



<div class="container clearfix page blog <?php echo $hasSidebar; ?>">
      
      <div class="content clearfix">
                 
            <div class="<?php if($sidebar=="true") echo 'two-third-width'; else echo 'full-width';  ?>">
             
              <?php 	wp_reset_query(); if(have_posts()): while(have_posts()) : the_post(); ?>
              <h1 class="custom-font page-heading"><?php the_title(); ?></h1>
              
              
              <?php    	if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) {	?>  
              <div class="single-image clearfix">
                      <?php 
							  
							  $id = get_post_thumbnail_id();
							  $ar = wp_get_attachment_image_src( $id, array(9999,9999) );
							  $theImageSrc = $ar[0];
							  global $blog_id;
							  if (isset($blog_id) && $blog_id > 0) {
							  $imageParts = explode('/files/', $theImageSrc);
							  if (isset($imageParts[1])) {
								  $theImageSrc = '/blogs.dir/' . $blog_id . '/files/' . $imageParts[1];
							  }
							  } ?>
							  <a href="<?php echo $ar[0]; ?>" class="lightbox">
							  <?php 
							  if($sidebar=="true")                  
							  the_post_thumbnail( 'singleimage' ); ?>
							  
							  ?></a>
              </div>
                      
                      
              <?php } ?>  <div class="single-content"> <?php the_content(); ?> </div> <!-- main content  -->
            
               <?php endwhile; endif; ?>
                
                                     
            </div>  
            
              <?php  	 wp_reset_query();
		   
			if($sidebar=="true")  
			get_sidebar();  ?>      
                 
      </div>
                  
    
</div> 
    
<?php get_footer(); ?>
      