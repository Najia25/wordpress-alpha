<?php

function resume_setup_theme(){
    load_theme_textdomain("resume");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    register_nav_menu("topmenu",__("Top Menu",alpha));

}
add_action("after_setup_theme","resume_setup_theme");


function resume_assets(){
    wp_enqueue_style("animate-css",get_theme_file_uri("/assets/css/animate.min.css"));
    wp_enqueue_style("aos-css",get_theme_file_uri("/assets/css/aos.css"));
    wp_enqueue_style("bootstrap-css",get_theme_file_uri("/assets/css/bootstrap.min.css"));
    wp_enqueue_style("style-css",get_theme_file_uri("/assets/css/style.css"));
    wp_enqueue_style("resume",get_stylesheet_uri());

    wp_enqueue_script("aos-js",get_theme_file_uri("/assets/js/aos.js"),array("jquery"),null,true);
    wp_enqueue_script("bootstrap-js",get_theme_file_uri("/assets/js/bootstrap.min.js"),array("jquery"),null,true);  
    wp_enqueue_script("jquery-form-js",get_theme_file_uri("/assets/js/jquery.form.js"),array("jquery"),null,true);  
    wp_enqueue_script("jquery-validate-js",get_theme_file_uri("/assets/js/jquery.validate.min.js"),array("jquery"),null,true);  
    wp_enqueue_script("plugins-js",get_theme_file_uri("/assets/js/plugins.js"),array("jquery"),null,true);  
    wp_enqueue_script("custom-js",get_theme_file_uri("/assets/js/custom.js"),array("jquery"),null,true);  

}
add_action("wp_enqueue_scripts","resume_assets");

function add_page_banner(){
    $resume_feat_image = get_the_post_thumbnail_url(null,"large");
    ?>
    <style>
    .page-banner{
        background-image:url(<?php echo $resume_feat_image; ?>);
    }
   </style>
   <?php
}

add_action("wp_head","add_page_banner");

?>