<?php

$login = $_POST["usuario"];
$senha = $_POST["senha"];
if(isset($_POST["salvar"])){
    setcookie("login",$login);
    setcookie("senha",$senha);
}
else{
    setcookie("login",$login,time()-1);
    setcookie("senha",$senha,time()-1);
}

if($_POST["usuario"] == "admin" && $_POST["senha"] == "123"){
    session_start();
    $_SESSION["logado"] = true;
    header('Location: logado.php');
}
else{
    header('Location: index.php');
}
?>