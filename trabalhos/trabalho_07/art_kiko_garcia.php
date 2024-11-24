<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/paginaartistas.css">
    <title>Nome do Artista</title>
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


    </div>
    <div class="container corpo espaco p-5">


        <div class="row text-center p-5">
            <div class="col-lg-6 col-md-12 col-sm-12 foto">
            <section>
                <h1 hidden>Kiko Garcia</h1>
                <img src="img/kiko_garcia/perfil.jpg" alt="foto do kiko garcia" class="img_perfil centralizador">
            </section>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 dados">
            <section>
                <h1 class="Nome">Kiko Garcia</h1>
                <p class="info_geral"><img src="https://img.icons8.com/?size=100&id=32309&format=png&color=000000" alt="para pagina do instagram de kiko garcia"
                        class="logo_insta">@kikomics</p>

            </section>
            </div>
        </div>

        <section class="descricao">
            <h1 hidden>descrição</h1>
            <p class="fs-5">Kiko Garcia (<a href="https://www.instagram.com/kikomics/">@kikomics</a>) é um ilustrador
                brasileiro com mais de 22 anos de experiência no mercado. Ele é
                versátil, trabalhando também com direção de arte, design gráfico e web, além de criação de
                quadrinhos. Kiko oferece ainda oficinas práticas criativas, compartilhando seu conhecimento e
                habilidades artísticas.</p>
            <p class="fs-5"> Sob seu selo autoral Kikomics, Kiko Garcia criou a série de horror em quadrinhos
                “Catacumba”,
                que está atualmente no sexto título e foi indicada ao Prêmio Le Blanc de Arte Sequencial em
                2021. Ele também é responsável pelos álbuns “O Homem da Capa Preta” e “Sombria”, e pelo
                livro ilustrado “Assombracontos”, que ganhou o Prêmio ABERST 2021 pelo projeto gráfico.</p>
            <p class="fs-6 text-muted"><small>Biografia Kiko Garcia, .[S. l.], Disponível
                    em: https://www.instagram.com/kikomics/. Acesso 17 jun. 2024.</small></p>
        </section>

        <div class="row text-center">
            <h2 class="obras">Obras:</h2>
        </div>
        <div class="row text-center">
            <div class="col-lg-4 col-md-12 col-sm-12 p-2-livros">
            <section>
                <h1 hidden>O homem da capa preta</h1>
                <figure>
                <a href="quadrinhoBase_capapreta.php">
                    <img src="img/kiko_garcia/livro1.jpg" alt="Livro 'O homem da capa preta' de Kiko"
                        class="obras_artista">
                </a>
                <figcaption>O homen da capa Preta</figcaption>
                </figure>
            </section>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 p-2-livros">
            <section>
                <h1 hidden>Assombracontos</h1>
                <figure>
                <a href="quadrinhoBase_assombracontos.php">
                    <img src="img/kiko_garcia/assombracontos.jpg" alt="Livro 'Assombracontos' de Kiko"
                        class="obras_artista">
                </a>
                <figcaption>Assombracontos</figcaption>
                </figure>
            </section>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 p-2-livros">
            <section>
                <h1 hidden>Terra Roxa</h1>
                <figure>
                <a href="quadrinhoBase_terraroxa.php">
                    <img src="img/kiko_garcia/terraroxa.jpg" alt="Livro 'Terra Roxa' de Kiko " class="obras_artista">
                </a>
                <figcaption>Terra Roxa</figcaption>
                </figure>
            </section>
            </div>
        </div>

    </div>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>
</body>

</html>