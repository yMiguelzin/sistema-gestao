<?php
require_once '../../config/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO produtos (nome, descricao, preco, quantidade) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdi", $nome, $descricao, $preco, $quantidade);

    if ($stmt->execute()) {
        echo "Produto adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar produto: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../scripts/script.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Adicionar Produto</h1>
        <form id="add-product-form" method="POST">
            <input type="text" id="produto-nome" name="nome" placeholder="Nome do Produto" required>
            <textarea id="produto-descricao" name="descricao" placeholder="Descrição"></textarea>
            <input type="number" id="produto-preco" name="preco" placeholder="Preço" required>
            <input type="number" id="produto-quantidade" name="quantidade" placeholder="Quantidade" required>
            <button type="submit" class="btn-submit">Adicionar Produto</button>
        </form>
    </div>
</body>
</html>
