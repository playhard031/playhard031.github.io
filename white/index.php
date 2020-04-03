<?php
$a = 1;
$content = 'main.php';

if (isset($_GET['a']))
    $a = $_GET['a'];

if ($a == 2){
    $content = 'contact.php';
} else if ($a == 3) {
    $content = 'about.php';
} else if ($a == 4) {
    $content = 'policy.php';
}
?>

<!DOCTYPE html>
<html lang="En">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <meta name="description" content="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="white/./css/site.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="white/favicon.ico" type="image/x-icon">
    <link rel="icon" href="white/favicon.ico" type="image/x-icon">
</head>
<body>

<div class="wrap bg-lightyellow">
    <div class="container bg-white">
        <div class=" ">
            <p class="header-text"></p>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-lightskyblue">
            <a class="navbar-brand" href="#">squirrel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./?a=1">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?a=2">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?a=3">Статья</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
        <div class="content pb-5">
            <div class="row">
                <div class="col-9">
                    <?php include($content);?>
                </div>
                <div class="col-3">
                    <h4>Поделиться в соц. сетях</h4>
                    <!-- AddToAny BEGIN -->
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_twitter"></a>
                        <a class="a2a_button_email"></a>
                        <a class="a2a_button_vk"></a>
                    </div>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                    <!-- AddToAny END -->
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer mt-5">
    <div class="container">
        <p class="pull-left"><a href="./?a=4">Политика конфиденциальности</a> &copy;  2020</p>

    </div>
</footer>

</body>
</html>

