<footer class="footer">
    <div class="footer__first">
        <div class="container">
            <div class="flex flex--j-center">
                <ul class="wr">
                    <li>
                        <a href="#">О компании</a>
                    </li>
                    <li>
                        <a href="#">Портфолио</a>
                    </li>
                </ul>
                <ul class="wr">
                    <li>
                        <a href="#">Партнерам</a>
                    </li>
                    <li>
                        <a href="#">Вендорам</a>
                    </li>
                </ul>
                <ul class="wr"
                    <li>
                        <a href="#">Прессцентр</a>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                </ul>
                <div class="wr">
                    <ul class="flex socLinks">
                        <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="footer__second text-center">
       <span>© <?php echo date("Y"); ?> STN distribution</span>
    </div>
</footer>




<div class="openPopUp"></div>





<div class="popUp SeenPopUp animated ">
    <button class="btn closePopUp"><i class="fa fa-times" aria-hidden="true"></i></button>


    <h3 class="popUp__title">Просмотренные товары</h3>

    <div class="container">
        <?php
            $i=0;
            while($i<5){ $i++;?>

                <div class="flex rowProd">
                    <div class="SeenPopUp__image">
                        <img src="images/prdoduct/product-2.jpg" alt="prdoduct">
                    </div>
                    <div class="SeenPopUp__wrapper">
                        <div class="SeenPopUp__title">Планшет Lenovo TB-7304F 7" IPS (1024x600) /QuadCore(1,3Ghz)/1Gb/16Gb/2MP+5MP/WiFi/Android 7.0/Black</div>
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

            <?}
        ?>

    </div>
    <div class="fixedPopUpFooter flex flex--j-right">
        <button class="btn clearSeen"><i class="fa fa-trash-o" aria-hidden="true"></i>Очистить Просмотры</button>
    </div>
</div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script src="js/main.js?<?echo rand()?>"></script>
</body>
</html>