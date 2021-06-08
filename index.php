<?php get_header(); ?>
<body>
    <aside id="aside">
        <div class="container">
            
            <div class="sidepanell">
                
                    <?php		
                        global $post;

                        $query = new WP_Query( [
                            'posts_per_page' => 5,
                            'category_name'  => 'countries',
                            'orderby'        => 'comment_count',
                        ] );

                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();
                                ?>
                                <div class="country">
                                    <img class="country__img" src="<?php the_field('countries_image'); ?>" alt="ukraine_icon">
                                    <div class="country__text">
                                        <div class="country__name"><?php the_title( ); ?></div>
                                        <div class="country__phone"><?php the_field('countries_adress'); ?></div>
                                        <div class="country__email"><?php the_field('countries_phone'); ?></div>
                                    </div>
                                </div>
                                <?php 
                            }
                        } else {
                            
                    }

                    wp_reset_postdata();
                    ?>
               
            </div>
            
        </div>
    </aside>

    <section class="promo">
        <div class="container">
            <header class="header">
                <?php if( has_custom_logo() ): the_custom_logo(); ?>
                    <?php else: ?>
                    <a  href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                <?php endif; ?>
                <nav id="dropMenu">
                    <div class="drop-box">
                        <a href="#" data-toggle="dropdown" class="drop-text">Меню <i class="fa fa-chevron-up rotate"></i></a>
                    </div>
                    <?php wp_nav_menu( [
                        'theme_location'  => 'menu',
                        'container'       => null, 
                        'menu_class'      => 'header__list dropdown-menu', 
                        'menu_id'         => 'ul',
                    ] ); ?>
                </nav>
            </header>

            <div class="owl-carousel carousel owl-theme">
                <?php		
                    global $post;
                    $query = new WP_Query( [
                        'posts_per_page' => 2,
                        'category_name'  => 'top_slider',
                        'orderby'        => 'comment_count',
                    ] );
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            ?>
                            <div class="slide">
                                <div class="slide__text">
                                    <div class="slide__title"><?php the_title( ); ?></div>
                                    <div class="slide__descr"><?php the_field('slider_descr'); ?></div>
                                    <div data-modal="consultation" class="slide__btn btn">Получить доступ</div>
                                </div>
                                <img src="<?php the_field('slider_image'); ?>">
                            </div>
                            <?php 
                        }
                    } else { 
                }

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="withPrengi" id="withPrengi">
        <div class="container">
            <div class="withPrengi__wrapper">
                <?php		
                    global $post;

                    $query = new WP_Query( [
                        'posts_per_page' => 3,
                        'category_name'  => 'prengi_question',
                        'orderby'        => 'comment_count',
                    ] );

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            ?>
                            <div class="withPrengi__box">
                                <div class="withPrengi__icon"><img src="<?php the_field('question_icon'); ?>" alt="withPrengi__icon"></div>
                                <div class="withPrengi__text"><?php the_title( ); ?></div>
                                <img src="<?php echo get_template_directory_uri( )?>/assets/icons/withPrengi/no.png" alt="withPrengi__angle" class="withPrengi__angle">
                            </div>
                            <?php 
                        }
                    } else {
                        
                }

                wp_reset_postdata();
                ?>
            </div>

            <div class="arrow">
                <div class="arrow__top">
                    <div class="arrow__line arrow__leftLine"></div>
                    <div class="arrow__line arrow__rightLine"></div>
                </div>
                <div class="arrow__bottom">
                    <div class="arrow__line arrow__leftLine"></div>
                    <div class="arrow__line arrow__rightLine"></div>
                </div>
            </div>

            <div class="withPrengi__title">С PRENGI</div>

            <div class="withPrengi__wrapper withPrengi__wrapper-bottom">
                <?php		
                    global $post;

                    $query = new WP_Query( [
                        'posts_per_page' => 3,
                        'category_name'  => 'prengi_response',
                        'orderby'        => 'comment_count',
                    ] );

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            ?>
                            <div class="withPrengi__box">
                                <div class="withPrengi__icon"><img src="<?php the_field('response_icon'); ?>" alt="withPrengi__icon"></div>
                                <div class="withPrengi__text withPrengi__text-bold"><?php the_title( ); ?></div>
                                <img src="<?php echo get_template_directory_uri( )?>/assets/icons/withPrengi/yes.png" alt="withPrengi__angle" class="withPrengi__angle">
                            </div>
                            <?php 
                        }
                    } else {
                        
                }

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="solutions" id="solutions">
        <div class="container">
            <div class="title solutions__title">Prengi предоставляет экспертные решения для Вашей отрасли</div>
            <nav>
                <ul class="solutions__nav">
                    <li class="solutions__link"><a href="#">Prengi Production</a></li>
                    <li class="solutions__link"><a href="#">Prengi FMC</a></li>
                    <li class="solutions__link"><a href="#">Prengi Mallz Retail  </a></li>
                    <li class="solutions__link"><a href="#">Prengi Logistic</a></li>
                    <li class="solutions__link"><a href="#">Prengi IT</a></li>
                    <li class="solutions__link"><a href="#">Prengi HR</a></li>
                </ul>
            </nav>

            <div class="owl-carousel2 carousel2 owl-theme2">
                <div class="slide">
                    <img src="<?php echo get_template_directory_uri( )?>/assets/img/solutions_slider/macbook-air.png" alt="slider_macbook-air">
                </div>

                <div class="slide">
                    <img src="<?php echo get_template_directory_uri( )?>/assets/img/solutions_slider/macbook-air.png" alt="slider_macbook-air">
                </div>

                <div class="slide">
                    <img src="<?php echo get_template_directory_uri( )?>/assets/img/solutions_slider/macbook-air.png" alt="slider_macbook-air">
                </div>

                <div class="slide">
                    <img src="<?php echo get_template_directory_uri( )?>/assets/img/solutions_slider/macbook-air.png" alt="slider_macbook-air">
                </div>
            </div>
        </div>
    </section>

    <section class="benefits" id="benefits">
        <div class="container">
            <div class="title benefits__title">Преимущества Prengi для <br> Вашей отрасли</div>
            <div class="benefits__wrapper">
                <div class="benefits__block">
                    <div class="benefits__text">Возможность внедрения и тестирования в реальном времени</div>
                    <img src="<?php echo get_template_directory_uri( )?>/assets/img/benefits/benefits1.jpg" alt="benefits1" class="benefits__img">
                </div>

                <div class="benefits__block">
                    <div class="benefits__text">Система “Intellect”, учет уровня доступов</div>
                    <img src="<?php echo get_template_directory_uri( )?>/assets/img/benefits/benefits2.jpg" alt="benefits2" class="benefits__img">
                </div>

                <div class="benefits__block">
                    <div class="benefits__text">Возможность использовать из любой точки мира с любого устройства</div>
                    <img src="<?php echo get_template_directory_uri( )?>/assets/img/benefits/benefits3.jpg" alt="benefits3" class="benefits__img">
                </div>

                <div class="benefits__block">
                    <div class="benefits__text">Нет необходимости установки и стационарной работы программиста</div>
                    <img src="<?php echo get_template_directory_uri( )?>/assets/img/benefits/benefits4.jpg" alt="benefits4" class="benefits__img">
                </div>

                <div class="benefits__block">
                    <div class="benefits__text">“Живые” бизнес-процессы</div>
                    <img src="<?php echo get_template_directory_uri( )?>/assets/img/benefits/benefits5.jpg" alt="benefits5" class="benefits__img">
                </div>

                <div class="benefits__block">
                    <div class="benefits__text">Никаких предоплат, оплата после старта</div>
                    <img src="<?php echo get_template_directory_uri( )?>/assets/img/benefits/benefits6.jpg" alt="benefits6" class="benefits__img">
                </div>
            </div>
        </div>
    </section>
 
    <section class="versions">
        <div class="title versions__title">Варианты развертывания <br> Ваших данных</div>

        <div class="versions__wrapper">
            <div class="versions__box">
                <div class="versions__text versions__text-left">
                    <div class="versions__subtitle">Облачное хранилище</div>
                    <div class="versions__descr versions__descr-left">Это выделенное пользователю пространство на жестком диске сервера, находящегося в Интернете.</div>
                </div>
                <img src="<?php echo get_template_directory_uri( )?>/assets/img/versions_bg_left.jpg" alt="versions__bg-left" class="versions__bg versions__bg-left">
            </div>

            <div class="versions__box">
                <div class="versions__text versions__text-right">
                    <div class="versions__subtitle">Размещение не сервере</div>
                    <div class="versions__descr">Услуга аренды пространства в центре обработки данных (колокация серверов) предназначена для клиентов</div>
                </div>
                <img src="<?php echo get_template_directory_uri( )?>/assets/img/versions_bg_right.jpg" alt="versions__bg-right" class="versions__bg versions__bg-right">
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <div class="contact__icon"><img src="<?php echo get_template_directory_uri( )?>/assets/icons/contact_icon.png" alt="contact__icon"></div>
        </div>
        <div class="title contact__title">Приступить очень просто! <br> Нужно получить доступ и начать работу!</div>
        <div data-modal="consultation" class="btn contact__btn">связаться с нами</div>
    </section>

    <div class="overlay">
        <div class="modal" id="consultation">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Оставте свои данные</div>
            <form class="feed-form" action="#">
                <input name="name" placeholder="Ваше имя" type="text">
                <input name="phone" placeholder="Ваш телефон">
                <input name="email" placeholder="Ваш E-mail" type="email">
                <button class="btn btn_submit">заказать кОНСУЛЬТАЦИЮ</button>
            </form>
            <img src="<?php echo get_template_directory_uri( )?>/assets/icons/form_bg.png" alt="modal__img" class="modal__img">
        </div>
    </div>
    
    <?php get_footer(); ?>