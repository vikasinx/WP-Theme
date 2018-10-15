jQuery(function() { 
   	jQuery("#primaryPostForm").validate({
   	submitHandler: function(form,e) {
   		e.preventDefault();	
   		var id = jQuery("#postid").val();
   		if(id) { var postid = id;} else { var postid = "";}
   		if(postid) { var action = 'vupdate_data';} else { var action = 'vpost_data';}
	    var title = jQuery("#postTitle").val();
	    var content = jQuery("#postContent").val();
	    var ajaxurl = jQuery("#ajaxurl").val();
	    jQuery.ajax({ 
	         data: {action: action, title:title, content:content,id:postid},
	         type: 'post',
	         url: ajaxurl,
	         success: function(data) {
	         	jQuery('#primaryPostForm')[0].reset();
	         	jQuery('.Message').html(data);
	         	window.setTimeout(function(){location.reload()},3000);
	        }
	    });
	    return false;
   	}
   });

/*Delete Post*/

/*jQuery('#deletepost').click(function(e){
	confirm("Are you sure you want to delete this post!!");
	e.preventDefault();	
    var id = jQuery("#deletepostid").val();
    var ajaxurl = jQuery("#ajaxurl").val();
    jQuery.ajax({ 
         data: {action: 'vdelete_post', id:id},
         type: 'post',
         url: ajaxurl,
         success: function(data) {
         	jQuery('#primaryPostForm')[0].reset();
         	jQuery('.Message').html(data);
        }
    });
    return false;
});*/
 
});