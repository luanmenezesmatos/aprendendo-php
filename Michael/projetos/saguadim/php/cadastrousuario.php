<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../assets/css/dashboard.css">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<body>
  <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <?php include("components/dashboard/navbar.php"); ?>

    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
      <?php include("components/cadastro-usuario/header.php"); ?>

      <div class="mt-10 cadastro-usuario">
        <form action="cadastrousuario.php" method="POST">
          <div class="row g-3">
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="nomeusuario">Nome</label>
                <input type="text" class="form-control" id="nomeusuario" name="nomeusuario" placeholder="Digite o nome do usuário" required>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="emailusuario">E-mail</label>
                <input type="email" class="form-control" id="emailusuario" name="emailusuario" placeholder="Digite o e-mail do usuário" required>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="senhausuario">Senha</label>
                <input type="password" class="form-control" id="senhausuario" name="senhausuario" placeholder="Digite a senha do usuário" required>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="confirmarsenhausuario">Confirmar Senha</label>
                <input type="password" class="form-control" id="confirmarsenhausuario" name="confirmarsenhausuario" placeholder="Confirme a senha do usuário" required>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="tipousuario">Tipo de Usuário</label>
                <select class="form-control" id="tipousuario" name="tipousuario" required>
                  <option value="1">Administrador</option>
                  <option value="2">Usuário</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="statususuario">Status</label>
                <select class="form-control" id="statususuario" name="statususuario" required>
                  <option value="1">Ativo</option>
                  <option value="2">Inativo</option>
                </select>
              </div>
            </div>
          </div>
          <div class="mt-4 text-center">
            <div class="form-group">
              <button type="submit" class="btn btn-warning text-white">Cadastrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>