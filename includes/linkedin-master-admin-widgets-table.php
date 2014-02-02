<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class linkedin_master_admin_widgets_table extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
	function display() {
?>
<table class="widefat fixed" cellspacing="0">
	<thead>
		<tr>
			<th id="columnname" class="manage-column column-columnname" scope="col" width="300"><legend><h3><img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Screenshot', 'linkedin_master'); ?></h3></legend></th>
			<th id="columnname" class="manage-column column-columnname" scope="col"><h3><img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Description', 'linkedin_master'); ?></h3></legend></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th class="manage-column column-columnname" scope="col" width="300"><a class="button-primary" href="/wp-admin/widgets.php" title="To Widgets Page" style="float:left;">To Widgets Page</a></p></th>
			<th class="manage-column column-columnname" scope="col"><a class="button-primary" href="/wp-admin/widgets.php" title="To Widgets Page" style="float:right;">To Widgets Page</a></p></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-linkedinmaster-admin-widget-buttons.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Buttons Widget</h3><p>The perfect widget if you only want to display the Share Website Page or Follow Company on LinkedIn. A great way to connect people to your LinkedIn Company Profile or to share your website page across LinkedIn profiles.</p><p>This widget works great when published under any of the below players. You can activate both buttons or a single one, navigate to your wordpress widgets page and start using it.</p></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-linkedinmaster-admin-widget-profile-member.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Member Profile Widget</h3><p>The LinkedIn Member Profile Widget allows you to display your linkedin personal profile and was specially designed to encapsulate the linkedin script for fast page loading times and good Google SEO.</p><p>Navigate to your wordpress widgets page and start using it.</p></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-linkedinmaster-admin-widget-profile-company.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Company Profile Widget</h3><p>The LinkedIn Master Company Profile, allows you to display your linkedin company profile and was specially designed to encapsulate the linkedin script for fast page loading times and good Google SEO.</p><p>Check the Add-ons Page.</p></td>
		</tr>
<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-linkedinmaster-admin-widget-company-insider.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Company Insider Widget</h3><p>The LinkedIn Master Company Insider, allows to enhance your content and show rich personalized insights about companies featured on your site and was specially designed to encapsulate the linkedin script for fast page loading times and good Google SEO.</p><p>Check the Add-ons Page.</p></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-linkedinmaster-admin-widget-apply-job.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Apply Job Widget</h3><p>The LinkedIn Master Apply Job allows for candidates to apply for your jobs using their LinkedIn profiles and was specially designed to encapsulate the linkedin script for fast page loading times and good Google SEO.</p><p>Check the Add-ons Page.</p></td>
		</tr>
	</tbody>
</table>
<?php
		}
}