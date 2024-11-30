<?php
    require_once '../config/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema RH</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../scripts/script.js" defer></script>
</head>
<body>
    <header>
        <div class="container">
            <h1>Sistema RH</h1>
        </div>
    </header>
    <main class="container">
        <section id="configurar-sistema">
                <h2>Configuração do Sistema</h2>
                <form method="POST" action="../control/processa_criacao.php">
                <div class="form-group">
                    <label for="nome_sistema">Nome do Sistema</label>
                    <input type="text" name="nome_sistema" id="nome_sistema" placeholder="Digite o nome do sistema" required>
                </div>
                <div class="form-group">
                    <label>Selecione os campos para o sistema:</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="campos[]" value="nome_completo"> Nome Completo</label>
                        <label><input type="checkbox" name="campos[]" value="data_nascimento"> Data de Nascimento</label>
                        <label><input type="checkbox" name="campos[]" value="cpf"> CPF</label>
                        <label><input type="checkbox" name="campos[]" value="rg"> RG</label>
                        <label><input type="checkbox" name="campos[]" value="sexo"> Sexo</label>
                        <label><input type="checkbox" name="campos[]" value="endereco"> Endereço</label>
                        <label><input type="checkbox" name="campos[]" value="telefone"> Telefone</label>
                        <label><input type="checkbox" name="campos[]" value="email"> Email</label>
                        <label><input type="checkbox" name="campos[]" value="cargo"> Cargo</label>
                        <label><input type="checkbox" name="campos[]" value="salario"> Salário</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-submit">Criar Sistema</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Projeto Gestão Universal</p>
    </footer>
</body>
</html>
