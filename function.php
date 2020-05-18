<?php


function TwentyTwenty_Child_Script(){
    wp_enqueue_script('extra js', get_template_directory_uri() . '/js/extra.js');
}

add_action( 'wp_enqueue_scripts', 'TwentyTwenty_Child_Script');