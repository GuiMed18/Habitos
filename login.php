<!DOCTYPE html>
<?php 
    include('screens/head.php'); 
?>
<body class="background">
    <form action="vendor/php/acoes/verif_login.php" method="post">
        <input type="text" name="login_user" placeholder="Login">
        <input type="password" name="senha_user" id="" placeholder="Senha">
        <input type="submit" value="Enviar">
    </form>
        <a href="cadastro.php">Cadastrar</a>
</body>
</html>