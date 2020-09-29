<?php
    $login = $_POST["login"];

    if($login == "a"){
        echo json_encode(false);  // retorno no formato json para o plugin validator();
    }else{
        echo json_encode(false);
    }
?>