<!doctype html>
<html lang="en">

<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- css custom link --}}
    <link rel="stylesheet" href="{{ asset('assets\frontend\css\style.css') }}">
    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Rubik:wght@400;500;600;700&family=Shadows+Into+Light&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
    {{-- header navbar code strat here  --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top  shadow p-1">
        <div class="container-fluid">
            <a class="navbar-brand md-auto ml-5" id="logo" href="#">Job <b><span
                        class="text-primary">Portal</span></b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="boder:none"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-5 ms-0 ms-sm-0 me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Find My job</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-0 ms-sm-0 ml-auto ml-3 mb-2 mb-lg-0 ms-lg-4">
                    <a href="{{ route('account.login') }}" class="btn btn-outline-primary mr-2">Login </a>
                    <a href="" class="btn btn-success">Job Post</a>
                </ul>
            </div>
        </div>
    </nav>
    <!---Hero Section --->
    <section class="hero" id="hero">
        <div class=" hero-text">
            <h1>Find Your Deram Job</h1>
            <p>Thousands of jobs available</p>
            <a href="#" class="btn btn-success">Download</a>
        </div>
    </section>

    <!-- Search  Section --->
    <div class="container search-section">
        <form action="" class="form-row">
            <div class="col-md mb-3">
                <input type="text" class="form-control" placeholder="Keywords">
            </div>
            <div class="col-md mb-3">
                <input type="text" class="form-control" placeholder="Location">
            </div>
            <div class="col-md-3 mb-3">
                <select name="category" id="category" class="form-control">
                    <option selected>Selected Category</option>
                    <option value="1">Web Developer</option>
                    <option value="1">Word Press Developer</option>
                    <option value="1">Laravel Developer</option>
                    <option value="1">Web Disgn</option>
                    <option value="1">Theme Developer</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <button type="submit" class="btn btn-primary btn-block">Search
                </button>
            </div>
        </form>
    </div>

    <!-- Popular Job section  Section --->
    <section class="popular-section" id="popular-section">
        <div class="conatiner">
            <h3 class="head-title">Popular Job</h3>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="content-title">
                            Design & Creative
                        </div>
                        <div class="count">50 Available Position</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="content-title">
                            Design & Creative
                        </div>
                        <div class="count">50 Available Position</div>
                    </div>
                </div>


            </div>
        </div>
    </section>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
