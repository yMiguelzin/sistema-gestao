<?php
require_once '../../config/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $sql = "UPDATE produtos SET nome = ?, descricao = ?, preco = ?, quantidade = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdis", $nome, $descricao, $preco, $quantidade, $id);

    if ($stmt->execute()) {
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar produto: " . $stmt->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $produto = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Editar Produto</h1>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
            <input type="text" name="nome" value="<?php echo $produto['nome']; ?>" required>
            <textarea name="descricao"><?php echo $produto['descricao']; ?></textarea>
            <input type="number" name="preco" value="<?php echo $produto['preco']; ?>" required>
            <input type="number" name="quantidade" value="<?php echo $produto['quantidade']; ?>" required>
            <button type="submit" class="btn-submit">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
