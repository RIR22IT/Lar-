<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>LOGIN</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Login validation -->
  <script> 
    function login() { 
        var email =  document.getElementById("email").value;
        var password =  document.getElementById("password").value;

        if(email == "admin@gmail.com" && password == "admin123" )
        {
            alert( "validation succeeded" );
            location.href="adminPanel.php";
        }
        else
        {
            alert( "validation failed" );
            // location.href="index1.html";
        }
  }  
</script> 
</head>

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"></nav>

<body> 

<!-- Admin login Form -->
<!-- action="adminPanel.php" -->
<form name="logForm" class="user" method="post" > 
  <div style="background-image: url('images/about-8.jpg'); background-size: cover; height: 100vh;" >
  <br><div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row" >
              <div class="col-lg-6 d-none d-lg-block bg-login-image"><br><br><br><center><img src="images/LARlogo1.png" style="width:390px;height:320px;"/></center></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <br><h1 class="h4 text-gray-900 mb-4"><b>LOGIN</b></h1><hr><br>
                  </div>

                    <div class="form-group">
                      <input 
                        type="email" 
                        name="email"
                        class="form-control form-control-user" 
                        id="exampleInputEmail" 
                        pattern = "[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}"
                        aria-describedby="emailHelp" 
                        placeholder="Email Address*" 
                        required>
                    </div>

                    <div class="form-group">
                      <input 
                        type="password" 
                        name="password"
                        class="form-control form-control-user" 
                        id="exampleInputPassword" 
                        placeholder="Password*" 
                        required>
                    </div>

                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div><br>
                    </div>

                    <input type="submit" value="Sign In" name="Submit" class="btn btn-primary btn-lg btn-block" onclick = "login()">
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</div>
</form>
</body>
</html>

