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
define('tool_error_id_invalid',									'<p>Der Datensatz mit der <b>ID %d</b> wurde nicht gefunden!</p>');
define('tool_error_request_missing',						'<p>Der REQUEST Parameter <b>%s</b> ist nicht gesetzt, Programmausführung gestoppt!</p>');
define('tool_error_template_error',							'<p>Fehler bei der Ausführung des Template <b>%s</b>:</p><p>%s</p>');

define('tool_header_cfg',												'Einstellungen');
define('tool_header_cfg_description',						'Erläuterung');
define('tool_header_cfg_identifier',						'Bezeichner');
define('tool_header_cfg_value',									'Wert');

define('tool_intro_cfg',												'<p>Bearbeiten Sie die Einstellungen für <b>%s</b>.</p>');

define('tool_msg_cfg_id_updated',								'<p>Der Konfigurationsdatensatz mit dem Bezeichner <b>%s</b> wurde aktualisiert.</p>');
define('tool_msg_install_droplets_failed',			'Die Installation der Droplets fuer %s ist leider fehlgeschlagen, Fehlermeldung: %s');
define('tool_msg_install_droplets_success',			'Die Droplets fuer %s wurden erfolgreich installiert. Informationen zur Verwendung der Droplets finden Sie in der Dokumentation!');
define('tool_msg_invalid_email',								'<p>Die E-Mail Adresse <b>%s</b> ist nicht gültig, bitte prüfen Sie Ihre Eingabe.</p>');


?>