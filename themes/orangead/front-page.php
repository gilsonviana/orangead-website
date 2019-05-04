<?php get_header(); ?>
    <main class="page home">
        <header class="home__header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-xl-1 col-xl-4">
                        <a href="#" class="home__header__logo">
                            <img class="d-lg-none"src="<?= get_template_directory_uri() ?>/img/logo-header-sm.png" alt="Orange ad" width="125">
                            <img class="d-none d-lg-block" src="<?= get_template_directory_uri() ?>/img/logo-header-lg.png" alt="Orange ad" width="218">
                        </a>
                    </div>
                    <div class="col-6 col-xl-5" style="text-align: right;">
                        <nav class="home__header__nav">
                            <button class="home__header__nav__toggle d-lg-none">
                                <img src="<?= get_template_directory_uri() ?>/img/menu-sm.png" alt="toggle menu">
                            </button>
                            <ul class="home__header__nav__menu d-lg-flex">
                                <li class="home__header__nav__menu__item"><a href="#" class="home__header__nav__menu__item__link">Home</a></li>
                                <li class="home__header__nav__menu__item"><a href="#" class="home__header__nav__menu__item__link">Sobre nos</a></li>
                                <li class="home__header__nav__menu__item"><a href="portfolio.html" class="home__header__nav__menu__item__link">Portfolio</a></li>
                                <li class="home__header__nav__menu__item"><a href="#" class="home__header__nav__menu__item__link">Cases</a></li>
                                <li class="home__header__nav__menu__item"><a href="#" class="home__header__nav__menu__item__link">Contato</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9 offset-xl-1 col-xl-7">
                        <div class="home__header__lead">
                            <h4 class="home__header__lead__title">uma nova maneira</h4>
                            <h5 class="home__header__lead__subtitle">de mostrar seu applicativo</h5>
                            <p class="home__header__lead__text d-lg-none">
                                O Orange AD fornecerá
                                um modelo de qualidade,
                                independentemente da
                                sua ideia. <span>Produzimos
                                aplicativos personalizados.</span>
                            </p>
                            <p class="home__header__lead__text d-none d-lg-block">
                                Seu produto incrível merece uma excelente maneira de mostrá-lo. 
                                O Orange AD fornecerá
                                um modelo de qualidade,
                                independentemente da
                                sua ideia. <span>Produzimos
                                aplicativos personalizados.</span>
                            </p>
                            <a href="#" class="home__header__lead__button d-none d-lg-inline-block">saiba mais</a>
                            <a href="#" class="home__header__lead__button d-none d-lg-inline-block">entrar em contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="home__about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 offset-xl-1 col-xl-4">
                        <div class="home__about__content">
                            <h5 class="home__about__content__subtitle">orange ad solutions</h5>
                            <h1 class="home__about__content__title">Soluções personalizadas para o seu negócio</h1>
                            <p class="home__about__content__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                eleifend condimentum ante, eget imperdiet erat mollis nec. Nullam
                                accumsan porttitor justo vel commodo. Praesent sem urna,
                                bibendum vel mollis quis, sodales a nisi. Duis ut sem lacus, quis
                                auctor nisl. Sed tincidunt libero laoreet nisi vehicula elementum.
                            </p>
                            <div class="home__about__slider__control d-none d-lg-block">
                                <img src="<?= get_template_directory_uri() ?>/img/arrow-left-sm.png" alt="control left" id="about-slider-control-left" class="home__about__slider__control__arrow" width="25">
                                <img src="<?= get_template_directory_uri() ?>/img/arrow-right-sm.png" alt="control right" id="about-slider-control-right" class="home__about__slider__control__arrow" width="25">
                            </div>
                        </div>                        
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="home__about__slider">
                            <img src="<?= get_template_directory_uri() ?>/img/About-sm.png" alt="about us slide one" class="home__about__slider__img " width="292">
                            <img src="<?= get_template_directory_uri() ?>/img/about-1.png" alt="about us slide one" class="home__about__slider__img d-lg-inline-block" width="292">
                            <img src="<?= get_template_directory_uri() ?>/img/about-2.png" alt="about us slide two" class="home__about__slider__img  d-lg-inline-block" width="292">
                            <img src="<?= get_template_directory_uri() ?>/img/about-3.png" alt="about us slide three" class="home__about__slider__img  d-lg-inline-block" width="292">
                            <img src="<?= get_template_directory_uri() ?>/img/about-3.png" alt="about us slide three" class="home__about__slider__img  d-lg-inline-block" width="292">
                        </div>
                        <div class="home__about__slider__control d-lg-none">
                            <img src="<?= get_template_directory_uri() ?>/img/arrow-left-sm.png" alt="control left" id="about-slider-control-left" class="home__about__slider__control__arrow" width="25">
                            <img src="<?= get_template_directory_uri() ?>/img/arrow-right-sm.png" alt="control right" id="about-slider-control-right" class="home__about__slider__control__arrow" width="25">
                        </div>
                    </div>
                </div>                
            </div>
        </section>
        <section class="home__download">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 offset-xl-1 col-xl-5 d-none d-lg-block">
                        <div class="home__download__bkg"></div>
                    </div>
                    <div class="col-12 col-xl-5">
                        <div class="home__download__content">
                            <h4 class="home__download__content__title">
                                Aplicativos compatíveis para download
                                no <b>App Store</b> e <b>Google Play</b>
                            </h4>
                            <p class="home__download__content__text d-none d-lg-block">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eleifend condimentum ante, eget imperdiet
                                erat mollis nec. Nullam accumsan porttitor justo vel commodo. Praesent sem urna, bibendum vel mollis.
                            </p>
                            <a href="#" class="home__download__content__link">
                                <img src="<?= get_template_directory_uri() ?>/img/App-store-sm.png" alt="download at app store" class="home__download__content__link__img" width="158">
                            </a>
                            <a href="#" class="home__download__content__link">
                                <img src="<?= get_template_directory_uri() ?>/img/Google-Play-sm.png" alt="download at google play" class="home__download__content__link__img" width="157">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5 d-lg-none">
                        <div class="home__download__bkg"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__portfolio">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="home__portfolio__content">
                            <h1 class="home__portfolio__content__title">Portfolio</h1>
                            <p class="home__portfolio__content__text">
                                Conheça todos os trabalhos realizados
                                pela Orange AD Solutions  
                            </p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="home__portfolio__slider">
                            <div class="img_box">
                                <img src="<?= get_template_directory_uri() ?>/img/Atacadao-sm.png" alt="atacado" class="home__portfolio__slider__img" width="310">                            
                            </div>
                            <div class="img_box"><img src="<?= get_template_directory_uri() ?>/img/wet-lg.png" alt="wet and wild" class="home__portfolio__slider__img  d-lg-inline-block" width="312"></div>
                            <div class="img_box"><img src="<?= get_template_directory_uri() ?>/img/chevrolet-lg.png" alt="chevrolet" class="home__portfolio__slider__img  d-lg-inline-block" width="283"></div>                            
                        </div>
                            <div class="home__portfolio__slider__control d-lg-none">
                                <img src="<?= get_template_directory_uri() ?>/img/arrow-left-sm.png" alt="control left" id="portfolio-slider-control-left" class="home__portfolio__slider__control__arrow" width="25">
                                <img src="<?= get_template_directory_uri() ?>/img/arrow-right-sm.png" alt="control right" id="portfolio-slider-control-right" class="home__portfolio__slider__control__arrow" width="25">
                            </div>
                    </div>
                </div>            
            </div>
        </section>
        <section class="home__features">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 offset-xl-2 col-xl-8">
                        <h2 class="home__features__title">
                            we <b>nailed</b> the development
                            process and we deliver
                            <b>better solutions</b>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-xl-2 col-xl-8">
                        <div class="home__features__card">
                            <img src="<?= get_template_directory_uri() ?>/img/mobile-development-sm.png" class="home__features__card__thumbnail">
                            <h2 class="home__features__card__title">Mobile Development</h2>
                            <p class="home__features__card__text">
                                We’re are specialized in mobile development.
                                One single solution for your business.
                                Android and iOS we got it!
                            </p>
                        </div>
                        <div class="home__features__card">
                            <img src="<?= get_template_directory_uri() ?>/img/mobile-development-sm.png" class="home__features__card__thumbnail">
                            <h2 class="home__features__card__title">Smart development process</h2>
                            <p class="home__features__card__text">
                                Why it is so important? Our Development
                                Process allows us to deliver a better solution
                                or even better. A solution that works for you.
                            </p>
                        </div>
                        <div class="home__features__card">
                            <img src="<?= get_template_directory_uri() ?>/img/mobile-development-sm.png" class="home__features__card__thumbnail">
                            <h2 class="home__features__card__title">Automatic tests</h2>
                            <p class="home__features__card__text">
                                Automatic tests are a very important piece of
                                our development process. It reduces from 45
                                to 90% of production issues saving a LOT of
                                money. It brings the confidence to keep moving
                                forward at full blast
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="home__remote">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 offset-xl-1 col-xl-5 d-none d-lg-block">
                        <div class="home__remote__bkg"></div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="home__remote__content">
                            <h1 class="home__remote__content__title">we are remote</h1>
                            <h3 class="home__remote__content__text">
                                Why have the better team of the City
                                if we can have the better team of the world?
                            </h3>                            
                        </div>
                    </div>
                    <div class="col-12 d-lg-none">
                        <div class="home__remote__bkg"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__better">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 offset-xl-1 col-xl-4">
                        <div class="home__better__content">
                            <h1 class="home__better__content__title">Why we do better?</h1>
                            <p class="home__better__content__text">
                                With more than 15 years of experience, we believe that a good
                                development process creates better solutions.
                            </p>
                            <p class="home__better__content__text">
                                The world is ridiculous dynamic today, and something that is
                                awesome today, can’t be over tomorrow, to succeed in
                                software development nowadays, the development process
                                should be as dynamic as this.
                            </p>
                            <p class="home__better__content__text">       
                                We bring the customer into the development process,
                                sharing and exchanging information ALL THE TIME.
                                No surprises no out of date information.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 offset-xl-1 col-xl-5">
                        <div class="home__better__bkg">                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 offset-xl-1 col-xl-5 d-none d-lg-block">
                        <div class="home__contact__bkg"></div>
                    </div>
                    <div class="col-12 col-xl-5">
                        <div class="home__contact__content">
                            <h1 class="home__contact__content__title">Contact</h1>
                            <p class="home__contact__content__text">
                                Entre em contato conosco para adquirir nossos serviços
                                ou para tirar qualquer dúvida existente
                            </p>
                            <form action="" class="home__contact__content__form">
                                <div class="contact__form__group">
                                    <input type="text" name="name" class="contact__form__group__field" placeholder="Nome*" required>
                                    <label for="name" class="contact__form__group__label">Nome*</label>
                                </div>
                                <div class="contact__form__group">
                                    <input type="email" name="email" class="contact__form__group__field" placeholder="E-mail*" required>
                                    <label for="email" class="contact__form__group__label">E-mail*</label>
                                </div>
                                <div class="contact__form__group">
                                    <input type="text" name="phone" class="contact__form__group__field" placeholder="Telefone*" required>
                                    <label for="phone" class="contact__form__group__label">Telefone*</label>
                                </div>
                                <div class="contact__form__group">
                                    <input type="text" name="city" class="contact__form__group__field" placeholder="Cidade/UF*" required>
                                    <label for="city" class="contact__form__group__label">Cidade/UF*</label>
                                </div>
                                <div class="contact__form__group">
                                    <textarea name="message" cols="30" rows="10" class="contact__form__group__field" placeholder="Mensagem*" required></textarea>
                                    <label for="message" class="contact__form__group__label">Mensagem*</label>
                                </div>
                                <button type="submit">
                                    <span>Enviar</span>
                                    <img src="<?= get_template_directory_uri() ?>/img/send.png" alt="contact send">
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 d-lg-none">
                        <div class="home__contact__bkg"></div>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php get_footer(); ?>
