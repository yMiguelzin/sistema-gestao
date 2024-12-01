<?php
require_once '../../config/conexao.php';

$sql = "SELECT v.id, p.nome AS produto, v.quantidade, v.total, v.data FROM vendas v INNER JOIN produtos p ON v.produto_id = p.id ORDER BY v.data DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Vendas</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Histórico de Vendas</h1>
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($venda = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $venda['produto']; ?></td>
                        <td><?php echo $venda['quantidade']; ?></td>
                        <td><?php echo $venda['total']; ?></td>
                        <td><?php echo $venda['data']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
