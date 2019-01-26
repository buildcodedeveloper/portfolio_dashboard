<!DOCTYPE html>
<?php
define('BASE', 'http://dashboard.portfolio.test');
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Dashboard Portfolio</title>

    <link rel="shortcut icon" href="<?= BASE; ?>/img/html5-logo.ico" />
    <!-- start:css -->

    <!-- end:css -->
    <!-- start:bundle-time -->
    <!-- end:bundle-time -->

    <!--[if lt IE 9]>
    <script src="./bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <script src="./bower_components/modernizr/modernizr.custom.js"></script>
    <![endif]-->

</head>

<body>

    <section id="sideMenu">
        <nav>
            <a href="" class="active"><i class="fa fa-home" aria-hidden="true"></i>item1</a>
            <a href=""><i class="fa fa-sticky-note-o" aria-hidden="true"></i>item2</a>
            <a href=""><i class="fa fa-bookmark-o" aria-hidden="true"></i>item3</a>
            <a href=""><i class="fa fa-calendar-check-o" aria-hidden="true"></i>item4</a>
            <a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i>item5</a>
            <a href=""><i class="fa fa-cog" aria-hidden="true"></i>item6</a>
        </nav>
    </section>

    <header>
        <div class="search-area">
            <i class="fa fa-search" aria-hidden="true"></i>
            <input type="text" name="" value="">
        </div>
        <div class="user-area">
            <a href="#">+ Add</a>
            <a href="#" class="notification">
                <i class="fa fa-bell-o" aria-hidden="true"></i>
                <span class="circle">3</span>
            </a>
            <a href="#">
                <div class="user-img">
                    </div>
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
            </a>
        </div>

</body>

</html>