<?php
include_once __DIR__ . '/../../controle/autentica_pagina.php';
$esconderBotaoCadastro = !Autenticador::verificarAcessoAdministrador();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/gerenciar_pedidos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo.png">
    <script src="https://kit.fontawesome.com/e874ed8d35.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Gerenciar Pedidos</title>
</head>

<body>
    <div class="d-flex flex-column flex-md-row vh-100">
        <!-- Sidebar -->
        <div class="sidebar text-white d-flex flex-column align-items-center py-4 px-3" style="width: 60px;">
            <a href="./../homepage/home_page.php" class="mb-4">
                <img src="../../assets/icons/menu.svg" alt="Menu" width="32">
            </a>
            <a href="../gerenciarPedidos/gerenciar_pedidos.php" class="mb-3">
                <img src="../../assets/icons/comanda.svg" alt="Comanda" width="28">
            </a>
            <a href="../estoque/estoque.php" class="mb-3">
                <img src="../../assets/icons/estoque.svg" alt="Estoque" width="28">
            </a>
            <a href="../marmitas/marmita.php" class="mb-3">
                <img src="../../assets/icons/icons8-cadastro-100.png" alt="Cadastro" width="28">
            </a>
            <?php if (!$esconderBotaoCadastro): ?>
                <a href="../novoUsuario/cadastro.php" class="mb-3">
                    <img src="../../assets/icons/usuario.png" alt="Cadastro" width="28">
                </a>
            <?php endif; ?>
        </div>
        <!-- parte central  -->
        <div class="flex-grow-1">
            <!-- Navbar -->
            <nav class="topo navbar shadow-sm py-3">
                <div class="container-fluid d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <a href="./../homepage/home_page.php">
                            <img src="../../assets/img/logo.png" alt="Marmitaria Fit Logo" width="45">
                        </a>
                        <span class="ms-2 fs-6 fst-italic">Marmitaria Fit</span>
                    </div>
                    <div>
                        <a href="../../controle/logout.php" class="btn btn-danger btn-sm">Sair</a>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <div class="container-fluid p-4">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#cadastrar_pedido_modal" onclick="carregarSelectorModalCadastrarPedido()">Novo Pedido</button>
                </div>

                <div class="page_content">
                    <?php
                    include_once __DIR__ . '/componentes/lista_de_pedidos.php';
                    ?>
                </div>
            </div>
        </div>
    </div>


    <?php include_once __DIR__ . "/componentes/cadastrar_pedido_modal.php"; ?>

</body>

<script src="scripts/cadastrar_pedidos.js"></script>
<script src="scripts/carregar_pedidos.js"></script>
<script src="scripts/concluir_pedido.js"></script>
<script src="scripts/excluir_pedidos.js"></script>

</html>
