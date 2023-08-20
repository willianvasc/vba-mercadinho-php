<?php
    include_once("conn.php");
    if(isset($_POST['cadastrar'])){
    mysqli_query($conn,"INSERT INTO mercadinho.produtos(nome_produto,valor,estoque) VALUES('$_POST[nome_prod]',$_POST[valor_prod],$_POST[estoque_prod])");
    }