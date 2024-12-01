<?php
require_once '../../config/conexao.php';

if (isset($_GET['id'])) {
    $cliente_id = $_GET['id'];

    // Remover o cliente
    $sql = "DELETE FROM clientes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $cliente_id);

    if ($stmt->execute()) {
        echo "Cliente removido com sucesso!";
    } else {
        echo "Erro ao remover cliente: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover Cliente</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Remover Cliente</h1>
        <form method="GET">
            <input type="number" name="id" placeholder="ID do Cliente" required>
            <button type="submit" class="btn-submit">Remover Cliente</button>
        </form>
    </div>
</body>
</html>
