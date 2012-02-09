<?php 


class FeedburnerSubscribe extends WP_Widget {
	
	function FeedburnerSubscribe() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'FeedburnerSubscribe', 'description' => __('Usage: Megamenu, sidebars and dynamic widgetized areas . Create a custom text box with read more link.','h-framework') );

		/* Widget control settings. */
		$control_ops = array(  );
		 parent::WP_Widget(false,__("FeedburnerSubscribe",'h-framework'),$widget_ops,$control_ops); }
	
	function update($new_instance, $old_instance) {
			$instance = $old_instance; 
			$instance['link']= $new_instance['link']; 
			$instance['description']= $new_instance['description'];
			$instance['title']= strip_tags($new_instance['title']);
			
			return $instance;
	}
	function form($instance) {
		 
		$link = esc_attr($instance['link']);
		$description = $instance['description'];
		$title = esc_attr($instance['title']); 
		
		
		
		?>
    
       
       	 <p class="hades-custom">
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'h-framework') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text" />
		</p>
        
          <p class="hades-custom">
			<label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e('Feedburner ID', 'h-framework') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo $instance['link']; ?>" type="text" />
		</p>
        
		<p>
			<label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e('Text', 'h-framework') ?></label>
			<textarea  class="widefat" style="height:200px;" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>"><?php echo  $instance['description']; ?></textarea>
		</p>
		
		
		
<?php
		
		 }
	function widget($args, $instance) { 
	
	extract($args); 
	
	$link = esc_attr($instance['link']);
		$description = $instance['description'];
		$title = esc_attr($instance['title']); 
		
		echo $before_widget."<div class='feedburner-widget'>";
	if($title!="")
		echo " <h4 class='custom-font'> ".$title."</h4>";
		echo "<p> $description </p>";
		echo "<form class='clearfix' action=\"http://feedburner.google.com/fb/a/mailverify\" method=\"post\" target=\"popupwindow\" onsubmit=\"window.open('http://feedburner.google.com/fb/a/mailverify?uri={$link}', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true\">
		    <input type=\"text\" name=\"email\"/>
		    <input type=\"hidden\" value=\"{$link}\" name=\"uri\"/>
			<input type=\"hidden\" name=\"loc\" value=\"en_US\"/>
			<input type=\"submit\" value=\"Subscribe\" />
			</form>
		";	       
		
		echo  "</div>".$after_widget;
		
		}
	
	}

add_action('widgets_init', create_function('', 'return
register_widget("FeedburnerSubscribe");'));
?>