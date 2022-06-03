<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="/Assets/css/style.css" >
</head>

<body class="">
  <header class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="/Assets/images/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav" style="display: flex">
            @foreach ($categories as $category)
            <a class="nav-link" href="#{{ $category->name }}">{{ $category->name }}</a>
            @endforeach
          </div>
        </div>
      </div>
      <div class="navbar-nav" style="display: flex; float: right">
        @auth
        <a class="nav-link" href="{{ Route('logout') }}">Logout</a>
        <a class="nav-link" href="#" style="height: 15px; width: 15px; background-color:green; border-radius: 50%;"></a>
        @endauth

        @guest
        <a class="nav-link" href="{{ Route('signUpGet') }}">Subscribe</a>
        <a class="nav-link"  href="{{ Route('loginGet') }}">Login</a>
        @endguest

      </div>
    </nav>
    <!-- from bootstrap carosal slider -->
    <div id="carouselExampleControls" class="carousel slide panda-slide mt-5" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row d-flex align-items-center p-5">
            <div class="col-md-7">
              <h1>{{ $bannerData[0]->title}}</h1>
              <p> {{ $bannerData[0]->description}}</p>
                <H3>
                  ${{$bannerData[0]->price}}
                </H3>
                @auth
                <button class="btn btn-warning"><a style="text-decoration: none; color: white;" href="#">BUY NOW</a></button>
                @endauth
                @guest
                <button class="btn btn-warning"><a style="text-decoration: none; color: white;" href="{{ Route('loginGet') }}">BUY NOW</a></button>
                @endguest
            </div>
            <div class="col-md-5">
              <img src="{{$bannerData[0]->image}}" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
        @for ($i = 1; $i < count($bannerData); $i++)
        <div class="carousel-item">
          <div class="row d-flex align-items-center p-5">
            <div class="col-md-7">
              <h1>{{ $bannerData[$i]->title}}</h1>
              <p> {{ $bannerData[$i]->description}}</p>
                <H3>
                  ${{$bannerData[$i]->price}}
                </H3>
                @auth
                <button class="btn btn-warning"><a style="text-decoration: none; color: white;" href="#">BUY NOW</a></button>
                @endauth
                @guest
                <button class="btn btn-warning"><a style="text-decoration: none; color: white;" href="{{ Route('loginGet') }}">BUY NOW</a></button>
                @endguest
            </div>
            <div class="col-md-5">
              <img src="{{$bannerData[$i]->image}}" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
        @endfor
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>

  </header>
  <main class="container">
    <section class="container overflow-hidden mt-5 catagories">
      <div class="row g-5 text-white">
        @foreach ($allcategories as $category)
        <div class="col">
          <a href="#{{ $category->name }}" style="text-decoration: none; color:whitesmoke">
          <div class="p-3 rounded bg-success d-flex justify-content-around align-items-center">
            <img src="/Assets/images/test.png" alt="">
            <h1>{{ $category->name }}</h1>
          </div>
        </a>
        </div>
        @endforeach

      </div>
    </section>

    @foreach ($categoriesForProduct as $category)
    <section class="mt-5">
      <h3 id="{{ $category->name }}">{{ $category->name }}</h3>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($category->products as $product)
        <div class="col">
          <div class="panda-card card h-100 shadow">
            <img src="{{ $product->image }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $product->name }}</h5>
              <h5>${{ $product->price }}</h5>
              <p class="card-text">{{ $product->description }}</p>
            </div>
            <div class="card-footer panda-card-footer">
              @auth
                <button class="btn btn-warning"><a style="text-decoration: none; color: white;" href="#">BUY NOW</a></button>
                @endauth
                @guest
                <button class="btn btn-warning"><a style="text-decoration: none; color: white;" href="{{ Route('loginGet') }}">BUY NOW</a></button>
                @endguest
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    @endforeach
  </main>
  <!--footer section-->

  <footer id="subscriber" class="text-center mt-3 p-3">

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
</body>

</html>
