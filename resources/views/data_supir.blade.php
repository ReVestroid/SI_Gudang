<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Database Gudang</title>
  </head>
  <body>
    <h1 class="text-center">Tabel Supir</h1>

    <div class="container">
    <a href="/tambah_barang" class="btn btn-success">Input</a>
        <div class="row">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id Sopir</th>
      <th scope="col">Nama Sopir</th>
      <th scope="col">Umur Sopir</th>
      <th scope="col">Pengalaman (tahun)</th>
      <th scope="col">NIK</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $row)

    <tr>
      <td>{{$row->id_sopir}}</td>
      <td>{{$row->nama_sopir}}</td>
      <td>{{$row->umur_sopir}}</td>
      <td>{{$row->pengalaman}}</td>
      <td>{{$row->NIK}}</td>
    <td> 
    <a href="/tampil_barang/{{$row->id}}" class="btn btn-primary">Edit</a>
        <a href="/delete_barang/{{$row->id}}"  class="btn btn-danger">Delete</a>
      </td> 
    </tr>

    @endforeach
   
  </tbody>
</table>
<div >
<a href="/dashboard" class="btn btn-dark">Dashboard</a>
<a href="/barang" class="btn btn-info">Tabel Barang</a>  
<a href="/sopir" class="btn btn-warning">Tabel Supir</a>
</div>
        </div>
    </div>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>