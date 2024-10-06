# RELATÓRIO DE ALTERAÇÕES DE ACESSIBILIDADE.

# Seguindo exemplos vistos em sala de aula, foram alterados:


# Cada página contém somente 1 elemento H1, para destacar a importância do elemento representado.
# Adicionadas 'Aria-Label's e 'role' para as páginas, como no exemplo abaixo:

# ANTES DA ALTERAÇÃO 


<body>
    <div class="container-fluid">
        <header>
            <?php include 'includes/header.php';?>
        </header>
        <section class="sectitulo">
                <h1 class="htitulo">Eventos</h1>
        </section>
    </div>
    <div class="container corpo p-5">
        <div class="row">
                <h1>Ilustra Comic Fest Sorocaba (SESC Sorocaba)</h1>
        </div>
        <div class="row">
                <p class="fs-5" >
O Ilustra Comic Fest, realizado no SESC Sorocaba, é um evento que se tornou essencial para fãs de quadrinhos e ilustrações. Sob a organização de Marcel Bartholo e Michell Ed, o evento proporciona uma conexão entre o público e os artistas, com uma programação diversificada que inclui palestras, oficinas, exibições e rodas de conversa. A edição de 2023 contou com a participação de renomados ilustradores como Federico de Aquino, Pedro Mauro e Vivi Melancia. Entre os destaques, a "Batalha de Ilustras" atraiu atenção, onde artistas competiram ao vivo em duelos de desenho, oferecendo uma experiência interativa e divertida para os visitantes.
</p>
<p class="fs-6 text-muted"><small>Ilustra Comic. Ilustra Fest Sorocaba. [S. l.]. Disponível
em: https://www.instagram.com/encontroilustra/. Acesso em: 17 jun. 2024.</small></p>
</p>
        </div>
<div class="row p-3 jorge"><img src="img/ilustrac.png" alt=""></div>

<div class="row"><h1>Domingo Nerd Ibiúna </h1></div>
<div class="row"><p class="fs-5">

O Domingo Nerd em Ibiúna é um evento vibrante que reúne a comunidade geek para um dia inteiro de atividades voltadas para fãs de quadrinhos, games, cosplay e cultura pop. Com concursos de cosplay, workshops de desenho, palestras com quadrinistas e exibições de filmes e séries, o evento é um ponto de encontro crucial para entusiastas da cultura nerd. Ele oferece uma plataforma para novos talentos, permitindo que artistas e fãs troquem experiências e expandam suas redes de contatos, fortalecendo a cena local de quadrinhos e ilustrações.
<p class="fs-6 text-muted"><small>Ilustra Comic. Domingo Nerd Ibiúna. [S. l.]. Disponível
em: https://www.instagram.com/domingonerd/. Acesso em: 17 jun. 2024.</small></p>
</p>

<div class="row p-3 jorge"><img  src="img/dn.jpg" alt=""></div>

<div class="row"><h1>Gibi SP Festival</h1></div>
<div class="row"><p class="fs-5">
O Gibi SP Festival 2023, realizado na Sociedade Brasileira de Cultura Japonesa e de Assistência Social – Bunkyo, em São Paulo, é um evento imperdível para os aficionados por quadrinhos. A edição do ano de 2023 destacou-se por reunir editoras independentes e autores renomados, oferecendo uma rica programação com lançamentos de publicações, sessões de autógrafos e palestras sobre o mercado de quadrinhos. A participação da Editora JBC trouxe ainda mais brilho ao evento, com lançamentos de mangás e sessões de autógrafos com autores como Cah Poszar, Lígia Zanella, Amanda Freitas e Vinicius Galhardo. Além disso, atividades interativas como oficinas de desenho e painéis com criadores de conteúdo proporcionaram uma experiência enriquecedora para os participantes, promovendo um ambiente de aprendizado e troca cultural​​
</p>
<p class="fs-6 text-muted"><small>Gibi SP Festival. Gibi SP Festival. [S. l.]. Disponível
em: https://www.instagram.com/gibispfestival/. Acesso em: 17 jun. 2024..</small></p>
</p></div>
<div class="row p-3 jorge"><img src="img/gibisp.jpg" alt=""></div>
    </div>
    </div>
    <footer>
        <?php include 'includes/footer.php'; ?> 
    </footer>


# DEPOIS DA ALTERAÇÃO

