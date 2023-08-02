<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pet_care_db';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $especie = isset($_POST['especie']) ? $_POST['especie'] : '';
    $cor = isset($_POST['cor']) ? $_POST['cor'] : '';
    $idade = isset($_POST['idade']) ? $_POST['idade'] : '';
    $ultimo_local = isset($_POST['ultimo_local']) ? $_POST['ultimo_local'] : '';

    $sql = "INSERT INTO pets (nome, especie, cor, idade, ultimo_local_visto) 
            VALUES ('$nome', '$especie', '$cor', '$idade', '$ultimo_local')";

    if ($conn->query($sql) === TRUE) {
        echo "Pet cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o pet: " . $conn->error;
    }
}

$conn->close();
?>