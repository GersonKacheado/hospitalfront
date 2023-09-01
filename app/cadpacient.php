<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Fixed Navbar Layout</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="tmpt/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="tmpt/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="tmpt/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="tmpt/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="tmpt/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="tmpt/dist/css/adminlte.min.css">
 <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-light m-0" style="background-color: #FF6347;">
    <ul class="navbar-nav">
    <li class="nav-item d-none d-sm-inline-block">
      <img src="tmpt/dist/img/logo_saude.png"
           alt="AdminLTE Logo"
           class="brand-image img" style="height: 50px;">
  </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-uppercase text-white"> <h2> HospitalTec</h2></a>
      </li>    
    </ul>
    <ul class="navbar-nav ml-auto">    
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">          
              <li class="breadcrumb-item"><a href="departamentos.php">Início</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active"><a href="cadpacient.php">Ficha de Cadastro</a> </li>       
              <li class="breadcrumb-item active"><a href="detalhesdp.php">busca</a> </li>       
        </a>
      </li>
    </ul>
  </nav>

  <div class="content-wrapper m-0 mt-5">   
    <div class="card card-solid">
      <div class="card-header">

      <section class="content-header m-5 ">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1 class="text-uppercase">Gerenciamento de Dados Pessoais do Paciente</h1>
          </div>
        
        </div>
      </div>
    </section>

        <form class="needs-validation m-5 pl-5 pr-5" novalidate >
  <div class="form-row pl-5">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nome:</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Digite o Nome Completo" value="Mark" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3 ">
    <label for="validationCustom01">Tratamento pelo Nome Social?</label>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck"><strong>
      Concorde com os termos e condições</strong>
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationCustomUsername">Nome Social:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="ativar quando tiver caixa marcada" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row pl-5">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Nome da Mãe:</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Nome Completo da Mãe" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Nome do Pai:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Nome Completo do Pai" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>

  </div>
  <div class="form-row pl-5">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Raça / Cor:</label>
    <select class="form-control" id="validationCustom03">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom05">Responsavél:</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Digite o Nome Completo do Responsável" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-row pl-5">
  <div class="col-md-3 mb-3">
      <label for="validationCustom04">Data de Nascimento:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Data de Nascimento" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
  <div class="col-md-3 mb-3">
      <label for="validationCustom04">Sexo:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Sexo" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">CPF:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="CPF" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">CNS:</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="CNS" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-row pl-5">
  <div class="col-md-3 mb-3">
      <label for="validationCustom04">RG:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="RG" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
  <div class="col-md-3 mb-3">
      <label for="validationCustom04">UF do RG:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="UF do RG" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Orgão Expeditor:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Orgão Expeditor" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
    <label for="validationCustom03">Estado Civil:</label>
    <select class="form-control" id="validationCustom03">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-row pl-5">
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">Nacionalidade:</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Nacionalidade" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom04">Naturalidade:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Naturalidade" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Uf da Naturalidade:</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Uf da Naturalidade" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-row pl-5">
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">Email:</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Email" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom04">Telefone 1:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Telefone 1" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Telefone 2:</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Telefone 2" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-row pl-5">
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">Cep:</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Cep" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom04">Endereço:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Endereço" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Bairro:</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Bairro" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-row pl-5">
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">Complemento:</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Complemento" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom04">Municipio:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Municipio" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Uf do Municipio:</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Uf do Municipio" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group pl-5">
    <div class="form-check">

      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      Concorde com os termos e condições
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>

    <div class="form-row pl-5">  
    <button class="btn btn-danger ml-2" type="submit" style="opacity: .8">Submit form</button>

        </div>
</form>


      
        <div class="card-header mb-2" style="background-color: #EEEEEE;">
          <p class="text-justify p-1 text-dark text-sm" style="font-family: 'Times New Roman', Times, serif;"> 
         lei da lgpd
        </div>
        <footer class="bg-muted text-center text-link mt-1">
  <div class="container p-4">    
    <section class="mb-4">
      <p>
       MAPA DO SITE
      </p>
    </section>
      <div class="row text-sm" >
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h6 class="text-uppercase text-sm">
    Execução Orçamentária e Financeira</h6>
          <ul class="list-unstyled mb-0">
            <li>
             + <a href="#!" class="text-link">  Link 1</a>
            </li>
            <li class="ml-5">- <a href="#!" class="text-link">  Link 1</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h6 class="text-uppercase text-sm">Gestão de Pessoas</h6>

          <ul class="list-unstyled mb-0">
            <li>
             + <a href="#!" class="text-link">  Link 1</a>
            </li>
            <li class="ml-5">- <a href="#!" class="text-link">  Link 1</a></li>

          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h6 class="text-uppercase text-sm">Planejamento Estratégico</h6>
          <ul class="list-unstyled mb-0">
            <li>
             + <a href="#!" class="text-link">  Link 1</a>
            </li>
            <li class="ml-5">- <a href="#!" class="text-link">  Link 1</a></li>
          </ul>
        </div>      
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h6 class="text-uppercase text-sm">Licitações, Contratos e Convênios</h6>
          <ul class="list-unstyled mb-0">
            <li>
             + <a href="#!" class="text-link">  Link 1</a>
            </li>
            <li class="ml-5">- <a href="#!" class="text-link">  Link 1</a></li>

          </ul>
        </div>     
      </div>
  </div>
</footer>
      </div>
    </div> 
  </div>

  <footer class="main-footer m-0">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="tmpt/plugins/jquery/jquery.min.js"></script>
<script src="tmpt/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="tmpt/dist/js/adminlte.min.js"></script>
<script src="tmpt/dist/js/demo.js"></script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>
