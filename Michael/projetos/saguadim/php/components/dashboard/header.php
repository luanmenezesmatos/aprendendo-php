<?php

include("conexao.php");

session_start();

isset($_SESSION['nomeusuario']) ? $nomeusuario = $_SESSION['nomeusuario'] : "";
$nomeusuario = $_SESSION['nomeusuario'];

?>

<header class="bg-surface-primary border-bottom pt-6">
  <div class="container-fluid">
    <div class="mb-npx">
      <div class="row align-items-center mb-4">
        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
          <h1 class="h2 mb-0 ls-tight dashboard-header">
            <?php
            if ($nomeusuario != null) {
            ?>
              <div class="greeting">
                <span class="hello">Olá,</span>
                <span class="username"><?= ucfirst(strtolower($nomeusuario)) ?></span>!
              </div>
            <?php
            } else {
              echo "<script>window.alert('Usuário não autenticado!')
                window.location.href='../../../html/login.html';</script>";
            }
            ?>
          </h1>
          <p class="mb-0 text-muted">Aqui é o seu painel de controle.</p>
        </div>
        <!-- <div class="col-sm-6 col-12 text-sm-end">
          <div class="mx-n1">
            <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
              <span class=" pe-2">
                <i class="bi bi-pencil"></i>
              </span>
              <span>Editar</span>
            </a>
            <a href="#" class="btn d-inline-flex btn-sm btn-success mx-1">
              <span class=" pe-2">
                <i class="bi bi-plus"></i>
              </span>
              <span>Criar</span>
            </a>
            <a href="#" class="btn d-inline-flex btn-sm btn-warning mx-1">
              <span class=" pe-2">
                <i class="bi bi-gear-wide-connected"></i>
              </span>
              <span>Gerenciar</span>
            </a>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</header>