<ul id="choose-customer" class="participate_list-choose-customer">
    <li data-show-customer="rookie" class="active">
        <header>
            <h3>Anfänger</h3>
            <p>Du hast gerade erst von uns gehört, findest die Idee interessant und möchtest mitmachen?</p>
        </header>
    </li>
    <li data-show-customer="member" class="member">
        <header>
            <h3>Freifunker</h3>
            <p>Du bist schon länger dabei und bist auf der Suche nach passenden Informationen?</p>
        </header>
    </li>
    <li data-show-customer="sponsor" class="sponsor">
        <header>
            <h3>Unterstützer</h3>
            <p>Du findest das Projekt unterstützenswert und kannst finanziell etwas beitragen?</p>
        </header>
    </li>
</ul>
<section id="show-customer">
    <article id="rookie" class="participate_show-customer active">
        <?php include('content/participate_customer.php'); ?>
    </article>
    <article id="member" class="participate_show-customer">
        <?php include('content/participate_member.php'); ?>
    </article>
    <article id="sponsor" class="participate_show-customer">
        <?php include('content/participate_sponsor.php'); ?>
    </article>
</section>
