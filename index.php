<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Freifunk Flensburg</title>
        <meta name="description" content="Freifunk Flensburg ist dein freies WLAN zum selber machen, in Flensburg und Umgebung.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css">
        <link rel="stylesheet" href="assets/stylesheets/style.css">
    </head>
    <body>
        <!--[if lt IE 9]>
            <aside class="browse-happy">Du benutzt einen <strong>veralteten</strong> Webbrowser. Einige Funktionen dieser Webseite werden leider nicht funktionieren. Du kannst einen neuen <a target="_blank" href="http://browsehappy.com/">sicheren Webbrowser herunterladen</a>, um dein Erlebnis auf unserer und anderen Internetseiten zu verbessern.</p></aside>
        <![endif]-->

        <div class="main-header-wrap">
            <header id="main-header">
                <h1 class="logo">
                    <a href="#start">Freifunk Flensburg</a>
                </h1>
                <nav class="main-navigation">
                    <ul>
                        <li><a href="#start">Start</a></li>
                        <li><a href="#about">Über</a></li>
                        <li><a href="#find-us">Karte</a></li>
                        <li><a href="#participate">Mitmachen</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#contact">Kontakt</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <main>
            <section name="start">
                <?php include('content/start.php'); ?>
            </section>
            <section name="about" class="section-standard">
                <?php include('content/about.php'); ?>
            </section>
            <figure name="find-us" class="section-image">
                <img src="media/freifunk-flensburg-smartphone-by-fabian-horst.jpg">
                <figcaption>
                    <h2>In deiner Nähe</h2>
                </figcaption>
            </figure>
            <section class="section-standard">
                <?php include('content/find-us.php'); ?>
            </section>
            <figure name="participate" class="section-image">
                <img src="media/freifunk-flensburg-routerhafenspitze-by-fabian-horst.jpg">
                <figcaption>
                    <h2>Mach mit!</h2>
                </figcaption>
            </figure>
            <section class="section-standard">
                <?php include('content/participate.php'); ?>
            </section>
            <figure name="faq" class="section-image">
                <img src="media/freifunk-flensburg-fragen-by-fabian-horst.jpg">
                <figcaption>
                    <h2>Fragen und Antworten</h2>
                </figcaption>
            </figure>
            <section class="section-standard">
                <?php include('content/faq.php'); ?>
            </section>
            <figure name="contact" class="section-image">
                <img src="media/freifunk-flensburg-kontakte.jpg">
                <figcaption>
                    <h2>Jede Menge Kontakt(e)</h2>
                </figcaption>
            </figure>
            <section class="section-standard">
                <?php include('content/contact.php'); ?>
            </section>
        </main>
        <footer class="main-footer">
            <a href="https://www.facebook.com/FreifunkFlensburg" class="footer_facebook">Facebook</a>
            <a href="https://twitter.com/FreiFunkFlens" class="footer_twitter">Twitter</a>
            <a href="http://nordlab-ev.de" class="footer_nordlab">nordlab e.V.</a>
            <a href="http://freifunk.net/" class="footer_freifunk">freifunk.net</a>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="assets/javascripts/jquery.particleground.min.js"></script>
        <script src="assets/javascripts/jquery.main.js"></script>
    </body>
</html>
