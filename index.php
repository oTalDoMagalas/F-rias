<!-- 2ª Digitação (Aqui) -->
<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = ($_POST['email']);

    $sql = "SELECT * FROM usuarios WHERE nome='$nome' AND email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['nome'] = $nome;
        header('Location: index.html');
    } else {
        $error = "Usuário ou email inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <header>Minhas Férias</header>
    <link rel="stylesheet" href="style.css">
=======
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
>>>>>>> a25f862c2cf7b374c0dcfbbaf1fdaabe26ac5c45
</head>

<body class="body_login">
    <div class="container" style="width: 400px;">
<<<<<<< HEAD
        <form method="post" action="">
            <h3>Login</h3>
            <label for="nome">Usuario :</label>
            <input type="text" name="nome" required>
            <label for="email">Email :</label>
            <input type="email" name="email" required>
            <button type="submit" style="margin-bottom: 30px;">Entrar</button>
            <?php if (isset($error)) echo "<p class='message error' >$error</p>"; ?>
=======
        <h3>Login</h3>
        <form method="post" action="">
            <label for="nome">Ususario :</label>
                    <input type="text" name="nome" required>
                    <label for="email">Email :</label>
                            <input type="email" name="email" required>
                            <button type="submit" style="margin-bottom: 30px;">Entrar</button>
                            <?php if (isset($error)) echo "<p class='message error' >$error</p>"; ?>
>>>>>>> a25f862c2cf7b374c0dcfbbaf1fdaabe26ac5c45
        </form>
    </div>
</body>

</html>