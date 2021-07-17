<?php


// This Function Is used for nav menu
register_nav_menus(
    array("primary_menu" => "Header Menu")
);

// Featured Image Thumbnail Enabling
add_theme_support('post-thumbnails');

// This will Help to setup logo image
add_theme_support('custom-header');

// Register Sidebar
register_sidebar(
    array(
        'name' => 'sidebar primary',
        'id' => 'sidebar'
    )
    );

// For meta descriptions
function gretathemes_meta_description() {
    global $post;
    if ( is_singular() ) {
        $des_post = strip_tags( $post->post_content );
        $des_post = strip_shortcodes( $post->post_content );
        $des_post = str_replace( array("\n", "\r", "\t"), ' ', $des_post );
        $des_post = mb_substr( $des_post, 0, 300, 'utf8' );
        echo '<meta name="description" content="' . $des_post . '" />' . "\n";
    }
    if ( is_home() ) {
        echo '<meta name="description" content="' . get_bloginfo( "description" ) . '" />' . "\n";
    }
    if ( is_category() ) {
        $des_cat = strip_tags(category_description());
        echo '<meta name="description" content="' . $des_cat . '" />' . "\n";
    }
}
add_action( 'wp_head', 'gretathemes_meta_description');
