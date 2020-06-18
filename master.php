<?php

function load_master($routingParameters) {
	$param = get_body_part($routingParameters);
	
	//print_r($param);
	
	renader_master($routingParameters, $param);
}

function get_body_part($rtparam) {
	$arr = array(
		'master' => '',
		'head' => '',
		'left' => '',
		'right' => '',
		'bottom' => '',
		'body_top' => '',
		'body_bottom' => ''
	);

	if (isset($rtparam['area']) && $rtparam['area'] == 'website') 
	{
		if (!(isset($rtparam['action']) && $rtparam['action'] == 'index')) 
		{					
			$arr['master']  = ROOTDIR . DS . 'website' . DS . 'index' . DS . '_' . 'master.php';
			$arr['head']    = ROOTDIR . DS . 'website' . DS . 'index' . DS . '_' .  'head.php';
			$arr['left']    = ROOTDIR . DS . 'website' . DS . 'index' . DS . '_' .  'left.php';
			$arr['right']   = ROOTDIR . DS . 'website' . DS . 'index' . DS . '_' .  'right.php';
			$arr['bottom']  = ROOTDIR . DS . 'website' . DS . 'index' . DS . '_' .  'bottom.php';
			$arr['body_top']  = ROOTDIR . DS . 'website' . DS . 'index' . DS . '_' .  'body_top.php';
			$arr['body_bottom']  = ROOTDIR . DS . 'website' . DS . 'index' . DS . '_' .  'body_bottom.php';
			$arr['quick_link']  = ROOTDIR . DS . 'website' . DS . 'index' . DS . '_' .  'quick_link.php';
		}
	}

	if (isset($rtparam['area']) && $rtparam['area'] == 'app') {
		$arr['master']  = ROOTDIR . DS . 'app' . DS . 'master.php';
		$arr['head']    = ROOTDIR . DS . 'app' . DS . 'top_content_bar.php';
		$arr['left']    = ROOTDIR . DS . 'app' . DS . 'left_sidebar_content.php';
		$arr['right']   = ROOTDIR . DS . 'app' . DS . 'right_sidebar_content.php';
		$arr['bottom']  = ROOTDIR . DS . 'app' . DS . 'footer_link_files.php';
	}

	return $arr;
}

function check_and_render($master_details, $name) 
{
	$val = '';
	if (isset($master_details[$name]) && !empty($master_details[$name]))
	{
		$val = render_php($master_details[$name]);
	}
	return $val;
}

function renader_master($routingParameters, $master_details) {
	/* Render files star */

	if (isset($master_details['master']) && empty($master_details['master'])) {
		/* Get Controller Details */
		$bodypath = (isset($routingParameters['area']) ? $routingParameters['area'] . DIRECTORY_SEPARATOR : '');
		$bodypath .= $routingParameters['controller'] . DIRECTORY_SEPARATOR . $routingParameters['action'] . '.php';

		/* Render Body */

		$body = render_php($bodypath);

		echo $body;
	}
	else 
	{
		$masterfilepath = $master_details['master'];

		$masterfile = render_php($masterfilepath);

		foreach ($master_details as $key => $value) {
			if ($key != 'master') {
				$bodytop = check_and_render($master_details, $key);
		
				$masterfile = str_replace('{{' . $key . '_render}}', $bodytop, $masterfile);
			}
		}


		// /* STATRT BODY TOP */
		// $bodytop = check_and_render($master_details, 'body_top');
		
		// $masterfile = str_replace('{{body_content_area_top}}', $bodytop, $masterfile);
		// /* END BODY TOP */



		// /* START BODY BOTTOM */
		// $bodybottom = check_and_render($master_details, 'body_bottom');
		
		// $masterfile = str_replace('{{body_content_area_bottom}}', $bodybottom, $masterfile);

		// /* END BODY BOTTOM */
		


		// /* START HEAD */
		// $headlistphp = check_and_render($master_details, 'head');
		
		// $masterfile = str_replace('{{head_link_files}}', $headlistphp, $masterfile);

		// /* END HEAD */

		
		
		// /* START BOTTOM */
		// $footerlistphp = check_and_render($master_details, 'bottom');
		
		// $masterfile = str_replace('{{footer_link_files}}', $footerlistphp, $masterfile);
		// /* END BOTTOM */


		// /* Left Side content file */
		// $leftsidebarcontent = check_and_render($master_details, 'left');
		
		// $masterfile = str_replace('{{left_sidebar_content}}', $leftsidebarcontent, $masterfile);


		/* Get Controller Details */
		$bodypath = (isset($routingParameters['area']) ? $routingParameters['area'] . DS : '');
		$bodypath .= $routingParameters['controller'] . DS . $routingParameters['action'] . '.php';


		/* Render Body */

		$body = render_php($bodypath);

		$masterfile = str_replace('{{body_content_area}}', $body, $masterfile);



		/* Display Data Part */

		echo $masterfile;
	}

}

?>