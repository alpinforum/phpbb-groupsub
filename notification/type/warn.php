<?php
/**
 *
 * Group Subscription. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Steve Guidetti, https://github.com/stevotvr
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace stevotvr\groupsub\notification\type;

use phpbb\datetime;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Group Subscription expiration warning notification.
 */
class warn extends base_type
{
	static public $notification_option = array(
		'lang'	=> 'GROUPSUB_NOTIFICATION_TYPE_WARN',
		'group'	=> 'GROUPSUB_NOTIFICATION_GROUP',
	);

	public function get_type()
	{
		return 'stevotvr.groupsub.notification.type.warn';
	}

	public function get_title()
	{
		return $this->language->lang('GROUPSUB_NOTIFICATION_WARN_TITLE');
	}

	public function get_reference()
	{
		$date = $this->user->format_date($this->get_data('sub_expires'), '|M d|');

		return $this->language->lang('GROUPSUB_NOTIFICATION_WARN_REFERENCE', $this->get_data('gs_name'), $date);
	}

	public function get_email_template()
	{
		return '@stevotvr_groupsub/subscription_warn';
	}

	public function get_email_template_variables()
	{
		$user_info = $this->user_loader->get_user($this->user_id);
		$tz = new \DateTimeZone($user_info['user_timezone']);
		$time = date('c', $this->get_data('sub_expires'));
		$datetime = new datetime($this->user, $time, $tz);

		$params = array('name' => $this->get_data('gs_ident'));
		$u_view_sub = $this->helper->route('stevotvr_groupsub_main', $params, false, false, UrlGeneratorInterface::RELATIVE_PATH);
		return array(
			'DAYS_LEFT'		=> $this->get_data('days_left'),
			'EXPIRE_DATE'	=> $datetime->format('|M d, Y|'),
			'SUB_NAME'		=> $this->get_data('gs_name'),

			'U_VIEW_SUB'	=> generate_board_url() . '/' . $u_view_sub,
		);
	}

	public function users_to_query()
	{
		return array($this->user_id);
	}

	public function create_insert_array($data, $pre_create_data = array())
	{
		$this->set_data('days_left', (int) $data['days_left']);
		$this->set_data('sub_expires', (int) $data['sub_expires']);

		parent::create_insert_array($data, $pre_create_data);
	}
}