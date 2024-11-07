<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'includes/head.php';?>
    <link rel="stylesheet" href="css/homepage.css">
    <title>Inicio</title>
</head>
<body>
    <header>
        <?php include 'includes/header.php';?>
    </header>
    <nav class="mx-auto" style="width: 1140px;" aria-label="breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item active" aria-current="page">Home</li>
      </ol>
   </nav>
    <div class="container corpo">
    <main>
        <div class="row bannerPrincipal"><img src="img/logoFateconBanner.png" alt=""></div>
        <div class="row titulo"><h1 class="welcv2" >Bem-vindo à Fatecon!</h1></div>

        <div class="container mt-5 w-90">
        <article class="row article-container">
            <div class="col-md-6 imagem">
                <img src="img/publico1.jpg" alt="Imagem do Artigo" class="article-img">
            </div>
            <div class="col-md-6 article-texto">
                <h1>A Fatecon!</h1>
                <p class="fs-5">Fatecon é um evento criado em 2022, idealizado pelo Quadrinista e professor da Fatec São Roque, Rubens Menezes, com o apoio de outros colaboradores da faculdade.sua primeira edição foi em 19/11/2022, tendo também uma edição em 2023.
                PRÓXIMA EDIÇÃO EM BREVE!! A Fatecon 2024 ocorrerá em setembro, no colégio Horácio Maney Lane.</p>
            </div>
        </article>
    </div>

        <div class="row carrosel"><?php  include 'includes/carrouselhome.php'; ?></div>
        <div class="row titulo"><h1 class="welcv2">Veja Também!</h1></div>
        <aside>
        <div class="container mt-5 align-center">
        <aside class="row">
            <div class="col-12 col-md-6 col-lg-3 noticia">
                <div class="bg">
                    <section>
                        <a href="historia.php"><img src="img/fateconboyvertical.png" alt="Notícia 1"></a>
                        <div class="texto">
                            <h2>A idealização da Fatecon!</h2>
                            <p>Entenda um pouco da história do evento, com depoimentos do idealizador Rubens Menezes além de várias curiosidades!</p>
                            <a class="botao" href="historia.php">Ver mais...</a>
                        </div>
                        
                    </section>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 noticia">
                <div class="bg">
                    <section>
                        <a href="galeriacosplay.php"><img src="img/fateconboyvertical.png" alt="Notícia 2"></a>
                        <div class="texto">
                            <h3>Concurso de cosplays!</h3>
                            <p>Veja imagens dos participantes do concurso de cosplays da Fatecon! Cosplays, de games como League of Legends, Silent Hill e mais...</p>
                            <a class="botao" href="galeriacosplay.php">Ver mais...</a>
                        </div>
                        
                    </section>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 noticia">
                <div class="bg">
                    <section>
                        
                        <a href="evento.php"><img src="img/fateconboyvertical.png" alt="Notícia 3"></a>
                        <div class="texto">
                            <h3>Eventos Correlatos!</h3>
                            <p>Conheça um pouco sobre os eventos parecidos com a fatecon, na região de São Roque!</p>
                            <br>
                            <a class="botao" href="evento.php">Ver mais...</a>
                            
                        </div>
                        
                    </section>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 noticia">
                <div class="bg">
                    <section>
                        <a href="quadrinhos.php"><img src="img/fateconboyvertical.png" alt="Notícia 4"></a>
                        <div class="texto">
                            <h3>Quadrinhos recomendados!</h3>
                            <p>Confira os quadrinhos recomendados pelos criadores do site e um pouco das histórias de cada obra!</p>
                            <br>
                            <a class="botao" href="quadrinhos.php">Ver mais...</a>
                            
                        </div>
                    </section>
                </div>
            </div>
        </aside>
    </div>
        </aside>
    </main>
    </div>
    </div>
    


    <footer>
    <?php include 'includes/footer.php';?>
    </footer>
</body>
</html>