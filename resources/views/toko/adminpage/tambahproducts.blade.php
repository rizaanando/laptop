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
  padding-left: 18px;
    padding-top: 11px;
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


  .sp{
    padding-left: 1064px;
    }


    /* Gaya untuk formulir */
    form {
      max-width: 1110px;
    margin: 0 auto;
    background-color: #fff;
    padding: 36px;
    border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-control {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    textarea {
      resize: vertical;
    }

    .form-group:last-child {
      margin-bottom: 0;
    }

    .btn-primary {
      background-color: #007bff;
      color: #fff;
      border: none;
    }

    .btn-primary:hover {
      background-color: #0056b3;
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
     <div class="sp">
      <a href="{{ route('productsindex') }}"><button type="button" class="btn btn-success btn-sm ">Kembali</button></a>
     </div>
  <!-- Check for success message -->
  @if(Session::has('success'))
      <div class="alert alert-success">
          {{ Session::get('success') }}
      </div>
  @endif

  <!-- Check for error message -->
  @if(Session::has('error'))
      <div class="alert alert-danger">
          {{ Session::get('error') }}
      </div>
  @endif
  <!-- Formulir Tambah Produk -->
  <form action="{{ route('tambahproducts') }}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="product_name">Nama Barang</label>
    <select class="form-control" id="product_name" name="product_name" required>
      <option value="Asus">Asus</option>
      <option value="Notebook">Notebook</option>
 </select></div>

 <div class="form-group">
  <label for="product_id">Id Barang</label>
  <select class="form-control" id="product_id" name="product_id" required>
    <option value="0024">0024</option>
    <option value="0078">0078</option>
</select></div>

  <div class="form-group">
    <label for="description">Deskripsi</label>
    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
  </div>
  <div class="form-group">
    <label for="product_type">Tipe</label>
    <select class="form-control" id="product_type" name="product_type" required>
      <option value="Core i1">Core i1</option>
      <option value="Core i9">Core i9</option>
      <!-- Tambahkan opsi tipe lainnya sesuai kebutuhan -->
    </select>
  </div>
  <div class="form-group">
    <label for="color">Warna</label>
    <select class="form-control" id="color" name="color" required>
      <option value="Red">Red</option>
      <option value="Yellow">Yellow</option>
    </select>
    </div>
  
    <div class="form-group">
      <label for="price">Harga (Rp)</label>
      <select class="form-control" id="price" name="price" required>
          <option value="4000000000">4 Juta</option>
          <option value="9000000000">9 Juta</option>
          <option value="6000000000">6 Juta</option>
          <option value="12000000000">12 Juta</option>
      </select>
  </div>
  
  <div class="form-group">
    <label for="stock">Stok</label>
    <input type="number" class="form-control" id="stock" name="stock" required>
  </div>
  <div class="form-group">
    <label for="image">Gambar</label>
    <input type="file" class="form-control-file" id="image" name="image" required>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
