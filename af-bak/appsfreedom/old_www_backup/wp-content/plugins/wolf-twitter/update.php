<?php
/**
* Display a admin notice if a new version of the plugin is available.
*/
class WolfTwitterUpdate{

	var $update_url = 'http://updates.wpwolf.com/plugins/';
	var $link = 'http://wpwolf.com/plugin/wolf-twitter';

	function __construct()
	{
		add_action('admin_notices',  array(&$this, 'display_notice'));
		add_action('admin_enqueue_scripts',  array(&$this, 'enqueue_cookie_script'));
	}

	function enqueue_cookie_script()
	{
		if(  !wp_script_is('cookie') )
			wp_enqueue_script( 'cookie', plugins_url().'/'.basename(dirname(__FILE__)) . '/js/jquery.memo.js', 'jquery', '1.0', true );
	}

	function get_plugin_slug()
	{
		return basename(dirname(__FILE__));
	}

	function display_notice()
	{
		if(is_admin() && $this->is_new_version() ){
			ob_start();
			?>
			<script type="text/javascript">
			jQuery(function($){
			$('.wolf-close-admin-notice').click(function(){ $(this).parent().parent().slideUp(); });
			$('.wolf-dismiss-admin-notice').click(function(){
			var message = $(this); if(message.attr('id')){ var id = message.attr('id'); $.cookie( id,  "false", { path: '/', expires: 7 }); $(this).parent().parent().slideUp();}});
			});
			</script>
			<strong><?php printf( __('There is a new version of %s plugin available.', 'wolf'),  $this->get_plugin_name()); ?></strong>
			<?php printf( __('You have version %s installed.', 'wolf'),   $this->get_plugin_version() ); ?>
			<a target="_blank" href="<?php echo esc_url($this->link); ?>"><?php printf( __('Update to version %s', 'wolf'),  $this->get_plugin_changelog()->latest ); ?></a>
			<?php
			$message = ob_get_contents();
			ob_end_clean();
			echo $this->update_admin_notice($message, 'updated', true, $this->get_plugin_slug() );
		}
	}

	/**
	* Compare the plugin version to the last update
	*/
	function get_plugin_changelog()
	{

		$changelog_url = $this->update_url . $this->get_plugin_slug() .'/changelog.xml';
		$trans_key = 'wolf_latest_version_'. $this->get_plugin_slug();
		
		if ( false === ( $cached_xml = get_transient( $trans_key ) ) ){
			if( function_exists('curl_init') ){
				$ch = curl_init($changelog_url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_TIMEOUT, 10);
				$xml = curl_exec($ch);
				curl_close($ch);
			} else {
				$xml = file_get_contents($changelog_url);
			}
		
			if ($xml){
				set_transient( $trans_key, $xml, 60*60*24 );
			}
			
		} else {
			$xml = $cached_xml;
		}
		
		return @simplexml_load_string($xml);
	}

	function is_new_version()
	{
		if( $xml = $this->get_plugin_changelog() ){
			if( version_compare( $this->get_plugin_version(), $xml->latest ) == -1 )
				return true;
			else
				return false;
		}else{
			return false;
		}
	}


	/**
	 * Returns current plugin version.
	 * 
	 * @return string Plugin version
	 */
	function get_plugin_version() {
		if ( ! function_exists( 'get_plugins' ) )
			require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		$plugin_file = dirname(__FILE__) . '/'. $this->get_plugin_slug().'.php'; 
		$plugin_data = get_plugin_data($plugin_file);
		return $plugin_data['Version'];
	}

	function get_plugin_name() {
		if ( ! function_exists( 'get_plugins' ) )
			require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		$plugin_file = dirname(__FILE__) . '/'. $this->get_plugin_slug().'.php'; 
		$plugin_data = get_plugin_data($plugin_file);
		return $plugin_data['Name'];
	}

	/**
	* Custom admin notice
	*/
	function update_admin_notice($message = null, $type = null, $dismiss = false, $id = null ){

		if( $dismiss ){

			$dismiss = __('Hide permanently', 'wolf');

			if($id){
				if( !isset($_COOKIE[$id]) )
					echo '<div class="wrap"><div class="'.$type.'"><p>'.$message.'<span class="wolf-close-admin-notice" style="font-weight: bold; display:inline; float: right;cursor:pointer; font-size: 18px;">&times;</span><span class="wolf-dismiss-admin-notice" id="' . $id . '" style="font-weight: normal;display:inline;float: right;cursor:pointer;font-size: 11px;line-height: 14px;margin-right:15px;">'.$dismiss.'</span></p></div></div>';
			}else{
				echo '<div class="wrap"><div class="'.$type.'"><p>'.$message.'<span class="wolf-close-admin-notice" style="font-weight: bold; display:inline; float: right;cursor:pointer; font-size: 18px;">&times;</span><span class="wolf-dismiss-admin-notice" style="font-weight: normal;display:inline;float: right;cursor:pointer;font-size: 11px;line-height: 14px;margin-right:15px;">'.$dismiss.'</span></p></div></div>';
			}
		}else{
			echo '<div class="wrap"><div class="'.$type.'"><p>'.$message.'</p></div></div>';
		}

	}

}
new WolfTwitterUpdate;
?>