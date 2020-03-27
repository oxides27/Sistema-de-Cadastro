<!DOCTYPE html>
<html>
<head>
    <title>Lista de Cadastrados</title>
</head>
<body>
    <h1>Lista</h1>
    <?php  
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    $result_usuarios = "SELECT * from usuarios";
    $resultado_usuarios = mysqli_query($conn, $result_usuarios);
    while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
        echo "Nome:" . $row_usuario['nome'] . "<br>";
        echo "Sobrenome:" . $row_usuario['sobrenome'] . "<br>";
        echo "Email:" . $row_usuario['email'] . "<br>";
    }
    ?>
</body>
</html>