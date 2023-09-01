
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Portal da Transparência do Defensoria Pública do Amapá</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="tmpt/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="tmpt/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="tmpt/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="tmpt/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
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
              <li class="breadcrumb-item"><a href="index.php">Início</a></li>
              <li class="breadcrumb-item"><a href="departamentos.php">Layout</a></li>
              <li class="breadcrumb-item active"><a href="cadpacient.php">Ficha de Cadastro</a> </li>       
        </a>
      </li>
    </ul>
  </nav>


  <div class="content">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="content">
    <div class="card card-solid mt-5">
      <div class="card-header col-11 ml-5 pl-5 mt-3">

        <div class="col-sm-12 text-center">
          <h1 class="text-uppercase">Gerenciamento Geral de Dados do Usuario</h1>
        </div>  
        
        <form class="needs-validation" novalidate >
        <div class="form-row ml-1 mr-4">
      <div class="col-md-9 mb-3 ml-5">
      <label for="validationCustomUsername">Buscar no Registro de Usuario(s):</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-search"></i></span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Buscar no Registro de Usuario(s)" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-2 mb-3">
    <label for="validationCustomUsername" class="invisible">_</label>
    <div class="input-group">      
        <button class="btn btn-danger ml-2 " type="submit" style="opacity: .8">CONSULTAR</button>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
      </form>
      </div>
<div class="ml-5 col-10 text-center ">    
    <div class="card">
        <div class="card-header">
        Dados do Usuario
        </div>
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <th>Detalhes - Editar</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td> <a href="" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-pen"></i> </a> </td>
                  </tr>                
                  </tfoot>
                </table>
        </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
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
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h6 class="text-uppercase text-sm">Gestão de Pessoas</h6>

          <ul class="list-unstyled mb-0">
            <li>
             + <a href="#!" class="text-link">  Link 1</a>
            </li>
            <li class="ml-5">- <a href="#!" class="text-link">  Link 1</a></li>

          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h6 class="text-uppercase text-sm">Planejamento Estratégico</h6>

          <ul class="list-unstyled mb-0">
            <li>
             + <a href="#!" class="text-link">  Link 1</a>
            </li>
            <li class="ml-5">- <a href="#!" class="text-link">  Link 1</a></li>

          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h6 class="text-uppercase text-sm">Licitações, Contratos e Convênios</h6>
          <ul class="list-unstyled mb-0">
            <li>
             + <a href="#!" class="text-link">  Link 1</a>
            </li>
            <li class="ml-5">- <a href="#!" class="text-link">  Link 1</a></li>

          </ul>
        </div>
        <!--Grid column-->
      </div>

  </div>

</footer>
      </div>

    </div>
 
</div>
          </div>
        </div>
      </div>
    </section>
   
  </div>

</div>

<script src="tmpt/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="tmpt/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="tmpt/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="tmpt/dist/js/demo.js"></script>
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

<!-- jQuery -->
<script src="tmpt/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="tmpt/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="tmpt/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="tmpt/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="tmpt/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="tmpt/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="tmpt/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="tmpt/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({
    "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Exibir _MENU_ registros por página",
        "sZeroRecords":   "Nenhum resultado encontrado",
        "sEmptyTable":    "Nenhum resultado encontrado",
        "sInfo":          "Exibindo do _START_ até _END_ de um total de _TOTAL_ registros",
        "sInfoEmpty":     "Exibindo do 0 até 0 de um total de 0 registros",
        "sInfoFiltered":  "(Filtrado de um total de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Próximo",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Ativar para ordenar a columna de maneira ascendente",
            "sSortDescending": ": Ativar para ordenar a columna de maneira descendente"
        }
    }
});
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
