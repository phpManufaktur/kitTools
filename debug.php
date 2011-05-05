<?php
/**
 * kitTools
 * 
 * @author Ralf Hertsch (ralf.hertsch@phpmanufaktur.de)
 * @link http://phpmanufaktur.de
 * @copyright 2011
 * @license GNU GPL (http://www.gnu.org/licenses/gpl.html)
 * @version $Id$
 */

// prevent this file from being accessed directly
if (!defined('WB_PATH')) die('invalid call of '.$_SERVER['SCRIPT_NAME']);

// for extended error reporting set to true!
if (!defined('KIT_DEBUG')) define('KIT_DEBUG', false);

function kit_tool_error_handler($level, $message, $file, $line) {
	switch ($level):
		case 1:			$type = 'E_ERROR'; break;
		case 2:			$type = 'E_WARNING'; break;
		case 4:			$type = 'E_PARSE'; break;
		case 8:			$type = 'E_NOTICE'; break;
		case 16: 		$type = 'E_CORE_ERROR';	break;
		case 32: 		$type = 'E_CORE_WARNING';	break;
		case 64: 		$type = 'E_COMPILE_ERROR'; break;
		case 128:		$type = 'E_COMPILE_WARNING'; break;
		case 256:		$type = 'E_USER_ERROR';	break;
		case 512:		$type = 'E_USER_WARNING';	break;
		case 1024: 	$type = 'E_USER_NOTICE'; break;
		case 2047: 	$type = 'E_ALL'; break;
		case 2048: 	$type = 'E_STRICT';	break;
		default:		$type = $level;	break; 
	endswitch;
	echo sprintf(	'<div style="margin:5px 15px;padding:10px;border:1px solid #000;color:#000;background-color:#ffd;">'.
								'<table width="99%%"><colgroup><col width="120" /><col width="*" /></colgroup>'.
								'<tr><td>Type</td><td style="font-weight:bold;color:red;">%s</td></tr><tr><td>Message</td><td style="color:red;">%s</td></tr>'.
								'<tr><td style="vertical-align:top;">Line:File</td><td><b>%s</b> : <i>%s</i></td></tr></table></div>', 
								$type, $message, $line, $file);
}
if (KIT_DEBUG == true) {
	// Prompt all errors and use own error_handler
	ini_set('error_reporting', E_ALL);
	set_error_handler("kit_tool_error_handler");
}


?>