<?php 
    include_once './connect.php';
    $name = $_GET['name'];
    $user = $_GET['user'];
    $email = $_GET['email'];
    $pass = $_GET['pass'];

    // echo "Nome: $name<br>Usuário: $user<br>E-mail: $email<br>Senha: $password";

    // $dbHostname = "localhost";
    // $db = "clientes";
    // $dbUser = "root";
    // $dbPass = "";

    // $connect = mysqli_connect($dbHostname, $dbUser, $dbPass);
    // $selectedDb = mysqli_select_db($connect, $db); 

    // if (!$connect) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    // if (mysqli_query($connect, $sql)) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Deu erro: " . $sql . "<br>" . mysqli_error($connect);
    // }

    $sql = "INSERT INTO cadastro (name, user, email, password) VALUES ('{$name}', '{$user}', '{$email}', '{$pass}')";

    if (mysqli_query($connect, $sql)) {
        header('Location:./show.php') or die();
        echo "New record created successfully";
    } else {
        echo "Deu erro: " . $sql . "<br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>