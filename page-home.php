
<?php
    // Template name: Home
?>
<?php get_header()?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




<section class="s-hero">
    <div class="container">
        <div class="text" data-aos="fade-right">
            <h3>Abra sua conta, é só baixar o app!</h3>
            <h1>
                A conta digital certa pra cuidar bem do seu dinheiro
            </h1>
            <button class="btn-primary">Abra sua conta digital</button>
            <ul>
                <li>
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri()?>/img/icon-conta-digital.svg"/>
                    </div>
                    <span
                        >Cartão sem<br />
                        anuidade</span
                    >
                </li>
                <li>
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri()?>/img/icon-conta-digital.svg" />
                    </div>
                    <span
                        >Conta digital<br />
                        100% grátis</span
                    >
                </li>
                <li>
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri()?>/img/icon-dinheiro.svg" />
                    </div>
                    <span
                        >Seu dinheiro<br />
                        rendendo mais</span
                    >
                </li>
            </ul>
        </div>
        <div class="area-image">
            <h2 data-aos="fade-left">Banco 100% digital</h2>
            <div class="imagem" data-aos="zoom-in">
                <img src="<?php echo get_template_directory_uri()?>/img/card-neon-frnt.png" class="card-front" />
                <img src="<?php echo get_template_directory_uri()?>/img/card-neon-back.png" class="card-back" />
                <img src="<?php echo get_template_directory_uri()?>/img/circle-cards-neon.svg" class="circle" />
            </div>
        </div>
    </div>
</section>

<section class="card-neon">
    <div class="container">
        <div class="left" >
            <div class="ilustra-mockup">
                <img src="<?php echo get_template_directory_uri()?>/img/circle-mockup.svg" class="circle" data-aos="fade-left"/>
                <img src="<?php echo get_template_directory_uri()?>/img/mockup.svg" class="mockup"  data-aos="flip-right"/>
            </div>
            <div class="text" data-aos="fade-up">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri()?>/img/icon-neon.svg" alt="" />
                </div>
                <div class="info-text">
                    <h3>Baixe nosso app</h3>
                    <p>
                        Que tal abrir uma conta digital para ver como a
                        gente faz a sua vida muito mais simples?
                    </p>
                    <ul>
                        <li>
                            <a href="" target="_blank">
                                <img src="<?php echo get_template_directory_uri()?>/img/apple-store.svg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank">
                                <img src="<?php echo get_template_directory_uri()?>/img/google-play.svg" alt="" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="right">
            <div class="main-text" data-aos="fade-left">
                <h2>Resolva sua vida direto pelo app Neon!</h2>
                <ul>
                    <li>
                        <div class="info">
                            <img
                                src="img/icon-cartao-credito.svg"
                                class="icon"
                            />
                            <div class="txt">
                                <h3>Cartão de crédito sem anuidade</h3>
                                <p>
                                    Rendem mais que a poupança e você
                                    resgata quando quiser
                                </p>
                            </div>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri()?>/img/arrow-right.svg" alt="" />
                        </div>
                    </li>
                    <li>
                        <div class="info">
                            <img
                                src="img/icon-taxas.svg"
                                class="icon"
                            />
                            <div class="txt">
                                <h3>Sem taxas</h3>
                                <p>
                                    Rendem mais que a poupança e você
                                    resgata quando quiser
                                </p>
                            </div>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri()?>/img/arrow-right.svg" alt="" />
                        </div>
                    </li>
                    <li>
                        <div class="info">
                            <img
                                src="img/icon-investimentos.svg"
                                class="icon"
                            />
                            <div class="txt">
                                <h3>Sem taxas</h3>
                                <p>
                                    Rendem mais que a poupança e você
                                    resgata quando quiser
                                </p>
                            </div>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri()?>/img/arrow-right.svg" alt="" />
                        </div>
                    </li>
                </ul>
                <a href="/">Conheça outros produtos</a>
            </div>
            <div class="box-card" data-aos="fade-down">
                <div class="text">
                    <h2>Neon Pejota</h2>
                    <h3>
                        Contas digitais PJ gratuitas para decolar seu
                        negócio!
                    </h3>
                    <p>
                        As melhores contas para fazer pagamentos,
                        compras e receber dos seus clientes.
                    </p>
                    <div class="btns">
                        <button class="btn-primary">Sou MEI</button>
                        <button class="btn-primary">SOU ME</button>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri()?>/img/card-front-pj.svg" class="image" />
            </div>
        </div>
    </div>
