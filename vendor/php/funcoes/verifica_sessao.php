<?php
if($_SESSION['user_logado'] === FALSE || isset($_SESSION['user_logado']) === FALSE){
    header("Location: login.php");
}


?>