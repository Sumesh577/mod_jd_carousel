<?php
// Licensed under the GPL v3
defined('_JEXEC') or die;

require_once dirname(__FILE__) . '/helper.php';

			$jd_carousel = json_decode( $params->get('jd_carousel'),true);
			$jd_arrow =  $params->get('arrow'); 
			$jd_indicate =  $params->get('indicate'); 
			$jd_caption =  $params->get('caption'); 			
			$jd_bootstrap_3 =  $params->get('bootstrap_3'); 			
			require JModuleHelper::getLayoutPath('mod_jd_carousel');
?>