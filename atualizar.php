<?php
include('conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$pedido = $_POST['pedido'];

$sql = "UPDATE pedidos SET nome='$nome', email='$email', pedido='$pedido' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header('Location: index.php');
} else {
  echo "Erro ao atualizar: " . $conn->error;
}
?>