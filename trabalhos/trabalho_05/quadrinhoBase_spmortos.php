<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/layoutquadrinho.css">
    <title>São Paulo dos Mortos</title>
</head>

<body>

    <header>
        <?php include 'includes/header.php'; ?>
    </header>
    <div class="container text-center corpo">
        <main>
            <div class="direita">
                <div class="title">
                    <h1>São Paulo dos Mortos</h1>
                    <hr>
                </div>
                <div class="row">
                    <div class="col img">
                        <img src="img/esteves/mortos.jpg" alt="São Paulo dos mortos">
                    </div>
                </div>
                <div class="row">
                    <div class="col img">
                        <table>
                            <tr>
                                <th colspan="2">São Paulo dos Mortos</th>
                            </tr>

                            <tr>
                                <td>Autor:</td>
                                <td>Daniel Esteves</td>
                            </tr>
                            <tr>
                                <td>publicado em:</td>
                                <td>2013</td>
                            </tr>
                            <tr>
                                <td colspan="2">Zapata Edições</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <article>

                <div class="row sinopse">
                    <div class="title2">
                        <h1>São Paulo dos Mortos</h1>
                        <hr>
                    </div>
                    <h3>Sinopse:</h3>
                    <p class="fs-4">
                        "São Paulo dos Mortos" é uma graphic novel que mergulha profundamente no cenário urbano de São
                        Paulo após um apocalipse zumbi. Criada por Daniel Esteves, a obra apresenta uma cidade assolada
                        por uma epidemia que transforma seus habitantes em mortos-vivos sedentos por carne. Em meio ao
                        caos, grupos de sobreviventes lutam para encontrar segurança e respostas, explorando as ruínas
                        da metrópole enquanto enfrentam tanto os perigos externos quanto os internos. Com uma arte
                        vibrante e uma narrativa que mistura horror, suspense e crítica social, "São Paulo dos Mortos"
                        oferece uma visão única e perturbadora do que poderia ser o colapso da civilização em um dos
                        maiores centros urbanos da América Latina.
                        <p class="fs-6 text-muted"><small>Sinopse São Paulo dos mortos, .[S. l.], Disponível
                        em: https://zapataedicoes.com.br. Acesso:  17 jun. 2024.</small></p>

                    </p>
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
                            <img src="img/esteves/nemo.jpg" class="d-flex justify-content-center  carrouselart"
                                alt="Obra 1">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item d-flex justify-content-center">
                            <!-- INCLUIR IMAGEM DA OBRA -->
                            <img src="img/esteves/zapata.jpg" class="d-flex justify-content-center  carrouselart"
                                alt="Obra 2">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon visual" aria-hidden="true"></span>
                        <span class="visually visual"><!--Anterior--></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon visual" aria-hidden="true"></span>
                        <span class="visually"><!--Proximo--></span>
                    </button>
                </div>
            </div>
            <div class="row imagensSpread">

                <div class="col">
                    <figure>
                        <a href="quadrinhoBase_nemo.php">
                            <img src="img/esteves/nemo.jpg" alt="As aventuras de capitao nemo">


                        </a>
                        <figcaption>As aventuras de Capitão Nemo</figcaption>
                    </figure>
                </div>
                <div class="col">
                    <figure>
                        <a href="quadrinhoBase_zapata.php">
                            <img src="img/esteves/zapata.jpg" alt="Por mais um dia com zapata">


                        </a>
                        <figcaption>Por mais um dia com zapata</figcaption>
                    </figure>
                </div>
            </div>
        </aside>

    </div>
    <div class="container-fluid">
        <footer>
            <?php include 'includes/footer.php'; ?>
        </footer>
    </div>

</body>

</html>