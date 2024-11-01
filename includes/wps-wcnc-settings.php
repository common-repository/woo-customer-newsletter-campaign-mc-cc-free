<?php
class WPS_WCNC_Settings
{
	public function display_settings_MailChimp(){
		$wps_wcnc_mailchimp_key 	  = (get_option('wps_wcnc_mailchimp_key')) ? get_option('wps_wcnc_mailchimp_key') : '';
	    $wps_wcnc_mailchimp_status 	  = (get_option('wps_wcnc_mailchimp_status')) ? get_option('wps_wcnc_mailchimp_status') : 'disable';
		?>
			<article class="ac-large wps-wcnc-settings">
				<span class="wps-label">Status</span>
				<select name="wps_wcnc_mailchimp_status">
					<option value="enable" <?php if($wps_wcnc_mailchimp_status=='enable'){echo 'selected';}?>>Enable</option>
					<option value="disable" <?php if($wps_wcnc_mailchimp_status=='disable'){echo 'selected';}?>>Disable</option>
				</select>
		    	<span class="wps-label">API Key</span>
		    	<input type="text" name="wps_wcnc_mailchimp_key" id="wps_wcnc_mailchimp_key" value="<?php echo $wps_wcnc_mailchimp_key; ?>"/>
		    	
		    	<span class="wps-label">Lists</span>
		    	<p class="wpcWcncloaderDiv">
		    		Please wait,List is loading <img src="<?php echo WPS_WOO_CUST_NEWS_CAMP_IMG_MC_CC_FR; ?>/loading.gif" title="List is loading" />
		    	</p>
		    	<div id="wps_wcnc_mailchimp_list_id"></div>
			</article>
		<?php
	}

	public function display_settings_ConstantContact(){
		$wps_wcnc_constantcontact_status = (get_option('wps_wcnc_constantcontact_status')) ? get_option('wps_wcnc_constantcontact_status') : '';
		$wps_wcnc_constantcontact_key = (get_option('wps_wcnc_constantcontact_key')) ? get_option('wps_wcnc_constantcontact_key') : '';
		$wps_wcnc_constantcontact_token = (get_option('wps_wcnc_constantcontact_token')) ? get_option('wps_wcnc_constantcontact_token') : '';

		?>
			<article class="ac-extra-large wps-wcnc-settings">
				<span class="wps-wcnc-notice">*Import Feature of ConstantContact Is Available With Premium Version*</span><br/>
				<span class="wps-label">Status</span>
				<select name="wps_wcnc_constantcontact_status">
					<option value="enable" <?php if($wps_wcnc_constantcontact_status=='enable'){echo 'selected';}?>>Enable</option>
					<option value="disable" <?php if($wps_wcnc_constantcontact_status=='disable'){echo 'selected';}?>>Disable</option>
				</select>
				<span class="wps-label">API Key</span>
				<input type="text" name="wps_wcnc_constantcontact_key" id="wps_wcnc_constantcontact_key" value="<?php echo $wps_wcnc_constantcontact_key; ?>"/>
				<span class="wps-label">Access Token</span>
				<input type="text" name="wps_wcnc_constantcontact_token" id="wps_wcnc_constantcontact_token" value="<?php echo $wps_wcnc_constantcontact_token; ?>"/>
				<span class="wps-label">Lists</span>
		    	<p class="wpcWcncloaderDiv">
		    		Please wait,List is loading <img src="<?php echo WPS_WOO_CUST_NEWS_CAMP_IMG_MC_CC_FR; ?>/loading.gif" title="List is loading" />
		    	</p>
		    	<div id="wps_wcnc_constantcontact_list_id"></div>

			</article>
		<?php
	}
}

?>