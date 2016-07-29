<div class="contact_left">
	<h3>Offline</h3>
	<p><?=$site_title?> ist ein Community mit Unterstützung des <?=$config['verein']['content']?> &ndash; Interessierte sind gerne eingeladen bei den Treffen des <?=$config['verein']['content']?> 
		montags im Offenen Kanal, St.-Jürgen-Straße 95,
		ab 18:00 Uhr vorbei zu schauen.<br></p>
	<address>
		Telefon: <a href="tel:<?=str_replace(" ","",$config['verein']['tel'])?>"><?=$config['verein']['tel']?></a>  <br>
		<?=$config['verein']['street']?> <br>
		<?=$config['verein']['plz']?> <?=$config['verein']['town']?><br>
	</address>
</div>
<div class="contact_right">
	<h3>Online</h3>
	<address>
		E-Mail-Adresse: <a target="_blank" href="<?=$config['email']['url']?>"><?=$config['email']['content']?></a><br>
		Facebook: <a target="_blank" href="<?=$config['facebook']['url']?>"><?=$config['facebook']['content']?></a><br>
		Twitter: <a target="_blank" href="<?=$config['twitter']['url']?>"><?=$config['twitter']['content']?></a><br>
		IRC: <a target="_blank" href="<?=$config['irc']['url']?>"><?=$config['irc']['content']?></a><br>
		Mailingliste: <a target="_blank" href="<?=$config['mailingliste']['url']?>">Anmeldung</a>
	</address>
	<p>Besuche uns im <a href="<?=$config['webchat']['url']?>" target="_blank">Webchat</a>.</p>
	<p>Videos von uns findest du auch auf unserem <a href="<?=$config['youtube']['url']?>" target="blank">YouTube-Kanal</a>.</p>
</div>
