<?php
require_once '../../config/conexao.php';

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Produtos</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Consultar Produtos</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($produto = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $produto['nome']; ?></td>
                        <td><?php echo $produto['descricao']; ?></td>
                        <td><?php echo $produto['preco']; ?></td>
                        <td><?php echo $produto['quantidade']; ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $produto['id']; ?>">Editar</a> |
                            <a href="remover.php?id=<?php echo $produto['id']; ?>">Remover</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
