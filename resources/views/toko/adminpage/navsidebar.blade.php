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
      margin-left: 250px; /* Sesuaikan dengan lebar sidebar */
      padding: 30px;
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
        <a href="#">Dashboard</a>
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
<div class="content">
  <h1>Dashboard</h1>
  <p>Selamat datang di dashboard admin. Ini adalah halaman utama dari panel admin Anda.</p>
  <!-- Isi konten lainnya -->
</div>

</body>

</html>