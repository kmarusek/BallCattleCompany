<?php
add_action('wp_head', 'pn_add_analytics');
function pn_add_analytics() { ?>

<!--Paste your Google Analytics code here-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=""></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '');
</script>

<?php } ?>
<?php 

//LOAD STYLESHEETS/JS FILES
//----------------------------------------------------------------------------------------------------------
function scripts()
{
        wp_register_style('style', get_stylesheet_directory_uri() . '/dist/app.css', [], 1, 'all');
        wp_enqueue_style('style');  

        wp_enqueue_script('jquery');

        // wp_register_script('slider', get_template_directory_uri() . '/src/js/jquery.flexslider-min.js', array('jquery'), null, true);
        // wp_enqueue_script('slider');

        wp_register_script('isotope', get_template_directory_uri() . '/src/js/jquery.isotope.pkgd.min.js', array('jquery'), false, true);
        wp_enqueue_script('isotope');

        wp_register_script('magnific_popup', get_template_directory_uri().'/src/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
        wp_enqueue_script('magnific_popup');

        wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
        wp_enqueue_script('app');

}
add_action('wp_enqueue_scripts', 'scripts');




//THEME OPTIONS
//---------------------------------------------------------------------------------------------------------
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'use_widgets_block_editor', '__return_false' );// Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor

//REGISTERED MENUS FOR WP ADMIN
//-------------------------------------------------------------------------------------------------
register_nav_menus(

        array(
                'primary-menu' => 'Primary Menu',
                'footer-menu' => 'Footer Menu',
                'footer-media-menu' => 'Footer Social Media',
        )

);

