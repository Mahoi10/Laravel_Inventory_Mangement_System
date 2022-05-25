<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NYC | Contact us</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto"></ul>
      <!-- Navbar Search -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="../../dist/img/logo.png" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">INVENTORY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{url('form')}}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                  <p>Forms</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('table')}}" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Data Table</p>
                </a>
              </li>
          </li>
          <li class="nav-item">
                <a href="{{url('users')}}" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
                <a href="contactus" class="nav-link">
                <i class="nav-icon fas fa-phone"></i>
                  <p>Contact us</p>
                </a>
              </li>
          </li>
          <li class="nav-item">
                <a href="logout" class="nav-link">
                <i class="fas fa-sign-in-alt nav-icon"></i>
                      <p>Log Out </p>
                    </a>
                </li>
</div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Contact Us</h1>
          </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
              <h2>National Youth Commission</h2>
              <p class="lead mb-5">3/F West Insula Building, West Avenue, Quezon City<br>
              <p>Direct Lines:</p>
              <ul>
              <li>
                  Chairperson and CEO: 426-8884 (Telefax)
                  </li>
                  <li>
                  Executive Director and COO: 426-8885
                  </li>
                  <li>
                  Admin and Finance Division: 426-8899
                  </li>
                  <li>
                  Regional Youth Development Division: 426-8760
                  </li>
                  <li>
                  Social Marketing Division: 426-8733
                  </li>
                  <li>
                  Policy Research Monitoring and Evaluation Division: 426-8676
                  </li>
                  <li>
                  Commission on Audit: 361-4278
                  </li>
                  <li>
                  NDD/IDD Direct Line: 426-8475
              </li>
              <li>
                  Trunk Lines: 426-8479, 371-4603
                  </li>
              <li>
              <a href="">E-mail: info@nyc.gov.ph</a>
                  </li>
              </ul>
              </p>
            </div>
          </div>
          <div class="col-7">
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" id="inputName" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputEmail">E-Mail</label>
              <input type="email" id="inputEmail" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputSubject">Subject</label>
              <input type="text" id="inputSubject" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea id="inputMessage" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Send message">
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2022 <a href="">National Youth Commission</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