</section>

<section class="depoimentos">
    <div class="container">
        <div class="top" data-aos="fade-right">
            <h2>
                <span>Prático, fácil, moderno</span>
                Você resolve tudo sem estresse 😊
            </h2>
            <div class="swiper-pagination"></div>
        </div>

        <div class="slide-depoimentos" data-aos="fade-up">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card-depoimento">
                        <div class="user">
                            <strong>@marciogurka</strong>
                            <img src="<?php echo get_template_directory_uri()?>/img/icon-twiiter.svg" alt="" />
                        </div>
                        <p>
                            Valeu @banconenon! Linda embalagem e o
                            cartão tbm é lindo! Muito amor por esse
                            banco #bancoNeon
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-depoimento">
                        <div class="user">
                            <strong>@kleriene18</strong>
                            <img src="<?php echo get_template_directory_uri()?>/img/icon-twiiter.svg" alt="" />
                        </div>
                        <p>
                            Eu uso o Neon pra render o pouquinho que eu
                            tenho. Como disse minha amiga Bruna, um dia
                            eu abro o app de novo e PA: tô rica.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-depoimento">
                        <div class="user">
                            <strong>@mzltweet</strong>
                            <img src="<?php echo get_template_directory_uri()?>/img/icon-twiiter.svg" alt="" />
                        </div>
                        <p>
                            Só por ter um cartão virtual com bloqueio
                            fácil no app, já ganha e muito na segurançã
                            pro cliente.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-depoimento">
                        <div class="user">
                            <strong>@marciogurka</strong>
                            <img src="<?php echo get_template_directory_uri()?>/img/icon-twiiter.svg" alt="" />
                        </div>
                        <p>
                            Valeu @banconenon! Linda embalagem e o
                            cartão tbm é lindo! Muito amor por esse
                            banco #bancoNeon
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-depoimento">
                        <div class="user">
                            <strong>@kleriene18</strong>
                            <img src="<?php echo get_template_directory_uri()?>/img/icon-twiiter.svg" alt="" />
                        </div>
                        <p>
                            Eu uso o Neon pra render o pouquinho que eu
                            tenho. Como disse minha amiga Bruna, um dia
                            eu abro o app de novo e PA: tô rica.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-depoimento">
                        <div class="user">
                            <strong>@mzltweet</strong>
                            <img src="<?php echo get_template_directory_uri()?>/img/icon-twiiter.svg" alt="" />
                        </div>
                        <p>
                            Só por ter um cartão virtual com bloqueio
                            fácil no app, já ganha e muito na segurançã
                            pro cliente.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="conta-digital">
    <div class="container">
        <div class="text" data-aos="fade-right">
            <h2>
                <span>Aproveite</span>Domine o seu dinheiro com uma
                conta 100% digital
            </h2>
            <ul>
                <li>
                    <div class="icon">
                        <img
                            src="img/icon-cartao-internacional.svg"
                            alt=""
                        />
                    </div>
                    <div class="info">
                        <h4>Cartão visa internacional</h4>
                        <p>
                            Tenha facilidades e benefícios para o seu
                            dia a dia.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri()?>/img/icon-taxa-zero.svg" alt="" />
                    </div>
                    <div class="info">
                        <h4>Zero mensalidade e anuidade</h4>
                        <p>
                            Não gaste grana pagando taxas
                            desnecessárias.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri()?>/img/icon-poupanca.svg" alt="" />
                    </div>
                    <div class="info">
                        <h4>
                            Não gaste grana pagando taxas
                            desnecessárias.
                        </h4>
                        <p>
                            Invista o seu dinheiro de maneira mais
                            rentável.
                        </p>
                    </div>
                </li>
            </ul>
            <button class="btn-primary">Abra sua conta digital</button>
        </div>
        <div class="image">
            <img src="<?php echo get_template_directory_uri()?>/img/mockup-01.svg" data-aos="fade-up" class="mockup-01" />
            <img src="<?php echo get_template_directory_uri()?>/img/mockup-02.png" data-aos="fade-down" class="mockup-02" />
            <img src="<?php echo get_template_directory_uri()?>/img/circle-conta-digital.svg" data-aos="zoom-in" class="circle" />
        </div>
    </div>
</section>
<?php endwhile; else: endif; ?>
<?php get_footer()?>
