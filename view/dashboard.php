<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento Web</title>
    <link rel="icon" href="../images/favicon2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_dashboard.css"> <!-- Seu CSS personalizado -->
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
                        <a class="nav-link active" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#funcionalidades">Funcionalidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#criacao-sistema">Criação de Sistema</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userMenu" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-gear"></i> <!-- Ícone de engrenagem -->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                            <li><a class="dropdown-item" href="configuracao.php">Configurações</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="../control/logout.php">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Seção Hero -->
    <header class="hero text-center">
        <div class="container">
            <h1 class="display-5">Bem-Vindo ao seu Dashboard</h1>
            <p class="card-text">Conecte seu sistema a bancos de dados para armazenar e gerenciar informações.</p>
        </div>
    </header>

    <!-- Criação de Sistema -->
    <section id="criacao-sistema" class="container py-5">
        <h2 class="text-center">Escolha um Tema</h2>
        <p class="text-center mb-5">Selecione um dos temas abaixo para criar seu sistema de gerenciamento. Cada tema
            possui o seu propósito.</p>
        <div class="row">
            <!-- Tema 1 -->
            <div class="col-md-4">
                <a href="sistema_rh.php" class="card-link" style="text-decoration: none; color: inherit;">
                    <div class="card theme-card">
                        <img src="../images/rh.jpeg" alt="Tema 1">
                        <div class="card-body">
                            <h5 class="card-title">RH</h5>
                            <p class="theme-description">Um sistema de RH é uma ferramenta que ajuda a gerenciar processos como contratação, folha de pagamento e benefícios dos funcionários.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tema 2 -->
            <div class="col-md-4">
                <a href="sistema_mercado.php" class="card-link" style="text-decoration: none; color: inherit;">
                    <div class="card theme-card">
                        <img src="../images/mercado.jpg" alt="Tema 2">
                        <div class="card-body">
                            <h5 class="card-title">Mercados</h5>
                            <p class="theme-description">Um sistema de mercado é uma plataforma que facilita a compra e venda de produtos ou serviços, conectando vendedores e compradores.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tema 3 -->
            <div class="col-md-4">
                <a href="sistema_restaurante.php" class="card-link" style="text-decoration: none; color: inherit;">
                    <div class="card theme-card">
                        <img src="../images/restaurante.jpg" alt="Tema 3">
                        <div class="card-body">
                            <h5 class="card-title">Restaurante</h5>
                            <p class="theme-description">Um sistema de restaurante ajuda na gestão de pedidos, controle de estoque, atendimento ao cliente e processamento de pagamentos </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-primary text-white text-center py-3 fixed-bottom">
        <p class="mb-0"><b>&copy; 2024 Sistema de Gestão Universal. Todos os direitos reservados.</b></p>
    </footer>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- Biblioteca de ícones -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <script src="../scripts/script.js?v=1.0"></script>

</body>

</html>
