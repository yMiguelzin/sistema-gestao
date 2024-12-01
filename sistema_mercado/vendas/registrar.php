<?php
require_once '../../config/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto_id = $_POST['produto_id'];
    $quantidade = $_POST['quantidade'];
    $total = $_POST['total'];

    $sql = "INSERT INTO vendas (produto_id, quantidade, total, data) VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iid", $produto_id, $quantidade, $total);

    if ($stmt->execute()) {
        echo "Venda registrada com sucesso!";
    } else {
        echo "Erro ao registrar venda: " . $stmt->error;
    }
}

$sql_produtos = "SELECT * FROM produtos";
$result_produtos = $conn->query($sql_produtos);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Venda</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Registrar Venda</h1>
        <form method="POST">
            <select name="produto_id" required>
                <option value="">Selecione o Produto</option>
                <?php while ($produto = $result_produtos->fetch_assoc()) { ?>
                    <option value="<?php echo $produto['id']; ?>"><?php echo $produto['nome']; ?></option>
                <?php } ?>
            </select>
            <input type="number" name="quantidade" placeholder="Quantidade" required>
            <input type="number" name="total" placeholder="Total" required>
            <button type="submit" class="btn-submit">Registrar Venda</button>
        </form>
    </div>
</body>
</html>
