<?php

$site_tld="fffl";

$firmware_prefix = 'gluon-'.$site_tld.'-stable-2015.1.2-0';

$show_community_selector=false;

// dies muss noch von Hand im manifest.json, api/api.json und im README angepasst werden
$region="Flensburg";
$site_title="Freifunk $region";
$ssid='flensburg.freifunk.net';

$config=array(
	'webchat'=>array(
		'url'			=>		'https://kiwiirc.com/client/irc.lugfl.de:+6668/?nick=Website-Guest%7C?#freifunk-flensburg',
		'content'	=>		'Webchat',
	),
	'email'=>array(
		'url'			=>		'mailto:presse@freifunk-flensburg.de',
		'content'	=>		'presse@freifunk-flensburg.de',
	),
	'irc'=>array(
		'url'			=>		'http://wiki.freifunk-flensburg.de/wiki/IRC',
		'content'	=>		'#freifunk-flensburg',
	),
	'mailingliste'=>array(
		'url'			=>		'http://lists.freifunk-flensburg.de/listinfo/freifunk',
		'content'	=>		'Mailingliste',
	),
	'youtube'=>array(
		'url'			=>		'https://www.youtube.com/channel/UCWX6f-3kFLJkuPwWvnZX3fA/',
		'content'	=>		'youtube',
	),
	'wiki'=>array(
		'url'			=>		'http://wiki.freifunk-flensburg.de/wiki/',
		'content'	=>		'Freifunk $region Wiki',
		'more'		=>		'Unser gesammeltes Wissen'
	),
	'github'=>array(
		'url'	=>				'https://github.com/freifunk-flensburg',
		'content'	=>		'GitHub',
		'more'	=>			'Unser Code zum Mitbasteln',
	),
	'map'=>array(
		'url'=>					'http://map.freifunk-flensburg.de',
		'content'=>			'Die Mesh-Map',
		'more'=>				'Unsere detailierte Knotenkarte',
	),
	'verein'=>array(
		'url'=>					'http://nordlab-ev.de',
		'content'=>			'nordlab e. V.',
		'more'=>				'Wir gehören zum nordlab e.V.',
		'tel'	=>				'0461 574945882',
		'street'	=>		'Zur Bleiche 12	',
		'plz'	=>		'24941',
		'town'	=>		$region,
	),
	'facebook'=>array(
		'url'=>					'https://www.facebook.com/FreifunkFlensburg',
		'content'=>			'/FreifunkFlensburg',
		'more'=>				'Erfahre mehr über uns bei Facebook.',
	),
	'twitter'=>array(
		'url'=>					'https://twitter.com/FreiFunkFlens',
		'content'=>			'@FreiFunkFlens',
		'more'=>				'Erfahre mehr über uns bei Twitter.',
		)
	);
