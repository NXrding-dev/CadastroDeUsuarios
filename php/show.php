<?php 
    include_once './connect.php';

    $sql = mysqli_query($connect, "SELECT * FROM cadastro") or die( 
        mysqli_error($connect)
    );

    while($aux = mysqli_fetch_assoc($sql)) { 
    echo "-----------------------------------------<br />"; 
    echo "Nome: ".$aux["name"]."<br />"; 
    echo "Usuário: ".$aux["user"]."<br />"; 
    echo "E-mail: ".$aux["email"]."<br />";
    echo "Senha: ".$aux["password"]."<br />";
    }
?>