<?php




function alpha_child_manage_assets(){
    wp_dequeue_style("alpha-style");
    wp_deregister_style("alpha-style");
    // wp_dequeue_style("bootstrap");
    // wp_deregister_style("bootstrap");
    wp_enqueue_style("alpha-style",get_theme_file_uri("assets/css/alpha.css"));
    wp_enqueue_style("parent-style",get_parent_theme_file_uri("/style.css"));

}

add_action("wp_enqueue_scripts","alpha_child_manage_assets",11);
