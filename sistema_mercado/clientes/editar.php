<?php
require_once '../../config/conexao.php';

if (isset($_GET['id'])) {
    $cliente_id = $_GET['id'];

    // Buscar os dados do cliente para editar
    $sql = "SELECT * FROM clientes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $cliente_id);
    $stmt->execute();
    $cliente = $stmt->get_result()->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];

        $sql_update = "UPDATE clientes SET nome = ?, email = ?, telefone = ?, endereco = ? WHERE id = ?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param("ssssi", $nome, $email, $telefone, $endereco, $cliente_id);

        if ($stmt_update->execute()) {
            echo "Cliente atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar cliente: " . $stmt_update->error;
        }
    }
} else {
    echo "Cliente não encontrado!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Editar Cliente</h1>
        <form method="POST">
            <input type="text" name="nome" value="<?php echo $cliente['nome']; ?>" required>
            <input type="email" name="email" value="<?php echo $cliente['email']; ?>" required>
            <input type="text" name="telefone" value="<?php echo $cliente['telefone']; ?>" required>
            <input type="text" name="endereco" value="<?php echo $cliente['endereco']; ?>" required>
            <button type="submit" class="btn-submit">Atualizar Cliente</button>
        </form>
    </div>
</body>
</html>
