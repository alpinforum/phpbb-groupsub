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
	'EXCEPTION_MISSING_FIELD'		=> 'Das notwendige Feld “%s” fehlt.',
	'EXCEPTION_OUT_OF_BOUNDS'		=> 'Das Feld “%s” hat einen ungültigen Wert.',
	'EXCEPTION_TOO_LONG'			=> 'Der Wert von Feld “%s” ist zu lang.',
	'EXCEPTION_NOT_UNIQUE'			=> 'Der Wert von Feld “%s” ist nicht eindeutig.',
	'EXCEPTION_INVALID_CURRENCY'	=> 'Das Feld “%s” hat eine ungültige Währung.',
	'EXCEPTION_INVALID_IDENT'		=> 'Das Feld “%s” darf nur a-z, 0-9, _, enthalten, und muss mit einem Buchstaben beginnen.',

	'EXCEPTION_FIELD_PKG_IDENT'		=> 'Packet-ID',
	'EXCEPTION_FIELD_PKG_NAME'		=> 'Packetname',
	'EXCEPTION_FIELD_TERM_PRICE'	=> 'Abonnement Preis',
	'EXCEPTION_FIELD_TERM_CURRENCY'	=> 'Abonnement Währung',
	'EXCEPTION_FIELD_TERM_LENGTH'	=> 'Abonnement Dauer',
));
