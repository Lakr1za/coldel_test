<?php get_header(  ); ?>
<style>
    .slick-arrow.slick-prev{
	border: white;
	min-height: 43px;
	min-width: 43px;
	font-size: 0;
	background: url('<?php bloginfo( 'template_url' ); ?>/assets/image/l.png') 0 0 / 100% no-repeat;
}
.slick-arrow.slick-next{
    border: white;
	font-size: 0;
	min-height: 43px;
	min-width: 43px;
	background: url('<?php bloginfo( 'template_url' ); ?>/assets/image/r.png') 0 0 / 100% no-repeat;
}
</style>
    <div class="main">
        <section class="delivery"  >
            <div class="container">
                <div class="delivery-box">
                    <div class="delivery-title">
                    <?php the_field('delivery-title')?> 
                    </div>
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                            <div class="numbertext">1 / 4</div>
                            <div class="pic">
                                <img src="<?php the_field('pic')?> ">
                            </div>
                            </div>
                            <div class="mySlides fade">
                            <div class="numbertext">2 / 4</div>
                            <div class="pic">
                                <img src="<?php the_field('pic')?> ">
                            </div>
                            </div>
                            <div class="mySlides fade">
                            <div class="numbertext">3 / 4</div>
                            <div class="pic">
                                <img src="<?php the_field('pic')?> ">
                            </div>
                            </div>
                            <div class="mySlides fade">
                            <div class="numbertext"> 4 / 4</div>
                            <div class="pic">
                                <img src="<?php the_field('pic')?> ">
                            </div>
                            </div>
                            <div class="dots">
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            </div>
                        </div>
                </div>
            </div>
        </section>
            <div class="timer">
                <div class="progress">
                        <progress class="progres" id="progress-line" value="0" max="100"> </progress>
                </div>
            </div>
        <section class="about-us" id="about">
            <div class="container">
                <div class="about-us_main">
                    <div class="about-us_info">
                        <div class="about-us_title">
                            <?php the_field('about-us_title')?> 
                        </div>
                        <div class="about-us_description">
                         <?php the_field('about-us_description')?> 
                        </div>
                    </div>
                    <div class="about-us_slider">
                        <div class="wrapper">
                            <div class="slider">
                                <div class="slider__item filter">
                                    <div class="slider-item_pic">
                                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/image/procent.png" alt="">
                                    </div>
                                    <div class="slider-item_text">
                                        Индивидуальные скидки в зависимости<br> от объема покупки
                                    </div>
                                    
                                </div>
                                <div class="slider__item">
                                    <div class="slider-item_pic">
                                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/image/procent.png" alt="">
                                    </div>
                                    <div class="slider-item_text">
                                        Индивидуальные скидки в зависимости <br>от объема покупки
                                    </div>
                                    
                                </div>
                                <div class="slider__item filter">
                                    <div class="slider-item_pic">
                                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/image/procent.png" alt="">
                                    </div>
                                    <div class="slider-item_text">
                                        Индивидуальные скидки в зависимости <br>от объема покупки
                                    </div>
                                    
                                </div>
                                <div class="slider__item">
                                    <div class="slider-item_pic">
                                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/image/procent.png" alt="">
                                    </div>
                                    <div class="slider-item_text">
                                        Индивидуальные скидки в зависимости <br>от объема покупки
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="btn"></div>
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="price-box">
                    <div class="price-info">
                        <img class="rama" src="<?php bloginfo( 'template_url' ); ?>/assets/image/info1.png" alt="">
                        <img class="dollar" src="<?php bloginfo( 'template_url' ); ?>/assets/image/info2.png" alt="">
                        <img class="botpoloska" src="<?php bloginfo( 'template_url' ); ?>/assets/image/info3.png" alt="">
                        <img class="toppoloska" src="<?php bloginfo( 'template_url' ); ?>/assets/image/info4.png" alt="">
                        <div class="price-title">
                            Получить оптовый прайс
                        </div>
                        <div class="price-descr">
                            Оставьте заявку и получите прайс на почту
                        </div>
                    </div>
                    <div class="price-form">
                        <div class="form">
                            <form >
                                <input type="text" class="name" name="username" placeholder="Имя">
                                <input type="text" class="email" name="usermail" placeholder="E-mail">
                            </form>
                        </div>
                        <div class="price-btn">
                            <input type="submit" class="price-button" name="submit" placeholder="Отправить">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/slick.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/main.js"></script>

</body>
</html>