<?php 


class ViewedPost extends WP_Widget {
	
	function ViewedPost() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'ViewedPost', 'description' => __('Show popular posts.','h-framework') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 200);
		 parent::WP_Widget(false,__("Viewed Posts",'h-framework'),$widget_ops,$control_ops); }
	
	function update($new_instance, $old_instance) {
			$instance = $old_instance; 
			$instance['count']= strip_tags($new_instance['count']); 
			$instance['title']= strip_tags($new_instance['title']); 
			return $instance;
	}
	function form($instance) {
		 
		$count = esc_attr($instance['count']);
			$title = $instance['title'];
		 ?>
        
        <p class="hades-custom"> 
        <label for="<?php echo $this->get_field_id('title'); ?>"> <?php _e('Title','h-framework'); ?> </label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		
        
		<p class="hades-custom"> 
        <label for="<?php echo $this->get_field_id('count'); ?>"> <?php _e('Number of posts to display','h-framework'); ?> </label>
		<input class="widefat" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" type="text" value="<?php echo $count; ?>" />
		</p>
		
           
       
        
        
<?php
		
		 }
	function widget($args, $instance) { 
	
	extract($args); 
	
		$count = esc_attr($instance['count']);
	$title = esc_attr($instance['title']);
		echo $before_widget;
		if($title!="")
		echo $before_title." ".$instance['title'].$after_title;
		?>

 <ul class="viewed-posts-sidebar clearfix" >
            			  <?php 
				   //  $query = new WP_Query();
                 query_posts('posts_per_page=-1');
				  $viewed_posts = array();
				  $viewflags = array();
				  
				  $i = 0;
				  
                  while (have_posts()) : the_post(); 
				  
				
				   if(get_post_meta(get_the_ID(), "view",true)!="")
	              {
		
		               $viewflags[$i] = get_post_meta(get_the_ID(), "view",true);
					   $viewed_posts[$viewflags[$i].''] = get_the_ID();
					   $i++;
	              }
				  
				  
				
				   endwhile; 
			 wp_reset_query(); 
			  sort($viewflags,SORT_NUMERIC );
				 $viewflags =   array_reverse ( $viewflags  );   
			 
			  $pid = '';
			 for($i=0;$i<count($viewflags);$i++)
			 {
				 if($i>=$count)
				 break;
				 if($pid!=$viewed_posts[$viewflags[$i]])
				 {
				 $pid = $viewed_posts[$viewflags[$i]];
				 $tpost = get_post($pid,ARRAY_A);
				 ?>
				 
                    <li class="clearfix" >
                    
                     <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail($pid))  ) : /* if post has post thumbnail */ ?>
                      <div class="image">
                          <a href="<?php echo $tpost["guid"]; ?>"><?php echo get_the_post_thumbnail($pid,array(50,999)); ?></a>
                      </div><!--image-->
                      <?php endif; ?>
                      
                      
                            <div class="description">
                          <h6><a href="<?php  echo $tpost["guid"]; ?>"><?php $this->short_title(29,$tpost["post_title"]); ?></a></h6>
                          
                        <?php  if((int)$viewflags[$i]<=1)
						       echo "<p> $viewflags[$i] view </p>";
							   else
                                echo "<p> $viewflags[$i] views </p>";
                          
						  
						 ?> 
                          
                          
                      </div><!--details-->
                         
                         
                        </li>
                  
				 
				 <?php
				 }
			 }
			 ?>

                    </ul>
					
					
		<?php
			echo $after_widget; 
		
		}
		
	function short_title($num,$stitle) {

$limit = $num+1;
$title = str_split($stitle);
$length = count($title);
if ($length>=$num) {
$title = array_slice( $title, 0, $num);
$title = implode("",$title)."...";
_e( $title ,'h-framework');
} else {
_e ( $stitle ,'h-framework');
}

}
	
	}

add_action('widgets_init', create_function('', 'return
register_widget("ViewedPost");'));
?>