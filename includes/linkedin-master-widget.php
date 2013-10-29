<?php
//Hook Widget
add_action( 'widgets_init', 'linkedin_master_widget' );
//Register Widget
function linkedin_master_widget() {
register_widget( 'linkedin_master_widget' );
}

class linkedin_master_widget extends WP_Widget {
	function linkedin_master_widget() {
	$widget_ops = array( 'classname' => 'LinkedIn Master', 'description' => __('LinkedIn Master, if you are serious about your linkedin connections and want to integrate your personal or company linkedin page into your wordpress. ', 'linkedin_master') );
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'linkedin_master_widget' );
	$this->WP_Widget( 'linkedin_master_widget', __('LinkedIn Master', 'linkedin_master'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		//Our variables from the widget settings.
		$name = "LinkedIn Master";
		$title = isset( $instance['title'] ) ? $instance['title'] :false;
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
	$defaults = array( 'name' => __('LinkedIn Master', 'linkedin_master'), 'title' => true, 'show_linkedinbutton' => false, 'show_linkedinprofile' => false, 'show_linkedinhorizontal' => false, 'personalcode' => false, 'companycode' => false );
	$instance = wp_parse_args( (array) $instance, $defaults );
	?>
		<b>Check the buttons to be displayed:</b>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['title'], true ); ?> id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><b><?php _e('Display Widget Title', 'linkedin_master'); ?></b></label></br>
	</p>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_linkedinbutton'], true ); ?> id="<?php echo $this->get_field_id( 'show_linkedinbutton' ); ?>" name="<?php echo $this->get_field_name( 'show_linkedinbutton' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_linkedinbutton' ); ?>"><b><?php _e('LinkedIn Share Website Button', 'linkedin_master'); ?></b></label></br>
	</p>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Show LinkedIn Profile</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Activate Horizontal Display</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>insert LinkedIn Personal Profile Code</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>insert LinkedIn Company Profile Code</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<p>
		<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
		&nbsp;
		<b>Linkedin Master Website</b>
		</p>
		<p><a class="button-secondary" href="http://wordpress.techgasp.com/linkedin-master/" target="_blank" title="Linkedin Master Info Page">Info Page</a> <a class="button-secondary" href="http://wordpress.techgasp.com/linkedin-master-documentation/" target="_blank" title="Linkedin Master Documentation">Documentation</a> <a class="button-primary" href="http://wordpress.techgasp.com/linkedin-master/" target="_blank" title="Linkedin Master">Advanced Version</a></p>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<p>
		<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
		&nbsp;
		<b>Advanced Version Updater:</b>
		</p>
		<div class="description">The advanced version updater allows to automatically update your advanced plugin. Only available in advanced version.</div>
	<?php
	}
 }
?>