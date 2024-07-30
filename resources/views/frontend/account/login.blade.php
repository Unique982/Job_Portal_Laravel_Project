
<!doctype html>
<html lang="en">
  <head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container my-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 mx-auto">
                    <div class="card shawdo-border-0 p-2">
                        <div class="card-header">
                            Login
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="from-group">
                                    <label for="">User Name</label>
                                    <input type="text" name="username" placeholder="Enter your username" class="form-control">
                                </div>
                                <div class="from-group">
                                    <label for="">Password</label>
                                    <input type="text" name="password" placeholder="Enter your password" class="form-control">
                                </div>
                                <br>
                                <input type="submit" name="login" value="Login" class="btn bg-primary w-100" style="font-size:20px;font-weight:400;font-family:'Times New Roman'; color:#fff;">
                                <div class="form-group">
                                    Don't have account ? <a href="{{('signup')}}">Register</a>
                                  </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
