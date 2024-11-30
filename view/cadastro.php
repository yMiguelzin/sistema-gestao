<?php
session_start();
require_once '../config/config.php'; // Incluir arquivo de configuração
require_once '../config/conexao.php'; // Incluir arquivo de conexão com o banco de dados

// Gerar token CSRF, se não existir
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar token CSRF
    if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $_SESSION['erro_cadastro'] = 'Erro de segurança. Tente novamente.';
        header('Location: cadastro.php');
        exit;
    }

    // Verificar o reCAPTCHA
    $recaptcha_response = $_POST['g-recaptcha-response'];
    $recaptcha_secret = RECAPTCHA_SECRET_KEY;
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $response = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $response_keys = json_decode($response, true);

    if (intval($response_keys["success"]) !== 1) {
        $_SESSION['erro_cadastro'] = 'Erro no reCAPTCHA. Tente novamente.';
        header('Location: cadastro.php');
        exit;
    }

    // Receber dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];

    // Validar senhas
    if ($senha !== $confirma_senha) {
        $_SESSION['erro_cadastro'] = 'As senhas não coincidem. Tente novamente.';
        header('Location: cadastro.php');
        exit;
    }

    // Validar senha forte (mínimo de 8 caracteres, uma maiúscula, uma minúscula e um número)
    if (!preg_match('/[A-Z]/', $senha) || !preg_match('/[a-z]/', $senha) || !preg_match('/\d/', $senha) || strlen($senha) < 8) {
        $_SESSION['erro_cadastro'] = 'A senha deve ter pelo menos 8 caracteres, incluindo uma letra maiúscula, uma minúscula e um número.';
        header('Location: cadastro.php');
        exit;
    }

    // Criptografar a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Verificar se o email já está cadastrado
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['erro_cadastro'] = 'E-mail já cadastrado. Tente outro.';
        header('Location: cadastro.php');
        exit;
    }

    // Inserir usuário no banco de dados
    $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha_hash')";
    if (mysqli_query($conn, $query)) {
        $_SESSION['sucesso_cadastro'] = 'Cadastro realizado com sucesso! Agora você pode fazer login.';
        header('Location: login.php');
        exit;
    } else {
        $_SESSION['erro_cadastro'] = 'Erro ao cadastrar: ' . mysqli_error($conn);
        header('Location: cadastro.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Sistema de Gestão Universal</title>
    <link rel="icon" href="../images/favicon2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> <!-- ReCAPTCHA -->
</head>
<body>

<!-- Cabeçalho -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Gerenciador Web</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Formulário de Cadastro -->
<main class="container pt-5 mt-5">
    <section class="text-center mb-5">
        <h2 class="mb-4">Cadastro</h2>
        <p class="lead mb-5">Crie sua conta para acessar o sistema de gestão.</p>
    </section>

    <!-- Mensagem de erro -->
    <?php
    if (isset($_SESSION['erro_cadastro'])) {
        echo '<div class="alert alert-danger" role="alert">' . $_SESSION['erro_cadastro'] . '</div>';
        unset($_SESSION['erro_cadastro']);
    }
    ?>

    <!-- Mensagem de sucesso -->
    <?php
    if (isset($_SESSION['sucesso_cadastro'])) {
        echo '<div class="alert alert-success" role="alert">' . $_SESSION['sucesso_cadastro'] . '</div>';
        unset($_SESSION['sucesso_cadastro']);
    }
    ?>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4 shadow-sm rounded">
                <form action="cadastro.php" method="POST">
                    <!-- Token CSRF -->
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nome" name="nome" required placeholder="Digite seu nome" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Digite seu e-mail" />
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" required placeholder="Escolha uma senha" />
                        <small class="text-muted">A senha deve ter pelo menos 8 caracteres, incluindo uma letra maiúscula, uma minúscula e um número.</small>
                    </div>
                    <div class="mb-3">
                        <label for="confirma_senha" class="form-label">Confirmar Senha</label>
                        <input type="password" class="form-control" id="confirma_senha" name="confirma_senha" required placeholder="Confirme sua senha" />
                    </div>

                    <!-- ReCAPTCHA -->
                    <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>"></div>

                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<!-- Rodapé -->
<footer class="bg-primary text-white text-center py-3 fixed-bottom">
    <p class="mb-0"><b>&copy; 2024 Sistema de Gestão Universal. Todos os direitos reservados.<b></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="../scripts/script.js?v=1.0"></script>

</body>
</html>
