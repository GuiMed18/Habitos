<?php
include('../funcoes/conecta_db.php');

$conecta = new Conexao;
$conn = $conecta->conectaDB();

$user = $_POST['login_user'];
$senha = $_POST['senha_user']; // md5($_POST['senha_user']);

$query = mysqli_query($conn, "SELECT nome_user, senha_user FROM usuarios WHERE nome_user = '$user' AND senha_user = '$senha'");

if (mysqli_num_rows($query) == 0) {
    //Não encontrou login e senha
    header("Location: ../../../login.php?err=usr_inv");
} else {
    //echo "Autenticado";
    session_start();
    $_SESSION['user_logado'] = true;
    $_SESSION['hr_login'] = strtotime(date('Y-m-d H:i'));
    
    header("Location: ../../../index.php");


}
