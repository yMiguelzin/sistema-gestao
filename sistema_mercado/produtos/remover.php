<?php
require_once '../../config/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM produtos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Produto removido com sucesso!";
    } else {
        echo "Erro ao remover produto: " . $stmt->error;
    }
}
?>
