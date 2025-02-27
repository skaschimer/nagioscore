<?php
include_once(dirname(__FILE__).'/includes/utils.inc.php');

$this_version = '4.5.9';
$link_target = 'main';
$theme = isset($cfg['theme']) ? $cfg['theme'] : 'dark';
if ($theme != 'dark' && $theme != 'light') {
	$theme = 'dark';
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html id="side" class="<?= $theme ?>">

<head>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<title>Nagios Core</title>
<link href="stylesheets/common.css?<?php echo $this_version; ?>" type="text/css" rel="stylesheet">
</head>


<body class='navbar'>

<div class="navbarlogo">
	<a href="https://www.nagios.org" target="_blank"><div class="fulllogo nagioslogo"></div></a>
</div>

<div class="navsection">
	<div class="navsectiontitle">General</div>
	<div class="navsectionlinks">
		<ul class="navsectionlinks">
			<li><a href="main.php" target="<?php echo $link_target;?>">Home</a></li>
			<li><a href="https://go.nagios.com/nagioscore/docs" target="_blank">Documentation</a></li>
		</ul>
	</div>
</div>

<div class="navsection">
	<div class="navsectiontitle">Current Status</div>
	<div class="navsectionlinks">
		<ul class="navsectionlinks">
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/tac.cgi" target="<?php echo $link_target;?>">Tactical Overview</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/statusmap.cgi?host=all" target="<?php echo $link_target;?>">Map</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=hostdetail" target="<?php echo $link_target;?>">Hosts</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?host=all" target="<?php echo $link_target;?>">Services</a></li>
			<li>
				<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=overview" target="<?php echo $link_target;?>">Host Groups</a>
				<ul>
					<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=summary" target="<?php echo $link_target;?>">Summary</a></li>
					<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=grid" target="<?php echo $link_target;?>">Grid</a></li>
				</ul>
			</li>
			<li>
				<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?servicegroup=all&amp;style=overview" target="<?php echo $link_target;?>">Service Groups</a>
				<ul>
					<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?servicegroup=all&amp;style=summary" target="<?php echo $link_target;?>">Summary</a></li>
					<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?servicegroup=all&amp;style=grid" target="<?php echo $link_target;?>">Grid</a></li>
				</ul>
			</li>
			<li>Problems
				<ul>
					<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?host=all&amp;servicestatustypes=28" target="<?php echo $link_target;?>">Services</a> (<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?host=all&amp;type=detail&amp;hoststatustypes=3&amp;serviceprops=10&amp;servicestatustypes=28" target="<?php echo $link_target;?>">Unhandled</a>)</li>
					<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=hostdetail&amp;hoststatustypes=12" target="<?php echo $link_target;?>">Hosts</a> (<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&amp;style=hostdetail&amp;hoststatustypes=12&amp;hostprops=42" target="<?php echo $link_target;?>">Unhandled</a>)</li>
					<li><a href="<?php echo $cfg["cgi_base_url"];?>/outages.cgi" target="<?php echo $link_target;?>">Network Outages</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="navbarsearch">
		<form method="get" action="<?php echo $cfg["cgi_base_url"];?>/status.cgi" target="<?php echo $link_target;?>">
			<div>Quick Search:</div>
			<input type='hidden' name='navbarsearch' value='1'>
			<input type='text' name='host' size='15' class="NavBarSearchItem">
		</form>
	</div>
</div>

<div class="navsection">
	<div class="navsectiontitle">Reports</div>
	<div class="navsectionlinks">
		<ul class="navsectionlinks">
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/avail.cgi" target="<?php echo $link_target;?>">Availability</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/trends.cgi" target="<?php echo $link_target;?>">Trends</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/history.cgi?host=all" target="<?php echo $link_target;?>">Alerts</a>
			<ul>
				<li><a href="<?php echo $cfg["cgi_base_url"];?>/history.cgi?host=all" target="<?php echo $link_target;?>">History</a></li>
				<li><a href="<?php echo $cfg["cgi_base_url"];?>/summary.cgi" target="<?php echo $link_target;?>">Summary</a></li>
				<li><a href="<?php echo $cfg["cgi_base_url"];?>/histogram.cgi" target="<?php echo $link_target;?>">Histogram</a></li>
			</ul>
			</li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/notifications.cgi?contact=all" target="<?php echo $link_target;?>">Notifications</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/showlog.cgi" target="<?php echo $link_target;?>">Event Log</a></li>
		</ul>
	</div>
</div>

<div class="navsection">
	<div class="navsectiontitle">System</div>
	<div class="navsectionlinks">
		<ul class="navsectionlinks">
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=3" target="<?php echo $link_target;?>">Comments</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=6" target="<?php echo $link_target;?>">Downtime</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=0" target="<?php echo $link_target;?>">Process Info</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=4" target="<?php echo $link_target;?>">Performance Info</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=7" target="<?php echo $link_target;?>">Scheduling Queue</a></li>
			<li><a href="<?php echo $cfg["cgi_base_url"];?>/config.cgi" target="<?php echo $link_target;?>">Configuration</a></li>
		</ul>
	</div>
</div>

</body>
</html>
