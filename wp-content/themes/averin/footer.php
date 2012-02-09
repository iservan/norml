
 
  <div id="footer" class="clearfix footer-column3 container">
        <div class="container clearfix">
              <div class="inner-footer-wrapper clearfix">
              
             <div class="footer-cols">
                  <?php 
				 if ( function_exists ( dynamic_sidebar("Footer Column 1") ) ) : 
                      dynamic_sidebar ("Footer Column 1"); 
                  endif; 
				 
                  ?>
              </div>
              
              <div class="footer-cols">
                  <?php 
				 if ( function_exists ( dynamic_sidebar("Footer Column 2") ) ) : 
                      dynamic_sidebar ("Footer Column 2"); 
                  endif; 
				 
                  ?>
              </div>
              
              
               <div class="footer-cols">
                  <?php 
				 if ( function_exists ( dynamic_sidebar("Footer Column 3") ) ) : 
                      dynamic_sidebar ("Footer Column 3"); 
                  endif; 
				 
                  ?>
              </div> 
               
               </div>   
         </div>    	
        
  </div>  
       <div id="footer-menu" class="container clearfix">
        <a href="<?php echo home_url(); ?>" id="bottom-logo"><img src="<?php echo URL."/sprites/i/logo-bottom.png"; ?>" alt="logo" /></a>
       <p class="footer-text"><?php echo get_option("hades_footer_bottom_text"); ?></p> 
       
        <?php 
				if(function_exists("wp_nav_menu"))
				{
					wp_nav_menu(array(
								'theme_location'=>'footer_nav',
								'container'=>'ul',
								'depth' => 1
								)
								);
				}
		?>
          
       </div>  
     <a href="#" class="back-to-top"></a>

<script type="text/javascript">
<?php if (get_option("hades_ga")) { 
  echo stripslashes(get_option("hades_ga")); } ?>
</script>

<?php  wp_footer();  ?>
</body>
</html>
