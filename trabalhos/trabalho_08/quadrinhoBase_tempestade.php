<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/layoutquadrinho.css">
    <title>A tempestade</title>
</head>

<body>

    <header>
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
                <div class="title">
                    <h1>A tempestade</h1>
                    <hr>
                </div>
                <div class="row">
                    <div class="col img">
                        <img src="img/Jefferson_costa/atempestade.jpg" alt="A tempestade">
                    </div>
                </div>
                <div class="row">
                    <div class="col img">
                        <table>
                            <tr>
                                <th colspan="2">A tempestade</th>
                            </tr>

                            <tr>
                                <td>Autor:</td>
                                <td>Jefferson Costa</td>
                            </tr>
                            <tr>
                                <td>publicado em:</td>
                                <td>2023</td>
                            </tr>
                            <tr>
                                <td colspan="2">Editora Nemo</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <article>

                <div class="row sinopse">
                    <div class="title2">
                        <h1>A tempestade</h1>
                        <hr>
                    </div>
                    <h3>Sinopse:</h3>
                    <p class="fs-4">
                        "A Tempestade" de Jefferson Costa é uma releitura contemporânea e vibrante da clássica peça de
                        William Shakespeare. Este quadrinho traz uma narrativa visual rica e envolvente, ilustrada pelo
                        próprio Jefferson Costa, que é conhecido por seu trabalho detalhado e expressivo no universo dos
                        quadrinhos brasileiros.

                        Na história, uma terrível tempestade lança ao mar a tripulação de um navio, forçando-os a buscar
                        abrigo em uma ilha misteriosa, repleta de monstros e espíritos. Esta ilha é governada por um
                        mago enigmático, que orquestra os eventos por trás das cortinas, manipulando todos os
                        personagens em um jogo complexo de vingança e redenção. No coração desta trama, um antigo ódio
                        encontra sua resolução através de um novo amor, trazendo uma nova perspectiva à clássica
                        história de Shakespeare.

                        Jefferson Costa mescla elementos de fantasia com uma profundidade emocional, criando uma obra
                        que ressoa tanto com fãs do original quanto com novos leitores, trazendo à tona temas universais
                        de perdão, amor e transformação.</p>
                        <p class="fs-6 text-muted"><small>Sinopse A tempestade, .[S. l.], Disponível
                        em: https://www.amazon.com.br/Tempestade-Lillo-Parra/dp/856482342X. Acesso:  17 jun. 2024.</small></p>
                </div>
            </article>
        </main>

        <aside>
            <div class="row">
                <h1>Veja também:</h1>
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
                            <img src="img/Jefferson_costa/jegermias.jpg"
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
                        data-bs-slide="prev" aria-label="botao-para-imagem-a-esquerda">
                        <span class="carousel-control-prev-icon visual" aria-hidden="true"></span>
                        <span class="visually visual"><!--Anterior--></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next" aria-label="botao-para-pagina-a-direita">
                        <span class="carousel-control-next-icon visual" aria-hidden="true"></span>
                        <span class="visually"><!--Proximo--></span>
                    </button>
                </div>
            </div>
            <div class="row imagensSpread">
                <div class="col">
                    <figure>
                        <a href="quadrinhoBase_jeremias.php">
                            <img src="img/Jefferson_costa/jegermias.jpg" alt="Jeremias-Pele">

                        </a>
                    </figure>
                    <figcaption>Jeremias - Pele</figcaption>
                </div>
                <div class="col">
                    <figure>
                        <a href="quadrinhoBase_danzarina.php">
                            <img src="img/Jefferson_costa/ladanzarina.jpg" alt="La Dansarina">

                        </a>
                    </figure>
                    <figcaption>La Dansarina</figcaption>
                </div>

            </div>
        </aside>





    </div>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

</body>

</html>