<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Dashboard Gudang Keramik</title>

     

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Database keramik</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/main">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Database
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <span data-feather="shopping-cart"></span>
              Barang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/motif">
              <span data-feather="layers"></span>
              Motif
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kualitas">
              <span data-feather="layers"></span>
              Kualitas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/barang_in">
              <span data-feather="layers"></span>
              Barang In
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/gudang">
              <span data-feather="archive"></span>
              Gudang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/stok">
              <span data-feather="layers"></span>
              Stok
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/outlet">
              <span data-feather="users"></span>
              Outlet
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/barang_out">
              <span data-feather="layers"></span>
              Barang Out
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cek_stok">
              <span data-feather="layers"></span>
              Cek Stok
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sopir">
              <span data-feather="layers"></span>
              Sopir
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/transportasi">
              <span data-feather="layers"></span>
              Transportasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tujuan">
              <span data-feather="layers"></span>
              Tujuan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/shipping">
              <span data-feather="anchor"></span>
              Jadwal Pengiriman
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/report">
              <span data-feather="bar-chart-2"></span>
              Reports Pengiriman
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/user">
              <span data-feather="layers"></span>
              User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pegawai">
              <span data-feather="layers"></span>
              Pegawai
            </a>
          </li>
        </ul>

       <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>-->
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Barang Out</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
      <h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
          <tr>
      <th scope="col">id_outlet</th>
      <th scope="col">nama_outlet</th>
      <th scope="col">alamat outlet</th>
      <th scope="col">id gudang</th>
      <th scope="col">id pembeli</th>
      <th scope="col">Aksi</th>
          </tr>
          </thead>
          <tbody>
          
            <tr>
            <td>{id}</td>
            <td>{nama_outlet}</td>
            <td>{alamat outlet}</td>
            <td>{id gudang}</td>
            <td>{id pembeli}</td>
            <td> 
                <a href="/tampil_barang/{id}" class="btn btn-primary">Edit</a>
                <a href="/delete_barang/{id}"  class="btn btn-danger">Delete</a>
            </td> 
            </tr>
          
          </tbody>
        </table>
      </div>
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      <h2></h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
          
          </thead>
          <tbody>
          
            
          
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <!--<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>-->
      <script src="/js/dashboard.js"></script>
  </body>
</html>
