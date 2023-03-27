<?php 
    include_once './connect.php';

    $sql = mysqli_query($connect, "SELECT * FROM users") or die( 
        mysqli_error($connect)
    );

    // while($aux = mysqli_fetch_assoc($sql)) { 
    //     echo "-----------------------------------------<br />"; 
    //     echo "Nome: ".$aux["name"]."<br />"; 
    //     echo "Usuário: ".$aux["user"]."<br />"; 
    //     echo "E-mail: ".$aux["email"]."<br />";
    //     echo "Senha: ".$aux["password"]."<br />";
    // }

    echo "<h1>Usuários cadastrados</h1><br />";

    $count = 0;
    while($aux = mysqli_fetch_assoc($sql)) { 
    echo "-----------------------------------------<br />";
    echo "Usuário: ".$aux["user"]."<br />"; 
    $count++;
    }

    echo "<p>Total de cadastros: $count</p>";
?>