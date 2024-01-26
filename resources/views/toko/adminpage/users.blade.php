<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* CSS */
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4; /* Warna latar belakang */
    }
    .product-img {
      width: 50px;
      height: 50px;
      object-fit: cover;
      border-radius: 50%;
    }
    .navbar,
    .sidebar {
      background-color: #0c2238; /* Warna navbar dan sidebar */
      color: #fff; /* Warna teks navbar dan sidebar */
      padding-top: 10px; /* Padding atas untuk navbar */
    }

    .navbar-brand {
      font-weight: bold;
    }

    .navbar-text {
      color: #fff; /* Warna teks navbar */
    }

    .sidebar {
      height: 100%;
      width: 250px; /* Lebar sidebar */
      position: fixed;
      top: 0;
      left: 0;
      padding-top: 70px; /* rgb(216, 216, 216) navbar */
      border-right: 1px solid #ccc; /* Garis pemisah sidebar dan konten */
    }

    .list-group {
      padding-left: 0;
      margin-bottom: 0;
    }

    .list-group-item {
      border: none; /* Hapus border */
      padding: 12px 20px; /* Padding untuk setiap item */
      background-color: #0c2238; /* Warna latar belakang navbar dan sidebar */
    }

    /* Styling link */
    .list-group-item a {
      text-decoration: none;
      color: #fff; /* Warna teks */
      font-weight: bold;
      transition: 0.3s ease-in-out;
    }

    /* Hover effect */
    .list-group-item:hover {
      background-color: #134074; /* Warna latar belakang saat dihover */
    }

     /* Konten */
.content {
    padding-left: 25px;
    padding-top: 34px;
    margin-left: 250px;
    gap: 20px;
    justify-content: space-evenly;
}

    /* Style untuk card pengguna */
    .user-card {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    .user-card img {
      border-radius: 50%;
      margin-right: 20px;
      width: 50px;
      height: 50px;
      object-fit: cover;
    }
.tabb{
    padding-top: 20px;
  }

  .sp{
    padding-left: 970px;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Admin Panel</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <span class="navbar-text pr-3">Halo, Admin</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="sidebar">
    <ul class="list-group">
      <!-- Nav items -->
      <li class="list-group-item">
        <a href="{{ route('toko.adminpage.navsidebar') }}">Dashboard</a>
      </li>
      <li class="list-group-item">
        <a href="{{ route('toko.adminpage.users') }}">Manajemen Pengguna</a>
      </li>
      <li class="list-group-item">
        <a href="{{ route('toko.adminpage.products') }}">Manajemen Produk</a>
      </li>
      <li class="list-group-item">
        <a href="{{ route('toko.adminpage.orders') }}">Manajemen Pesanan</a>
      </li>
    </ul>
  </div>
  <!-- Isi Konten -->
   <br>
 <div class="content">
    <!-- Moved the "Tambah" button here -->
    <h4 style="text-decoration: underline rgba(0, 0, 0, 0.1)">Halaman Admin <span> <b>Users</b></span></h4>
    <a href="{{ route('tambahuser') }}"><div class="sp"><button type="button" class="btn btn-success btn-sm ">Tambah</button></a>
     </div>

     <section class="tabb">
    <!-- Table for displaying products -->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Gambar</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">role</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <!-- Sample product row -->
        <tr>
          <th scope="row">1</th>
          <td><img src="{{asset("img/men.jpg")}}" class="product-img"></td>
          <td>Riza Anando</td>
          <td>rizaanando2001@gmail.com</td>
          <td>user</td>
          <td>
            <!-- Edit and Delete buttons -->
            <button type="button" class="btn btn-primary btn-sm">Edit</button>
            <button type="button" class="btn btn-danger btn-sm">Hapus</button>
          </td>
        </tr>
        <!-- Other product rows -->
      </tbody>
    </table>
  </div>
</section>
</html>