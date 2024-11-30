<?php
session_start();
include('../config/conexao.php');

// Verifica se a requisição é do tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    // Busca o usuário pelo e-mail
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $usuario = mysqli_fetch_assoc($result);

        // Verifica se a conta está bloqueada
        if (!empty($usuario['tempo_bloqueio']) && strtotime($usuario['tempo_bloqueio']) > time()) {
            $tempo_restante = ceil((strtotime($usuario['tempo_bloqueio']) - time()) / 60);
            $_SESSION['erro_login'] = "Conta bloqueada. Tente novamente em $tempo_restante minutos.";
            header('Location: ../view/login.php');
            exit();
        }

        // Verifica a senha
        if (password_verify($senha, $usuario['senha'])) {
            // Inicia sessão do usuário
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];

            // Reseta tentativas falhas e tempo de bloqueio
            $query = "UPDATE usuarios SET tentativas_falhas = 0, tempo_bloqueio = NULL WHERE id = '{$usuario['id']}'";
            mysqli_query($conn, $query);

            header('Location: ../view/dashboard.php');
            exit();
        } else {
            // Incrementa tentativas falhas e bloqueia após 3
            $tentativas = $usuario['tentativas_falhas'] + 1;
            if ($tentativas >= 3) {
                $tempo_bloqueio = date('Y-m-d H:i:s', strtotime('+15 minutes'));
                $query = "UPDATE usuarios SET tentativas_falhas = $tentativas, tempo_bloqueio = '$tempo_bloqueio' WHERE id = '{$usuario['id']}'";
                mysqli_query($conn, $query);
                $_SESSION['erro_login'] = "Conta bloqueada após várias tentativas falhas.";
            } else {
                $query = "UPDATE usuarios SET tentativas_falhas = $tentativas WHERE id = '{$usuario['id']}'";
                mysqli_query($conn, $query);
                $_SESSION['erro_login'] = "Senha incorreta! $tentativas de 3 tentativas usadas.";
            }
            header('Location: ../view/login.php');
            exit();
        }
    } else {
        $_SESSION['erro_login'] = 'Usuário não encontrado!';
        header('Location: ../view/login.php');
        exit();
    }
} else {
    header('Location: ../view/login.php');
    exit();
}
?>
