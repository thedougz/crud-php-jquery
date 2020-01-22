<?php 

    include '../config.php';

    $sql = "SELECT * FROM crudphpjquery;";
    $response = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_array($response)) {
        $id     = $row['id'];
        $name   = $row['userName'];

        echo "
    <div class='usersList'>
        <h3>Usuário</h3>
        <p>$name</p>

        <div class='buttons'>
            <a href='$url/details/$id'><button class='btn btn-info'>Visualizar</button></a>
            <a href='$url/update/$id'><button class='btn btn-warning'>Editar</button> </a>
            <button onClick='deleteUser($id)' class='btn btn-danger'>Deletar</button>
        </div>
    </div>";
    }