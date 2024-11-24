<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/layoutquadrinho.css">
    <title>La Dansarina</title>
</head>

<body>

    <header>
        <?php include 'includes/header.php'; ?>
    </header>


    <div class="container text-center corpo mt-3">

        <main>
            <div class="direita">
                <div class="title">
                    <h1>La Dansarina</h1>
                    <hr>
                </div>
                <div class="row">
                    <div class="col img">
                        <img src="img/Jefferson_costa/ladanzarina.jpg" alt="La dansarina">
                    </div>
                </div>
                <div class="row">
                    <div class="col img">
                        <table>
                            <tr>
                                <th colspan="2">La Dansarina</th>
                            </tr>

                            <tr>
                                <td>Autor:</td>
                                <td>Jefferson Costa</td>
                            </tr>
                            <tr>
                                <td>publicado em:</td>
                                <td>2015</td>
                            </tr>
                            <tr>
                                <td colspan="2">Editora Jupati</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <article>

                <div class="row sinopse">
                    <div class="title2">
                        <h1>La Dansarina</h1>
                        <hr>
                    </div>
                    <h3>Sinopse:</h3>
                    <p class="fs-4">
                        "La Dansarina" é uma graphic novel publicada pela primeira vez em 2015, com texto de Lillo Parra
                        e ilustrações brilhantes de Jefferson Costa, um dos grandes nomes dos quadrinhos nacionais. A
                        obra acompanha a história de Petro, um jovem recém-curado da gripe espanhola que, ao descobrir a
                        morte de sua mãe pela mesma doença, embarca em uma jornada comovente para proporcionar-lhe um
                        funeral digno.

                        Ignorada pelas autoridades sanitárias, a morte de sua mãe simboliza a desumanidade e o abandono
                        enfrentados por muitos durante a pandemia de 1918. Ao longo dessa jornada, o leitor é convidado
                        a refletir profundamente sobre vida, morte e os impactos de uma crise sanitária.

                        Com prefácio de Reinaldo José Lopes, "La Dansarina" é uma ficção histórica que, embora
                        ambientada durante a crise da gripe espanhola, ecoa com as experiências vividas globalmente
                        durante a pandemia de Covid-19 em 2020. Premiada com o HQ Mix, a narrativa de Petro se mostra
                        assustadoramente relevante, espelhando a sociedade de sua época com a nossa, ambas marcadas pela
                        devastação causada por um vírus invisível.</p>
                        <p class="fs-6 text-muted"><small>Sinopse La Dansarina, .[S. l.], Disponível
                        em: https://www.amazon.com.br/Dansarina-Lilo-Parra/dp/6555113197. Acesso:  17 jun. 2024.</small></p>
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
                            <img src="img/Jefferson_costa/atempestade.jpg"
                                class="d-flex justify-content-center  carrouselart" alt="Obra 1">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item d-flex justify-content-center">
                            <!-- INCLUIR IMAGEM DA OBRA -->
                            <img src="img/Jefferson_costa/jegermias.jpg"
                                class="d-flex justify-content-center  carrouselart" alt="Obra 2">
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
                        <a href="quadrinhoBase_tempestade.php">
                            <img src="img/Jefferson_costa/atempestade.jpg" alt="A tempestade">

                        </a>
                    </figure>
                    <figcaption>A tempestade</figcaption>
                </div>
                <div class="col">
                    <figure>
                        <a href="quadrinhoBase_jeremias.php">
                            <img src="img/Jefferson_costa/jegermias.jpg" alt="Jeremias - Pele">

                        </a>
                    </figure>
                    <figcaption>Jeremias - Pele</figcaption>
                </div>

            </div>
        </aside>





    </div>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

</body>

</html>