<?php include('conexao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Assistência Técnica - Pedidos</title>
</head>
<body>
  <h2>Registrar Pedido</h2>
  <form action="inserir.php" method="POST">
    <input type="text" name="nome" placeholder="Nome" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <textarea name="pedido" placeholder="Digite seu pedido" required></textarea><br>
    <button type="submit">Enviar Pedido</button>
  </form>

  <h2>Pedidos Registrados</h2>
  <table border="1" cellpadding="10">
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Pedido</th>
      <th>Ações</th>
    </tr>
    <?php
      $sql = "SELECT * FROM pedidos";
      $result = $conn->query($sql);

      while($row = $result->fetch_assoc()) {
        echo "<tr>
          <td>{$row['nome']}</td>
          <td>{$row['email']}</td>
          <td>{$row['pedido']}</td>
          <td>
            <a href='editar.php?id={$row['id']}'>Editar</a> |
            <a href='deletar.php?id={$row['id']}' onclick=\"return confirm('Deseja excluir?')\">Excluir</a>
          </td>
        </tr>";
      }
    ?>
  </table>
</body>
</html>