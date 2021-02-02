<?php
   require_once('header.php');

?>
<section class="section_top">
    <div class="section_top__photo"
        style="background-image:url('img/back.png');background-repeat:repeat; position:relative">
        <div class="opacity"></div>
        <h1>Nós Podemos</h1>
    </div>
    <div class="section_top__text">
        <header>
            <h2 class="we_emprove">
                Resolver <br>os seus Problemas
            </h2>
            <a href="<?= $URL?>servicos.php" class="btn btn_default">Saber mais</a>
        </header>
    </div>
</section>
<section class="seo_message">
    <div class="container">
        <header class="title">
            <h2>MENSAGEM DA DIREÇÃO</h2>
        </header>
        <div class="ceo_foto owl-carousel home-slider">

            <div class="item_seo">
                <img src="img/dario_1.png" alt="CEO Agantangelo ">
            </div>
            <div class="item_seo">
                <img src="img/dario.png" alt="CEO Dario Pedro Sassa">
            </div>
        </div>
        <div class="text">
            <h3>Seja bem-vindo á S&C Consulting</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos fugiat maxime, nostrum nulla magni
                minima atque, quia quam dolorem totam natus expedita aut dolore, dolores molestias saepe vero
                earum et.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos fugiat maxime, nostrum nulla magni
                minima atque, quia quam dolorem totam natus expedita aut dolore, dolores molestias saepe vero
                earum et.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos fugiat maxime, nostrum nulla magni
                minima atque, quia quam dolorem totam natus expedita aut dolore, dolores molestias saepe vero
                earum et.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos fugiat maxime, nostrum nulla magni
                minima atque, quia quam dolorem totam natus expedita aut dolore, dolores molestias saepe vero
                earum et.
            </p>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <header class="title">
            <h2>Nossos Serviços</h2>
        </header>

        <div class="services-content">
            <article class="services-itens">
                <div class="card">
                    <div class="card-circle bg-2">
                        <img src="<?=$URL?>img/bars2.png" alt="">
                    </div>
                    <div class="card-text">
                        <h3 class="card-title">Contabilidade e Finanças</h3>
                        <p class="card-content">O controle financeiro é um exercício diário.</p>
                        <a class="card-links" href="<?=$URL?>contabilidade-e-financas.php">Saiba mais
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z" />
                                </svg>
                            </i>
                        </a>
                    </div>
                </div>
            </article>
            <article class="services-itens">
                <div class="card">
                    <div class="card-circle bg-2">
                        <img src="<?=$URL?>img/bars2.png" alt="">
                    </div>
                    <div class="card-text">
                        <h3 class="card-title">Gestão de Projectos e Investimento</h3>
                        <p class="card-content">Antes de começar algo, aprenda como terminar</p>
                        <a class="card-links" href="<?=$URL?>gestao-projectos-e-investimento.php">Saiba mais
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z" />
                                </svg>
                            </i>
                        </a>
                    </div>
                </div>
            </article>
            <article class="services-itens">
                <div class="card">
                    <div class="card-circle bg-2">
                        <img src="<?=$URL?>img/bars2.png" alt="">
                    </div>
                    <div class="card-text">
                        <h3 class="card-title">Gestão de Marketing</h3>
                        <p class="card-content">Atrai, retem e cuida do seu cliente</p>
                        <a class="card-links" href="<?=$URL?>gestao-de-marketing.php">Saiba mais
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z" />
                                </svg>
                            </i>
                        </a>
                    </div>
                </div>
            </article>
            <article class="services-itens">
                <div class="card">
                    <div class="card-circle bg-2">
                        <img src="<?=$URL?>img/bars2.png" alt="">
                    </div>
                    <div class="card-text">
                        <h3 class="card-title">Gestão de Recursos Humanos</h3>
                        <p class="card-content">Valorizamos o capital humano</p>
                        <a class="card-links" href="<?=$URL?>gestao-de-recursos-humanos.php">Saiba mais
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z" />
                                </svg>
                            </i>
                        </a>
                    </div>
                </div>
            </article>
            <article class="services-itens">
                <div class="card">
                    <div class="card-circle bg-2">
                        <img src="<?=$URL?>img/bars2.png" alt="">
                    </div>
                    <div class="card-text">
                        <h3 class="card-title">Gestão da Qualidade e Produtividade</h3>
                        <p class="card-content">A qualidade não é um acto, é um hábito</p>
                        <a class="card-links" href="<?=$URL?>gestao-da-qualidade-e-produtividade.php">Saiba mais
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z" />
                                </svg>
                            </i>
                        </a>
                    </div>
                </div>
            </article>
            <article class="services-itens">
                <div class="card">
                    <div class="card-circle bg-2">
                        <img src="<?=$URL?>img/bars2.png" alt="">
                    </div>
                    <div class="card-text">
                        <h3 class="card-title">Arquitectura e Urbanismo</h3>
                        <p class="card-content">Todo homem é arquitecto do seu proprio destino</p>
                        <a class="card-links" href="<?=$URL?>arquitetura-e-urbanismo.php">Saiba mais
                            <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z" />
                                </svg>
                            </i>
                        </a>
                    </div>
                </div>
            </article>
        </div>
        <div class="more-services">
            <a href="<?=$URL?>servicos.php">Veja mais serviços</a>
        </div>
    </div>
</section>
<section class="clientes " style="padding:50px 0; position:relative; background-color:#f7f7f7 ">
    <h1>Parceiros & Clientes </h1>
        <div class="clientes-body">
            <!-- Aqui a ideia é ele ter apenas 6 destaques no maximo -->
            <?php for($i = 0; $i <  10; $i++):?>
            <a class="client-item" data-back="<?php echo $i; ?>" href="#"
                style="background-image:url('img/bk<?php echo $i; ?>.png')">
                <h1 style="display:none">Cliiente aaaa</h1>
            </a>
            <?php  endfor;?>
        </div>
</section>
<section class="sec_press">
    <div class="container" style="flex-direction:column; text-align: center;">
        <h2>O que você está esperando?</h2>
        <h3>Vamos aqui e agora criar algo espetacular e extraordinário juntos!</h3>
        <div style="padding:30px 0;">
            <a class="btn btn_altern" href="<?=$URL?>contacto.php" style="font-size:1.25rem;" href="register-part.php">Seja Parceiro</a>
        </div>
    </div>
</section>
<?php
   require_once('footer.php');
?>