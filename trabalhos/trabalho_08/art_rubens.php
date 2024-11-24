<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/paginaartistas.css">
    <title>Rubens Menezes</title>
</head>

<body>
    <header>
        <?php include 'includes/header.php'; ?>
    </header>

    <nav class="mx-auto" style="width: 1140px;" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="artistas.php">Artistas</li>
  </ol>
</nav>

    <div class="container corpo espaco p-5">


        <div class="row text-center p-5">
        <div class="col-lg-6 col-md-12 col-sm-12 foto">
            <section>
                <h1 hidden>foto de rubens menezes</h1>
                <img src="img/Rubens/rubens.png" alt="foto do Rubens" class="img_perfil centralizador">  
            </section>
        </div>    
        <div class="col-lg-6 col-md-12 col-sm-12 dados">
            <section>
                <h1 class="Nome">Rubens Menezes</h1>
                <p class="info_geral"><img src="https://img.icons8.com/?size=100&id=32309&format=png&color=000000" alt="para o instagra de Rubens Menezes"
                        class="logo_insta">@rv3en5</p>

            </section>
        </div>    
        </div>

        <section class="descricao">
            <h2 hidden>descição</h2>
            <p class="fs-5">Rubens Menezes (<a href="https://www.instagram.com/rv3en5">@rv3en5</a>) é um historiador,
                professor universitário e quadrinista envolvido com o mundo dos quadrinhos há
                mais de 20 anos. Ele é o criador e organizador do evento FATECon HQs e, além disso, já lançou duas HQs
                pela sua editora.</p>
            <p class="fs-5">Sua primeira HQ, "Os Consumidores Selvagens e a Ascensão dos Palhaços", lançada em 2019, é
                uma sátira e paródia sobre o
                Brasil, com uma pitada de humor e reflexão sobre a nossa sociedade, em uma obra que é uma paródia cruel
                da realidade em que
                vivemos. Já sua segunda HQ, "Mexericas", lançada em 2022, é uma reflexão sobre a educação, as famílias e
                o valor social da
                escola, e nos leva a refletir sobre a dura realidade da educação em nosso país.</p>
            <p class="fs-6 text-muted"><small>Biografia Rubens Menezes, .[S. l.], Disponível
                    em: https://sedicao.com.br. Acesso  17 jun. 2024.</small></p>
        </section>

        <div class="row text-center">
            <h2 class="obras">Obras:</h2>
        </div>
        <div class="row text-center gibis">
            <section class="col-lg-4 col-md-6 col-sm-12 p-2-livros">
                <h3 hidden>Urubus</h3>
                <figure>
                <a href="quadrinhoBase_urubus.php">
                    <img src="img/Rubens/Urubus.jpg" alt="Livro 'Urubus' de Rubens" class="obras_artista">
                </a>
                <figcaption>Urubus</figcaption>
                </figure>
            </section>
            <section class="col-lg-4 col-md-6 col-sm-12 p-2-livros">
                <h3 hidden>Consumidores selvagens</h3>
                <figure>
                <a href="quadrinhoBase_consumidores.php">
                    <img src="img/Rubens/consumidores.jpg" alt="Livro 'Consumidores Selvagens' de Rubens"
                        class="obras_artista">
                </a>
                <figcaption>Consumidores Selvagens</figcaption>
               </figure>
            </section>
            <section class="col-lg-4 col-md-6 col-sm-12 p-2-livros">
                <h3 hidden>Mexericas</h3>
                <figure>
                <a href="quadrinhoBase_mexericas.php">
                    <img src="img/Rubens/mexericas.jpg" alt="Livro 'Mexericas' de Rubens" class="obras_artista">
                </a>
                <figcaption>mexericas</figcaption>
                </figure>
            </section>
        </div>

    </div>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>
</body>

</html>