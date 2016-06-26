<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="js/sweetalert.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <title></title>
</head>

<body>
  <div id="login-page" class="container">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" method="post" action="login_admin.php">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRXODl8HpSCgBMGWJScL9PkzVAwCtttA5IE7SJDCqp2CQbV-3-O" alt="Logo Suzuki" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">Administrator Login Page</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="username" class="validate" id="username" type="text" placeholder="Username" required>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input name="password" id="password" type="password" placeholder="Password" required>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light col s12">Login</button>
          </div>
        </div>
        
      </form>
    </div>
  </div>
    
    </body>

</html>
