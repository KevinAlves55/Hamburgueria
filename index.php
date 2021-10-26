<?php

    require_once('admin/constantes/constantes.php');
    require_once('admin/dataBase/inserirContatos.php');

    $nome = (string) null;
    $email = (string) null;
    $celular = (string) null;


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nome = $_POST['txtNome'];
        $email = $_POST['txtEmail'];
        $celular = $_POST['txtCelular'];

        $contatos = array(
            
            "nome" => $nome,
            "email" => $email,
            "celular" => $celular
        
        );

        if(inserirContatos($contatos)) {

            echo("<script> alert('".APERTOU_BOTAO."'); window.location.href = 'index.php'; </script>");

        } else {

            echo("<script> alert('Algo deu errado, volte mais tarde e tente novamente); </script>");

        }
    }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site para uma hamburgueria do tipo E-commerce.">
    <meta name="author" content="Kevin Alves">
    
    <!-- Link para definição do favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Links para fontes de letra -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    
    <!-- Arquivos Js -->
    <script src="assets/js/jquery.js" defer></script>
    <script src="assets/js/popper.js" defer></script>
    <script src="assets/js/slide.js" defer></script>
    <script src="assets/js/srollAnimation.js" defer></script>
    <script src="assets/js/menuEfeito.js" defer></script>
    <script src="assets/js/carrousel.js" defer></script>
    <script src="assets/js/mascara.js" defer></script>

    <!-- Link para CSS/SASS -->
    <link rel="stylesheet" href="assets/sass/estilo.css">
    
    <!-- Título da página -->
    <title>BurguerGods</title>
</head>

