<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/layoutquadrinho.css">
    <title>As aventuras do Capitão Nemo</title>
</head>

<body>

    <header>
        <?php include 'includes/header.php'; ?>
    </header>
    <div class="container text-center corpo">
        <main>
            <div class="direita">
                <div class="title">
                    <h1>As aventuras do Capitão Nemo</h1>
                    <hr>
                </div>
                <div class="row">
                    <div class="col img">
                        <img src="img/esteves/nemo.jpg" alt="As aventuras do Capitão Nemo">
                    </div>
                </div>
                <div class="row">
                    <div class="col img">
                        <table>
                            <tr>
                                <th colspan="2">As aventuras do Capitão Nemo</th>
                            </tr>

                            <tr>
                                <td>Autor:</td>
                                <td>Daniel Esteves</td>
                            </tr>
                            <tr>
                                <td>publicado em:</td>
                                <td>2021</td>
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
                        <h1>As aventuras do Capitão Nemo</h1>
                        <hr>
                    </div>
                    <h3>Sinopse:</h3>
                    <p class="fs-4">
                        "As Aventuras de Capitão Nemo", escrita por Daniel Esteves, é uma vibrante narrativa que
                        mergulha nos mistérios submarinos e nas intrigas do capitão Nemo, personagem icônico da
                        literatura de Jules Verne. Esteves transporta os leitores para um mundo submarino repleto de
                        aventuras, explorando não apenas os segredos dos oceanos, mas também os conflitos internos e as
                        motivações do enigmático capitão. Com ilustrações envolventes que capturam a grandiosidade e o
                        mistério das profundezas marítimas, a obra não apenas homenageia o clássico de Verne, mas também
                        oferece uma nova perspectiva sobre um dos personagens mais fascinantes da literatura mundial.

                    </p>
                    <p class="fs-6 text-muted"><small>Sinopse As aventuras do Capitão Nemo, .[S. l.], Disponível
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
                        <a href="quadrinhoBase_spmortos.php">
                            <img src="img/esteves/mortos.jpg" alt="São Paulo dos mortos">
                        </a>
                        <figcaption>São Paulo dos mortos</figcaption>
                    </figure>
                </div>
                <div class="col">
                    <figure>
                        <a href="quadrinhoBase_zapata.php">
                            <img src="img/esteves/zapata.jpg" alt="Por mais um dia com Zapata">
                        </a>
                        <figcaption>Por mais um dia com Zapata</figcaption>
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