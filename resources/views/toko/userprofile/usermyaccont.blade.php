

<link rel="stylesheet" href="{{asset("css/cstom.css")}}">
<div class="search-popup">
    <div class="search-popup-container">

      <form role="search" method="get" class="search-form" action="">
        <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value="" name="s" />
        <button type="submit" class="search-submit"><svg class="search"><use xlink:href="#search"></use></svg></button>
      </form>

      <h5 class="cat-list-title">Browse Categories</h5>
      
      <ul class="cat-list">
        <li class="cat-list-item">
          <a href="#" title="Mobile Phones">Asus</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Smart Watches">Notebook</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Headphones">Arcer</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Accessories">Rog</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Monitors">Lenovo</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Speakers">Hp</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Memory Cards">Apple</a>
        </li>
      </ul>

    </div>
</div>

<header id="header" class="site-header header-scrolled position-fixed text-black bg-light">
  <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
        <a class="logo d-flex align-items-center w-auto">
          <img src="{{ asset('img/main-logo.png') }}" alt="logo">
        </a>

      </a>
      <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="navbar-icon">
          <use xlink:href="#navbar-icon"></use>
        </svg>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
        <div class="offcanvas-header px-4 pb-0">
          <a class="navbar-brand" href="">
            <a class="logo d-flex align-items-center w-auto">
              <img src="{{ asset('img/main-logo.png') }}" alt="logo">
            </a>
          </a>
          <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
        </div>
        <div class="offcanvas-body">
          <ul id="navbar" class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link me-4 " href="{{ route('userindex') }}" >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4 disabled" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4 disabled" href="#service">Service</a>
            </li>
      
            <li class="nav-item">
              <a class="nav-link me-4 disabled" href="#testimoni">Testimoni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4 active" href="{{ route('shop') }}">Shop</a>
            </li>
            <li class="nav-item">
              <div class="user-items ps-1">
                <ul class="d-flex justify-content-end list-unstyled">
                  <li class="search-item pe-4">
                    <a href="#" class="search-button">
                      <svg class="search">
                        <use xlink:href="#search"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="dropdown me-3">
                        <button class="dropdown-toggle" type="button">
                            <svg class="user">
                                <use xlink:href="#user"></use>
                            </svg>
                            Riza <!-- Ganti dengan nama pengguna yang sesuai -->
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('usermyaccont') }}">My Account</a>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </div>
                </li>                                                 
                    </a>
                  <li>
                    <a href="{{ route('chart') }}">
                        <svg class="cart">
                            <use xlink:href="#cart"></use>
                        </svg>
                    </a>
                </li>
                
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>


  <style>


    .nametag {
      
        margin-top: 30px;
        text-align: center;
        font-size: 18px;
    }
    .nametag a {
        text-decoration: underline;
        color: inherit;
        }
    section {
        padding: 20px; 
    }

    .user-details {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
        text-align: center;
    }

    .profile-picture {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
    }

    .user-details p {
        margin-bottom: 5px;
    }

    footer {
        margin-top: 50px;
        text-align: center;
        background-color: #f0f0f0;
        padding: 10px 0;
        position: absolute;
        bottom: 0;
        width: 100%;
    }
    .edit-delete-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 10px;
        }

        .edit-delete-icons svg {
            width: 24px;
            height: 24px;
            fill: #555;
            cursor: pointer;
        }
</style>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="nametag"> <br><br> <br>
            <p>Settings/ <a href="">My Account</p></a>
        </div> <br>
        <section>
            <div class="user-details">
                <div class="img"><img src="{{ asset("img/i6.jpg") }}" alt="Profile Picture" class="profile-picture"></div>
                <br>
                <p><strong>Name: Riza</strong></p>
                <p>Email: riza_anando@gmail.com</p>
                <a href="{{ route('editprofile') }}">
                <div class="edit-delete-icons">
                  <svg class="edit" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.3 6.3L3 17.6V21h3.4l11.3-11.3-3.4-3.4zM19 7.4L16.6 5 18 3.6l2.4 2.4-1.4 1.4z"/>
                </svg></a>
                
              </div>
          </div>

        </section>
    </div>
</div><br><br><br><br><br><br><br>
<footer>
    <p>&copy; 2024 Your Website. All rights reserved.</p>
</footer>
<!-- Pastikan jQuery sudah dimuat sebelum kode ini -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('.dropdown-toggle').click(function(e){
            e.stopPropagation();
            $(this).next('.dropdown-menu').toggleClass('show');
        });

        $(document).click(function(e) {
            if (!$(e.target).closest('.dropdown').length) {
                $('.dropdown-menu').removeClass('show');
            }
        });
    });
</script>
</body>
</html>