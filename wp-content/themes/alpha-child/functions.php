<?php

function alpha_child_enqueue_dequeue_assets(){
    wp_dequeue_style("alpha-style");
    wp_deregister_style("alpha-style");
    wp_dequeue_style("bootstrap");
    wp_deregister_style("bootstrap");
    wp_enqueue_style("bootstrap","//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap-grid.css");
    wp_enqueue_style("alpha-style",get_theme_file_uri("assets/css/alpha.css"));
    wp_enqueue_style("parent-style",get_parent_theme_file_uri("/style.css"),array("bootstrap"));
}

add_action("wp_enqueue_scripts","alpha_child_enqueue_dequeue_assets",11);
