<?php
//Load Shortcode Framework

//Hook Widget
add_action( 'widgets_init', 'techgasp_linkedinmaster_widget' );
//Register Widget
function techgasp_linkedinmaster_widget() {
register_widget( 'techgasp_linkedinmaster_widget' );
}

class techgasp_linkedinmaster_widget extends WP_Widget {
	function techgasp_linkedinmaster_widget() {
	$widget_ops = array( 'classname' => 'LinkedIn Master', 'description' => __('LinkedIn Master, if you are serious about your linkedin connections and want to integrate your personal or company linkedin page into your wordpress. ', 'LinkedIn Master') );
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'techgasp_linkedinmaster_widget' );
	$this->WP_Widget( 'techgasp_linkedinmaster_widget', __('LinkedIn Master', 'linkedin master'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		//Our variables from the widget settings.
		$name = "LinkedIn Master";
		$title = isset( $instance['show_linkedinbutton'] ) ? $instance['show_linkedinbutton'] :false;
		$show_linkedinbutton = isset( $instance['show_linkedinbutton'] ) ? $instance['show_linkedinbutton'] :false;
		echo $before_widget;
		
		// Display the widget title
	if ( $title )
		echo $before_title . $name . $after_title;
			//Display LinkedIn Profile + Display LinkedIn Horizontal

			//Display LinkedIn Share Website Button
	if ( $show_linkedinbutton )
				echo '<script src="//platform.linkedin.com/in.js" type="text/javascript">' .
					'lang: en_US' .
					'</script>' .
					'<script type="IN/Share" data-counter="right"></script>';
	$after_widget;
	}
	//Update the widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags from title and name to remove HTML
		$instance['name'] = strip_tags( $new_instance['name'] );
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['show_linkedinbutton'] = $new_instance['show_linkedinbutton'];
		return $instance;
	}
	function form( $instance ) {
	//Set up some default widget settings.
	$defaults = array( 'name' => __('LinkedIn Master', 'linkedin master'), 'title' => true, 'show_linkedinbutton' => false );
	$instance = wp_parse_args( (array) $instance, $defaults );
	?>
		<b>Check the buttons to be displayed:</b>
	<p>
	<input type="checkbox" <?php checked( (bool) $instance['title'], true ); ?> id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><b><?php _e('Display Widget Title', 'linkedin master'); ?></b></label></br>
	</p>
	<hr>
	<p>
	<input type="checkbox" <?php checked( (bool) $instance['show_linkedinbutton'], true ); ?> id="<?php echo $this->get_field_id( 'show_linkedinbutton' ); ?>" name="<?php echo $this->get_field_name( 'show_linkedinbutton' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_linkedinbutton' ); ?>"><b><?php _e('LinkedIn Share Website Button', 'linkedin master'); ?></b></label></br>
	</p>
	<hr>
	<p><b>LinkedIn Master Advanced Version:</b> contains the extra LinkedIn Personal Profile Display and LinkedIn Company Profile Display. Also includes shortcode framework.</p>
	<p><a class="button-primary" href="http://wordpress.techgasp.com/linkedin-master/" target="_blank" title="LinkedIn Master Advanced Version">LinkedIn Master Advanced Version</a></p>
	<?php
	}
 }
?>
