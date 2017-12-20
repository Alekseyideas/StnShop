<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stn</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylesheet.min.css?<?echo rand()?>">
</head>
<body>

    <header class="header">
        <div class="header__first">
            <div class="container">
                <div class="flex">
                    <div class="col-4">
                        <a href="/" title="logo" class="header__logo"><img src="images/general/logo.svg" alt="logo"></a>
                    </div>
                    <div class="col-5 text-center">
                        <a href="tel:+77273330999" class="header__tel">
                            <span class="header__tel-icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <span>+7 (727) 333 0 999</span>
                        </a>
                    </div>

                    <div class="col-3">
                        <div class="flex">
                            <a href="#" class="header__btnBlock header__btnBlock--room">
                                <span class="header__btnBlock-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <span class="header__btnBlock-text">Кабинет</span>
                            </a>
                            <a href="#" class="header__btnBlock header__btnBlock--comparison">
                                <span class="header__btnBlock-icon"><i class="fa fa-balance-scale" aria-hidden="true"></i></span>
                                <span class="header__btnBlock-text">Сравнение</span>
                            </a>
                            <a href="#" class="header__btnBlock header__btnBlock--views">
                                <span class="header__btnBlock-icon"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                <span class="header__btnBlock-text">Просмотры</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="header__second">
            <div class="container">
                <div class="flex">
                    <div class="col-3">
                        <div class="header__wrapperCats">
                            <a href="#" class="header__btnCategory flex flex--a-center">
                                <span class="header__btnCategory-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                                <span class="header__btnCategory-text">Каталог</span>
                            </a>


                            <?
                            function catList($icon, $name){
                                ?>
                              <li>
                                        <a href="#" class="flex flex--a-center">
                                            <span class="catItem-icon">
                                        <i class="fa <?echo $icon?>" aria-hidden="true"></i>
                                            </span>
                                            <span>
                                            <?echo $name?>
                                            </span>

                                        </a>

                                        <div class="wrapperSubCats">
                                            <div class="flex">
                                                <div class="col-4">
                                                    <ul class="subCats">
                                                        <li><a href="<? echo $GLOBALS['catLink'] ?>"><span>DECT телефоны</span></a></li>
                                                        <li><a href="<? echo $GLOBALS['catLink'] ?>"><span>GSM-шлюзы</span></a></li>
                                                        <li><a href="<? echo $GLOBALS['catLink'] ?>"><span>АТС</span></a></li>
                                                        <li><a href="<? echo $GLOBALS['catLink'] ?>"><span>Проводные телефоны</span></a></li>
                                                        <li><a href="<? echo $GLOBALS['catLink'] ?>"><span>Сотовые телефоны</span></a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-4">
                                                    <ul class="subCats">
                                                        <li><a href="<? echo $GLOBALS['catLink'] ?>"><span>DECT телефоны</span></a></li>
                                                        <li><a href="<? echo $GLOBALS['catLink'] ?>"><span>GSM-шлюзы</span></a></li>
                                                        <li><a href="<? echo $GLOBALS['catLink'] ?>"><span>АТС</span></a></li>
                                                        <li><a href="<? echo $GLOBALS['catLink'] ?>"><span>Проводные телефоны</span></a></li>
                                                        <li><a href="<? echo $GLOBALS['catLink'] ?>"><span>Сотовые телефоны</span></a></li>
                                                    </ul>
                                                </div>
                                               <div class="col-4">
                                                    <div class="sharesCat">
                                                        <h3 class="sharesCat__title">
                                                            Акция
                                                        </h3>
                                                        <a href="<? echo $GLOBALS['catLink'] ?>" class="sharesCat__product-title">
                                                           <span>Радиотелефон PANASONIC KX-TG1711, CAB, CAB</span>
                                                        </a>
                                                        <a href="<? echo $GLOBALS['catLink'] ?>" class="sharesCat__product-img">
                                                            <img src="../images/prdoduct/product-1.jpg" alt="prdoduct">
                                                        </a>
                                                        <div class="sharesCat__product-price">
                                                            <span class="oldPrice">
                                                                <span class="price_currency">〒</span>10 540</span>
                                                            <span class="price">
                                                                <span class="price_currency">〒</span>9 990
                                                            </span>
                                                        </div>
                                                        <? btnOrder() ?>
                                                        <? btnComparison() ?>


                                                    </div>
                                               </div>

                                            </div>

                                        </div>



                                    </li>
                            <?
                            return false;
                            }
                            ?>

                            <div class="categoriesWrapper">
                                <ul>
                                    <? echo catList('fa-laptop','НОУТБУКИ, ПЛАНШЕТЫ КОМПЬЮТЕРЫ')?>
                                    <? echo catList('fa-fax','ТЕЛЕФОНЫ И СВЯЗЬ')?>
                                    <? echo catList('fa-floppy-o','НОСИТЕЛИ ИНФОРМАЦИИ')?>
                                    <? echo catList('fa-mobile','МОБИЛЬНЫЕ УСТРОЙСТВА')?>
                                    <? echo catList('fa-camera','ПЕРИФЕРИЯ')?>
                                    <? echo catList('fa-battery-three-quarters','ИСТОЧНИКИ ПИТАНИЯ')?>
                                    <? echo catList('fa-microchip','АКСЕССУАРЫ')?>
                                    <? echo catList('fa-sitemap','СЕТЕВОЕ ОБОРУДОВАНИЕ')?>
                                    <? echo catList('fa-usb','СКС ОБОРУДОВАНИЕ')?>
                                    <? echo catList('fa-code-fork','ПАССИВНОЕ ОБОРУДОВАНИЕ')?>
                                    <? echo catList('fa-cloud','СЕРВЕРЫ И СХД')?>
                                    <? echo catList('fa-columns','БЫТОВАЯ ТЕХНИКА')?>
                                    <? echo catList('fa-video-camera','ВИДЕОНАБЛЮДЕНИЕ')?>
                                    <? echo catList('fa-file-video-o','СИСТЕМЫ ВИЗУАЛИЗАЦИИ')?>
                                    <? echo catList('fa-video-camera','ПРОФЕССИОНАЛЬНОЕ ВИДЕО')?>

                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="col-9">
                        <form action="" class="header__search">
                            <input type="search" placeholder="Поиск...">
                            <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </header>

