<?php
$error;
if(!empty($_POST['usuario']) && !empty($_POST['password'])){
    $username =$_POST['usuario'];
    $password = $_POST['password'];
    if($username == "administrador" && $password == "asd"){
        $error = "OK";
        header("location: menuA.php");

    }elseif($username == "cliente" && $password == "123"){
        $error = "OK";
        header("location: menuB.php");

    }else{
       
        echo "<h1>USUARIO Y CONTRASEÑA INCORRECTOS</h1>";

}
}else  header("location: index.html");



?>