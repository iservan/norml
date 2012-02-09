// JavaScript Document

var loc = jQuery("#header-logo").attr("src").split("wp-includes"); //
loc = loc[0] +"wp-content/themes/averin/hades_framework/shortcodes/";
 var img_loc = loc;
 loc = loc + "mce.php";

// Creates a new plugin class
tinymce.create('tinymce.plugins.button', {
    createControl: function(n, cm) 
                {
                    switch (n) {
            case 'button':
                var c = cm.createMenuButton('Shortcodes', {
   title : 'WPTitans Shortcode Editor',
    image : img_loc+'/js/icons/image.png'
});

c.onRenderMenu.add(function(c, m) {
    m.add({title : 'Shortcodes', 'class' : 'mceMenuItemTitle'}).setDisabled(1);
    
	 m.add({title : 'Layouts'
	 ,onclick:function(){
		  
		   tb_show('Insert Shortcode',"#TB_inline"); 
		 jQuery("#TB_ajaxContent").load(loc+"?type=layout");
					jQuery("#TB_ajaxContent").css({ 
					  
					  width: jQuery("#TB_ajaxContent").parent().width()-30,
					  height: jQuery("#TB_ajaxContent").parent().height()-40
					 });
		 }
	 });
	
	
					
					 
	
	var sub2 = m.addMenu({title : 'Media', onclick : function() {   }});
	sub2.add({title : 'Youtube', onclick : function() { tinyMCE.activeEditor.selection.setContent("[youtube id='j0lSpNtjPM8' width='300' height='250' /]   ");  }});
	sub2.add({title : 'Vimeo', onclick : function() { tinyMCE.activeEditor.selection.setContent("[vimeo id='23281150' width='300' height='250' /]   ");  }});
	sub2.add({title : 'Video', onclick : function() { tinyMCE.activeEditor.selection.setContent("[video src='' width='300' height='250' title='your title here' /]   ");  }});
		
	
	var sub3 = m.addMenu({title : 'Typography', onclick : function() {   }});

	sub3.add({title : 'Pre', onclick : function() { tinyMCE.activeEditor.selection.setContent('[pre]'+tinyMCE.activeEditor.selection.getContent()+"[/pre]");  }});
	sub3.add({title : 'Quotes', onclick : function() { tinyMCE.activeEditor.selection.setContent('[quotes]'+tinyMCE.activeEditor.selection.getContent()+"[/quotes]");  }});
	sub3.add({title : 'Quotes Left', onclick : function() { tinyMCE.activeEditor.selection.setContent('[quotes_left]'+tinyMCE.activeEditor.selection.getContent()+"[/quotes_left]");  }});
	sub3.add({title : 'Quotes Right', onclick : function() { tinyMCE.activeEditor.selection.setContent('[quotes_right]'+tinyMCE.activeEditor.selection.getContent()+"[/quotes_right]");  }});
	sub3.add({title : 'Highlight', onclick : function() { tinyMCE.activeEditor.selection.setContent('[highlight]'+tinyMCE.activeEditor.selection.getContent()+"[/highlight]");  }});

	
	
	var sub4 = m.addMenu({title : 'UI', onclick : function() {   }});
		sub4.add({title : 'Error Box', onclick : function() {  tinyMCE.activeEditor.selection.setContent('[box title="your title" type="error" width="600px" ]'+tinyMCE.activeEditor.selection.getContent()+"[/box]");  }});
		sub4.add({title : 'Warning Box', onclick : function() {  tinyMCE.activeEditor.selection.setContent('[box title="your title" type="warning" width="600px" ]'+tinyMCE.activeEditor.selection.getContent()+"[/box]");  }});
		sub4.add({title : 'Success Box', onclick : function() {  tinyMCE.activeEditor.selection.setContent('[box title="your title" type="success" width="600px" ]'+tinyMCE.activeEditor.selection.getContent()+"[/box]");  }});
		sub4.add({title : 'Information Box', onclick : function() {  tinyMCE.activeEditor.selection.setContent('[box title="your title" type="information" width="600px" ]'+tinyMCE.activeEditor.selection.getContent()+"[/box]");  }});
		sub4.add({title : 'Action Box', onclick : function() {  tinyMCE.activeEditor.selection.setContent('[action buttonTitle="ACTION BUTTON" link="" ] ' +tinyMCE.activeEditor.selection.getContent()+' [/action]');  }});
		
		sub4.add({title : 'Button', onclick : function() {    tb_show('Insert Shortcode',"#TB_inline"); 
		 jQuery("#TB_ajaxContent").load(loc+"?type=button");
					jQuery("#TB_ajaxContent").css({ 
					  
					  width: jQuery("#TB_ajaxContent").parent().width()-30,
					  height: jQuery("#TB_ajaxContent").parent().height()-40
					 });  }});
	
		
	var sub5 = m.addMenu({title : 'Widgets', onclick : function() {   }});
   sub5.add({title : 'Tabs', onclick : function() { tinyMCE.activeEditor.selection.setContent('[tabs][tab title="your tab1 title"] your content here... [/tab][/tabs]');   }});
    sub5.add({title : 'Accordion', onclick : function() { tinyMCE.activeEditor.selection.setContent('[accordion][section  title="your tab1 title"] your content here...  [/section][/accordion]');   }});
	 sub5.add({title : 'Toggle Box', onclick : function() { tinyMCE.activeEditor.selection.setContent('[toggle title="your tab1 title"] your content here...  [/toggle ]');   }});
  
	m.add({title : 'Contact Forms', onclick : function() { 
	 
	  tb_show('Insert Shortcode',"#TB_inline"); 
		 jQuery("#TB_ajaxContent").load(loc+"?type=contact");
					jQuery("#TB_ajaxContent").css({ 
					  
					  width: jQuery("#TB_ajaxContent").parent().width()-30,
					  height: jQuery("#TB_ajaxContent").parent().height()-40
					});
					
	  }});
 
});
                // Return the new splitbutton instance
                return c;
        }

            
                    return null;
                }
});

// Register plugin
tinymce.PluginManager.add('button', tinymce.plugins.button);