<body>
    <div class="container-fluid">
        <header role="banner">
            <?php include 'includes/header.php';?>
        </header>
        <section class="sectitulo">
            <h1 class="htitulo">Eventos</h1>
        </section>
    </div>
    <div class="container corpo p-5">
        <div role="region" aria-labelledby="Ilustra-Comic-Fest" class="row">
            <h2>Ilustra Comic Fest Sorocaba (SESC Sorocaba)</h2>
        </div>
        <div class="row">
            <p id="Ilustra-Comic-Fest" class="fs-5">

                O Ilustra Comic Fest, realizado no SESC Sorocaba, é um evento que se tornou essencial para fãs de
                quadrinhos e ilustrações. Sob a organização de Marcel Bartholo e Michell Ed, o evento proporciona uma
                conexão entre o público e os artistas, com uma programação diversificada que inclui palestras, oficinas,
                exibições e rodas de conversa. A edição de 2023 contou com a participação de renomados ilustradores como
                Federico de Aquino, Pedro Mauro e Vivi Melancia. Entre os destaques, a "Batalha de Ilustras" atraiu
                atenção, onde artistas competiram ao vivo em duelos de desenho, oferecendo uma experiência interativa e
                divertida para os visitantes.

            </p>
            <p role="dialog" aria-labelledby="link-fonte-para-ilustra-comic" class="fs-6 text-muted"><small id="link-fonte-para-ilustra-comic">Ilustra Comic. Ilustra Fest Sorocaba. [S. l.]. Disponível
                    em: https://www.instagram.com/encontroilustra/. Acesso em: 17 jun. 2024.</small></p>
            
        </div>
        <div role="img" aria-label="imagem-do-evento-Ilustra-Comic-Fest" class="row p-3 jorge"><img src="img/ilustrac.png" alt="imagem do evento Ilustra Comic Fest">
    </div>

        <div role="region" aria-labelledby="Nerd-Ibiuna" class="row">
            <h2>Domingo Nerd Ibiúna </h2>
        </div>
        <div class="row">
            <p id="Nerd-Ibiuna" class="fs-5">

                O Domingo Nerd em Ibiúna é um evento vibrante que reúne a comunidade geek para um dia inteiro de
                atividades voltadas para fãs de quadrinhos, games, cosplay e cultura pop. Com concursos de cosplay,
                workshops de desenho, palestras com quadrinistas e exibições de filmes e séries, o evento é um ponto de
                encontro crucial para entusiastas da cultura nerd. Ele oferece uma plataforma para novos talentos,
                permitindo que artistas e fãs troquem experiências e expandam suas redes de contatos, fortalecendo a
                cena local de quadrinhos e ilustrações.
            <p  role="dialog" aria-labelledby="link-fonte-para-Nerd-Ibiuna" class="fs-6 text-muted"><small id="link-fonte-para-Nerd-Ibiuna">Ilustra Comic. Domingo Nerd Ibiúna. [S. l.]. Disponível
                    em: https://www.instagram.com/domingonerd/. Acesso em: 17 jun. 2024.</small></p>
            

            <div role="img" aria-label="imagem-do-evento-Nerd-Ibiuna" class="row p-3 jorge"><img src="img/dn.jpg" alt="imagem-do-evento-Nerd-Ibiuna">
        </div>

            <div role="region" aria-labelledby="Gibi-SP-Festival" class="row">
                <h2>Gibi SP Festival</h2>
            </div>
            <div class="row">
                <p id="Gibi-SP-Festival" class="fs-5">
                    O Gibi SP Festival 2023, realizado na Sociedade Brasileira de Cultura Japonesa e de Assistência
                    Social – Bunkyo, em São Paulo, é um evento imperdível para os aficionados por quadrinhos. A edição
                    do ano de 2023 destacou-se por reunir editoras independentes e autores renomados, oferecendo uma
                    rica programação com lançamentos de publicações, sessões de autógrafos e palestras sobre o mercado
                    de quadrinhos. A participação da Editora JBC trouxe ainda mais brilho ao evento, com lançamentos de
                    mangás e sessões de autógrafos com autores como Cah Poszar, Lígia Zanella, Amanda Freitas e Vinicius
                    Galhardo. Além disso, atividades interativas como oficinas de desenho e painéis com criadores de
                    conteúdo proporcionaram uma experiência enriquecedora para os participantes, promovendo um ambiente
                    de aprendizado e troca cultural​​
                </p>
                <p role="dialog" aria-labelledby="link-fonte-para-Gibi-SP-Festival" class="fs-6 text-muted"><small id="link-fonte-para-Gibi-SP-Festival">Gibi SP Festival. Gibi SP Festival. [S. l.]. Disponível
                        em: https://www.instagram.com/gibispfestival/. Acesso em: 17 jun. 2024..</small></p>
                
            </div>
            <div role="img" aria-label="imagem-do-evento-Gibi-SP-Festival" class="row p-3 jorge"><img src="img/gibisp.jpg" alt="imagem-do-evento-Gibi-SP-Festival"></div>
        </div>
    </div>
    <footer>


# Foi constatada uma melhora na leitura do NVDA, porém algumas coisas são inacessiveis usam a  tecla 'TAB', sendo necessário utilizar das setas do teclado para conseguir a leitura apropriada do corpo de texto.
# O problema pode estar relacionado ao uso de algumas DIVs, porém ainda não temos o diagnóstico concreto.