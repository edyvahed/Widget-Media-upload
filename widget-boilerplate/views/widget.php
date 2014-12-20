<!-- This file is used to markup the public-facing widget. -->
<?php
$title = apply_filters('widget_title', $instance['title'] );
$name = $instance['name'];
$uri = $instance['image_uri'];
$show_info = isset( $instance['show_info'] ) ? $instance['show_info'] : false;

echo "this is only test for building images";
echo "name: ".$title."<br>";
echo $name."<br>";
echo $uri;
