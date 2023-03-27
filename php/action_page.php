<?php 
    include_once './connect.php';
    $name = $_POST['name'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

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

    $sql = "INSERT INTO users (name, user, email, password) VALUES ('{$name}', '{$user}', '{$email}', '{$pass}')";

    if (mysqli_query($connect, $sql)) {
        header('Location:./show.php') or die();
        echo "New record created successfully";
    } else {
        echo "Deu erro: " . $sql . "<br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>