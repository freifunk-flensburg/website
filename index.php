<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Freifunk Flensburg</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/stylesheets/style.css">
    </head>
    <body>
        <!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <haeder class="main-header">
            <h1 class="logo">
                <a href="#start">Freifunk Flensburg</a>
            </h1>
            <nav class="main-navigation">
                <ul>
                    <li><a href="#start">Start</a></li>
                    <li><a href="#about">Über</a></li>
                    <li><a href="#find-us">In deiner Nähe</a></li>
                    <li><a href="#participate">Mitmachen</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">So findest du uns</a></li>
                </ul>
            </nav>
        </haeder>
        <main>
            <section name="start">
                <?php include('content/start.php'); ?>
            </section>
            <section name="about">
                <?php include('content/about.php'); ?>
            </section>
            <section name="find-us">
                <?php include('content/find-us.php'); ?>
            </section>
            <section name="participate">
                <?php include('content/participate.php'); ?>
            </section>
            <section name="faq">
                <?php include('content/faq.php'); ?>
            </section>
            <section name="contact">
                <?php include('content/contact.php'); ?>
            </section>
        </main>
        <footer>
        <a href="#start">Nach oben</a>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="assets/javascripts/jquery.particleground.min.js"></script>
        <script src="assets/javascripts/jquery.main.js"></script>
    </body>
</html>
