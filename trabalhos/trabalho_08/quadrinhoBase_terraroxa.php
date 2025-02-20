<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/layoutquadrinho.css">
    <title>Terra Roxa</title>
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
                    <h1>Terra Roxa</h1>
                    <hr>
                </div>
                <div class="row">
                    <div class="col img">
                    <?php $id = 9;
                    include 'exibeTabelaObra.php';
                    ?>
                    </div>
                </div>
            </div>
            <article>

                <div class="row sinopse">
                    <div class="title2">
                        <h1>Terra Roxa</h1>
                        <hr>
                    </div>
                    <h3>Sinopse:</h3>
                    <p class="fs-4">
                        "Terra Roxa", uma graphic novel de Kiko Garcia, que mergulha em um cenário distópico onde o
                        Brasil se transformou em um território dominado pelo Canavieirismo. Nesta obra, o autor não
                        apenas explora temas como falsas promessas, regimes opressivos e desrespeito ambiental, mas
                        também lança luz sobre os conflitos humanos exacerbados por essas condições extremas.

                        No enredo de "Terra Roxa", o fanatismo conduz as pessoas a sacrificar o que mais valorizam em
                        troca de uma vida marcada pelo ódio. Nesse contexto sombrio, um canavial amaldiçoado emerge da
                        terra, desencadeando eventos sobrenaturais que desafiam as estruturas de poder estabelecidas.
                        Kiko Garcia não só escreve como também ilustra e desenha a obra, contribuindo para a
                        profundidade visual e narrativa da história.

                        A história da HQ se desenrola num futuro onde o país é transformado em um mero território
                        dominado pela produção de cana-de-açúcar, submetendo seus habitantes a uma existência marcada
                        pelo trabalho exaustivo e pela subjugação.
                        <p class="fs-6 text-muted"><small>Sinopse Terra Roxa, .[S.
                            l.], Disponível
                            em: https://kikomics.com.br. Acesso: 17 jun. 2024.</small></p>
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
                            <img src="img/kiko_garcia/assombracontos.jpg"
                                class="d-flex justify-content-center  carrouselart" alt="Obra 1">
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
                        <a href="quadrinhoBase_assombracontos.php">
                            <img src="img/kiko_garcia/assombracontos.jpg" alt="Assombracontos">

                        </a>
                    </figure>
                    <figcaption>Assombracontos</figcaption>
                </div>
                <div class="col">
                    <figure>
                        <a href="quadrinhoBase_capapreta.php">
                            <img src="img/kiko_garcia/livro1.jpg" alt="O homem da capa preta">

                        </a>
                    </figure>
                    <figcaption>O homem da capa preta</figcaption>
                </div>

            </div>
        </aside>





    </div>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

</body>

</html>