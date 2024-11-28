<?php

//Função para buscar o hubartistas do Banco de dados
function BuscarHubArtistas () {
    global $conn; // Usando a variável global $conn para a conexão com o banco de dados
    $sql ="SELECT  ImgAutor,nome,AriaLabel,LinkParaPaginaDoArtista FROM Artistas Order By Id ASC LIMIT 6 offset 0";
    $result = $conn->query($sql); // Executa a query no banco de dados


    // Verifica se a query retornou algum resultado
    if ($result->num_rows > 0) {
        // Loop pelos resultados da query
        while($row = $result->fetch_assoc()) {
            // Chama a função ExibirArtistas para cada notícia retornada
            ExibirHubArtistas($row['ImgAutor'], $row['nome'], $row['AriaLabel'], $row['LinkParaPaginaDoArtista']);
        }
    } 
    else{
        // Caso não encontre nenhuma notícia, exibe uma mensagem
        echo "Nenhuma informação encontrada.";
    }
}


//Função para ExibirHubArtistas
function ExibirHubArtistas($ImgAutor, $NomeAutor, $AriaLabel, $LinkParaPaginaDoArtista){
    //Estrutura para exibir o HubArtistas
   
    
    echo'<section class="col-lg-4 col-md-4 col-sm-1 artistas text-center">';
    echo'  <a href="' .$LinkParaPaginaDoArtista .'">';
    echo'     <img src=" ' .$ImgAutor . ' " alt="'.$AriaLabel.'" class="imgA" >';
    echo'     <h2 class="nomeartista">'.$NomeAutor.'</h2>';
    echo'     <a href="' .$LinkParaPaginaDoArtista .'" class="botaoleiamais">Leia Mais</a>';
    echo'  </a>';
    echo'</section>';
       
    
    
}



// chama a função BunscarHubArtistas para iniciar o processo
    BuscarHubArtistas();


// Fecha a conexão com o banco de dados

?>