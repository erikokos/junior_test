<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registry Page</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/cover.css">
  </head>
  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">RegDem</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="/">Main</a>
                <a class="nav-link" href="#">Login</a>
                <a class="nav-link" href="/register">Registry</a>
              </nav>
            </div>
          </div>
          <div class="container">

            <form class="form-signin" method="post">
                {!! csrf_field() !!}
              <h2 class="form-signin-heading">Registration</h2>
              <input style="margin-top: 10px;" type="text" id="inputName" class="form-control" name="name" placeholder="Name" required autofocus>
                <input style="margin: 10px 0;" type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required>
              <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              <input name="password_confirmation" type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm password" required>
                <input style="margin-bottom: 10px;" type="text" id="inputSecretPhrase" name="secret_phrase" class="form-control" placeholder="Secret phrase" required>
              <!--<div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>-->
              <button class="btn btn-lg btn-primary btn-block" type="submit">Registration</button>
            </form>

          </div> <!-- /container -->

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
