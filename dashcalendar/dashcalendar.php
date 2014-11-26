<?php
/**
 * 2013-2014 Frédéric BENOIST
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 *  @author    Frédéric BENOIST <http://www.fbenoist.com/>
 *  @copyright 2013-2014 Frédéric BENOIST
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

if (!defined('_PS_VERSION_'))
	exit;

class Dashcalendar extends Module
{
	public function __construct()
	{
		$this->name = 'dashcalendar';
		$this->tab = 'dashboard';
		$this->version = '0.1';
		$this->author = 'PrestaShop';
		$this->push_filename = _PS_CACHE_DIR_.'push/calendar';
		$this->allow_push = true;
		$this->push_time_limit = 180;

		parent::__construct();
		$this->displayName = $this->l('Sample dashboard module');
		$this->description = $this->l('Add Date and Time in PrestaShop Dashboard');
	}

	public function install()
	{
		return (parent::install()
			&& $this->registerHook('dashboardZoneOne')
			&& $this->registerHook('dashboardData')
		);
	}

	public function hookDashboardZoneOne()
	{
		return $this->display(__FILE__, 'dashboard_zone_one.tpl');
	}

	public function hookDashboardData()
	{
		$today = getdate();
		return array(
				'data_value' => array(
					'calendar_day' => $today['mday'],
					'calendar_month' => $today['mon'],
					'calendar_year' => $today['year'],
					'calendar_hh' => $today['hours'],
					'calendar_mn' => $today['minutes']
				)
			);
	}

}
