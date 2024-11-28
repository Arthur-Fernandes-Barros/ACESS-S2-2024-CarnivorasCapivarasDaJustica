<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/layoutquadrinho.css">
    <title>Por Mais um Dia com Zapata</title>
</head>

<body>

    <header>
        <?php include 'includes/header.php'; ?>
    </header>
    <div class="container text-center corpo">
        <main>
            <div class="direita">
                <div class="title">
                    <h1>Por Mais um Dia com Zapata</h1>
                    <hr>
                </div>
                <div class="row">
                    <div class="col img">
                        <img src="img/esteves/zapata.jpg" alt="Por mais um dia com Zapata">
                    </div>
                </div>
                <div class="row">
                    <div class="col img">
                        <table>
                            <tr>
                                <th colspan="2">Por Mais um Dia com Zapata</th>
                            </tr>

                            <tr>
                                <td>Autor:</td>
                                <td>Daniel Esteves</td>
                            </tr>
                            <tr>
                                <td>publicado em:</td>
                                <td>2020</td>
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
                        <h1>Por Mais um Dia com Zapata</h1>
                        <hr>
                    </div>
                    <h3>Sinopse:</h3>
                    <p class="fs-4">
                        A obra "Por Mais um Dia com Zapata" de Daniel Esteves, é uma graphic novel que mergulha no
                        universo do revolucionário mexicano Emiliano Zapata, explorando um dia fictício na vida do líder
                        camponês. Através de uma narrativa envolvente e ilustrações vívidas, os ilustradores Fabio
                        Cobiaco, Al Stefano e Tiago Souza colaboram para criar uma experiência visual rica e
                        emocionante. Esteves apresenta uma visão íntima de Zapata, destacando seus ideais, conflitos
                        internos e o legado duradouro de sua luta pela justiça social e reforma agrária no México.

                    </p>

                    <p class="fs-6 text-muted"><small>Sinopse Por Mais um Dia com Zapata, .[S. l.], Disponível
                    em: https://zapataedicoes.com.br. Acesso:  17 jun. 2024.</small></p>
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
                            <img src="img/esteves/mortos.jpg" class="d-flex justify-content-center  carrouselart"
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
                            <img src="img/esteves/nemo.jpg" alt="As aventuras do Capitão Nemo">
                        </a>
                        <figcaption>As aventuras do Capitão Nemo</figcaption>
                    </figure>
                </div>
                <div class="col">
                    <figure>
                        <a href="quadrinhoBase_spmortos.php">
                            <img src="img/esteves/mortos.jpg" alt="São Paulo dos mortos">
                        </a>
                        <figcaption>São Paulo dos mortos</figcaption>
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