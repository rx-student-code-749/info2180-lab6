<?php
$appName = "xFindr";
$title = "{$appName} &bull; ";
$title .= (array_key_exists('q', $_GET)) ? $_GET['q'] ?: "Home" : "Home";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= $title ?></title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
</head>
<body>
<header class="page-element">
    <h1><?= $appName ?></h1>
</header>
<main class="page-element-full-width">
    <div class="row search-bar">
        <p class="hint">Enter a term to search for</p>
        <div class="search">
            <form action="request.php" method="get">
                <input type="text" name="q" id="q" placeholder="Search">
                <a href="#" onclick="fn(event);"><i class="fa fa-search"></i></a>
                <a href="#" onclick="fn2(event);" class="word-btn">Get All Definitions</a>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="results-container" id="results"></div>
    </div>
</main>

<footer class="page-element">
    <p>Coded by R&aacute;pheekwon Rhooms</p>
</footer>

<script type="text/javascript" src="src/js/app.js"></script>
</body>
</html>
