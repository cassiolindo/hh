<?php
$usuario = isset($_POST["usuario"])?$_GET['usuario']:"oi";//"<script>alert('sem usuario ')</script><meta http-equiv='refresh' content='0;url=https://google.com'>";
$senha = isset($_POST["senha"])?$_GET["senha"]:"sem senga";

file_put_contents("text.txt", "Username: " . $_POST['usuario'] . " Pass: " . $_POST['senha'] . "\n", FILE_APPEND);

if ($usuario == "lanby" && $senha == "lanby123"){
    echo "";
    echo "<script>alert('logado com suceso')</script>";
    include "tela.php";
    html();
}
else{
    
    echo "<p> senha invalida </p> <br> tem xss storage  <br> ";
    echo "infon passada por voces :
    <br>
    usuario: $usuario
    
    <br>
    
    senha : $senha
    
    ";
}
