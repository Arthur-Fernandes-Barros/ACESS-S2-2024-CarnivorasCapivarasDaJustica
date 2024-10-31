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


    <div class="container text-center corpo mt-3">

        <main>
            <div class="direita">
                <div class="title">
                    <h1>Mexericas</h1>
                    <hr>
                </div>
                <div class="row">
                    <div class="col img">
                        <img src="img\Rubens\mexericas.jpg" alt="Mexericas">
                    </div>
                </div>
                <div class="row">
                    <div class="col img">
                        <table>
                            <tr>
                                <th colspan="2">Mexericas</th>
                            </tr>

                            <tr>
                                <td>Autor:</td>
                                <td>Rubens Menezes</td>
                            </tr>
                            <tr>
                                <td>publicado em:</td>
                                <td>Ano</td>
                            </tr>
                            <tr>
                                <td colspan="2">Editora: Independente</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <article>

                <div class="row sinopse">
                    <div class="title2">
                        <h1>Mexericas</h1>
                        <hr>
                    </div>
                    <h3>Sinopse:</h3>
                    <p class="fs-4">

                        Ambientada em uma escola pública de Osasco, em São Paulo, Mexericas é um retrato da duríssima
                        realidade da educação em um país onde pouca gente se importa de verdade com o assunto. É uma
                        reflexão, na forma de história em quadrinhos, sobre o valor social da educação, e sobre o papel
                        das escolas e famílias na formação das crianças. Também é a história sobre duas meninas, sobre
                        os sonhos que são permitidos a cada um de nós, sobre livros e, claro, sobre mexericas.

                    </p>
                    <p class="fs-6 text-muted"><small>Sinopse Mexiricas, .[S. l.], Disponível
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
                            <img src="img/rubens/consumidores.jpg" class="d-flex justify-content-center  carrouselart"
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
                        <a href="quadrinhoBase_consumidores.php">
                            <img src="img/rubens/consumidores.jpg"
                                alt="Os Consumidores Selvagens e a Ascensão dos Palhaços">

                        </a>
                    </figure>
                    <figcaption>Os Consumidores Selvagens e a Ascensão dos Palhaços</figcaption>
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