<ul class="choose-customer participate_list-choose-customer">
    <li data-show-customer="rookie" class="active">
        <header>
            <h3>Anfänger</h3>
            <p>Du hast gerade erst von uns gehört, findest die Idee interessant und möchtest mitmachen?</p>
        </header>
    </li>
</ul>
<section class="show-customer">
    <article id="rookie" class="participate_show-customer active">
        <?php include('content/participate_customer.php'); ?>
    </article>
</section>
<ul class="choose-customer participate_list-choose-customer">
    <li data-show-customer="member" class="member">
        <header id="Firmware">
            <h3>Freifunker</h3>
            <p>Du bist schon länger dabei und suchst nach Informationen oder der <a href="#Firmware">Firmware</a>?</p>
        </header>
    </li>
</ul>
<section class="show-customer">
    <article id="member" class="participate_show-customer active">
        <?php include('content/participate_member.php'); ?>
    </article>
</section>
<ul class="choose-customer participate_list-choose-customer">
    <li data-show-customer="sponsor" class="sponsor">
        <header>
            <h3>Unterstützer</h3>
            <p>Du findest das Projekt unterstützenswert und möchtest uns helfen?</p>
        </header>
    </li>
</ul>
<section class="show-customer">
    <article id="sponsor" class="participate_show-customer active">
        <?php include('content/participate_sponsor.php'); ?>
    </article>
</section>
