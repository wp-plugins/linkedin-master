<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class linkedin_master_admin_addons_table extends WP_List_Table {
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
			<th id="columnname" class="manage-column column-columnname" scope="col"><h3><img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Installed', 'linkedin_master'); ?></h3></legend></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th class="manage-column column-columnname" scope="col" width="300"><a class="button-primary" href="http://wordpress.techgasp.com/linkedin-master/" target="_blank" title="Get Add-ons" style="float:left;">Get Add-ons</a></p></th>
			<th class="manage-column column-columnname" scope="col"></th>
			<th class="manage-column column-columnname" scope="col"><a class="button-primary" href="http://wordpress.techgasp.com/linkedin-master/" target="_blank" title="Get Add-ons" style="float:right;">Get Add-ons</a></p></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-linkedinmaster-admin-addons-widget-buttons.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Buttons Widget</h3><p>The perfect widget if you only want to display the LinkedIn Connect Button or the Lyrics Button. A great way to connect people to your LinkedIn profile or to display your cool lyrics page.</p><p>This widget works great when published under any of the below players. You can activate both buttons or a single one, navigate to your wordpress widgets page and start using it.</p></td>

			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-yes.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-linkedinmaster-admin-addons-widget-profile-member.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Member Profile Widget</h3><p>The Basic LinkedIn Player Widget was specially designed for fast loading times and is perfect to display a single track. All player options are on automatic settings so it's easy and fast to deploy by any wordpress administrator.</p><p>This widget is fully <b>Mobile Responsive</b>, navigate to your wordpress widgets page and start using it.</p></td>

			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-yes.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-linkedinmaster-admin-addons-widget-profile-company.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Company Profile Widget</h3><p>The "top of the line" Advanced LinkedIn Player Widget was specially designed to grant you all LinkedIn Player Options, you have full control over Size, Color, Auto-Play, Display Username, Display Artwork, Display Comments, Display Playcount, Display Share, Display Like, Display Download and Display Buy. All player options are customizable, still extremely easy to use.</p><p>This widget is fully <b>Mobile Responsive</b>. Check the Add-ons Page.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-linkedinmaster-admin-addons-widget-company-insider.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Company Insider Widget</h3><p>The Basic LinkedIn Player Widget was specially designed for fast loading times and is perfect to display a single track. All player options are on automatic settings so it's easy and fast to deploy by any wordpress administrator.</p><p>This widget is fully <b>Mobile Responsive</b>. Check the Add-ons Page.</p></td>

			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-linkedinmaster-admin-addons-widget-apply-job.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Apply Job Widget</h3><p>The "top of the line" Advanced LinkedIn Player Widget was specially designed to grant you all LinkedIn Player Options, you have full control over Size, Color, Auto-Play, Display Username, Display Artwork, Display Comments, Display Playcount, Display Share, Display Like, Display Download and Display Buy. All player options are customizable, still extremely easy to use.</p><p>This widget is fully <b>Mobile Responsive</b>. Check the Add-ons Page.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-linkedinmaster-admin-addons-shortcode-in.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Individual Shortcode</h3><p>LinkedIn Master uses TechGasp Wordpress Framework. The <b>Individual Shortcode</b> allows you to have a different customized LinkedIn Player in each page or post. Easy to use it can be found when you edit a page or a post under the wordpress text editor. Once you have created your shortcode, Just insert the shortcode <b>[linkedin-master]</b> anywhere inside that text. Check the Add-ons Page.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-linkedinmaster-admin-addons-shortcode-un.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Universal Shortcode</h3><p>LinkedIn Master uses TechGasp Wordpress Framework. The <b>Universal Shortcode</b> allows you to have the same LinkedIn Player across different pages or posts. Easy to use it can be found right here under the Shortcodes menu. Once you have created your shortcode, Just insert the shortcode <b>[linkedin-master-un]</b> anywhere inside the text of your pages or posts. Check the Add-ons Page.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-linkedinmaster-admin-addons-updater.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Advanced Updater</h3><p>The Advanced Updater allows you to easily Update / Upgrade your Advanced Plugin. You can instantly update your plugin after we release a new version with more goodies without having to wait for the nightly native wordpress updater that runs every 24/48 hours. Get it fresh, get it fast.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="LinkedIn Master" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
	</tbody>
</table>
<?php
		}
}