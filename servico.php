<?php require_once('header.php')?>
<section class="who-are services_page" style="background-image: url('');">
    <div class="container" style="justify-content: center;">
        <header>
            <h2>Gestão de Recursos Humanos</h2>
        </header>
        <div class="text_service">
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo nesciunt reiciendis soluta sunt dolorem
                saepe architecto quam, odit est blanditiis nostrum accusantium ad! Corporis blanditiis ipsum incidunt
                iusto, ratione unde!
            </p>
        </div>

    </div>
</section>
<section class="partner-payment">
    <div class="container">
        <div class="pay-text">
            <div class="img_v">
                <img src="img/sd.png" alt="">
            </div>
            <a class="btn btn_altern">Contactar o servico</a>
        </div>
        <div class="pay-frame">
            <div class="frame">
                <p class="frame-title">Partes Gestão de Recursos Humanos</p>
                <ul>
                    <?php for($i = 0; $i < 3; $i++){?>
                    <li><span class="percent">CONTABILIDADE E GESTÃO FISCAL</span><span class="win"><a>Mais
                                Informações</a></span>

                    </li>
                    <li><span class="percent"> COST FINDER – REDUÇÃO DE CUSTOS </span><span class="win"><a>Mais
                                Informações</a></span>
                    </li>
                    <li><span class="percent">OUTSOURCING</span><span class="win"><a>Mais Informações</a></span>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php require_once('footer.php')?>