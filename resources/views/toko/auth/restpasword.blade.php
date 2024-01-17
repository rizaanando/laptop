@extends('toko.layout.indexlogin')

@section('auth')

<link rel="stylesheet" href="{{ asset('public/css/login.css') }}">

<style>
  /* CSS untuk menengahkan elemen */
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-image: url('{{ asset("img/bgh.jpg") }}');
    background-size: cover;
    background-repeat: no-repeat;
  }

  .card-body {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #f8f9faef;
    border-radius: 10px;
    padding: 30px;
    width: 490px; /* Lebar sesuai kebutuhan */
  }

  .card-title {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 20px;
  }

  .form-label {
    font-weight: bold;
  }

  .form-control {
    border-radius: 5px;
    border-color: #ccccccc9;
    margin-bottom: 15px; /* Memberi jarak antar input */
  }

  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    width: 100%;
    margin-bottom: 10px;
  }

  .btn-primary:hover {
    background-color: #0056b3;
    border-color: #408ddf;
  }

  .btn-google,
  .btn-facebook {
    width: 100%;
    text-align: left;
    padding-left: 20px;
    margin-bottom: 10px;
  }

  .btn-google {
    background-color: #db4437;
    border-color: #db4437;
    color: white;
  }

  .btn-facebook {
    background-color: #4267B2;
    border-color: #4267B2;
    color: white;
  }

  .btn-google:hover {
    background-color: #ee1b1b;
    border-color: #c1351d;
  }

  .btn-facebook:hover {
    background-color: #3247a3;
    border-color: #364e87;
  }

  .small {
    font-size: 0.85rem;
    color: #888;
    text-decoration: none;
    margin-bottom: 10px;
  }

  .small:hover {
    text-decoration: underline;
  }

  .logo {
    position: fixed;
    top: 44px;
    left: 50%;
    transform: translateX(-50%);
  }
</style>
<br><br><br>
<div class="card-body shadow">

  <img src="{{ asset('img/log.png') }}" alt="Logo" class="logo">
  <div class="pt-4 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">Resset Password!</h5>
    <p class="text-center small">Enter your email to reset your password</p>
  </div>

  @if ($errors->any())
  <div class="alert alert-danger" style="text-align: start">
    @foreach ($errors->all() as $error)
    <div>  {{$error}}</div>
    @endforeach
  </div>
  @endif

  <form action="{{ route('sendemail') }}" method="POST">
    @csrf

    <div class="col-12">
      <label for="youremail" class="form-label">Email</label>
      <div class="input-group has-validation">
        <input type="email" name="email" class="form-control" id="youremail" required placeholder="Enter your email">
        <div class="invalid-feedback">Please enter your email.</div>
      </div>
    </div>
    
    
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Reset Password</button>
    </div>
    <p style="text-align: center"><a class="small" href="{{ route('login') }}">Back to Login</a></p>
  </form>
@endsection
