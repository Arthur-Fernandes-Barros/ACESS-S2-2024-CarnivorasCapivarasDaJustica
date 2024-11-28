<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/layoutquadrinho.css">
    <title>Jeremias - Pele</title>
</head>

<body>

    <header role="banner">
        <?php include 'includes/header.php'; ?>
    </header>
    <nav class="mx-auto" style="width: 1140px;" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="quadrinhos.php">Quadrinhos em Destaque</a></li>
        </ol>
    </nav>

    <div class="container text-center corpo mt-3">

        <main>
            <div class="direita">
                <div role="region"  aria-labelledby="dialog-jeremias-pele" class="title">
                <!-- titulo do mobile tentar esconder e vÊ se o leitor consegue lê o h1 que eu não vou esconder -->
                    <h1 id="jeremias-pele">Jeremias- Pele</h1>
                    <hr>
                </div>
            <div class="row">
                <div class="col img">
                <?php $id = 5;include 'exibeTabelaObra.php';
                    ?>
                </div>
            </div>
        </div>
       
        

            <article role="article">

                <div class="row sinopse">
                    <div role="dialog" aria-labelledby="dialog-title" class="title2">
                        <h1 id="dialog-title">Jeremias - Pele</h1>
                        <hr>
                    </div>
                    <h2>Sinopse:</h2>
                    <div id="imagem-do-quadrinho-jeremias" class="fs-4">
                        Numa reinterpretação ousada, porém necessária, como enaltece Mauricio de Sousa, em seu prefácio,
                        o roteirista Rafael Calça e o desenhista Jefferson Costa dão vida a uma história forte, dura,
                        emocionante, na qual Jeremias lidará pela primeira vez com o preconceito por causa da cor da sua
                        pele. A história é recheada de dor, superação, aprendizado e preparação para a vida.
                        <p class="fs-6 text-muted"><small>Jeremias - Pele, .[S. l.], Disponível
                        em: https://panini.com.br/jeremias-pele-graphic-msp-capa-dura-amshc001r3. Acesso:  17 jun. 2024.</small></p>
                 </div>
                </div>
            </article>
        </main>

        <aside role="complementary">
            <div class="row">
                <h2>Veja também:</h2>
            </div>
            <div class="row carrosel">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
            
                    <div class="carousel-inner">
                        <div class="carousel-item d-flex justify-content-center active">
                            <!-- INCLUIR IMAGEM DA OBRA -->
                            <img src="img/Jefferson_costa/atempestade.jpg"
                                class="d-flex justify-content-center  carrouselart" alt="Obra 1">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item d-flex justify-content-center">
                            <!-- INCLUIR IMAGEM DA OBRA -->
                            <img src="img/Jefferson_costa/ladanzarina.jpg"
                                class="d-flex justify-content-center  carrouselart" alt="Obra 2">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev" aria-label="carrosel-pagina-a-esquerda">
                        <span class="carousel-control-prev-icon visual" aria-hidden="true"></span>
                        <span class="visually visual"><!--Anterior--></span>
                    </button>
                    <button  class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next" aria-label="carrosel-pagina-a-direita">
                        <span class="carousel-control-next-icon visual" aria-hidden="true"></span>
                        <span class="visually"><!--Proximo--></span>
                    </button>
                </div>
            </div>
            <div class="row imagensSpread">
                <div class="col">
                    <figure>
                        <a href="quadrinhoBase_tempestade.php">
                            <img src="img/Jefferson_costa/atempestade.jpg" aria-describedby="imagem-do-quadrinho-A-Tempestade" alt="A tempestade">

                        </a>
                    </figure>
                    <div id="imagem-do-quadrinho-A-Tempestade"><p hidden>A tempestade</p>

                    </div>
                </div>
                <div class="col">
                    <figure>
                        <a href="quadrinhoBase_danzarina.php">
                            <img src="img/Jefferson_costa/ladanzarina.jpg" aria-describedby="imagem-do-quadrinho-La-dansarina" alt="La Dansarina">

                        </a>
                    </figure>
                    <div id="imagem-do-quadrinho-La-dansarina"><p hidden>La Dansarina</p></div>
            
               </div>
            
             </div>
        </aside>





    
    </div>
    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

</body>

</html>