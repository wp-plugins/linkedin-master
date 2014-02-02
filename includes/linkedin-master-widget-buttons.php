<?php
//Hook Widget
add_action( 'widgets_init', 'linkedin_master_widget_buttons' );
//Register Widget
function linkedin_master_widget_buttons() {
register_widget( 'linkedin_master_widget_buttons' );
}

class linkedin_master_widget_buttons extends WP_Widget {
	function linkedin_master_widget_buttons() {
	$widget_ops = array( 'classname' => 'LinkedIn Master Buttons', 'description' => __('LinkedIn Master Buttons allows you to show the Share Page on LinkedIn or Follow Company on LinkedIn. ', 'LinkedIn Master Buttons') );
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'linkedin_master_widget_buttons' );
	$this->WP_Widget( 'linkedin_master_widget_buttons', __('LinkedIn Master Buttons', 'linkedin_master'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		//Our variables from the widget settings.
		$linkedin_title = isset( $instance['linkedin_title'] ) ? $instance['linkedin_title'] :false;
		$linkedin_title_new = isset( $instance['linkedin_title_new'] ) ? $instance['linkedin_title_new'] :false;
		$show_linkedinbutton_share = isset( $instance['show_linkedinbutton_share'] ) ? $instance['show_linkedinbutton_share'] :false;
		$show_linkedinbutton_follow = isset( $instance['show_linkedinbutton_follow'] ) ? $instance['show_linkedinbutton_follow'] :false;
		$linkedinbutton_follow = $instance['linkedinbutton_follow'];
		echo $before_widget;
		
// Display the widget title
	if ( $linkedin_title ){
		if (empty ($linkedin_title_new)){
		$linkedin_title_new = "LinkedIn Master";
		}
		echo $before_title . $linkedin_title_new . $after_title;
	}
	else{
	}
//Display LinkedIn Share Website Button
	if ( $show_linkedinbutton_share ){
		$show_linkedinbutton_share_create = '<div>' .
											'<script src="//platform.linkedin.com/in.js" type="text/javascript">' .
											'lang: en_US' .
											'</script>' .
											'<script type="IN/Share" data-counter="right"></script>' .
											'</div>';
	}
	else{
		$show_linkedinbutton_share_create = false;
	}
//Display LinkedIn Share Website Button
	if ( $show_linkedinbutton_follow ){
		$show_linkedinbutton_follow_create = '<script src="//platform.linkedin.com/in.js" type="text/javascript">' .
									'lang: en_US' .
									'</script>' .
									'&nbsp;&nbsp;<script type="IN/FollowCompany" data-id="'.$linkedinbutton_follow.'" data-counter="right"></script>';
	}
	else{
		$show_linkedinbutton_follow_create = false;
	}
	echo '<div style="display:flex;">' .
		$show_linkedinbutton_share_create . $show_linkedinbutton_follow_create .
		'</div>' .
	$after_widget;
	}
	//Update the widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags from title and name to remove HTML
		$instance['linkedin_title'] = strip_tags( $new_instance['linkedin_title'] );
		$instance['linkedin_title_new'] = $new_instance['linkedin_title_new'];
		$instance['show_linkedinbutton_share'] = $new_instance['show_linkedinbutton_share'];
		$instance['show_linkedinbutton_follow'] = $new_instance['show_linkedinbutton_follow'];
		$instance['linkedinbutton_follow'] = $new_instance['linkedinbutton_follow'];
		return $instance;
	}
	function form( $instance ) {
	//Set up some default widget settings.
	$defaults = array( 'linkedin_title_new' => __('LinkedIn Master', 'linkedin_master'), 'linkedin_title' => true, 'linkedin_title_new' => false, 'show_linkedinbutton_share' => false, 'show_linkedinbutton_follow' => false, 'linkedinbutton_follow' => false );
	$instance = wp_parse_args( (array) $instance, $defaults );
	?>
		<br>
		<b>Check the buttons to be displayed:</b>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['linkedin_title'], true ); ?> id="<?php echo $this->get_field_id( 'linkedin_title' ); ?>" name="<?php echo $this->get_field_name( 'linkedin_title' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'linkedin_title' ); ?>"><b><?php _e('Display Widget Title', 'linkedin_master'); ?></b></label></br>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id( 'linkedin_title_new' ); ?>"><?php _e('Change Title:', 'linkedin_master'); ?></label>
	<br>
	<input id="<?php echo $this->get_field_id( 'linkedin_title_new' ); ?>" name="<?php echo $this->get_field_name( 'linkedin_title_new' ); ?>" value="<?php echo $instance['linkedin_title_new']; ?>" style="width:auto;" />
	</p>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_linkedinbutton_share'], true ); ?> id="<?php echo $this->get_field_id( 'show_linkedinbutton_share' ); ?>" name="<?php echo $this->get_field_name( 'show_linkedinbutton_share' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_linkedinbutton_share' ); ?>"><b><?php _e('LinkedIn Share Website Button', 'linkedin_master'); ?></b></label></br>
	</p>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_linkedinbutton_follow'], true ); ?> id="<?php echo $this->get_field_id( 'show_linkedinbutton_follow' ); ?>" name="<?php echo $this->get_field_name( 'show_linkedinbutton_follow' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_linkedinbutton_follow' ); ?>"><b><?php _e('LinkedIn Follow Company', 'linkedin_master'); ?></b></label></br>
	</p>
	<label for="<?php echo $this->get_field_id( 'linkedinbutton_follow' ); ?>"><?php _e('LinkedIn Company Name:', 'linkedin_master'); ?></label></br>
	<input id="<?php echo $this->get_field_id( 'linkedinbutton_follow' ); ?>" name="<?php echo $this->get_field_name( 'linkedinbutton_follow' ); ?>" value="<?php echo $instance['linkedinbutton_follow']; ?>" style="width:auto;" />
	<div class="description"><a href="http://developer.linkedin.com/plugins/follow-company?button-type-count-right=true" target="_blank">LinkedIn Company Name Checker</a></div>
	<div class="description">inside the Get Code copy the id number, i.e. <b>2822222</b></div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Linkedin Master Website</b>
	</p>
	<p><a class="button-secondary" href="http://wordpress.techgasp.com/linkedin-master/" target="_blank" title="Linkedin Master Info Page">Info Page</a> <a class="button-secondary" href="http://wordpress.techgasp.com/linkedin-master-documentation/" target="_blank" title="Linkedin Master Documentation">Documentation</a> <a class="button-primary" href="http://wordpress.techgasp.com/linkedin-master/" target="_blank" title="Get Add-ons!">Get Add-ons!</a></p>
	<?php
	}
 }
?>