<?php
    $appName = "xFindr";
    $title = "{$appName} &bull; HOME";

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
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<header >
    <h1><?= $appName ?></h1>
</header>

<main>
    <div class="row">
        <p class="hint">Enter a term to search for</p>
        <div class="search">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <input type="text" name="q" id="q" placeholder="Search">
                <button type="button" onclick="_(event);"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="row">
<!--        result-->
    </div>
</main>

<footer>

</footer>

<script type="text/javascript" src="src/js/app.js"></script>
</body>
</html>
