<?php
    include('conn.php');

    //dados recebidos do formulário /Alterar para POST
    $username = $_GET['username'];
    $name = $_GET['name'];
    $address = $_GET['address'];
    $email = $_GET['email'];

    //ligação à base de dados
    $conn = mysqli_connect($dbHost, $dbuser, $dbpass, $dbschema);

    if(!$conn)
    {
        die("sem ligação à base de dados.");
    }

    //query
    $sql = "CALL create_new_user('$username', '$name', '$address', '$email');";

    //executa a query
    mysqli_query($conn, $sql);

    //reencaminhar para o index
    header("location: ./?created=true");
    die();