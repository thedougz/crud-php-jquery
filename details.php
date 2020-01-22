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

    <script src="https://kit.fontawesome.com/9eb7816335.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'components/Header.php'; ?>
    <div class="UserInfo">
        <div class="icon-back">
            <a class="backLink" href="../"><i class="fas back fa-arrow-left"></i> Voltar </a>
        </div>

        <?php 
            $sql = "SELECT * FROM crudphpjquery WHERE id = $id;";

            $response = mysqli_query($db, $sql);

            $row = mysqli_fetch_array($response);

            $name = $row['userName'];
            $email = $row['userEmail'];
        ?>

        <h3>Usuário</h3>
        <p><?php echo $name; ?></p><br/>

        <h3>Email</h3>
        <p><?php echo $email; ?></p>

    </div>
</body>
</html>