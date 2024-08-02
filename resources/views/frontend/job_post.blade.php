<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('assets\frontend\css\style.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
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
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('job_post') }}">Find My job</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-0 ms-sm-0 ml-auto ml-3 mb-2 mb-lg-0 ms-lg-4">
                    <a href="{{ route('account.login') }}" class="btn btn-outline-primary mr-2">Login </a>
                    <a href="" class="btn btn-success">Job Post</a>
                </ul>
            </div>
        </div>
    </nav>
    <section class="job-list" id="job-list">
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 col-md-10">
                    <h2 class="job-list-head">Find Jobs</h2>
                </div>
                <div class="col-6 col-md-2">
                    <div class="align-end">
                        <select name="sort" id="sord" class="form-control">
                            <option value="lastest">Lastes</option>
                            <option value="popular">Popular</option>
                            <option value="oldest">Oldest</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center">Fitter Jobs</h5>
                            <div class="mb-3">
                                <label for="" class="form-label">Keyword</label>
                                <input type="text" class="form-control" placeholder="Keyword">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Location</label>
                                <input type="text" class="form-control" placeholder="laocation">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option selected>Selected Category</option>
                                    <option value="1">Web Developer</option>
                                    <option value="1">Word Press Developer</option>
                                    <option value="1">Laravel Developer</option>
                                    <option value="1">Web Disgn</option>
                                    <option value="1">Theme Developer</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Job Type</label>
                               <div class="form-check">
                                 <input type="checkbox" class="form-check-input" value="">
                                 <label for=""> Full Time</label>
                               </div>
                               <div class="form-check">
                                <input type="checkbox" class="form-check-input">Full Time
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input">Full Time
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input">Full Time
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input">Full Time
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input">Full Time
                              </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Experience</label>
                                <select name="experience" id="experience" class="form-control">
                                    <option selected>Selected Experience</option>
                                    <option value="1">1year Experience</option>
                                    <option value="2">2year Experience</option>
                                    <option value="1">3year Experience</option>
                                    <option value="1">4year Experience</option>
                                    <option value="1">5year Experience</option>
                                    <option value="1">6year Experience</option>
                                    <option value="1">7year Experience</option>
                                    <option value="1">8year Experience</option>
                                    <option value="1">9year Experience</option>
                                    <option value="1">10year Experience</option>
                                </select>
                        </div>
                    </div>
                </div>
            </div>


        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-4">
                    <div class="job-card">
                        <div class="job-cotent-title">
                            <h3>Web Developer</h3>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, non?
                        </p>
                        <div class="job-details">
                            <p><i class="fa-solid fa-location-dot"></i>KTM Nepal</p>
                            <p><i class="fa-solid fa-hand-holding-dollar"></i>2-3K</p>
                            <p><i class="fa-solid fa-tag"></i>Full Time</p>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Details</button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="job-card">
                        <div class="job-cotent-title">
                            <h3>Web Developer</h3>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, non?
                        </p>
                        <div class="job-details">
                            <p><i class="fa-solid fa-location-dot"></i>KTM Nepal</p>
                            <p><i class="fa-solid fa-hand-holding-dollar"></i>2-3K</p>
                            <p><i class="fa-solid fa-tag"></i>Full Time</p>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Details</button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="job-card">
                        <div class="job-cotent-title">
                            <h3>Web Developer</h3>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, non?
                        </p>
                        <div class="job-details">
                            <p><i class="fa-solid fa-location-dot"></i>KTM Nepal</p>
                            <p><i class="fa-solid fa-hand-holding-dollar"></i>2-3K</p>
                            <p><i class="fa-solid fa-tag"></i>Full Time</p>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Details</button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="job-card">
                        <div class="job-cotent-title">
                            <h3>Web Developer</h3>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, non?
                        </p>
                        <div class="job-details">
                            <p><i class="fa-solid fa-location-dot"></i>KTM Nepal</p>
                            <p><i class="fa-solid fa-hand-holding-dollar"></i>2-3K</p>
                            <p><i class="fa-solid fa-tag"></i>Full Time</p>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Details</button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="job-card">
                        <div class="job-cotent-title">
                            <h3>Web Developer</h3>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, non?
                        </p>
                        <div class="job-details">
                            <p><i class="fa-solid fa-location-dot"></i>KTM Nepal</p>
                            <p><i class="fa-solid fa-hand-holding-dollar"></i>2-3K</p>
                            <p><i class="fa-solid fa-tag"></i>Full Time</p>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Details</button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="job-card">
                        <div class="job-cotent-title">
                            <h3>Web Developer</h3>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, non?
                        </p>
                        <div class="job-details">
                            <p><i class="fa-solid fa-location-dot"></i>KTM Nepal</p>
                            <p><i class="fa-solid fa-hand-holding-dollar"></i>2-3K</p>
                            <p><i class="fa-solid fa-tag"></i>Full Time</p>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Details</button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="job-card">
                        <div class="job-cotent-title">
                            <h3>Web Developer</h3>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, non?
                        </p>
                        <div class="job-details">
                            <p><i class="fa-solid fa-location-dot"></i>KTM Nepal</p>
                            <p><i class="fa-solid fa-hand-holding-dollar"></i>2-3K</p>
                            <p><i class="fa-solid fa-tag"></i>Full Time</p>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Details</button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="job-card">
                        <div class="job-cotent-title">
                            <h3>Web Developer</h3>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, non?
                        </p>
                        <div class="job-details">
                            <p><i class="fa-solid fa-location-dot"></i>KTM Nepal</p>
                            <p><i class="fa-solid fa-hand-holding-dollar"></i>2-3K</p>
                            <p><i class="fa-solid fa-tag"></i>Full Time</p>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Details</button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="job-card">
                        <div class="job-cotent-title">
                            <h3>Web Developer</h3>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, non?
                        </p>
                        <div class="job-details">
                            <p><i class="fa-solid fa-location-dot"></i>KTM Nepal</p>
                            <p><i class="fa-solid fa-hand-holding-dollar"></i>2-3K</p>
                            <p><i class="fa-solid fa-tag"></i>Full Time</p>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Details</button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="job-card">
                        <div class="job-cotent-title">
                            <h3>Web Developer</h3>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, non?
                        </p>
                        <div class="job-details">
                            <p><i class="fa-solid fa-location-dot"></i>KTM Nepal</p>
                            <p><i class="fa-solid fa-hand-holding-dollar"></i>2-3K</p>
                            <p><i class="fa-solid fa-tag"></i>Full Time</p>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Details</button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="job-card">
                        <div class="job-cotent-title">
                            <h3>Web Developer</h3>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, non?
                        </p>
                        <div class="job-details">
                            <p><i class="fa-solid fa-location-dot"></i>KTM Nepal</p>
                            <p><i class="fa-solid fa-hand-holding-dollar"></i>2-3K</p>
                            <p><i class="fa-solid fa-tag"></i>Full Time</p>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Details</button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="job-card">
                        <div class="job-cotent-title">
                            <h3>Web Developer</h3>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, non?
                        </p>
                        <div class="job-details">
                            <p><i class="fa-solid fa-location-dot"></i>KTM Nepal</p>
                            <p><i class="fa-solid fa-hand-holding-dollar"></i>2-3K</p>
                            <p><i class="fa-solid fa-tag"></i>Full Time</p>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Details</button>
                    </div>
                </div>

    <nav aria-label="Page navigation example w-100">
        <ul class="pagination align-item-center">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>

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
