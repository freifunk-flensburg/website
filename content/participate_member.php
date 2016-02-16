<form class="participate_download-form" id="download-form">
    <h3>Firmware-Download</h3>
    <label>Wähle eine Aktion aus:</label>
    <div class="select-field">
        <select id="download-form-type">
            <option value="0">Freifunk Firmware neu installieren</option>
            <option value="1">Freifunk Firmware updaten</option>
        </select>
    </div>
    <input type="hidden" id="download_form_choose_comunity" value="1">
    <label>Wähle einen Router aus:</label>
    <div class="select-field">
        <select id="download-form-router">
          <option value="-1">Bitte wähle einen Router aus</option>
          <optgroup label="Buffalo">
            <option value="-buffalo-wzr-hp-ag300h-wzr-600dhp">Buffalo WZR HP AG300H WZR 600DHP</option>
            <option value="-buffalo-wzr-hp-g450h">Buffalo WZR HP G450H</option>
          </optgroup>
          <optgroup label="D-Link">
            <option value="-d-link-dir-615-rev-e1">D-Link 615</option>
            <option value="-d-link-dir-825-rev-b1">D-Link 825</option>
          </optgroup>
          <optgroup label="Linksys">
            <option value="-linksys-wrt160nl">Linksys WRT 160 NL</option>
          </optgroup>
          <optgroup label="TP-Link">
            <option value="-tp-link-cpe210-v1.0">CPE210 Ver:1.0</option>
            <option value="-tp-link-cpe220-v1.0">CPE220 Ver:1.0</option>
            <option value="-tp-link-cpe510-v1.0">CPE510 Ver:1.0</option>
            <option value="-tp-link-cpe520-v1.0">CPE520 Ver:1.0</option>
            <option value="-tp-link-tl-mr3020-v1">TL MR 3020 Ver:1</option>
            <option value="-tp-link-tl-mr3040-v1">TL MR 3040 Ver:1</option>
            <option value="-tp-link-tl-mr3040-v2">TL MR 3040 Ver:2</option>
            <option value="-tp-link-tl-mr3220-v1">TL MR 3220 Ver:1</option>
            <option value="-tp-link-tl-mr3420-v1">TL MR 3420 Ver:1</option>
            <option value="-tp-link-tl-mr3420-v2">TL MR 3420 Ver:2</option>
            <option value="-tp-link-tl-wa750re-v1">TL WA750RE Ver:1</option>
            <option value="-tp-link-tl-wa801n-nd-v2">TL WA801 N/ND Ver:2</option>
            <option value="-tp-link-tl-wa850re-v1">TL WA850RE Ver:1</option>
            <option value="-tp-link-tl-wa901n-nd-v2">TL WA 901 N/ND Ver:2</option>
            <option value="-tp-link-tl-wdr3500-v1">TL WDR 3500 Ver:1</option>
            <option value="-tp-link-tl-wdr3600-v1">TL WDR 3600 Ver:1</option>
            <option value="-tp-link-tl-wdr4300-v1">TL WDR 4300 Ver:1</option>
            <option value="-tp-link-tl-wr740n-nd-v1">TL WR 740 N/ND Ver:1</option>
            <option value="-tp-link-tl-wr740n-nd-v3">TL WR 740 N/ND Ver:3</option>
            <option value="-tp-link-tl-wr740n-nd-v4">TL WR 740 N/ND Ver:4</option>
            <option value="-tp-link-tl-wr741n-nd-v1">TL WR 741 N/ND Ver:1</option>
            <option value="-tp-link-tl-wr741n-nd-v2">TL WR 741 N/ND Ver:2</option>
            <option value="-tp-link-tl-wr741n-nd-v4">TL WR 741 N/ND Ver:4</option>
            <option value="-tp-link-tl-wr841n-nd-v3">TL WR 841 N/ND Ver:3</option>
            <option value="-tp-link-tl-wr841n-nd-v5">TL WR 841 N/ND Ver:5</option>
            <option value="-tp-link-tl-wr841n-nd-v7">TL WR 841 N/ND Ver:7</option>
            <option value="-tp-link-tl-wr841n-nd-v8">TL WR 841 N/ND Ver:8</option>
            <option value="-tp-link-tl-wr841n-nd-v9" style="font-weight:bold">TL WR 841 N/ND Ver:9</option>
            <option value="-tp-link-tl-wr842n-nd-v1">TL WR 842 N/ND Ver:1</option>
            <option value="-tp-link-tl-wr842n-nd-v2">TL WR 842 N/ND Ver:2</option>
            <option value="-tp-link-tl-wr941n-nd-v2">TL WR 941 N/ND Ver:2</option>
            <option value="-tp-link-tl-wr941n-nd-v3">TL WR 941 N/ND Ver:3</option>
            <option value="-tp-link-tl-wr941n-nd-v4">TL WR 941 N/ND Ver:4</option>
            <option value="-tp-link-tl-wr1043n-nd-v1">TL WR 1043 N/ND Ver:1</option>
            <option value="-tp-link-tl-wr1043n-nd-v2">TL WR 1043 N/ND Ver:2</option>
          </optgroup>
          <optgroup label="Ubiquiti">
            <option value="-ubiquiti-bullet-m">Ubiquiti Bullet M</option>
            <option value="-ubiquiti-nanostation-m">Ubiquiti Nanostation M</option>
            <option value="-ubiquiti-unifi">Ubiquiti UniFi</option>
            <option value="-ubiquiti-unifiap-outdoor">Ubiquiti UniFi AP-Outdoor</option>
          </optgroup>
        </select>
    </div>
    <button class="button">Herunterladen</button>
    <p>Eine Anleitung wie du die Freifunk Flensburg Firmware auf deinem Router selber installieren kannst findest du bei uns <a href="http://wiki.freifunk-flensburg.de/wiki/Einen_Knoten_einrichten">hier im Wiki</a>. Die Freifunk Flensburg Firmware steht unter der <a href="http://de.wikipedia.org/wiki/GNU_General_Public_License" target="_blank">GPL Lizenz</a>. Du darfst sie somit kostenlos nutzen, studieren, ändern und verbreiten.</p>
</form>
<aside class="participate_list-links">
    <h2>Links zu Freifunk Flensburg</h2>
    <ul>
        <li><a target="_blank" href="http://wiki.freifunk-flensburg.de/wiki/Hauptseite">Freifunk Flensburg Wiki</a> - Unser gesammeltes Wissen</li>
        <li><a target="_blank" href="https://github.com/freifunk-flensburg">GitHub</a> - Unser Code zum Mitbasteln</li>
        <li><a target="_blank" href="http://map.freifunk-flensburg.de">Die Mesh-Map</a> - Unsere detailierte Knotenkarte</li>
        <li><a target="_blank" href="http://nordlab-ev.de">nordlab e.V.</a></li>
    </ul>
    <h2>Allgemeine Freifunk Links</h2>
    <ul>
        <li><a target="_blank" href="http://freifunk.net/">freifunk.net</a></li>
        <li><a target="_blank" href="http://wiki.freifunk.net/">Das Freifunk-Wiki</a></li>
    </ul>
</aside>
