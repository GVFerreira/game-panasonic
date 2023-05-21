<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/nova-lp.css">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <title>Cadastro - Desafio V-Razor</title>
    </head>
    <body>
        <header>
            <a href="https://loja.panasonic.com.br/">
                <img src="https://image.relacionamento.panasonic.com.br/lib/fe3f15707564047e721772/m/2/5bf3213a-d4e2-4780-880d-615534f08de7.png" alt="Panasonic">
            </a>
            <nav>
                <li>
                    <a href="https://loja.panasonic.com.br/cozinha" target="_blank">Cozinha</a>
                </li>
                <li>
                    <a href="https://loja.panasonic.com.br/lavanderia" target="_blank">Lavanderia</a>
                </li>
                <li>
                    <a href="https://loja.panasonic.com.br/cuidados-pessoais" target="_blank">Cuidados Pessoais</a>
                </li>
            </nav>
        </header>
        <main>
            <section class="container_l">

            </section>
            <section class="container_r">
                <img class="cfyou" src="https://image.relacionamento.panasonic.com.br/lib/fe3f15707564047e721772/m/2/652be215-57dd-4995-add6-f53831dd3c4f.png">

                <div class="titles">
                    <h2 class="title1">CADASTRE-SE NO DESAFIO</h2>
                    <h2 class="title2"><b>PARA PROMOÇÕES E NOVIDADES</b></h2>
                </div>

                <form class="form_register" action="cadastro-lp.php" method="post">
                    <input type="text" class="input_style" id="nome" name="nome" placeholder="Nome" title="Preencha com seu nome" required>

                    <input type="text" class="input_style" id="sobrenome" name="sobrenome" placeholder="Sobrenome" title="Preencha com seu sobrenome" required>

                    <input type="text" class="input_style" id="celular" name="celular" placeholder="Celular" inputmode="numeric" title="Preencha com um celular válido" required>

                    <input type="email" class="input_style" id="email" name="email" placeholder="Email" title="Preencha com um email válido" required>

                    <div class="container_checkbox">
                        <input class="caixa-check" id="aceitarComunicacao" type="checkbox" nome="aceitarComunicacao" required>
                        <label for="aceitarComunicacao">
                            Li e aceito as <a href="https://www.panasonic.com/br/politica-de-privacidade.html" target="_blank" class="aceite_termos_anchor">políticas de privacidade</a>.
                        </label>
                    </div>

                    <div class="container_checkbox">
                        <input class="caixa-check" id="aceitarUsoImagem" type="checkbox" nome="aceitarUsoImagem" required="required">
                        <label for="aceitarUsoImagem">
                            Autorizo o uso da minha imagem para vídeos institucionais.
                        </label>
                    </div>

                    <div class="enviar_form_aceite">
                        <button class="botao_cadastro" type="submit"> INSCREVA-SE </button>
                    </div>
                </form>
            </section>
        </main>
        <footer>
            <section class="social-media-mobile">
                <div class="img_social">
                    <a href="https://www.facebook.com/panasonic.br" target="_blank">
                        <img src="https://image.relacionamento.panasonic.com.br/lib/fe3f15707564047e721772/m/2/fe16896f-4ca3-4757-9f51-114918c44a67.png" alt="">
                    </a>
                </div>
                <div class="img_social">
                    <a href="https://www.youtube.com/channel/UCobdsMWTopwXLr_nBBT_wTQ" target="_blank">
                        <img src="https://image.relacionamento.panasonic.com.br/lib/fe3f15707564047e721772/m/2/9c0623e1-7609-469d-b62d-c96f850db3de.png" alt="">
                    </a>
                </div>
                <div class="img_social">
                    <a href="https://www.instagram.com/panasonicbrasil/" target="_blank">
                        <img src="https://image.relacionamento.panasonic.com.br/lib/fe3f15707564047e721772/m/2/15da5f9c-d7a8-441b-a594-877d9f0d5bcb.png" alt="">
                    </a>
                </div>
                <div class="img_social">
                    <a href="https://twitter.com/panasonic_br" target="_blank">
                        <img src="https://image.relacionamento.panasonic.com.br/lib/fe3f15707564047e721772/m/2/c9d7db26-5787-485a-81f7-6f2035e0f547.png" alt="">
                    </a>
                </div>
            </section>

            <section class="footer-items-mobile">
                <a href="https://www.panasonic.com/br/politica-de-privacidade.html" target="_blank">Política de privacidade</a>
                <a href="https://panasonic-br.zendesk.com/hc/pt-br/categories/360003428072-Compras-na-Loja-online-Panasonic-Panasonic-Store" target="_blank">Contato</a>
            </section>

            <section class="legal-text-mobile">
                <p>
                    © Copyright 2022 Panasonic. Panasonic do Brasil LTDA. – CNPJ/MF 56.991.441/0001-57 - Sede: Avenida do Café, 277, Torre A São Paulo - SP - CEP 04311-900 - Fale conosco: www.loja.panasonic.com.br. Todos os preços e condições deste site são válidos apenas
                    para compras no site. Destacamos que os preços previstos no site prevalecem aos demais anunciados em outros meios de comunicação e sites de buscas. Em caso de divergência, o preço válido é o do carrinho de compras. Imagens meramente
                    ilustrativas.
                </p>
            </section>
        </footer>
    </body>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $(document).ready(() => {
                $('#celular').mask('(99) 99999-9999')
            })
        })
    </script>
    <?php
        if (isset($_GET['alerta']) && $_GET['alerta'] == 0) {
            echo '<script defer>alert("Cadastro realizado com sucesso. Por favor, dirija-se à fila.");</script>';
        };

        if (isset($_GET['alerta']) && $_GET['alerta'] == 1) {
            echo '<script defer>alert("Já existe um cadastro com esse número de celular. Por favor, dirija-se à fila.");</script>';
        };
    ?>
</html>