<?php
/**
 *
 * Group Subscription. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Steve Guidetti, https://github.com/stevotvr
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'GROUPSUB_PACKAGE_LIST'		=> 'Abonnements',
	'GROUPSUB_NO_PACKAGES'		=> 'Es sind keine Abonnements verfügbar.',
	'GROUPSUB_NO_DESC'			=> 'Keine Beschreibung verfügbar.',
	'GROUPSUB_SUBSCRIPTION'		=> 'Abonnement',
	'GROUPSUB_PRICE'			=> 'Preis',
	'GROUPSUB_LENGTH'			=> 'Dauer',
	'GROUPSUB_LENGTH_UNLIMITED'	=> 'Unlimitiert',
	'GROUPSUB_SUBSCRIBE'		=> 'Abonnieren',
	'GROUPSUB_RENEW'			=> 'Abonnement erneuern',
	'GROUPSUB_CHOOSE_TERM'		=> '%s abonnieren',
	'GROUPSUB_SUBSCRIBED'		=> 'Du Abonnement ist unlimitiert',
	'GROUPSUB_SUBSCRIBED_UNTIL'	=> 'Dein Abonnement läuft bis %s',
	'GROUPSUB_CONFIRM'			=> 'Bestätige das Abonnement für %s',

	'GROUPSUB_RETURN_TITLE'		=> 'Danke',
	'GROUPSUB_RETURN'			=> 'Abonniert',
	'GROUPSUB_RETURN_UNLIMITED'	=> '<strong>unbegrenzte</strong> Zeit',
	'GROUPSUB_RETURN_MESSAGE'	=> 'Du hast <strong>%1$s</strong> für %2$s abonniert. Bitte warte, bis deine Zahlung verarbeitet und dein Abonnement freigeschaltet ist.',

	'GROUPSUB_PP_LOCALE'	=> 'de_DE',
	'GROUPSUB_PP_BUY_NOW'	=> 'Zahlungspflicht Kaufen',

	'GROUPSUB_DECIMAL_SEPARATOR'	=> '.',
	'GROUPSUB_THOUSANDS_SEPARATOR'	=> ',',

	'GROUPSUB_DAYS'		=> array(
		1	=> 'Tag',
		2	=> 'Tage',
	),
	'GROUPSUB_WEEKS'	=> array(
		1	=> 'Woche',
		2	=> 'Wochen',
	),
	'GROUPSUB_MONTHS'	=> array(
		1	=> 'Monat',
		2	=> 'Monate',
	),
	'GROUPSUB_YEARS'	=> array(
		1	=> 'Jahr',
		2	=> 'Jahre',
	),
));
