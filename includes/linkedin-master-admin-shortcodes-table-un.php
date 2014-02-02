<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class linkedin_master_admin_shortcodes_table_un extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
	function display() {
if ( $_POST) {
if ( isset($_POST['linkedin_master_un_share_button']) )
update_option('linkedin_master_un_share_button', $_POST['linkedin_master_un_share_button'] );
else
update_option('linkedin_master_un_share_button', 'false' );

if ( isset($_POST['linkedin_master_un_profile']) )
update_option('linkedin_master_un_profile', $_POST['linkedin_master_un_profile'] );
else
update_option('linkedin_master_un_profile', 'false' );

if ( isset($_POST['linkedin_master_un_profile_code']) )
update_option('linkedin_master_un_profile_code', $_POST['linkedin_master_un_profile_code'] );
else
update_option('linkedin_master_un_profile_code', 'false' );

if ( isset($_POST['linkedin_master_un_align']) )
update_option('linkedin_master_un_align', $_POST['linkedin_master_un_align'] );
else
update_option('linkedin_master_un_align', 'false' );
?>
<div id="message" class="updated fade">
<p><strong><?php _e('Settings Saved!', 'linkedin_master'); ?></strong></p>
</div>
<?php
}
?>
<form method="post" width='1'>
<fieldset class="options">

<table class="widefat fixed" cellspacing="0">
	<thead>
		<tr>
			<th id="cb" class="manage-column column-cb check-column" scope="col" style="vertical-align:middle"><input type="checkbox"></th>
			<th id="columnname" class="manage-column column-columnname" scope="col" width="200"><legend><h3><img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Universal Shortcode', 'linkedin_master'); ?></h3></legend></th>
			<th id="columnname" class="manage-column column-columnname" scope="col" width="200"></th>
			<th id="columnname" class="manage-column column-columnname" scope="col"><legend><h3><?php _e('&nbsp;[linkedin-master-un]', 'linkedin_master'); ?></h3></legend></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th class="manage-column column-cb check-column" scope="col"></th>
			<th class="manage-column column-columnname" scope="col" width="200"></th>
			<th class="manage-column column-columnname" scope="col" width="200"></th>
			<th class="manage-column column-columnname" scope="col"></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="200">
<p>Check the Add-ons Page</p>
			</td>
			<td class="column-columnname" width="200"></td>
			<td class="column-columnname"></td>
		</tr>
	</tbody>
</table>
<p class="submit"><input class='button-primary' type='submit' name='update' value='<?php _e("Save Shortcode UN", 'linkedin_master'); ?>' id='submitbutton' /></p>
</fieldset>
</form>
<?php
	}
//CLASS ENDS
}