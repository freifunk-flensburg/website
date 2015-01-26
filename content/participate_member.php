<form class="participate_download-form" id="download-form">
    <h3>Firmware (<?php echo $versionNumber; ?>)</h3>
    <label>Wähle eine Aktion aus</label>
    <div class="select-field">
        <select id="download-form-type">
            <option value="0">Freifunk Firmware neuinstallieren</option>
            <option value="1">Freifunk Firmware updaten</option>
        </select>
    </div>
    <label>Wähle einen Router aus</label>
    <div class="select-field">
        <select id="download-form-router">
            <option value="-1">Bitte wähle einen Router aus</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-d-link-dir-615-rev-e1">D-Link 615</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-d-link-dir-825-rev-b1">D-Link 825</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-linksys-wrt160nl">Linksys WRT 160 NL</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-mr3020-v1">TP-Link TL MR 3020 Ver:1</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-mr3040-v1">TP-Link TL MR 3040 Ver:1</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-mr3220-v1">TP-Link TL MR 3220 Ver:1</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-mr3420-v1">TP-Link TL MR 3420 Ver:1</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-mr3420-v2">TP-Link TL MR 3420 Ver:2</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wa901n-nd-v2">TP-Link TL WA 901 N/ND Ver:2</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wdr3500-v1">TP-Link TL WDR 3500 Ver:1</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wdr3600-v1">TP-Link TL WDR 3600 Ver:1</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wdr4300-v1">TP-Link TL WDR 4300 Ver:1</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr740n-nd-v1">TP-Link TL WR 740 N/ND Ver:1</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr740n-nd-v3">TP-Link TL WR 740 N/ND Ver:3</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr740n-nd-v4">TP-Link TL WR 740 N/ND Ver:4</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr741n-nd-v1">TP-Link TL WR 741 N/ND Ver:1</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr741n-nd-v2">TP-Link TL WR 741 N/ND Ver:2</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr741n-nd-v4">TP-Link TL WR 741 N/ND Ver:4</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr841n-nd-v3">TP-Link TL WR 841 N/ND Ver:3</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr841n-nd-v5">TP-Link TL WR 841 N/ND Ver:5</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr841n-nd-v7">TP-Link TL WR 841 N/ND Ver:7</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr841n-nd-v8">TP-Link TL WR 841 N/ND Ver:8</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr841n-nd-v9">TP-Link TL WR 841 N/ND Ver:9</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr842n-nd-v1">TP-Link TL WR 842 N/ND Ver:1</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr842n-nd-v2">TP-Link TL WR 842 N/ND Ver:2</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr941n-nd-v2">TP-Link TL WR 941 N/ND Ver:2</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr941n-nd-v3">TP-Link TL WR 941 N/ND Ver:3</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr941n-nd-v4">TP-Link TL WR 941 N/ND Ver:4</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr1043n-nd-v1">TP-Link TL WR 1043 N/ND Ver:1</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-ubiquiti-bullet-m">Ubiquiti Bullet M</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-ubiquiti-nanostation-m">Ubiquiti Nanostation M</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-ubiquiti-unifi">Ubiquiti UniFi</option>
            <option value="gluon-fffl-<?php echo $versionNumber; ?>-ubiquiti-unifiap-outdoor">Ubiquiti UniFi AP-Outdoor</option>
        </select>
    </div>
    <button class="button">Herunterladen</button>
    <p>Eine Anleitung wie du die Freifunk Flensburg Firmware auf deinem Router selber installieren kannst findest du bei uns <a href="http://wiki.freifunk-flensburg.de/wiki/Einen_Knoten_einrichten">hier im Wiki</a>. Die Freifunk Flensburg Firmware steht unter der <a href="http://de.wikipedia.org/wiki/GNU_General_Public_License" target="_blank">GPL Lizenz</a>. Du darfst sie somit kostenlos nutzen, studieren, ändern und verbreiten.</p>
</form>
<aside class="participate_list-links">
    <h2>Freifunk Flensburg Links</h2>
    <ul>
        <li><a target="_blank" href="http://wiki.freifunk-flensburg.de/wiki/Hauptseite">Unser Wiki</a></li>
        <li><a target="_blank" href="https://github.com/freifunk-flensburg">Github</a></li>
        <li><a target="_blank" href="http://map.freifunk-flensburg.de">Unsere Mesh-Map</a></li>
        <li><a target="_blank" href="http://nordlab-ev.de">nordlab e.V.</a></li>
    </ul>
    <h2>Allgemeine Freifunk Links</h2>
    <ul>
        <li><a target="_blank" href="http://freifunk.net/">freifunk.net</a></li>
        <li><a target="_blank" href="http://wiki.freifunk.net/">Wiki</a></li>
    </ul>
</aside>