//CUSTOM WIDGETS
//-------------------------------------------------------------------------------------------------
function above_theme_widget_init(){
register_sidebar( 
        array(
        'name' => 'Footer Widget Text Area',
        'id' => 'footer-widget-1',
        'before_widget'=> '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        )
);
register_sidebar( 
        array(
        'name' => 'Footer Widget Menu',
        'id' => 'footer-widget-2',
        'before_widget'=> '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        )
);
register_sidebar( 
        array(
        'name' => 'Footer Widget Address',
        'id' => 'footer-widget-3',
        'before_widget'=> '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        )
);
}       
add_action('widgets_init','above_theme_widget_init');

// CUSTOM IMAGE SIZES
//-------------------------------------------------------------------------------------------------
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);
add_image_size('slider', 500, 500, true);

//WP TINYMCE & WYWSIWYG MODIFACTIONS
//-------------------------------------------------------------------------------------------------
function my_theme_add_editor_styles() {//add editor styles for admin panel
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'init', 'my_theme_add_editor_styles' );

function my_mce_buttons_2( $buttons ) {//add format feature in wysiwyg
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

function my_tiny_mce_before_init( $mceInit ) {//add options to format drop down
	$style_formats = array(
		array(
			'title' => 'Black Button',
			'block' => 'a',
			'classes' => 'button more-link content-button',
                        'styles' => array(
                                'fontWeight' => 'bold',
                                'textTransform' => 'capitalize'
                        ),
		)	
	);
	$mceInit['style_formats'] = json_encode( $style_formats );	
	return $mceInit;    
}
add_filter( 'tiny_mce_before_init', 'my_tiny_mce_before_init' );// end of tinyMCE modifications.





add_action( 'admin_init', 'hide_editor' );//Hide Wysiwyg on specific Templates.
 
function hide_editor() {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
 
    $template_file = get_post_meta($post_id, '_wp_page_template', true);
     
//     if($template_file == 'template-gallery.php' ){ // edit the template name to remove wysiwyg
//         remove_post_type_support('page', 'editor');
//     }

}
 
// ACF OPTIONS
//-------------------------------------------------------------------------------------------------

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(

                array(
                'page_title' => 'Global Sections',
                'menu_title' => 'Global Sections',
                'menu_slug' => 'global-sections',
                'capability' => 'edit_posts',
                'icon_url' => 'dashicons-admin-site-alt2'
                )

        );

        acf_add_options_sub_page( 
                
                array(

                        'page_title' => 'Contact Section',
                        'menu_title' => 'Contact Section',
                        'parent_slug' => 'global-sections'

                )
        );
};

//CUSTOM POST TYPES
//-------------------------------------------------------------------------------------------------

// function seoblog_post_type()
// {
//         $labels = array(
//                 'name' => __( 'Posts' ),
//                 'singular_name' => __( 'Post' ),
//                 'add_new' => __('Add New Post'),
//                 'add_new_item' => __('Add New Post'),
//                 'edit_item' => __('Edit Post'),
//                 'new_item' => __('New Post'),
//                 'view_item' => __('View'),
//                 'search_items' => __('Search Posts'),
//                 'not_found' =>  __('No posts found'),
//                 'not_found_in_trash' => __('No post found in trash'), 
//                 'parent_item_colon' => ''
//               );
            
//               $args = array(
//                 'labels' => $labels,
//                 'public' => true,
//                 'exclude_from_search' => true,
//                 'publicly_queryable' => true,
//                 'show_ui' => true, 
//                 'query_var' => true,
//                 'menu_icon' => 'dashicons-welcome-write-blog',
//                 'capability_type' => 'post',
//                 'hierarchical' => false,
//                 'menu_position' => null,
//                 // Uncomment the following line to change the slug; 
//                 // You must also save your permalink structure to prevent 404 errors
//                 // 'rewrite' => array( 'slug' => 'our-projects' ),
//                 'has_archive' => false,
//                 'supports' => array('title','editor'),
//                 'taxonomies' => array('category',),
//                 'rewrite' => array( 'slug' => 'about-custom-metal-fabrication')
//               ); 
            
//               register_post_type('blog',$args);
// }
// add_action('init', 'seoblog_post_type');

// function projects_taxonomy()
// {

//         $args = array(

//                 'labels' => array(

//                         'name' => 'Categories',
//                         'singular_name' => 'Category',
//                 ),

//                 'public' => true,
//                 'hierarchical' => true,

//         );

//         register_taxonomy('projects', array('projects'), $args);

// }
// add_action('init', 'projects_taxonomy');

//CONTACT FORM 7
//-------------------------------------------------------------------------------------------------

function mod_contact7_form_content( $template, $prop ) { //Modify CF7 Form to fit custom format
        if ( 'form' == $prop ) {
          return implode( '', array(

        '<div class="contact-wrap" id="contact-1">',
                '<div class="form-group row">',
                    '<div class="col-lg-12">',
                        '[text* your-name placeholder"First Name"]',
                    '</div>',
                    '<div class="col-lg-12 mt-3">',
                        '[text* your-name placeholder"Last Name"]',
                    '</div>',
                    '<div class="col-lg-12 mt-3">',
                          '[email* your-email placeholder"Email"]',
                    '</div>',
                    '<div class="col-lg-12 mt-3">',
                          '[tel* your-tel placeholder"Phone Number"]',
                    '</div>',
                    '<div class="col-lg-12 mt-3">',
                         '[text* your-subject placeholder"Subject"]',
                    '</div>',
                '</div>',
                '<div class="form-group">',
                    '[textarea* your-message placeholder"Message/Prayer Request"]',
                '</div>',
                '<div class="form-group">',
                        '[submit class:btn class:btn-success class:btn-block "Send"]',
                '</div>',    
        '</div>'
          ) );
        } else {
          return $template;
        } 
      }
      add_filter(
        'wpcf7_default_template',
        'mod_contact7_form_content',
        10,
        2
      );

function mod_contact7_form_title( $template ) {// Adds title for CF7 hook to bypass ID
        $template->set_title( 'Contact Form' );
        return $template;
      }
      add_filter(
        'wpcf7_contact_form_default_pack',
        'mod_contact7_form_title'
      );


//CHANGE ADMIN LOGIN SCREEN STYLE
//-------------------------------------------------------------------------------------------------

function my_login_admin() { ?>
        <style type="text/css">
         body.login.js.login-action-login.wp-core-ui {
                background-color: #111111;
            }
            #login h1 a, .login h1 a {
                width: 100%;
                background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo-min.png);
                background-repeat: no-repeat;
                background-size: 100% 100%;
                height: 100px;
            }
        </style>
    <?php }
    add_action( 'login_enqueue_scripts', 'my_login_admin' );