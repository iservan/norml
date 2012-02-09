<?php 


class PopularPost extends WP_Widget {
	
	function PopularPost() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'PopularPost', 'description' => __('Show popular posts.','h-framework') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 200);
		 parent::WP_Widget(false,__("Popular Posts",'h-framework'),$widget_ops,$control_ops); }
	
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

 <ul class="popular-posts-sidebar clearfix" >
            			<?php 
						$popPosts = new WP_Query();
						$popPosts->query('showposts='.$count.'&orderby=comment_count');
						while ($popPosts->have_posts()) : $popPosts->the_post(); $pid = get_the_ID(); ?>
      
                        <li class="clearfix" >
                                         <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail($pid))  ) : /* if post has post thumbnail */ ?>
                      <div class="image">
                          <a href="<?php echo $tpost["guid"]; ?>"><?php echo get_the_post_thumbnail($pid,array(50,999)); ?></a>
                      </div><!--image-->
                      <?php endif; ?>
                                <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                 
                        <span class="extra"> <?php echo get_the_time("M")." ".get_the_time("d").", ".get_the_time("Y"); ?> - <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?> </span>    
                        </li>
                        
                        <?php endwhile; ?>
                        
                        <?php wp_reset_query(); ?>

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
register_widget("PopularPost");'));
?>