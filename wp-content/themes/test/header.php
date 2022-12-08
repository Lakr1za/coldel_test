<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <title><?php bloginfo( 'description' ); ?></title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="second-title">
                Эльбрусская <br>
                Прохлада
            </div>
            <div class="header-box">
                <div class="header-info">
                    <div class="header-title">
                    <?php the_field('header-title')?> 
                    </div>
                    <nav class="menu">
                        <div class="header-menu">
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">Каталог</a></li>
                            <li><a href="#">Как заказать</a></li>
                            <li><a href="#">Отзывы</a></li>
                            <li><a href="#about">О нас</a></li>
                            <li><a href="#">Контакты</a></li>
                        </div>
                    </nav>
                </div>
                <div class="header-recall">
                    <div class="recall-number">
                    <?php the_field('recall-number')?> 
                    </div>
                    <div class="recall-btn">
                        <a href="#">Заказать обратный звонок</a>
                    </div>
                </div>
            </div>
        </div>
    </header>