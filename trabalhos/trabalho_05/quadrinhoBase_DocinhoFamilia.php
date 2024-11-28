<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/layoutquadrinho.css">
    <title>Docinho em Família</title>
</head>

<body>

    <header>
        <?php include 'includes/header.php'; ?>
    </header>


    <div class="container text-center corpo mt-3">

        <main>
            <div class="direita">
                <div class="title">
                    <h1>Docinho em Família</h1>
                    <hr>
                </div>
                <div class="row">
                    <div class="col img">
                        <img src="img/vivi_melancia/docinho.png" alt="Docinho em Família">
                    </div>
                </div>
                <div class="row">
                    <div class="col img">
                        <table>
                            <tr>
                                <th colspan="2">Docinho em Família</th>
                            </tr>

                            <tr>
                                <td>Autor:</td>
                                <td>Vivi Melancia</td>
                            </tr>
                            <tr>
                                <td>publicado em:</td>
                                <td>XXXX</td>
                            </tr>
                            <tr>
                                <td colspan="2">Editora: independente</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <article>

                <div class="row sinopse">
                    <div class="title2">
                        <h1>Docinho em Família</h1>
                        <hr>
                    </div>
                    <h3>Sinopse:</h3>
                    <p class="fs-4">
                        "Filha, Mãe e Avó" são tirinhas semanais que buscam com muito humor - e amor - descrever eventos
                        cotidianos de uma família composta de três mulheres, cada uma de uma geração. Embora pareçam
                        histórias únicas, o projeto foi construído reunindo relatos de pessoas de várias regiões do
                        país, mesclando culturas durante seu desenvolvimento. Inicialmente com uma coleção de pequenas
                        ilustrações feitas em lápis e aquarela, o projeto desenvolveu para a técnica digital, nascendo
                        assim uma WebComic totalmente autoral que é publicada em uma página na internet.
                    </p>
                    <p class="fs-6 text-muted"><small>Sinopse Docinho em Família, .[S.
                            l.], Disponível
                            em: https://www.ugrapress.com.br/produtos/docinho-em-familia/ Acesso: 17 jun. 2024.</small></p>
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
                        <a href="quadrinhoBase_afeto.php">
                            <img src="img/vivi_melancia/afeto.png" alt="Afeto">

                        </a>
                    </figure>
                    <figcaption>Afeto</figcaption>
                </div>

            </div>
        </aside>





    </div>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

</body>

</html>