<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/layoutquadrinho.css">
    <title>Quadrinho X</title>
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
                    <h1>Os Consumidores Selvagens e a Ascensão dos Palhaços</h1>
                    <hr>
                </div>
                <div class="row">
                    <div class="col img">
                        <img src="img\Rubens\consumidores.jpg"
                            alt="Os Consumidores Selvagens e a Ascensão dos Palhaços">
                    </div>
                </div>
                <div class="row">
                    <div class="col img">
                        <table>
                            <tr>
                                <th colspan="2">Os Consumidores Selvagens e a Ascensão dos Palhaços</th>
                            </tr>

                            <tr>
                                <td>Autor:</td>
                                <td>Rubens Menezes</td>
                            </tr>
                            <tr>
                                <td>publicado em:</td>
                                <td>XXXX</td>
                            </tr>
                            <tr>
                                <td colspan="2">Editora: Sedição</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <article>

                <div class="row sinopse">
                    <div class="title2">
                        <h1>Os Consumidores Selvagens e a Ascensão dos Palhaços</h1>
                        <hr>
                    </div>
                    <h3>Sinopse:</h3>
                    <p class="fs-4">
                        Os Consumidores Selvagens e a ascensão dos palhaços é um gibi agridoce. Faz você rir. Daí, faz
                        você pensar. Então, você começa a achar que não deveria estar rindo. Daí, você continua lendo,
                        ri de novo, e o ciclo recomeça.
                        É uma sátira, uma paródia sobre um país muito querido, mas muito duro de se viver. É ainda um
                        esforço para explicar uma ideia, uma tentativa de — como a criança da fábula — gritar para todo
                        mundo na praça: “O Rei está nu!”
                        É também a vontade de mudar o mundo, porque histórias em quadrinhos são uma forma de arte, e
                        toda arte que se preze precisa tentar mudar o mundo. Porque se não tivermos mais nada, ainda
                        vamos ter a arte e a esperança.
                    </p>
                    <p class="fs-6 text-muted"><small>Sinopse Os Consumidores Selvagens e a Ascensão dos Palhaços, .[S.
                            l.], Disponível
                            em: https://sedicao.com.br. Acesso: 17 jun. 2024.</small></p>
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
                            <img src="img/rubens/urubus.jpg" class="d-flex justify-content-center  carrouselart"
                                alt="Obra 1">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item d-flex justify-content-center">
                            <!-- INCLUIR IMAGEM DA OBRA -->
                            <img src="img/rubens/mexericas.jpg" class="d-flex justify-content-center  carrouselart"
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
                        <a href="quadrinhoBase_Mexericas.php">
                            <img src="img/rubens/mexericas.jpg" alt="Mexericas">

                        </a>
                    </figure>
                    <figcaption>Mexericas</figcaption>
                </div>
                <div class="col">
                    <figure>
                        <a href="quadrinhoBase_urubus.php">
                            <img src="img/rubens/urubus.jpg" alt="Urubus">

                        </a>
                    </figure>
                    <figcaption>Urubus</figcaption>
                </div>

            </div>
        </aside>





    </div>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

</body>

</html>