<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SistemaBiblioteca</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">    
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="prestamo.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>D</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SisBiblioteca</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 <i class="far fa-user-circle" style="font-size: 18px;"></i>
                  <span class="hidden-xs"><b><?php echo $_SESSION['nombre']; ?></b></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <p>
                      ¿DESEA TERMINAR SU SESIÓN?
                      <br>
                      <img src="../public/images/login1.png" style=" width: 40%;" alt="">
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="../ajax/usuario.php?op=salir" class="btn btn-dark btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" ></li>
             <li id="siEscritorio" >
              <a href="prestamo.php">
              <i class="fas fa-book"></i>
                 <span>Préstamos/Devoluciones</span>
              </a>
            </li>
            <li>
            </li>
             <li id="siLibros">
              <a href="libro.php">
              <i class="fas fa-book-open"></i>
                 <span>Libros</span>
              </a>
            </li>
              <li id="siAutores">
              <a href="autor.php">
              <i class="far fa-address-card"></i>
                 <span>Autores</span>
              </a>
            </li>
            <li id="siEditoriales">
              <a href="editorial.php">
              <i class="fas fa-file-alt"></i>
                <span>Editoriales</span>
              </a>
            </li>
            <li id="siMaterias">
              <a href="materia.php">
              <i class="fas fa-address-book"></i>
                <span>Materias</span>
              </a>
            </li>
            <li id="siEstudiantes">
              <a href="estudiante.php">
              <i class="fas fa-user-graduate"></i>
                <span>Estudiantes</span>
              </a>
            </li>
            <li id="siUsuarios">
              <a href="usuario.php">
              <i class="fas fa-user-shield"></i>
                <span>Administrador</span>
              </a>
            </li> 
             <li id="siAcercade">
              <a href="acercade.php">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-black">IT</small>
              </a>
            </li>   
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
