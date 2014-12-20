<!-- This file is used to markup the administration form of the widget. -->
<?php
//Set up some default widget settings.
$defaults = array( 'title' => __('Example', 'test'), 'name' => __('Bilal Shaheen', 'test'), 'show_info' => true );
$instance = wp_parse_args( (array) $instance, $defaults ); ?>


<p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'test'); ?></label>
    <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
</p>


<p>
    <label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e('Your Name:', 'test'); ?></label>
    <input id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" value="<?php echo $instance['name']; ?>" style="width:100%;" />
</p>



<p>
    <input class="checkbox" type="checkbox" <?php checked( $instance['show_info'], true ); ?> id="<?php echo $this->get_field_id( 'show_info' ); ?>" name="<?php echo $this->get_field_name( 'show_info' ); ?>" />
    <label for="<?php echo $this->get_field_id( 'show_info' ); ?>"><?php _e('Display info publicly?', 'test'); ?></label>
</p>

<p>
    <?php // this part only for upload media
    //for adding all parts first go to functions.php and add widget.js handler
    //second add widget.js in theme root -> js -> widget.js
    // third enjoy it! ?>
    <label for="<?php echo $this->get_field_id('image_uri'); ?>">Image</label><br />
    <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php echo $instance['image_uri']; ?>" style="margin-top:5px;">
    <input type="button" class="button button-primary custom_media_button" id="custom_media_button" name="<?php echo $this->get_field_name('image_uri'); ?>" value="Upload Image" style="margin-top:5px;" />
</p>

