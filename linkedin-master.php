<?php
/**
Plugin Name: LinkedIn Master
Plugin URI: http://wordpress.techgasp.com/linkedin-master/
Version: 4.4.1.5
Author: TechGasp
Author URI: http://wordpress.techgasp.com
Text Domain: linkedin-master
Description: LinkedIn Master, if you are serious about your linkedin connections and want to integrate your personal or company linkedin page into your wordpress.
License: GPL2 or later
*/
/*  Copyright 2013 TechGasp  (email : info@techgasp.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if(!class_exists('linkedin_master')) :
///////DEFINE DIR///////
define( 'LINKEDIN_MASTER_DIR', plugin_dir_path( __FILE__ ) );
///////DEFINE URL///////
define( 'LINKEDIN_MASTER_URL', plugin_dir_url( __FILE__ ) );
///////DEFINE ID//////
define( 'LINKEDIN_MASTER_ID', 'linkedin-master');
///////DEFINE VERSION///////
define( 'LINKEDIN_MASTER_VERSION', '4.4.1.5' );
global $linkedin_master_version, $linkedin_master_name;
$linkedin_master_version = "4.4.1.5"; //for other pages
$linkedin_master_name = "Linkedin Master"; //pretty name
if( is_multisite() ) {
update_site_option( 'linkedin_master_installed_version', $linkedin_master_version );
update_site_option( 'linkedin_master_name', $linkedin_master_name );
}
else{
update_option( 'linkedin_master_installed_version', $linkedin_master_version );
update_option( 'linkedin_master_name', $linkedin_master_name );
}
// HOOK ADMIN
require_once( dirname( __FILE__ ) . '/includes/linkedin-master-admin.php');
// HOOK ADMIN IN & UN SHORTCODE
require_once( dirname( __FILE__ ) . '/includes/linkedin-master-admin-shortcodes.php');
// HOOK ADMIN WIDGETS
require_once( dirname( __FILE__ ) . '/includes/linkedin-master-admin-widgets.php');
// HOOK ADMIN ADDONS
require_once( dirname( __FILE__ ) . '/includes/linkedin-master-admin-addons.php');
// HOOK ADMIN UPDATER
require_once( dirname( __FILE__ ) . '/includes/linkedin-master-admin-updater.php');
// HOOK WIDGET BUTTONS
require_once( dirname( __FILE__ ) . '/includes/linkedin-master-widget-buttons.php');
// HOOK WIDGET PROFILE MEMBER >> ADVANCED
require_once( dirname( __FILE__ ) . '/includes/linkedin-master-widget-profile-member.php');

class linkedin_master{
//REGISTER PLUGIN
public static function linkedin_master_register(){
register_activation_hook( __FILE__, array( __CLASS__, 'linkedin_master_activate' ) );
}
public static function content_with_quote($content){
$quote = '<p>' . get_option('tsm_quote') . '</p>';
	return $content . $quote;
}
//SETTINGS LINK IN PLUGIN MANAGER
public static function linkedin_master_links( $links, $file ) {
if ( $file == plugin_basename( dirname(__FILE__).'/linkedin-master.php' ) ) {
		if( is_network_admin() ){
		$techgasp_plugin_url = network_admin_url( 'admin.php?page=linkedin-master' );
		}
		else {
		$techgasp_plugin_url = admin_url( 'admin.php?page=linkedin-master' );
		}
	$links[] = '<a href="' . $techgasp_plugin_url . '">'.__( 'Settings' ).'</a>';
	}
	return $links;
}

public static function linkedin_master_updater_version_check(){
global $linkedin_master_version;
//CHECK NEW VERSION
$linkedin_master_slug = basename(dirname(__FILE__));
$current = get_site_transient( 'update_plugins' );
$linkedin_plugin_slug = $linkedin_master_slug.'/'.$linkedin_master_slug.'.php';
@$r = $current->response[ $linkedin_plugin_slug ];
if (empty($r)){
$r = false;
$linkedin_plugin_slug = false;
if( is_multisite() ) {
update_site_option( 'linkedin_master_newest_version', $linkedin_master_version );
}
else{
update_option( 'linkedin_master_newest_version', $linkedin_master_version );
}
}
if (!empty($r)){
$linkedin_plugin_slug = $linkedin_master_slug.'/'.$linkedin_master_slug.'.php';
@$r = $current->response[ $linkedin_plugin_slug ];
if( is_multisite() ) {
update_site_option( 'linkedin_master_newest_version', $r->new_version );
}
else{
update_option( 'linkedin_master_newest_version', $r->new_version );
}
}
}
//Remove WP Updater
// Advanced Updater
//Updater Label Message
//END CLASS
}
if ( is_admin() ){
	add_action('admin_init', array('linkedin_master', 'linkedin_master_register'));
	add_action('init', array('linkedin_master', 'linkedin_master_updater_version_check'));
}
add_filter('the_content', array('linkedin_master', 'content_with_quote'));
add_filter( 'plugin_action_links', array('linkedin_master', 'linkedin_master_links'), 10, 2 );
endif;