<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Voltec | Área Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/css/iziToast.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-secondary">
      <div class="card-header text-center">
        <img src="../assets/images/resources/original.png" width="180">
      </div>
      <div class="card-body">
        <p class="login-box-msg">Faça Login para iniciar sua Sessão</p>

        <form action="configs/login/loginPass.php" method="POST">
          <div class="input-group mb-3">
            <input required name="usuario" type="text" class="form-control" placeholder="Usuário">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input required name="senha" type="password" class="form-control" placeholder="Senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <?php if (isset($_SESSION['msgLogin'])) {
                $msgLogin = $_SESSION['msgLogin'];
                if ($msgLogin == "Erro ao Efetuar Login.") {?>
                  <div style="display: flex; justify-content: center; align-items: center;" class="bg-danger p-2 mb-2">
                    <b>Usuário ou Senha Incorretos.</b>
                  </div>
              <?php }
              } ?>
              <button type="submit" class="btn btn-secondary btn-block">Entrar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

  <script src="../assets/js/iziToast.min.js"></script>
  <script>
    <?php if (isset($_SESSION['msgLogin'])) { ?>
      var description = '<?php print $_SESSION['msgLogin'] ?>'
      if (description == '') {
        pass
      } else {
        if (description.includes('Sucesso')) {
          iziToast.success({
            id: 'success',
            title: description,
            position: 'bottomRight',
            timeout: 9000
          });
        } else {
          iziToast.error({
            id: 'error',
            title: description,
            position: 'bottomRight',
            timeout: 9000
          });
        }
      }
    <?php }
    unset($_SESSION['msgLogin']) ?>
  </script>
</body>

</html>