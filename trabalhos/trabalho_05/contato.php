<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/contato.css">
    <title>Contato</title>
</head>

<body>
    <header>
        <?php include 'includes/header.php'; ?>
    </header>
    <section class="sectitulo">
        <h1 class="htitulo">Contate-nos</h1>
    </section>
    <div class="container text-center corpo">

        <form action="contato.php" method="post" class="p-3">
            <div class="row mb-3">
                <label for="name" class="form-label">Digite seu nome:</label>
                <input type="text" name="name" id="name" placeholder="Escreva seu nome"
                    class="label col-12 form-control-lg" required>
            </div>
            <div class="row mb-3">
                <label for="email" class="form-label">Digite o seu email:</label>
                <input type="email" name="email" id="email" placeholder="Escreva seu e-mail"
                    class="label col-12 form-control-lg" required>

            </div>
            <div class="row mb-3">
                <label for="assunto" class="form-label">Assunto:</label>
                <input type="text" name="assunto" id="assunto" placeholder="Escreva o assunto"
                    class="label col-12 form-control-lg" required>
            </div>
            <textarea name="mcontato" id="mcontato" placeholder="Escreva sua mensagem"
                class="form-control-lg"> Escreva sua mensagem </textarea>

            <hr>
            <input type="submit" value="Enviar mensagem de contato" id="submit" class="btn btn-primary">

        </form>
    </div>


    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>
</body>

</html>