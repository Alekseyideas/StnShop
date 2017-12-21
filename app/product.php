<?php
include( dirname( __FILE__ ) . '/includes.php' );
include( dirname( __FILE__ ) . '/page-parts/header.php' );
?>
<main>
    <section class="product-page">
        <div class="container">
            <h1 class="product-page__title">Планшет Lenovo TB-7304F 7" IPS (1024x600) /QuadCore(1,3Ghz)/1Gb/16Gb/2MP+5MP/WiFi/Android 7.0/Black</h1>
            <div class="flex ">
                <div class="col-8 product-page__left">
                    <div class="flex">




                        <div class="product-page__image-items">
                            <div class="product-page__image-item" data-item="1"><img src="https://www.stn.kz/items2/00000015229/nbig_1.jpg" alt="prdoduct"></div>
                            <div class="product-page__image-item" data-item="2"><img src=" https://www.stn.kz/items2/00000013530/nbig_1.jpg" alt="prdoduct"></div>
                            <div class="product-page__image-item"  data-item="3"><img src="https://www.stn.kz/items2/00000013777/nbig_1.jpg" alt="prdoduct"></div>
                            <div class="product-page__image-item" data-item="4"><img src="https://www.stn.kz/items2/00000013527/nbig_1.jpg" alt="prdoduct" ></div>
                        </div>
                        <div class="product-page__image">
                            <img src="images/prdoduct/product-2.jpg" alt="prdoduct">
                        </div>
                    </div>
                </div>
                <div class="col-4 product-page__right">

                        <div class="product-page__code text-right">
                            <span>Код товара:  16944</span>
                        </div>
	                    <? include( dirname( __FILE__ ) . '/page-components/_price.php' );?>
                        
                        <div class="availability"><span>Есть в наличии</span></div>

                    <div class="wr-btns">
	                    <? btnOrder() ?>
	                    <? btnComparison() ?>
                        <button class="chars btn">Характеристики</button>
                    </div>


                </div>
            </div>
        </div>



        <div class="charTabs">
            <div class="container">
                <div class="flex">
                    <a href="#" class="tabBtn" data-tab="overview">Обзор</a>
                    <a href="#" class="tabBtn" data-tab="description">оПИСАНИЕ</a>
                    <a href="#" class="tabBtn " data-tab="characteristics">хАРАКТЕРИСТИКИ</a>
                    <a href="#" class="tabBtn active" data-tab="accessories">аксессуары</a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="tabContent" id="overview">
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, molestiae tempore. Ab consectetur dicta dolorem esse ex excepturi fugit maxime odio quae sunt! Commodi consequatur, delectus dignissimos nemo quo sunt.orem ipsum dolor sit amet, consectetur adipisicing elit. Illum, molestiae tempore. Ab consectetur dicta dolorem esse ex excepturi fugit maxime odio quae sunt! Commodi consequatur, delectus dignissimos nemo quo sunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, molestiae tempore. Ab consectetur dicta dolorem esse ex excepturi fugit maxime odio quae sunt! Commodi consequatur, delectus dignissimos nemo quo sunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, molestiae tempore. Ab consectetur dicta dolorem esse ex excepturi fugit maxime odio quae sunt! Commodi consequatur, delectus dignissimos nemo quo sunt.
                    <br></p>
            <div class="text-center">

                <iframe width="560" height="315" src="https://www.youtube.com/embed/6ZpREYENLms" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>


            </div>
            <div class="tabContent" id="description">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, molestiae tempore. Ab consectetur dicta dolorem esse ex excepturi fugit maxime odio quae sunt! Commodi consequatur, delectus dignissimos nemo quo sunt.orem ipsum dolor sit amet, consectetur adipisicing elit. Illum, molestiae tempore. Ab consectetur dicta dolorem esse ex excepturi fugit maxime odio quae sunt! Commodi consequatur, delectus dignissimos nemo quo sunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    <br>  <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, molestiae tempore. Ab consectetur dicta dolorem esse ex excepturi fugit maxime odio quae sunt! Commodi consequatur, delectus dignissimos nemo quo sunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, molestiae tempore. Ab consectetur dicta dolorem esse ex excepturi fugit maxime odio quae sunt! Commodi consequatur, delectus dignissimos nemo quo sunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, molestiae tempore. Ab consectetur dicta dolorem esse ex excepturi fugit maxime odio quae sunt! Commodi consequatur, delectus dignissimos nemo quo sunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, molestiae tempore. Ab consectetur dicta dolorem esse ex excepturi fugit maxime odio quae sunt!  <br> <br>Commodi consequatur, delectus dignissimos nemo quo sunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, molestiae tempore. Ab consectetur dicta dolorem esse ex excepturi fugit maxime odio quae sunt! Commodi consequatur, delectus dignissimos nemo quo sunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, molestiae tempore. Ab consectetur dicta dolorem esse ex excepturi fugit maxime odio quae sunt! Commodi consequatur, delectus dignissimos nemo quo sunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, molestiae tempore. Ab consectetur dicta dolorem esse ex excepturi fugit maxime odio quae sunt! Commodi consequatur, delectus dignissimos nemo quo sunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, molestiae tempore. Ab consectetur dicta dolorem esse ex excepturi fugit maxime odio quae sunt! Commodi consequatur, delectus dignissimos nemo quo sunt.
                    <br></p>

            </div>
            <div class="tabContent" id="characteristics">
                <h2 class="tabContent__title">
                    Основные характеристики Планшет Lenovo TB-7304F 7" IPS (1024x600)
                </h2>


                <table cellpadding="0" cellspacing="0">
                    <tbody>

                        <?
                            $i=0;
                            while ($i<6){
                                $i++?>

                                <tr>
                                    <td class="leftInfo titleTable borderBtn">Общие параметры</td>
                                    <td class="rightInfo borderBtn"></td>
                                </tr>
                                <tr>
                                    <td class="leftInfo">Производитель</td>
                                    <td class="rightInfo">Lenovo</td>
                                </tr>
                                <tr>
                                    <td class="leftInfo">Модель</td>
                                    <td class="rightInfo">VIBE S1 (S1a40)</td>
                                </tr>
                                <tr>
                                    <td class="leftInfo">Цвет задней панели</td>
                                    <td class="rightInfo">синий</td>
                                </tr>
                                <tr>
                                    <td class="leftInfo">Цвет передней панели</td>
                                    <td class="rightInfo">чёрный</td>
                                </tr>
                                <tr>
                                    <td class="leftInfo">Производитель</td>
                                    <td class="rightInfo">Lenovo</td>
                                </tr>

                                <?
                            }
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="tabContent" id="accessories">

                <div class="accessoriesCarousel owl-carousel">

                    <?
                        function SlideItem ($image){?>

                            <div class="accessorie__item">
                                <a href="<?echo $GLOBALS['productLink']?>" class="accessorie__image">
                                    <img src="<?echo $image?>" alt="accessorie__item">
                                </a>


                                <a href="<?echo $GLOBALS['productLink']?>" class="accessorie__title">Чехол бампер Back Case Xiaomi Mi Mix (Black) Nillkin</a>


		                        <? btnOrder() ?>

                            </div>

                            <?

                        }
                    ?>

                    <?php
                    SlideItem('https://www.stn.kz/items2/00000014331/nbig_1.jpg');
                    SlideItem('https://www.stn.kz/items2/00000014361/nbig_1.jpg');
                    SlideItem('https://www.stn.kz/items2/00000013650/nbig_1.jpg');
                    SlideItem('https://www.stn.kz/items2/00000011206/nbig_1.jpg');
                    SlideItem('https://www.stn.kz/items2/00000014363/nbig_1.jpg');
                    SlideItem('https://www.stn.kz/items2/00000015780/nbig_1.jpg');
                    SlideItem('https://www.stn.kz/items2/00000011286/nbig_1.jpg');

                    ?>

                </div>

            </div>
        </div>

        <div class="charTabs fixedTabs">
            <div class="container">
                <div class="flex">
                    <a href="#" class="tabBtn" data-tab="overview">Обзор</a>
                    <a href="#" class="tabBtn" data-tab="description">оПИСАНИЕ</a>
                    <a href="#" class="tabBtn" data-tab="characteristics">хАРАКТЕРИСТИКИ</a>
                    <a href="#" class="tabBtn active" data-tab="accessories">аксессуары</a>
                </div>
            </div>
        </div>

        <div class="topProductBuy">
            <div class="container">
                <div class="flex">
                    <div class="topProductBuy__image">
                        <img src="images/prdoduct/product-2.jpg" alt="prdoduct">
                    </div>
                    <div class="topProductBuy__wrapper">
                        <div class="topProductBuy__title">Планшет Lenovo TB-7304F 7" IPS (1024x600) /QuadCore(1,3Ghz)/1Gb/16Gb/2MP+5MP/WiFi/Android 7.0/Black</div>
                        <div class="flex flex--j-between flex--a-center">
                            <div class="flex">
                                <div class="product-page__code">
                                    <span>Код товара:  16944</span>
                                </div>
                                <div class="availability"><span>Есть в наличии</span></div>
                            </div>
                            <div class="flex flex--a-center">

                                <div class="simplePrice">
                                    <div class="product__price">
                                    <span class="price">
                                        <span class="price_currency">〒</span>9 990
                                    </span>
                                    </div>
                                </div>

					            <? btnComparison() ?>
					            <? btnOrder() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="popUp ProductPopUp animated">
            <button class="btn closePopUp"><i class="fa fa-times" aria-hidden="true"></i></button>


            <div class="ProductPopUpCarousel owl-carousel">
                <div class="ProductPopUpCarousel__item">
                    <img src="images/prdoduct/product-2.jpg" alt="">

                </div>
                <div class="ProductPopUpCarousel__item">
                    <img src="https://www.stn.kz/items2/00000015229/nbig_1.jpg" alt="">

                </div>
                <div class="ProductPopUpCarousel__item">
                    <img src="https://www.stn.kz/items2/00000013530/nbig_1.jpg" alt="">
                </div>
                <div class="ProductPopUpCarousel__item">
                    <img src="https://www.stn.kz/items2/00000013777/nbig_1.jpg" alt="">
                </div>

                <div class="ProductPopUpCarousel__item">
                    <img src="https://www.stn.kz/items2/00000013527/nbig_1.jpg" alt="">
                </div>

            </div>

        </div>
    </section>

</main>







<?php include( dirname( __FILE__ ) . '/page-parts/footer.php' ); ?>


