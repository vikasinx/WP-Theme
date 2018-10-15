<?php
  /*
   Plugin Name: Crud
   Plugin URI: http://vikas.com
   description: a plugin to Insert,update,delete post from frontend
   Version: 1.0
   Author: Mr. vikas
   Author URI: http://vikas.com
   License: GPL2
   */


function v_crud_scripts() {

wp_enqueue_script( 'validation-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js' , array('jquery'),'1.17.0',true);
	wp_enqueue_script( 'custom-js', plugin_dir_url(__FILE__) .'js/custom.js' , array('jquery'),'1.0',true);
}
add_action('wp_enqueue_scripts', 'v_crud_scripts' );

/*Plugin Activation*/
function vcrud_activate() {

if ( isset( $_GET['post'] ) ) {  
	global $current_post;  
        $current_post = $_GET['post'];
        $title = get_the_title($_GET['post']);
        $content =  apply_filters('the_content', get_post_field('post_content', $_GET['post']));
    }


	$query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => '-1',
    'post_status' => array(
        'publish',
        'draft'
    )
) );

?>
<!-- Post Listing --> 
	<table>
 
    <tr>
        <th>Post Title</th>
        <th>Post Excerpt</th>
        <th>Post Status</th>
        <th>Actions</th>
    </tr>
 
	<?php
	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	 
	<tr>
	    <td><?php echo get_the_title(); ?></td>
	    <td><?php the_excerpt(); ?></td>
	    <td><?php echo get_post_status( get_the_ID() ) ?></td>
	    <td><a href="<?php echo add_query_arg( 'post', get_the_ID()); ?>">Edit</a>
	    	<a onclick="return confirm('Are you sure you wish to delete post: <?php echo get_the_title() ?>?')" href="<?php echo get_delete_post_link( get_the_ID() ); ?>">Delete</a>
	</tr>
	 
	<?php endwhile; endif; ?>


	</table>

<!-- Post Form --> 
	<form action="" id="primaryPostForm" method="POST">
 
    <fieldset>
 
        <label for="postTitle"><?php _e( 'Post\'s Title:', 'framework' ); ?></label>
 
        <input type="text" name="postTitle" id="postTitle" value="<?php if(!empty($title)) {echo $title;} ?>" class="required" />
 
    </fieldset>

 
    <fieldset>
                 
        <label for="postContent"><?php _e( 'Post\'s Content:', 'framework' ); ?></label>
 
        <textarea name="postContent" id="postContent" rows="8" cols="30"><?php if(!empty($content)){ echo strip_tags($content);} ?></textarea>
 
    </fieldset>
    <input type="hidden" id="ajaxurl" name="ajaxurl" value="<?php echo admin_url( 'admin-ajax.php' ); ?>">
    <input type="hidden" id="postid" name="postid" value="<?php if(!empty($current_post)) {echo $current_post;} ?>">
 
    <fieldset>
         
        <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
 
        <input type="hidden" name="submitted" id="submitted" value="true" />
        <button type="submit" id="Submit"><?php if(!empty($_GET['post'])) { echo 'Update Post';} else { echo 'Add Post';} ?></button>
 
    </fieldset>
    <div class="Message"></div>
 
</form>

<?php
    
}

register_activation_hook( __FILE__, 'vcrud_activate' );
add_shortcode('vrud','vcrud_activate');


/*Insert Data*/

add_action('wp_ajax_vpost_data', 'vpost_data');
add_action('wp_ajax_nopriv_vpost_data', 'vpost_data');

function vpost_data(){
	
	if((!empty($_POST)) && (isset($_POST))) { 
  
    $post_information = array(
        'post_title' => wp_strip_all_tags( $_POST['title'] ),
        'post_content' => $_POST['content'],
        'post_type' => 'post',
        'post_status' => 'publish'
    );
    wp_insert_post( $post_information ); 

    echo "Post Added";  
    die();

	}else {
		echo "Post Not added";
	}
	die();
}

/*Update Data*/

add_action('wp_ajax_vupdate_data', 'vupdate_data');
add_action('wp_ajax_nopriv_vupdate_data', 'vupdate_data');

function vupdate_data(){
	
	if((!empty($_POST)) && (isset($_POST))) { 
  
     $post_information = array(
		    'ID' => $_POST['id'],
		    'post_title' =>  wp_strip_all_tags( $_POST['title'] ),
		    'post_content' => $_POST['content'],
		    'post_type' => 'post',
		    'post_status' => 'publish'
		);
     //print_r($post_information); exit();
		$post_id = wp_update_post( $post_information ); 

    echo "Post Updated !!";  
    die();

	}else {
		echo "Post Not Updated !!";
	}
	die();
}

?>