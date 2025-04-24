<?php
include('conexao.php');

$id = $_GET['id'];
$sql = "SELECT * FROM pedidos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form action="atualizar.php" method="POST">
  <input type="hidden" name="id" value="<?= $row['id'] ?>">
  <input type="text" name="nome" value="<?= $row['nome'] ?>" required><br>
  <input type="email" name="email" value="<?= $row['email'] ?>" required><br>
  <textarea name="pedido" required><?= $row['pedido'] ?></textarea><br>
  <button type="submit">Atualizar Pedido</button>
</form>