<?php
include('conexao.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$pedido = $_POST['pedido'];

$sql = "INSERT INTO pedidos (nome, email, pedido) VALUES ('$nome', '$email', '$pedido')";

if ($conn->query($sql) === TRUE) {
  header('Location: index.php');
} else {
  echo "Erro: " . $conn->error;
}
?>