<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação do Sistema Restaurante</title>
    <link rel="icon" href="../images/favicon2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_sistema.css">
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

    <!-- Seção Hero -->
    <header class="hero text-center">
        <div class="container">
            <h1>Criação do Sistema Restaurante</h1>
            <p>Escolha os campos que deseja implementar no seu sistema de restaurante para gerenciamento de cardápio e reservas.</p>
        </div>
    </header>

    <!-- Seção de Formulário para seleção de campos -->
    <section id="criacao-sistema" class="form-section container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card form-card">
                    <h2 class="text-center mb-4">Selecione os Campos para Cadastro de Itens do Cardápio</h2>
                    <p class="form-description">Escolha os campos que deseja adicionar ao seu sistema de cadastro de itens do cardápio no restaurante.</p>
                    <form action="processa_criacao_restaurante.php" method="post" id="form-campos">
                        <div class="scroll-container" id="campo-lista-restaurante">
                            <!-- Campos de Restaurante serão mostrados aqui como checkboxes -->
                        </div>
                        <button type="submit" class="btn btn-custom">Criar Sistema de Restaurante</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-primary text-white text-center py-3 fixed-bottom">
        <p class="mb-0"><b>&copy; 2024 Sistema de Gestão Universal. Todos os direitos reservados.<b></p>
    </footer>

    <!-- Scripts do Bootstrap e JS para adicionar campos -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybG2Wb7jPIr3K4j5Pp8rfL9OL9wq5yJccwFq6HZ3di5StEVoG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0w7k6k8JjrmHrcqCz1bxqEXiRtM4dy2g9P9JmTfZxOPrVd6x" crossorigin="anonymous"></script>
    
    <!-- Script customizado -->
    <script src="../scripts/script_restaurante.js"></script>
    <script src="../scripts/script.js"></script>
</body>

</html>
