<?php
//Loads configuration from database into global CI config
function load_config()
{
	$CI =& get_instance();
	
	if ($CI->session->userdata('sitelang'))
	{
		$CI->config->set_item( 'language', $CI->session->userdata('sitelang') );
		$lang_abbr = $CI->session->userdata('sitelang')=="english"?"en":"nl";
		$CI->config->set_item( 'language_abbr',  $lang_abbr);
		
		log_message("ERROR", 'lang_abbr : '.$CI->config->item('language_abbr'));
		
		$loaded = $CI->lang->is_loaded;
		$CI->lang->is_loaded = array();

		foreach($loaded as $file)
		{
			$CI->lang->load( str_replace( '_lang.php', '', $file ) );    
		}
	}
}
?>