<?php 

    include 'config.php';

?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <!-- <link href="" rel="stylesheet" href="css/style.css"> -->
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    </head>
    <body>
        <?php include 'components/Header.php'; ?>

        <main>
            <div class="block-form">
                <h2>Cadastro</h2>
                <form method="POST" id='form-register'>
                    <span class="title-span">Seu nome</span>
                    <input type="text" class="form-control" name="userName" required placeholder="Digite aqui seu nome" />
                    
                    <span class="title-span">Seu email</span>
                    <input type="email" class="form-control" name="userEmail" required placeholder="Digite seu melhor email" />

                    <button type="submit" class="btn btn-success btn-form">Salvar</button>
                </form>
            </div>
        </main>

        <div id="getList"></div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="assets/js/index.js"></script>
    </body>
</html>