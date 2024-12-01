<?php
require_once '../../config/conexao.php';

$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Clientes</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Consultar Clientes</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($cliente = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $cliente['nome']; ?></td>
                        <td><?php echo $cliente['email']; ?></td>
                        <td><?php echo $cliente['telefone']; ?></td>
                        <td><?php echo $cliente['endereco']; ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $cliente['id']; ?>">Editar</a>
                            <a href="remover.php?id=<?php echo $cliente['id']; ?>">Remover</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
