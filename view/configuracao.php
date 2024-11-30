<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações de Conta</title>
    <link rel="icon" href="../images/favicon2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_configuracao.css">
</head>
<body>
    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Gerenciador Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="../view/dashboard.php">Voltar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-danger" href="../control/logout.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="settings-container">

        <!-- Container de Configurações -->

        <!-- Seção de Alteração de Dados -->
        <section class="settings-section">
            <h2>Informações da Conta</h2>
            <div class="info">
                <p><strong>Nome:</strong> João Silva</p>
                <p><strong>E-mail:</strong> joao@example.com</p>
            </div>
            <button class="btn-edit" id="edit-info">Alterar Informações</button>
        </section>

        <!-- Seção de Alteração de Senha -->
        <section class="settings-section">
            <h2>Alterar Senha</h2>
            <button class="btn-edit" id="change-password-toggle">Alterar Senha</button>
        </section>

        <!-- Seção de Exclusão de Conta -->
        <section class="settings-section">
            <h2>Excluir Conta</h2>
            <button class="btn-danger" id="delete-account">Excluir Conta</button>
        </section>

        <!-- Formulários (invisíveis por padrão) -->
        <div class="form-container" id="edit-info-form">
            <h3>Alterar Dados</h3>
            <form>
                <label for="new-name">Novo Nome</label>
                <input type="text" id="new-name" placeholder="Digite seu novo nome" required>
                <label for="new-email">Novo E-mail</label>
                <input type="email" id="new-email" placeholder="Digite seu novo e-mail" required>
                <button type="submit" class="btn-submit">Salvar Alterações</button>
            </form>
        </div>

        <div class="form-container" id="change-password-form">
            <h3>Alterar Senha</h3>
            <form>
                <label for="current-password">Senha Atual</label>
                <input type="password" id="current-password" placeholder="Digite sua senha atual" required>
                <label for="new-password">Nova Senha</label>
                <input type="password" id="new-password" placeholder="Digite sua nova senha" required>
                <button type="submit" class="btn-submit">Alterar Senha</button>
            </form>
        </div>
    </div>
    <br>

  <!-- Rodapé -->
  <footer class="bg-primary text-white text-center py-3 fixed-bottom">
        <p class="mb-0"><b>&copy; 2024 Sistema de Gestão Universal. Todos os direitos reservados.</b></p>
    </footer>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- Biblioteca de ícones -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Scripts Ações -->
    <script src="../scripts/script.js"></script>
</body>

</html>
