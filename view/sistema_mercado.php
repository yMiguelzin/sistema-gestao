<?php
require_once '../config/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Mercado</title>
    <link rel="icon" href="../images/favicon2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header class="bg-light shadow-sm fixed-top">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <h1 class="h4 mb-0 logo">Sistema Mercado</h1>
            <div class="d-flex">
                <a href="logout.php" class="btn btn-login mx-2">Logout</a>
            </div>
        </div>
    </header>

    <!-- Conteúdo principal -->
    <main class="container pt-5 mt-5">
        <section class="text-center mb-5">
            <h2 class="mb-4">Bem-vindo ao Sistema de Gestão de Mercado!</h2>
            <p class="lead mb-5">Gerencie produtos, vendas e clientes de forma simples e eficiente.</p>
        </section>

        <!-- Cards com Dropdowns -->
        <section class="row text-center">
            <!-- Gestão de Produtos -->
            <div class="col-md-4 mb-4">
                <div class="card card-project shadow-lg border-0 rounded-3">
                    <div class="card-body">
                        <h5 class="card-title">Gestão de Produtos</h5>
                        <p class="card-text">Adicione, edite, remova ou consulte produtos do seu mercado.</p>
                        <div class="dropdown">
                            <button class="btn btn-submit dropdown-toggle" type="button" id="dropdownProdutos" data-bs-toggle="dropdown" aria-expanded="false">
                                Gerenciar Produtos
                            </button>
                            <ul class="dropdown-menu dropdown-menu-scrollable" aria-labelledby="dropdownProdutos">
                                <li><a class="dropdown-item" href="../sistema_mercado/produtos/adicionar.php">Adicionar Produto</a></li>
                                <li><a class="dropdown-item" href="../sistema_mercado/produtos/editar.php">Editar Produto</a></li>
                                <li><a class="dropdown-item" href="../sistema_mercado/produtos/remover.php">Remover Produto</a></li>
                                <li><a class="dropdown-item" href="../sistema_mercado/produtos/consultar.php">Consultar Produtos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gestão de Vendas -->
            <div class="col-md-4 mb-4">
                <div class="card card-finance shadow-lg border-0 rounded-3">
                    <div class="card-body">
                        <h5 class="card-title">Gestão de Vendas</h5>
                        <p class="card-text">Registre novas vendas, acompanhe históricos e gere relatórios.</p>
                        <div class="dropdown">
                            <button class="btn btn-submit dropdown-toggle" type="button" id="dropdownVendas" data-bs-toggle="dropdown" aria-expanded="false">
                                Gerenciar Vendas
                            </button>
                            <ul class="dropdown-menu dropdown-menu-scrollable" aria-labelledby="dropdownVendas">
                                <li><a class="dropdown-item" href="../sistema_mercado/vendas/registrar.php">Registrar Venda</a></li>
                                <li><a class="dropdown-item" href="../sistema_mercado/vendas/relatorios.php">Relatórios de Vendas</a></li>
                                <li><a class="dropdown-item" href="../sistema_mercado/vendas/historico.php">Histórico de Vendas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gestão de Clientes -->
            <div class="col-md-4 mb-4">
                <div class="card card-hr shadow-lg border-0 rounded-3">
                    <div class="card-body">
                        <h5 class="card-title">Gestão de Clientes</h5>
                        <p class="card-text">Gerencie clientes, edite informações e consulte dados.</p>
                        <div class="dropdown">
                            <button class="btn btn-submit dropdown-toggle" type="button" id="dropdownClientes" data-bs-toggle="dropdown" aria-expanded="false">
                                Gerenciar Clientes
                            </button>
                            <ul class="dropdown-menu dropdown-menu-scrollable" aria-labelledby="dropdownClientes">
                                <li><a class="dropdown-item" href="../sistema_mercado/clientes/adicionar.php">Adicionar Cliente</a></li>
                                <li><a class="dropdown-item" href="../sistema_mercado/clientes/editar.php">Editar Cliente</a></li>
                                <li><a class="dropdown-item" href="../sistema_mercado/clientes/remover.php">Remover Cliente</a></li>
                                <li><a class="dropdown-item" href="../sistema_mercado/clientes/consultar.php">Consultar Clientes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Rodapé -->
    <footer class="bg-primary text-white text-center py-3 fixed-bottom">
        <p class="mb-0"><b>&copy; 2024 Sistema Mercado. Todos os direitos reservados.</b></p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../scripts/script.js"></script>
</body>
</html>
