<?php
session_start();

// Redireciona para o dashboard se o usuário já estiver logado
if (isset($_SESSION['usuario_id'])) {
    header('Location: dashboard.php');
    exit();
}

// Verifica se há uma mensagem de erro de login ou bloqueio
$erro_login = $_SESSION['erro_login'] ?? '';
unset($_SESSION['erro_login']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Gestão Universal</title>
    <link rel="icon" href="../images/favicon2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Gerenciador Web</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container pt-5 mt-5">
        <section class="text-center mb-5">
            <h2 class="mb-4">Login</h2>
            <p class="lead mb-5">Entre no seu sistema de gestão com suas credenciais.</p>
        </section>

        <?php if ($erro_login): ?>
            <div class="alert alert-danger" role="alert"><?= $erro_login ?></div>
        <?php endif; ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm rounded">
                    <form action="../control/processa_login.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Digite seu e-mail">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required placeholder="Digite sua senha">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Entrar</button>
                    </form>
                    <div class="mt-3 text-center">
                        <p>Ainda não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

        <!-- Rodapé -->
        <footer class="bg-primary text-white text-center py-3 fixed-bottom">
        <p class="mb-0"><b>&copy; 2024 Sistema de Gestão Universal. Todos os direitos reservados.</b></p>
    </footer>
    
    <script src="../scripts/script.js"></script>
</body>
</html>
