<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão Universal</title>
    <link rel="icon" href="../images/favicon2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet"> <!-- Fonte moderna -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Seu CSS personalizado -->
</head>
<body>

   <!-- Cabeçalho -->
<header class="bg-light shadow-sm fixed-top">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <h1 class="h4 mb-0 logo">Sistema de Gestão Universal</h1>
        <div class="d-flex">
            <!-- Botão de login -->
            <a href="login.php" class="btn btn-login mx-2">Login</a>
            <!-- Botão de cadastro -->
            <a href="cadastro.php" class="btn btn-cadastrar mx-2">Cadastrar</a>
        </div>
    </div>
</header>

    <!-- Conteúdo principal -->
    <main class="container pt-5 mt-5">
        <section class="text-center mb-5">
            <h2 class="mb-4">O que é o Sistema de Gestão Universal?</h2>
            <p class="lead mb-5">O Sistema de Gestão Universal foi criado para atender qualquer tipo de negócio, seja uma barbearia, um consultório, um pequeno comércio ou grandes empresas. Com ele, você pode personalizar e gerenciar sistemas como financeiro, RH, vendas, e muito mais.</p>
        </section>

        <!-- Cards sobre os recursos do sistema -->
        <section class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card card-hr shadow-lg border-0 rounded-3">
                    <div class="card-body">
                        <h5 class="card-title">Gestão de Recursos Humanos</h5>
                        <p class="card-text">Gerencie informações de funcionários e folhas de pagamento.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-finance shadow-lg border-0 rounded-3">
                    <div class="card-body">
                        <h5 class="card-title">Gestão Financeira</h5>
                        <p class="card-text">Controle suas finanças com relatórios detalhados e previsões de fluxo de caixa.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-project shadow-lg border-0 rounded-3">
                    <div class="card-body">
                        <h5 class="card-title">Gestão de Projetos</h5>
                        <p class="card-text">Organize seus projetos e atribua tarefas para sua equipe.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Rodapé -->
    <footer class="bg-primary text-white text-center py-3 fixed-bottom">
        <p class="mb-0"><b>&copy; 2024 Sistema de Gestão Universal. Todos os direitos reservados.<b></p>
    </footer>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../scripts/script.js"></script>
</body>
</html>
