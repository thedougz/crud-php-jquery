<?php 

    include 'config.php';

    if (!isset($_GET['id'])) {
        header('Location: ./');
    }

    $id = $_GET['id'];

?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script src="https://kit.fontawesome.com/9eb7816335.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'components/Header.php'; ?>
    
    <?php 
        $sql = "SELECT * FROM crudphpjquery WHERE id = $id;";

        $response = mysqli_query($db, $sql);

        $row = mysqli_fetch_array($response);

        $name   = $row['userName'];
        $email  = $row['userEmail'];
    ?>
    <div class="UserInfo">
        <div class="icon-back">
            <a class="backLink" href="../"><i class="fas back fa-arrow-left"></i> Voltar </a>
        </div>
        <main>
            <div class="block-form">
                <h2>Editar Cadastro</h2>
                <form method="POST" id='form-update'>
                    <span class="title-span">Seu nome</span>
                    <input type="hidden" name="userID" value="<?php echo $id; ?>" />
                    <input type="text" name="userName" class="form-control" placeholder="Edite seu nome" required value="<?php echo $name; ?>" />
                    
                    <span class="title-span">Seu email</span>
                    <input type="email" name="userEmail" class="form-control" placeholder="Edite seu email" required value="<?php echo $email; ?>"  /> 

                    <button type="submit" class="btn btn-info btn-form">Editar</button>
                </form>
            </div>
        </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>var url = "<?php echo $url ?>/"; </script>
    <script src="<?php echo $url; ?>/assets/js/index.js"></script>
</body>
</html>