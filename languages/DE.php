<?php

/**
 * kitTools
 * 
 * @author Ralf Hertsch (ralf.hertsch@phpmanufaktur.de)
 * @link http://phpmanufaktur.de
 * @copyright 2011
 * @license GNU GPL (http://www.gnu.org/licenses/gpl.html)
 * @version $Id$
 * 
 * FOR VERSION- AND RELEASE NOTES PLEASE LOOK AT INFO.TXT!
 */

// try to include LEPTON class.secure.php to protect this file and the whole CMS!
if (defined('WB_PATH')) {	
	if (defined('LEPTON_VERSION')) include(WB_PATH.'/framework/class.secure.php');
} elseif (file_exists($_SERVER['DOCUMENT_ROOT'].'/framework/class.secure.php')) {
	include($_SERVER['DOCUMENT_ROOT'].'/framework/class.secure.php'); 
} else {
	$subs = explode('/', dirname($_SERVER['SCRIPT_NAME']));	$dir = $_SERVER['DOCUMENT_ROOT'];
	$inc = false;
	foreach ($subs as $sub) {
		if (empty($sub)) continue; $dir .= '/'.$sub;
		if (file_exists($dir.'/framework/class.secure.php')) { 
			include($dir.'/framework/class.secure.php'); $inc = true;	break; 
		} 
	}
	if (!$inc) trigger_error(sprintf("[ <b>%s</b> ] Can't include LEPTON class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
}
// end include LEPTON class.secure.php

define('tool_btn_abort',												'Abbruch');
define('tool_btn_account',											'Konto');
define('tool_btn_logout',												'Abmelden');
define('tool_btn_next',													'Weiter ...');
define('tool_btn_ok',														'Übernehmen');
define('tool_btn_replicate',										'Starten');

define('tool_cfg_currency',											'%s €');
define('tool_cfg_date_separator',								'.'); 
define('tool_cfg_date_str',											'd.m.Y');
define('tool_cfg_datetime_str',									'd.m.Y H:i');
define('tool_cfg_day_names',										"Sonntag, Montag, Dienstag, Mittwoch, Donnerstag, Freitag, Samstag");
define('tool_cfg_decimal_separator',          	',');
define('tool_cfg_month_names',									"Januar,Februar,März,April,Mai,Juni,Juli,August,September,Oktober,November,Dezember");
define('tool_cfg_thousand_separator',						'.');
define('tool_cfg_time_long_str',								'H:i:s');
define('tool_cfg_time_str',											'H:i');
define('tool_cfg_time_zone',										'Europe/Berlin');
define('tool_cfg_title',												'Herr,Frau');

define('tool_error_cfg_id',											'<p>Der Konfigurationsdatensatz mit der <b>ID %05d</b> konnte nicht ausgelesen werden!</p>');
define('tool_error_cfg_name',										'<p>Zu dem Bezeichner <b>%s</b> wurde kein Konfigurationsdatensatz gefunden!</p>');
define('tool_error_chmod',											'<p>Die Zugriffsrechte für die Datei %s konnten nicht geändert werden!</p>');
define('tool_error_id_invalid',									'<p>Der Datensatz mit der <b>ID %d</b> wurde nicht gefunden!</p>');
define('tool_error_link_by_page_id', 						'<p>Konnte den Dateinamen fürr die PAGE ID <strong>%d</strong> nicht aus den Websitebaker Einstellungen auslesen.</p>');
define('tool_error_link_row_empty', 						'<p>Es existiert kein Eintrag für die PAGE ID <strong>%d</strong> in den Websitebaker Einstellungen.</p>');
define('tool_error_mail_sending',								'<p>Die E-Mail an <b>%s</b> konnte nicht versendet werden!</p>');
define('tool_error_mkdir',											'<p>Das Verzeichnis <b>%s</b> konnte nicht angelegt werden!</p>');
define('tool_error_missing_file',								'<p>Die Datei <b>%s</b> wurde nicht gefunden!</p>');
define('tool_error_move_file',									'<p>Die Datei <b>%s</b> konnte nicht nach <b>%s</b> verschoben werden!</p>');
define('tool_error_rename_file',								'<p>Die Datei <b>%s</b> konnte nicht in <b>%s</b> umbenannt werden!</p>');
define('tool_error_request_missing',						'<p>Der REQUEST Parameter <b>%s</b> ist nicht gesetzt, Programmausführung gestoppt!</p>');
define('tool_error_template_error',							'<p>Fehler bei der Ausführung des Template <b>%s</b>:</p><p>%s</p>');
define('tool_error_tweaking_file',							'<p>Fehler bei der Optimierung der Datei <b>%s</b>.</p>');
define('tool_error_upload_form_size',						'<p>Die hochgeladene Datei überschreitet die in dem HTML Formular mittels der Anweisung MAX_FILE_SIZE angegebene maximale Dateigröße.</p>');
define('tool_error_upload_ini_size',						'<p>Die hochgeladene Datei überschreitet die in der Anweisung upload_max_filesize in php.ini festgelegte Größe von %s</p>');
define('tool_error_upload_move_file',						'<p>Die Datei <b>%s</b> konnte nicht in das Zielverzeichnis verschoben werden!</p>');
define('tool_error_upload_partial',							'<p>Die Datei <b>%s</b> wurde nur teilweise hochgeladen.</p>');
define('tool_error_upload_undefined_error',			'<p>Während der Datenübertragung ist ein nicht näher beschriebener Fehler aufgetreteten.</p>');


define('tool_header_cfg',												'Einstellungen');
define('tool_header_cfg_description',						'Erläuterung');
define('tool_header_cfg_identifier',						'Bezeichner'); 
define('tool_header_cfg_value',									'Wert');

define('tool_intro_cfg',												'<p>Bearbeiten Sie die Einstellungen für <b>%s</b>.</p>');

define('tool_msg_cfg_id_updated',								'<p>Der Konfigurationsdatensatz mit dem Bezeichner <b>%s</b> wurde aktualisiert.</p>');
define('tool_msg_install_droplets_failed',			'Die Installation der Droplets fuer %s ist leider fehlgeschlagen, Fehlermeldung: %s');
define('tool_msg_install_droplets_success',			'Die Droplets fuer %s wurden erfolgreich installiert. Informationen zur Verwendung der Droplets finden Sie in der Dokumentation!');
define('tool_msg_invalid_email',								'<p>Die E-Mail Adresse <b>%s</b> ist nicht gültig, bitte prüfen Sie Ihre Eingabe.</p>');
define('tool_msg_record_updated',								'<p>Der Datensatz mit der <b>ID %05d</b> wurde erfolgreich aktualisiert</p>');
define('tool_msg_upload_success',								'<p>Die Datei <b>%s</b> wurde erfolgreich auf den Server übertragen.</p>');


?>