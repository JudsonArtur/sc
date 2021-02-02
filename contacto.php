<?php
  require_once('header.php');
?>
<section>
    <div style="padding:60px 0"></div>
    <div style="padding:70px 0; background:#030372" class="blue_sky">
        <div class="container">
            <header class="press_header">
                <h2 class="title">Contactos</h2>
            </header>
        </div>
    </div>
</section>
<section class="contact">
    <div class="container">
        <div class="contacts">
           <div style="padding: 20px;">
            <p>comercial@sc-consulting.ao</p>
            <p>geral@sc-consulting.ao</p>
             <p>Rua Ferraz Bomboco, nº 984 R/C Alvalade, Maianga - Luanda
             </p>
            <p>Telef: +244 923 654 234</p>
           </div>
        </div>
        <div class="forms">
            <div class="fale active" id="fale">
                <form>
                    <header>
                        <h2>Fale Connosco</h2>
                        <p>Entre contacto, para parcerias, serviços, etc</p>
                    </header>
                    <div>
                        <div class="item_input">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M256 256c52.805 0 96-43.201 96-96s-43.195-96-96-96-96 43.201-96 96 43.195 96 96 96zm0 48c-63.598 0-192 32.402-192 96v48h384v-48c0-63.598-128.402-96-192-96z" />
                                </svg>
                            </span>
                            <input type="text" name="name" placeholder="Nome Completo">
                        </div>
                        <div class="item_input">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M448 234.3c0 74.1-34.7 120.8-89.6 120.8-28.1 0-49.5-15-53.2-37.3h-4c-9.9 23.2-30.3 35.9-57.7 35.9-48.8 0-81.4-39.1-81.4-97.3 0-55.9 32.8-94.8 80.7-94.8 24.6 0 45.5 12.4 54.7 32.7h4v-27.8h39.9v129.3c0 16.1 8.9 25.8 24.9 25.8 27.7 0 45.3-33.6 45.3-85.8 0-83.3-62.4-139-154.6-139-91.2 0-156.2 66.5-156.2 160.6 0 96.2 64.3 157.6 164.4 157.6 19.6 0 39.3-1.7 54.4-4.6 9.8-1.8 18.8 5.6 18.8 15.5 0 7.3-5 13.7-12.1 15.4-18.2 4.3-40.1 6.8-62.7 6.8C141.9 448 64 372.8 64 256.1 64 142.2 143.5 64 259.4 64 370.8 64 448 133.5 448 234.3zm-242.8 23c0 37 17.4 59.4 45.7 59.4 29.8 0 48.6-23 48.6-59.4s-18.8-58.9-48.1-58.9c-29.1 0-46.2 21.8-46.2 58.9z" />
                                </svg>
                            </span><input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="item_input">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M426.666 330.667a250.385 250.385 0 0 1-75.729-11.729c-7.469-2.136-16-1.073-21.332 5.333l-46.939 46.928c-60.802-30.928-109.864-80-140.802-140.803l46.939-46.927c5.332-5.333 7.462-13.864 5.332-21.333-8.537-24.531-12.802-50.136-12.802-76.803C181.333 73.604 171.734 64 160 64H85.333C73.599 64 64 73.604 64 85.333 64 285.864 226.136 448 426.666 448c11.73 0 21.334-9.604 21.334-21.333V352c0-11.729-9.604-21.333-21.334-21.333z" />
                                </svg>
                            </span><input type="tel" name="telefone" placeholder="Telefone">
                        </div>
                        <div class="item_input">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z" />
                                </svg>
                            </span>
                            <textarea rows="5" placeholder="Mensagem" class="texto"></textarea>
                        </div>
                        <button class="btn btn_default send_email">Enviar <i>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M435.9 64.9l-367.1 160c-6.5 3.1-6.3 12.4.3 15.3l99.3 56.1c5.9 3.3 13.2 2.6 18.3-1.8l195.8-168.8c1.3-1.1 4.4-3.2 5.6-2 1.3 1.3-.7 4.3-1.8 5.6L216.9 320.1c-4.7 5.3-5.4 13.1-1.6 19.1l64.9 104.1c3.2 6.3 12.3 6.2 15.2-.2L447.2 76c3.3-7.2-4.2-14.5-11.3-11.1z" />
                                </svg>
                            </i></button>
                        <p class="certo">
                        </p>
                        <p class="error">
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<div class="notice_others" style="padding-top:20px; background:#f4f4f3;">
    <div class="container">
        <div class="last_news" style="width:100%">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.534018684963!2d13.229920114891184!3d-8.829770292810023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f3c66c920cd9%3A0x7e1bae34f1baa103!2sAmbassador%20Voyage%20Angola!5e0!3m2!1spt-PT!2sao!4v1612251934249!5m2!1spt-PT!2sao" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
<?php
  require_once('footer.php');
?>