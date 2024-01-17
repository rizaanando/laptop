<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="{{ asset('public/css/shop.css') }}">
    <!-- Tambahkan CSS Anda di sini -->
    <style>
        /* Gaya CSS tambahan */
        /* ... */
    </style>
</head>
<body>
    <h1>Tambah Produk</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="product_name">Nama Produk</label>
        <input type="text" id="product_name" name="product_name">

        <label for="description">Deskripsi</label>
        <textarea id="description" name="description"></textarea>

        <label for="product_type">Tipe Produk</label>
        <input type="text" id="product_type" name="product_type">

        <label for="product_id">ID Produk</label>
        <input type="text" id="product_id" name="product_id">

        <label for="color">Warna</label>
        <input type="text" id="color" name="color">

        <label for="price">Harga (dalam juta)</label>
        <input type="text" id="price" name="price">

        <label for="stock">Stok</label>
        <input type="number" id="stock" name="stock">

        <label for="image">Gambar Produk</label>
        <input type="file" id="image" name="image">

        <button type="submit">Tambah Produk</button>
    </form>

    <!-- Tambahkan script atau bagian JS Anda di sini jika diperlukan -->
</body>
</html>