<body>
    
    <header>
        <div id="conteudo-midia">
            <div id="contatos">
                <div id="telefone">
                    <ion-icon name="call-outline" class="midia"></ion-icon>
                    <span>+55 11 3333-3333</span>
                </div>
                <div id="hora">
                    <ion-icon name="time-outline" class="midia"></ion-icon>
                    <span>Seg à Sex Das 09h às 18h</span>
                </div>
            </div>
            <div id="redes-sociais">
                <img src="assets/img/face.png" alt="Icon facebook">
                <img src="assets/img/insta.png" alt="Icon facebook">
                <img src="assets/img/zap.png" alt="Icon facebook">
            </div>
        </div>

        <div class="conteudo itens-header">
            <div id="logo">
                <img src="assets/img/logo.jpg" alt="Logo">
                <a href="index.php"><h1>Burguer<span id="destaque">Gods</span></h1></a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#main">produtos</a></li>
                    <li><a href="#barra-empresa">a empresa</a></li>
                    <li><a href="#barra-promocoes">promoções</a></li>
                    <li><a href="#barra-destaques">destaques</a></li>
                    <li><a href="#footer">contatos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Slide bootstrap -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" data-touch="true">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                <li data-target="#carouselExampleFade" data-slide-to="3"></li>
                <li data-target="#carouselExampleFade" data-slide-to="4"></li>
            </ol>
            <div class="tamanho carousel-inner">
                <div class="carousel-item active" data-interval="2900">
                    <img src="assets/img/banner1.jpg" class="densidade-img d-block w-100" alt="Banner">
                </div>
                <div class="carousel-item" data-interval="2900">
                    <img src="assets/img/banner2.jpg" class="densidade-img d-block w-100" alt="Banner">
                </div>
                <div class="carousel-item" data-interval="2900">
                    <img src="assets/img/banner4.jpg" class="densidade-img d-block w-100" alt="Banner">
                </div>
                <div class="carousel-item" data-interval="2900">
                    <img src="assets/img/banner5.jpg" class="densidade-img d-block w-100" alt="Banner">
                </div>
                <div class="carousel-item" data-interval="2900">
                    <img src="assets/img/banner6.jpg" class="densidade-img d-block w-100" alt="Banner">
                </div>
            </div>
            
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    <!-- Slide bootstrap -->

    <main id="main">
        <div class="conteudo itens-main">
            <section id="filtragem">
                
                <div id="cardapio">
                    <!-- Cardápio animado -->
                    <input id="navbar" type="checkbox">
                    <label for="navbar">
                        <div class="menu">
                            <span class="hamburger"></span>
                        </div>
                    </label>

                    <span>olympus menu</span>

                    <ul>
                        <li><a href="">Clássicos</a></li>
                        <li><a href="">Frango</a></li>
                        <li><a href="">Naturais</a></li>
                        <li><a href="">Especiais</a></li>
                        <li><a href="">Vegetarianos</a></li>
                        <li><a href="">Vegano</a></li>
                        <img src="assets/img/tridente.png" alt="" id="tridente">
                        <img src="assets/img/raio.png" alt="" id="raio">
                    </ul>
                </div>
    
                <div id="buscar">
                    <div id="pesquisa">
                        <input type="search" name="search" id="serarch" placeholder="Deixe sua fome escolher por você" maxlength="31">
                        <input type="submit" value="buscar" name="btnBuscar" id="submit">
                    </div>
                </div>
            </section>

            <section id="produtos">
                <div class="cards">
                    <div class="card-foto">
                        <img src="assets/img/produto1.jpg" alt="Hamburguer dos deuses">
                    </div>
                    <div class="card-nome">
                        <h3>Despertar da Athena</h3>
                    </div>
                    <div class="card-descricao">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita saepe suscipitet Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="informacoes">
                        <button>saiba mais</button>
                        <span>R$ 35,99</span>
                    </div>
                </div>
                <div class="cards">
                    <div class="card-foto">
                        <img src="assets/img/produto2.jpg" alt="Hamburguer dos deuses">
                    </div>
                    <div class="card-nome">
                        <h3>Explosão de Hares</h3>
                    </div>
                    <div class="card-descricao">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita saepe suscipitet Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="informacoes">
                        <button>saiba mais</button>
                        <span>R$ 35,99</span>
                    </div>
                </div>
                <div class="cards">
                    <div class="card-foto">
                        <img src="assets/img/produto3.jpg" alt="Hamburguer dos deuses">
                    </div>
                    <div class="card-nome">
                        <h3>Onda de Poseidon</h3>
                    </div>
                    <div class="card-descricao">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita saepe suscipitet Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="informacoes">
                        <button>saiba mais</button>
                        <span>R$ 25,00</span>
                    </div>
                </div>
                <div class="cards" data-anime="left">
                    <div class="card-foto">
                        <img src="assets/img/produto4.jpg" alt="Hamburguer dos deuses">
                    </div>
                    <div class="card-nome">
                        <h3>Divindade de Hefestor</h3>
                    </div>
                    <div class="card-descricao">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita saepe suscipitet Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="informacoes">
                        <button>saiba mais</button>
                        <span>R$ 25,00</span>
                    </div>
                </div>
                <div class="cards" data-anime="left">
                    <div class="card-foto">
                        <img src="assets/img/produto5.jpg" alt="Hamburguer dos deuses">
                    </div>
                    <div class="card-nome">
                        <h3>Queda de Aquiles</h3>
                    </div>
                    <div class="card-descricao">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita saepe suscipitet Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="informacoes">
                        <button>saiba mais</button>
                        <span>R$ 18,00</span>
                    </div>
                </div>
                <div class="cards" data-anime="left">
                    <div class="card-foto">
                        <img src="assets/img/produto6.jpg" alt="Hamburguer dos deuses">
                    </div>
                    <div class="card-nome">
                        <h3>Magnifíco Zeus</h3>
                    </div>
                    <div class="card-descricao">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita saepe suscipitet Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="informacoes">
                        <button>saiba mais</button>
                        <span>R$ 35,99</span>
                    </div>
                </div>
                <div class="cards" data-anime="left">
                    <div class="card-foto">
                        <img src="assets/img/produto7.jpg" alt="Hamburguer dos deuses">
                    </div>
                    <div class="card-nome">
                        <h3>Fúria de Hades</h3>
                    </div>
                    <div class="card-descricao">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita saepe suscipitet Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="informacoes">
                        <button>saiba mais</button>
                        <span>R$ 35,99</span>
                    </div>
                </div>
                <div class="cards" data-anime="left">
                    <div class="card-foto">
                        <img src="assets/img/produto8.jpg" alt="Hamburguer dos deuses">
                    </div>
                    <div class="card-nome">
                        <h3>Despertar de Perséfone</h3>
                    </div>
                    <div class="card-descricao">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita saepe suscipitet Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="informacoes">
                        <button>saiba mais</button>
                        <span>R$ 25,00</span>
                    </div>
                </div>
                <div class="cards" data-anime="left">
                    <div class="card-foto">
                        <img src="assets/img/produto9.jpg" alt="Hamburguer dos deuses">
                    </div>
                    <div class="card-nome">
                        <h3>Fúria de Kronos</h3>
                    </div>
                    <div class="card-descricao">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita saepe suscipitet Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="informacoes">
                        <button>saiba mais</button>
                        <span>R$ 18,00</span>
                    </div>
                </div>
            </section>
        </div>
    </main>
    
    <div id="barra-empresa" class="barra">
        <div class="itens-barra">
            <h2>Nossa Empresa</h2>

            <span>Apresento a vocês o Monte Olímpio</span>
            <img src="assets/img/raio-faixa.png" alt="Icon">
        </div>
    </div>
    
    <section id="empresa">
        <div class="conteudo itens-empresa">
            <video src="assets/video/empresa.mp4" data-anime="left-video" height="330" width="600" poster="assets/img/banner-video.JPG" controls loop></video>
            <div id="informacoes-empresa" data-anime="right">
                <h2>Prezamos a qualidade de nossos produtos</h2>

                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet neque tenetur dolorum? Similique quae quas ipsa, nam illo facere facilis repellendus aperiam ut est eos sed dignissimos qui autem praesentium. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo at commodi veniam totam laboriosam dolore exercitationem nulla perspiciatis obcaecati culpa neque dolorum eum doloremque mollitia, delectus perferendis animi. Voluptas, praesentium? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed ullam quod voluptate rerum? Nemo alias quo necessitatibus eaque sint non quibusdam omnis. voluptate rerum? Nemo alias quo necessitatibus eaque sint non quibusdam omnis. voluptate rerum? Nemo alias quo necessitatibus eaque sint non.
            </div>
        </div>
    </section>

    <div id="barra-promocoes" class="barra">
        <div class="itens-barra">
            <h2>nossas promoções</h2>

            <span>Os deuses estão generosos hoje, olhe nossas promoções</span>
            <img src="assets/img/hermes.png" alt="Icon">
        </div>
    </div>

    <section id="promocoes">
        <div class="conteudo itens-promocoes">       
            <div class="cards" data-anime="left">
                <div class="card-foto">
                    <img src="assets/img/produto10.jpg" alt="Hamburguer dos deuses">
                </div>
                <div class="card-nome">
                    <h3>Sintônia de Ártemis</h3>
                </div>
                <div class="card-descricao">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita saepe suscipitet Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <div class="informacoes">
                    <button>saiba mais</button>
                    <i>R$ 35,99</i>
                    <span>R$ 25,00</span>
                </div>
            </div>
            <div class="cards" data-anime="left">
                <div class="card-foto">
                    <img src="assets/img/produto11.jpg" alt="Hamburguer dos deuses">
                </div>
                <div class="card-nome">
                    <h3>Rápido como Hermes</h3>
                </div>
                <div class="card-descricao">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita saepe suscipitet Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <div class="informacoes">
                    <button>saiba mais</button>
                    <i>R$ 35,99</i>
                    <span>R$ 25,00</span>
                </div>
            </div>
            <div class="cards" data-anime="left">
                <div class="card-foto">
                    <img src="assets/img/produto12.jpg" alt="Hamburguer dos deuses">
                </div>
                <div class="card-nome">
                    <h3>Amanhecer de Apolo</h3>
                </div>
                <div class="card-descricao">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita saepe suscipitet Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <div class="informacoes">
                    <button>saiba mais</button>
                    <i>R$ 25,00</i>
                    <span>R$ 18,00</span>
                </div>
            </div>
        </div>
    </section>

    <div id="barra-destaques" class="barra">
        <div class="itens-barra">
            <h2>Destaques de hoje</h2>

            <span>Veja os burgues que os mortais mais admiram</span>
            <img src="assets/img/athena.png" alt="Icon">
        </div>
    </div>

    <section id="destaques">
        <div class="itens-destaque">
            <h2>Confira nossos combos</h2>

            <div class="owl">
                <div class="owl-track">
                    <div class="owl-img">
                        <img src="assets/img/destaque1.jpg" alt="Destaques">
                    </div>
                    <div class="owl-img">
                        <img src="assets/img/destaque2.jpg" alt="Destaques">
                    </div>
                    <div class="owl-img">
                        <img src="assets/img/destaque3.jpg" alt="Destaques">
                    </div>
                    <div class="owl-img">
                        <img src="assets/img/destaque4.jpg" alt="Destaques">
                    </div>
                    <div class="owl-img">
                        <img src="assets/img/destaque5.jpg" alt="Destaques">
                    </div>
                    <div class="owl-img">
                        <img src="assets/img/destaque6.jpg" alt="Destaques">
                    </div>
                    <div class="owl-img">
                        <img src="assets/img/destaque7.jpg" alt="Destaques">
                    </div>

                    <!-- Segunda parte -->
                    
                    <div class="owl-img">
                        <img src="assets/img/destaque8.jpg" alt="Destaques">
                    </div>
                    <div class="owl-img">
                        <img src="assets/img/destaque9.jpg" alt="Destaques">
                    </div>
                    <div class="owl-img">
                        <img src="assets/img/destaque10.jpg" alt="Destaques">
                    </div>
                    <div class="owl-img">
                        <img src="assets/img/destaque11.jpg" alt="Destaques">
                    </div>
                    <div class="owl-img">
                        <img src="assets/img/destaque12.jpg" alt="Destaques">
                    </div>
                    <div class="owl-img">
                        <img src="assets/img/destaque13.jpg" alt="Destaques">
                    </div>
                    <div class="owl-img">
                        <img src="assets/img/destaque14.jpg" alt="Destaques">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="conteudo itens-footer">
            <div id="informacoes-footer">
                <div id="logo-footer">
                    <img src="assets/img/logo.jpg" id="logo-footer" data-anime="left" alt="Logo-Footer">
                </div>
                
                <div id="lojas-footer">
                    <h2 class="titulo-footer">nossas lojas</h2>

                    <div class="unidade">
                        <span>Unidade Jandira</span>
                        <div class="descricao">
                            <img src="assets/img/loja-footer.jpg" alt="Imagem hamburgueria">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, minima commodi! Odit
                                ducimus sit eligendi cumque blanditiis aperiam</p>
                        </div>
                    </div>

                    <div class="unidade">
                        <span>Unidade Barueri</span>
                        <div class="descricao">
                            <img src="assets/img/loja-footer2.jpg" alt="Imagem hamburgueria">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, minima commodi! Odit
                                ducimus sit eligendi cumque blanditiis aperiam</p>
                        </div>
                    </div>
                </div>

                <div id="contatos-footer">
                    <h2 class="titulo-footer">entre em contato</h2>

                    <form method="post" name="frmPost" data-anime="right-form">
                        <div class="caixa">
                           <label>Nome: </label>
                           <ion-icon name="person-outline" class="icon-input-footer"></ion-icon>
                           <input type="text" id="nome" name="txtNome" value="" onkeyup="caracteresInvalidos(this)" required placeholder="Informe seu nome" maxlength="100">
                        </div>
                        <div class="caixa">
                            <label>Email: </label>
                            <ion-icon name="mail-outline" class="icon-input-footer"></ion-icon>
                            <input type="email" id="email" name="txtEmail" value="" required placeholder="Digite seu Email" autocomplete="on" maxlength="100">
                        </div>
                        <div class="caixa">
                            <label>Celular: </label>
                            <ion-icon name="call-outline" class="icon-input-footer"></ion-icon>
                            <input type="tel" id="telefone" name="txtCelular" value="" required onkeyup="mascaraCelular(this)" placeholder="Informe seu celular" maxlength="15">
                        </div>
                        <div id="button-footer">
                            <input type="submit" name="btnEnviar" value="Enviar">
                        </div>
                    </form>
                    
                    <div id="galeria-contatos-footer">
                        <img src="assets/img/twitter.png" alt="Twitter">
                        <img src="assets/img/slack.png" alt="Slack">
                        <img src="assets/img/telegram.png" alt="Telegram">
                        <img src="assets/img/youtube.png" alt="Youtube">
                    </div>
                </div>
            </div>
        </div>
        
        <div id="criador-footer">
            <span>Copyright &copy; 2021 | Kevin Alves</span>
        </div>
    </footer>

    <!-- Scripts para icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

</body>

</html>