<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/layoutquadrinho.css">
    <title>Afeto</title>
</head>

<body>

    <header>
        <?php include 'includes/header.php'; ?>
    </header>


    <div class="container text-center corpo mt-3">

        <main>
            <div class="direita">
                <div class="title">
                    <h1>Afeto</h1>
                    <hr>
                </div>
                <div class="row">
                    <div class="col img">
                        <img src="img/vivi_melancia/afeto.png" alt="Afeto">
                    </div>
                </div>
                <div class="row">
                    <div class="col img">
                        <table>
                            <tr>
                                <th colspan="2">Afeto</th>
                            </tr>
                            <tr>
                                <td>Autores:</td>
                                <td>Natália Sierpinski, Vivi Melancia</td>
                            </tr>
                            <tr>
                                <td>publicado em:</td>
                                <td>XXXX</td>
                            </tr>
                            <tr>
                                <td colspan="2">Editora: Outside.co</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <article>

                <div class="row sinopse">
                    <div class="title2">
                        <h1>Afeto</h1>
                        <hr>
                    </div>
                    <h3>Sinopse:</h3>
                    <p class="fs-4">
                        Maria é uma garota de treze anos que acabou de mudar de cidade e começou a estudar na Escola
                        Pública Paulo Freire, em São Paulo. Junto com a adaptação na escola nova, Maria enfrenta
                        diversos desafios, pelo simples fato de ser uma menina. Assim, essa HQ aborda questões de gênero
                        e sexualidade que acontecem no cotidiano, que muitas vezes passam despercebidas, ou que são
                        vistas como “naturais” apesar de estarem envoltas de diversas micro violências, físicas ou
                        emocionais.
                    </p>
                    <p class="fs-6 text-muted"><small>Sinopse Afeto, .[S.
                            l.], Disponível
                            em: https://www.ugrapress.com.br/produtos/afeto/. Acesso: 17 jun. 2024.</small></p>
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
                        <div class="carousel-item d-flex justify-content-center">
                            <!-- INCLUIR IMAGEM DA OBRA -->
                            <img src="img/vivi_melancia/docinho.png" class="d-flex justify-content-center  carrouselart"
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
                        <a href="quadrinhoBase_DocinhoFamilia.php">
                            <img src="img/vivi_melancia/docinho.png" alt="Docinho em familia">

                        </a>
                    </figure>
                    <figcaption>Docinho em familía</figcaption>
                </div>

            </div>
        </aside>





    </div>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

</body>

</html>