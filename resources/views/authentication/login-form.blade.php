<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="My Son School Adminitator">
  <meta name="author" content="Bayu Bimantara">
  <title>Login | My Son School Administrator</title>
  <!-- Bootstrap Core CSS -->
  <link
    type="text/css"
    rel="stylesheet"
    href="/assets/vendor/bootstrap/css/bootstrap.min.css"
  />
  <!-- MetisMenu CSS -->
  <link
    type="text/css"
    rel="stylesheet"
    href="/assets/vendor/metisMenu/metisMenu.min.css"
  />
  <!-- Custom CSS -->
  <link
    type="text/css"
    rel="stylesheet"
    href="/assets/dist/css/sb-admin-2.css"
  />
  <!-- Custom Fonts -->
  <link
    type="text/css"
    rel="stylesheet"
    href="/assets/vendor/font-awesome/css/font-awesome.min.css"
  >
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Login</h3>
          </div>
          <div class="panel-body">
            <form method="post" action="/authentication/login">
              <input
                type="hidden"
                name="_token"
                value="{{ $token }}"
              />
              <div class="form-group">
                <input
                  type="text"
                  name="email"
                  class="form-control"
                  placeholder="Email"
                  autofocus="true"
                />
              </div>
              <div class="form-group">
                <input
                  type="password"
                  name="password"
                  class="form-control"
                  placeholder="Password"
                />
              </div>
              <button
                type="submit"
                class="btn btn-lg btn-primary btn-block"
              >
                <i class="fa fa-sign-in" aria-hidden="true"></i> Login
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery -->
  <script
    src="/assets/vendor/jquery/jquery.min.js"
  ></script>
  <!-- Bootstrap Core JavaScript -->
  <script
    src="/assets/vendor/bootstrap/js/bootstrap.min.js"
  ></script>
  <!-- Metis Menu Plugin JavaScript -->
  <script
    src="/assets/vendor/metisMenu/metisMenu.min.js"
  ></script>
  <!-- Custom Theme JavaScript -->
  <script
    src="/assets/dist/js/sb-admin-2.js"
  ></script>
</body>
</html>
