<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Responsive -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 4 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body, html {
      height: 100%;
      background-color: #E8EAF6;
    }
    .login-box {
      width: 400px;
      margin: 150px auto;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }
    .login-logo a {
      font-size: 2rem;
      color: #1A237E;
      font-weight: bold;
    }
    .btn-primary {
      background-color: #3D5AFE;
      border-color: #3D5AFE;
    }
    .form-control {
      border-radius: 10px;
    }
    .btn-block {
      font-weight: bold;
      text-transform: none;
    }
  </style>
</head>
<body>
<div class="login-box">
  <div class="login-logo text-center">
    <a href="<?php echo base_url('auth'); ?>"><b>LOGIN</b></a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg text-center" style="color: #1A237E;">Inicia sesión para comenzar</p>

    <?php echo validation_errors(); ?>
    <?php if (!empty($errors)) {
      echo $errors;
    } ?>

    <form action="<?php echo base_url('auth/login') ?>" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" required>
        <span class="fa fa-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" autocomplete="off" required>
        <span class="fa fa-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recordarme
            </label>
          </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesión</button>
        </div>
      </div>
    </form>

    <div class="text-center mt-3">
      <a href="#">¿Olvidaste tu contraseña?</a>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js') ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
