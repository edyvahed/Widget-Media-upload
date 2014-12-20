<?php

// add admin scripts
add_action('admin_enqueue_scripts', 'ctup_wdscript');
function ctup_wdscript() {
    wp_enqueue_media();
    wp_enqueue_script('ads_script', get_template_directory_uri() . '/js/widget.js', false, '1.0', true);
}

?>