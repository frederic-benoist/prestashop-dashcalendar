{*
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
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}
<section id="dashcalendar" class="panel widget{if $allow_push} allow_push{/if}">
	<div class="panel-heading">
		{l s='Today' mod='dashcalendar'} <span id="calendar_day"></span> / <span id="calendar_month"></span> / <span id="calendar_year"></span>
	</div>
	<section id="dash_pending" class="loading">
		<header>
			<i class="icon-time"></i>
			<span id="calendar_hh"></span>:<span id="calendar_mn"></span>
		</header>
	</section>
</section>
