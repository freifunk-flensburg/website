<?php
require_once "config.inc.php";
?>

<form class="participate_download-form" id="download-form" action="firmware-download.php">
    <h3>Firmware-Download</h3>
    <label>Wähle eine Aktion aus:</label>
    <div class="select-field">
        <select id="download-form-type" name="type">
            <option value="0">Freifunk Firmware neu installieren</option>
            <option value="1">Freifunk Firmware updaten</option>
        </select>
    </div>
    <div <?=$show_community_selector ? '' : 'style="display:none"'?>>
      <label>Wähle eine Community:</label>
      <div class="select-field">
        <select id="download_form_choose_comunity" name="choose_comunity">
            <option value="0">Bitte auswählen</option>
            <option value="1" selected>Offizielle Community Firmware</option>
        </select>
      </div>
    </div>
    <label>Wähle einen Router aus:</label>
    <div class="select-field">
        <select id="download-form-router" name="router">
            <option value="-1">Bitte wähle einen Router aus</option>
            <optgroup label="Allnet">
                <option value="-allnet-all0315n">Allnet 0315n</option>
            </optgroup>
            <optgroup label="Buffalo">
                <option value="-buffalo-wzr-hp-ag300h-wzr-600dhp">Buffalo WZR HP AG300H WZR 600DHP</option>
                <option value="-buffalo-wzr-hp-g450h">Buffalo WZR HP G450H</option>
            </optgroup>
            <optgroup label="D-Link">
                <option value="-d-link-dir-615-rev-e1">D-Link 615</option>
                <option value="-d-link-dir-825-rev-b1">D-Link 825</option>
            </optgroup>
            <optgroup label="gl-inet">
                <option value="-gl-inet-6408a-v1">Inet 6408a Ver:1</option>
                <option value="-gl-inet-6416a-v1">Inet 6416a Ver:1</option>
            </optgroup>
            <optgroup label="Linksys">
                <option value="-linksys-wrt160nl">Linksys WRT 160 NL</option>
            </optgroup>
            <optgroup label="Netgear">
                <option value="-netgear-wndr3700">Netgear WNDR3700 Ver:1</option>
                <option value="-netgear-wndr3700v2">Netgear WNDR3700 Ver:2</option>
                <option value="-netgear-wndr3700v4">Netgear WNDR3700 Ver:4</option>
                <option value="-netgear-wndr3800">Netgear WNDR3800</option>
                <option value="-netgear-wndr4300">Netgear WNDR4300</option>
                <option value="-netgear-wndrmacv2">Netgear WNDR MAC Ver:2</option>
            </optgroup>
            <optgroup label="TP-Link">
                <option value="-tp-link-cpe210-v1.0">TP-Link CPE210 Ver:1</option>
                <option value="-tp-link-cpe210-v1.1">TP-Link CPE210 Ver:1.1</option>
                <option value="-tp-link-cpe220-v1.0">TP-Link CPE220 Ver:1</option>
                <option value="-tp-link-cpe210-v1.1">TP-Link CPE220 Ver:1.1</option>
                <option value="-tp-link-cpe510-v1.0">TP-Link CPE510 Ver:1</option>
                <option value="-tp-link-cpe510-v1.1">TP-Link CPE510 Ver:1.1</option>
                <option value="-tp-link-cpe520-v1.0">TP-Link CPE520 Ver:1</option>
                <option value="-tp-link-cpe520-v1.1">TP-Link CPE520 Ver:1.1</option>
                <option value="-tp-link-tl-mr3020-v1">TP-Link TL MR 3020 Ver:1</option>
                <option value="-tp-link-tl-mr3040-v1">TP-Link TL MR 3040 Ver:1</option>
                <option value="-tp-link-tl-mr3040-v2">TP-Link TL MR 3040 Ver:2</option>
                <option value="-tp-link-tl-mr3220-v1">TP-Link TL MR 3220 Ver:1</option>
                <option value="-tp-link-tl-mr3220-v2">TP-Link TL MR 3220 Ver:2</option>
                <option value="-tp-link-tl-mr3420-v1">TP-Link TL MR 3420 Ver:1</option>
                <option value="-tp-link-tl-mr3420-v2">TP-Link TL MR 3420 Ver:2</option>
                <option value="-tp-link-tl-wa701n-nd-v1">TP-Link TL WA701 N/ND Ver:1</option>
                <option value="-tp-link-tl-wa701n-nd-v2">TP-Link TL WA701 N/ND Ver:2</option>
                <option value="-tp-link-tl-wa750re-v1">TP-Link TL WA750RE Ver:1</option>
                <option value="-tp-link-tl-wa801n-nd-v1">TP-Link TL WA801 N/ND Ver:1</option>
                <option value="-tp-link-tl-wa801n-nd-v2">TP-Link TL WA801 N/ND Ver:2</option>
                <option value="-tp-link-tl-wa830re-v1">TP-Link TL WA830RE Ver:1</option>
                <option value="-tp-link-tl-wa830re-v2">TP-Link TL WA830RE Ver:2</option>
                <option value="-tp-link-tl-wa850re-v1">TP-Link TL WA850RE Ver:1</option>
                <option value="-tp-link-tl-wa860re-v1">TP-Link TL WA860RE Ver:1</option>
                <option value="-tp-link-tl-wa901n-nd-v2">TP-Link TL WA 901 N/ND Ver:2</option>
                <option value="-tp-link-tl-wa901n-nd-v3">TP-Link TL WA 901 N/ND Ver:3</option>
                <option value="-tp-link-tl-wdr3500-v1">TP-Link TL WDR 3500 Ver:1</option>
                <option value="-tp-link-tl-wdr3600-v1">TP-Link TL WDR 3600 Ver:1</option>
                <option value="-tp-link-tl-wdr4300-v1">TP-Link TL WDR 4300 Ver:1</option>
                <option value="-tp-link-tl-wdr4900-v1">TP-Link TL WDR 4900 Ver:1</option>
                <option value="-tp-link-tl-wr2543n-nd-v1">TP-Link TL WR 2543 N/ND Ver:1</option>
                <option value="-tp-link-tl-wr703n-v1">TP-Link TL WR 703 N/ND Ver:1</option>
                <option value="-tp-link-tl-wr710n-v1">TP-Link TL WR 710 N/ND Ver:1</option>
                <option value="-tp-link-tl-wr740n-nd-v1">TP-Link TL WR 740 N/ND Ver:1</option>
                <option value="-tp-link-tl-wr740n-nd-v3">TP-Link TL WR 740 N/ND Ver:3</option>
                <option value="-tp-link-tl-wr740n-nd-v4">TP-Link TL WR 740 N/ND Ver:4</option>
                <option value="-tp-link-tl-wr740n-nd-v5">TP-Link TL WR 740 N/ND Ver:5</option>
                <option value="-tp-link-tl-wr741n-nd-v1">TP-Link TL WR 741 N/ND Ver:1</option>
                <option value="-tp-link-tl-wr741n-nd-v2">TP-Link TL WR 741 N/ND Ver:2</option>
                <option value="-tp-link-tl-wr741n-nd-v4">TP-Link TL WR 741 N/ND Ver:4</option>
                <option value="-tp-link-tl-wr741n-nd-v5">TP-Link TL WR 741 N/ND Ver:5</option>
                <option value="-tp-link-tl-wr743n-nd-v1">TP-Link TL WR 743 N/ND Ver:1</option>
                <option value="-tp-link-tl-wr743n-nd-v2">TP-Link TL WR 743 N/ND Ver:2</option>
                <option value="-tp-link-tl-wr841n-nd-v3">TP-Link TL WR 841 N/ND Ver:3</option>
                <option value="-tp-link-tl-wr841n-nd-v5">TP-Link TL WR 841 N/ND Ver:5</option>
                <option value="-tp-link-tl-wr841n-nd-v7">TP-Link TL WR 841 N/ND Ver:7</option>
                <option value="-tp-link-tl-wr841n-nd-v8">TP-Link TL WR 841 N/ND Ver:8</option>
                <option value="-tp-link-tl-wr841n-nd-v9">TP-Link TL WR 841 N/ND Ver:9</option>
                <option value="-tp-link-tl-wr841n-nd-v10" class="highlighted">TP-Link TL WR 841 N/ND Ver:10</option>
                <option value="-tp-link-tl-wr842n-nd-v1">TP-Link TL WR 842 N/ND Ver:1</option>
                <option value="-tp-link-tl-wr842n-nd-v2">TP-Link TL WR 842 N/ND Ver:2</option>
                <option value="-tp-link-tl-wr941n-nd-v2">TP-Link TL WR 941 N/ND Ver:2</option>
                <option value="-tp-link-tl-wr941n-nd-v3">TP-Link TL WR 941 N/ND Ver:3</option>
                <option value="-tp-link-tl-wr941n-nd-v4">TP-Link TL WR 941 N/ND Ver:4</option>
                <option value="-tp-link-tl-wr941n-nd-v5">TP-Link TL WR 941 N/ND Ver:5</option>
                <option value="-tp-link-tl-wr1043n-nd-v1">TP-Link TL WR 1043 N/ND Ver:1</option>
                <option value="-tp-link-tl-wr1043n-nd-v2">TP-Link TL WR 1043 N/ND Ver:2</option>
                <option value="-tp-link-tl-wr1043n-nd-v3" class="highlighted">TP-Link TL WR 1043 N/ND Ver:3</option>
            </optgroup>
            <optgroup label="Ubiquiti">
                <option value="-ubiquiti-bullet-m">Ubiquiti Bullet M</option>
                <option value="-ubiquiti-loco-m">Ubiquiti Loco M</option>
                <option value="-ubiquiti-loco-m-xw">Ubiquiti Loco M-XW</option>
                <option value="-ubiquiti-nanostation-m">Ubiquiti Nanostation M</option>
                <option value="-ubiquiti-nanostation-m-xw">Ubiquiti Picostation M-XW</option>
                <option value="-ubiquiti-picostation-m">Ubiquiti Picostation M</option>
                <option value="-ubiquiti-rocket-m">Ubiquiti Rocket M</option>
                <option value="-ubiquiti-unifi">Ubiquiti UniFi</option>
                <option value="-ubiquiti-unifi-ap-pro">Ubiquiti UniFi AP-Pro</option>
                <option value="-ubiquiti-unifiap-outdoor">Ubiquiti UniFi AP-Outdoor</option>
            </optgroup>
            <optgroup label="VMs">
                <option value="-x86-generic">x86 Image für generische Prozessoren</option>
                <option value="-x86-kvm">x86 Image für KVM</option>
            </optgroup>
        </select>
    </div>
    <input type="submit" class="submit" value="Herunterladen">
    <a class="expertlist" href="http://freifunk-flensburg.de/media/firmware/nordlab/">Dateiliste für Experten</a>
    <p>Eine Anleitung wie du die Freifunk Flensburg Firmware auf deinem Router selber installieren kannst findest du bei uns <a href="http://wiki.freifunk-flensburg.de/wiki/Einen_Knoten_einrichten">hier im Wiki</a>. Die Freifunk Flensburg Firmware steht unter der <a href="http://de.wikipedia.org/wiki/GNU_General_Public_License" target="_blank">GPL Lizenz</a>. Du darfst sie somit kostenlos nutzen, studieren, ändern und verbreiten.</p>
</form>
<aside class="participate_list-links">
    <h2>Links zu Freifunk Flensburg</h2>
    <ul>
        <li><a target="_blank" href="http://wiki.freifunk-flensburg.de/wiki/Hauptseite">Freifunk Flensburg Wiki</a> - Unser gesammeltes Wissen</li>
        <li><a target="_blank" href="https://github.com/freifunk-flensburg">GitHub</a> - Unser Code zum Mitbasteln</li>
        <li><a target="_blank" href="http://map.freifunk-flensburg.de">Die Mesh-Map</a> - Unsere detailierte Knotenkarte</li>
        <li><a target="_blank" href="http://nordlab-ev.de">nordlab e. V.</a></li>
    </ul>
    <h2>Allgemeine Freifunk Links</h2>
    <ul>
        <li><a target="_blank" href="http://freifunk.net/">freifunk.net</a></li>
        <li><a target="_blank" href="http://wiki.freifunk.net/">Das Freifunk-Wiki</a></li>
    </ul>
</aside>
