<?php
define( 'ATTACHMENTS_SETTINGS_SCREEN', false ); // disable the Settings screen
add_filter( 'attachments_default_instance', '__return_false' ); // disable the default instance

function alpha_attachments($attachments){
    $fields = array(
        array(
            'name'=> 'title',
            'type' => 'text',
            'label' =>__('Title','alpha'),
        ),
    );

    $args = array(
         // title of the meta box (string)
    'label'         => 'Featured Slider',

    // all post types to utilize (string|array)
    'post_type'     => array( 'post'),

    // allowed file type(s) (array) (image|video|text|audio|application)
    'filetype'      => array("image"),  // no filetype limit

    // include a note within the meta box (string)
    'note'          => 'Add slider images',

    // text for 'Attach' button in meta box (string)
    'button_text'   => __( 'Attach Files', 'alpha' ),

    // fields array
    'fields'        => $fields,
    );

    $attachments->register( 'slider', $args ); // unique instance name
}

add_action( 'attachments_register', 'alpha_attachments' );
