<?php
session_start();
require_once '../config/config.php'; // Incluir o arquivo de configuração
require_once '../config/conexao.php'; // Incluir o arquivo de conexão com o banco de dados

// Verificar o token CSRF
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    $_SESSION['erro_cadastro'] = 'Erro de segurança. Tente novamente.';
    header('Location: ../view/cadastro.php');
    exit;
}

// Verificar reCAPTCHA
$recaptcha_secret = RECAPTCHA_SECRET_KEY; // Utilizando a chave secreta do config.php
$recaptcha_response = $_POST['g-recaptcha-response'];

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
$responseKeys = json_decode($response, true);

// Verificar se o reCAPTCHA foi validado corretamente
if (intval($responseKeys["success"]) !== 1) {
    $_SESSION['erro_cadastro'] = 'Erro no reCAPTCHA. Tente novamente.';
    header('Location: ../view/cadastro.php');
    exit;
}

// Receber os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirma_senha = $_POST['confirma_senha'];

// Validar a senha
if ($senha !== $confirma_senha) {
    $_SESSION['erro_cadastro'] = 'As senhas não coincidem. Tente novamente.';
    header('Location: ../view/cadastro.php');
    exit;
}

// Verificar se a senha atende aos requisitos (mínimo de 8 caracteres, uma maiúscula, uma minúscula e um número)
if (!preg_match('/[A-Z]/', $senha) || !preg_match('/[a-z]/', $senha) || !preg_match('/\d/', $senha) || strlen($senha) < 8) {
    $_SESSION['erro_cadastro'] = 'A senha deve ter pelo menos 8 caracteres, incluindo uma letra maiúscula, uma minúscula e um número.';
    header('Location: ../view/cadastro.php');
    exit;
}

// Criptografar a senha
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

// Verificar se o email já está cadastrado usando prepared statement
$query = "SELECT * FROM usuarios WHERE email = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['erro_cadastro'] = 'E-mail já cadastrado. Tente outro.';
    header('Location: ../view/cadastro.php');
    exit;
}

// Inserir os dados no banco de dados
$query = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $senha_hash);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION['sucesso_cadastro'] = 'Cadastro realizado com sucesso! Agora você pode fazer login.';
    header('Location: ../view/login.php');
    exit;
} else {
    $_SESSION['erro_cadastro'] = 'Erro ao cadastrar: ' . mysqli_error($conn);
    header('Location: ../view/cadastro.php');
    exit;
}
?>
