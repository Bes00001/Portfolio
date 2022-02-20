<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/adaptive.css" rel="stylesheet">
    <link rel="icon" href="/icon/logo.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;500;900&display=swap" rel="stylesheet">
</head>
        <header id="header" class="header">
            <div class="navbar">

                <div class="phone">
                    <div class="phoneInfo">
                        <div class="myPhone">
                            <a href="tel:+77754562356">8 (775) 456-23-56</a>
                        </div>
                    </div>
                </div>

                <div class="link">
                    <a href = "/" class="block1">Главная</a>
                </div>

                <div class="linkbar">
                    <span class="pages"><?php require $_SERVER['DOCUMENT_ROOT'] . "/blocks/transition.php";?></span>
                </div>


            </div>
        </header>