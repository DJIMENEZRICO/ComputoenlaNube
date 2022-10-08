<?php
$error;
if(!empty($_POST[ 'nickname']) && !empty($_POST[ 'password'])){
    $nickname= $_POST['nickname'];
    $password= $_POST['password'];
    if($nickname==! "usuario" && $password=="123"){
        
            echo "usuario incorrecto";
    }else echo "contraseña incorrecta";

    if($nickname== "usuario" && $password=="123"){
        $error = "ok";
            echo "Accedio";
    }else{
        $error="incorrecto";
        header("Location: index.php?error=$error");
    }
}else{
    $error="vacio";
    header("Location: index.php?error=$error");
}