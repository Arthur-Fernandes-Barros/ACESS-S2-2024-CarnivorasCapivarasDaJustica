<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'includes/head.php';?>
    <link rel="stylesheet" href="css/artistas.css">
    <title>Artistas</title>
</head>
<body>
    <header>
        <?php include 'includes/header.php';?>
        <?php include 'conectaBanco.php'; ?>	<!-- Include para realizar a conexão com o servidor -->
    </header>
    <nav class="mx-auto" style="width: 1140px;" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Artistas</li>
 </ol>
</nav>


    <section class="sectitulo">
                <h1 class="htitulo">Artistas</h1>
        </section>
    </div>
    <div class="row container corpo">
        
    <!-- php -->
    <div class="row">
      <?php include 'autores1.php'; ?> <!--include para trazer o hubartistas do Banco de dados -->
    </div>

    <!-- php -->
    </div>
    <footer>
    <?php include 'includes/footer.php';?>
    
    </footer>
</body>
</html>