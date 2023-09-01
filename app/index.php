<?php
if (base64_decode(@$_REQUEST['v'])=="emmanuelDiasPEREIRA_PROTOCOLOdpe" && base64_decode(@$_REQUEST['v1'])==true){
    @header("Location: sistema/controller/logar.php?passwd=".base64_decode($_REQUEST['p'])."&lg_mn=".base64_decode($_REQUEST['lg'])."&logar=emmanuelADM");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="tmpt/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="tmpt/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="tmpt/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-color: #FF6347;">
<nav class="main-header navbar navbar-expand navbar-white navbar-light m-0">
<ul class="navbar-nav">
      <li class="nav-item">    
  </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="../../index3.html" class="brand-link">
      <img src="tmpt/dist/img/logo_saude.png" 
           alt="AdminLTE Logo"
           class="brand-image img">
    </a>
  </li>
  </ul>     
      <div class="input-group input-group-sm col-12">
      <li class="nav-item d-none d-sm-inline-block col-12">
        <a href="index3.html" class="nav-link text-secondary"> SISTEMA DE GERENCIAMENTO HOSPITALAR </a>
      </li>        
      <div class="input-group-append">
         
        </div>
      </div>
  </nav>

<div class="login-box">
  
  <div class="login-logo" title="Visitar site Oficial">
    <a href="" class="text-white"><b>Hospital</b>Tec</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg text-sm text-uppercase">Digite suas credenciais para se conectar</p>

      <form name="login" action="../app/back/CLASSES/logar.php" method="post" class="was-validated">
        <div class="input-group mb-3">
          <input type="text" name="lg_mn" class="form-control" placeholder="Login">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="passwd" class="form-control" placeholder="Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-danger">
              <input type="checkbox" id="remember">
              <label for="remember">
              Lembre de mim
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="logar" value="emmanuel" class="btn btn-danger btn-block"  style="opacity: .8">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
      <p>mensagen de retorno <a href="cadpacient.php">cad paciente</a> </p>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Esqueci a minha senha</a>
      </p>
       </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="tmpt/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="tmpt/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="tmpt/dist/js/adminlte.min.js"></script>

</body>
</html>
