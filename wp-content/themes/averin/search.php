<?php
/*
Template Name: Search Page
*/
?>
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
	
	
	global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = $query_split[1];
} // foreach

$search = new WP_Query($search_query);

	?>   


<div class="container clearfix page blog <?php echo $hasSidebar; ?>">
      
      <div class="content clearfix">
                 
            <div class="<?php if($sidebar=="true") echo 'two-third-width'; else echo 'full-width';  ?>">
             
          <h1 class="custom-font"><?php _e('Search Results','h-framework'); ?></h1>
            
            
            <div class="posts">
            
              <ul class="clearfix">
              <?php 
              
              if ( $search->have_posts() ) : while ( $search->have_posts() ) : $search->the_post();
              
              $more = 0;
              ?>
                <li class="clearfix">
				  <?php 
                  
                      $width = "half";
                      if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : 
						$id = get_post_thumbnail_id();
						$ar = wp_get_attachment_image_src( $id , array(9999,9999) );
						
						$theImageSrc = $ar[0];
						global $blog_id;
						if (isset($blog_id) && $blog_id > 0) {
						$imageParts = explode('/files/', $theImageSrc);
						if (isset($imageParts[1])) {
						$theImageSrc = '/blogs.dir/' . $blog_id . '/files/' . $imageParts[1];
						}
						}
						?>
                 
                        <div class="imageholder">
                          <a href="<?php the_permalink(); ?>" class="">
                            <?php the_post_thumbnail( 'postimage' );
                           ?></a>
                  
                        </div>
                  <?php else: $width = "";  endif; ?>
                  
                  <div class="description <?php echo $width;?> ">
                       <h2 class="custom-font"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
                       <p>
                        <?php  
                        global $more;    // Declare global $more (before the loop).
                        $more = 1;
                        $content = get_the_content('');
                        $content = apply_filters('the_content', $content);
                        $content = str_replace(']]>', ']]&gt;', $content);
                        $helper->shortenContent( 200 ,  strip_tags( $content  ) ); ?>
                        <br />
                        <span class="date"> <?php echo get_the_time("M")." ".get_the_time("d").", ".get_the_time("Y"); ?> </span> 
                        <span class="comment"> <a href=" <?php comments_link(); ?> " title="<?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?>"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></a> </span>    
                       </p>
                   
                   </div>
                  </li>
                  <?php  $i++; endwhile; else:
                  _e( '<p class="notice-box">No posts yet !</p>','h-framework' );
                  endif;
                  ?>
              </ul>
            
            </div>
            
            
            <div class="pagination-panel clearfix">
  
                   <!-- Pagination -->
                   
                   <p class="pagination-prev clearfix">    <?php previous_posts_link("&lt;"); ?> </p>
                   
                         <?php kriesi_pagination(); ?>
                   
                    <p class="pagination-next clearfix"> <?php next_posts_link("&gt;"); ?> </p>
                  
                  
               </div>  
                 
   
                   
            </div>
          
            
            
            <?php  
	 wp_reset_query();
	
	        get_sidebar();  ?>      
               
       </div> 
                  
 </div>
    
<?php get_footer(); ?>