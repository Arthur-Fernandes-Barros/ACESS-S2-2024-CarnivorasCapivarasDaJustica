<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/layoutquadrinho.css">
    <title>O Homem da Capa Preta</title>
</head>

<body>

    <header>
        <?php include 'includes/header.php'; ?>
    </header>


    <div class="container text-center corpo mt-3">

        <main>
            <div class="direita">
                <div class="title">
                    <h1>O Homem da Capa Preta</h1>
                    <hr>
                </div>
                <div class="row">
                    <div class="col img">
                        <img src="img/kiko_garcia/livro1.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col img">
                        <table>
                            <tr>
                                <th colspan="2">O Homem da Capa Preta</th>
                            </tr>

                            <tr>
                                <td>Autor:</td>
                                <td>Kiko Garcia</td>
                            </tr>
                            <tr>
                                <td>publicado em:</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td colspan="2">Editora Kikomics</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <article>

                <div class="row sinopse">
                    <div class="title2">
                        <h1>O Homem da Capa Preta</h1>
                        <hr>
                    </div>
                    <h3>Sinopse:</h3>
                    <p class="fs-4">
                        A coletânea "O Homem da Capa Preta", de Kiko Garcia, lançada em 2018, mergulha os leitores em um
                        universo repleto de mistério e elementos sobrenaturais. Com ilustrações que acentuam a atmosfera
                        sombria, o livro convida os leitores a explorar histórias sinistras na companhia de seu
                        enigmático protagonista. Cada conto revela tramas fascinantes e perturbadoras, onde o
                        inexplicável se entrelaça com o dia a dia, criando um ambiente onde segredos sombrios emergem
                        das sombras. Prepare-se para uma jornada onde o desconhecido se revela a cada esquina, enquanto
                        o suspense aumenta a cada página virada.</p>
                        <p class="fs-6 text-muted"><small>Sinopse O Homem da Capa Preta, .[S.
                            l.], Disponível
                            em: https://kikomics.com.br. Acesso: 17 jun. 2024.</small></p>
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
                            <img src="img/kiko_garcia/terraroxa.jpg" class="d-flex justify-content-center  carrouselart"
                                alt="Obra 1">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item d-flex justify-content-center">
                            <!-- INCLUIR IMAGEM DA OBRA -->
                            <img src="img/kiko_garcia/livro1.jpg" class="d-flex justify-content-center  carrouselart"
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
                        <a href="quadrinhoBase_terraroxa.php">
                            <img src="img/kiko_garcia/terraroxa.jpg" alt="Terra Roxa">

                        </a>
                    </figure>
                    <figcaption>Terra Roxa</figcaption>
                </div>
                <div class="col">
                    <figure>
                        <a href="quadrinhoBase_assombracontos.php">
                            <img src="img/kiko_garcia/assombracontos.jpg" alt="Assombracontos">

                        </a>
                    </figure>
                    <figcaption>Assombracontos</figcaption>
                </div>

            </div>
        </aside>





    </div>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

</body>

</html>