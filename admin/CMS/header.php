
<!DOCTYPE html>
<html>
  <head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <script src="js/jquery.1.11.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/main.js"></script>

     <link rel="shortcut icon" type="image/png" href="img/blood.png" />

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/main.css">

     <title>
       FOSSMeet '16 :: CMS
     </title>

  </head>
  <body>

	<header>

      <div id="logo-container">
        <div id="logo">
          <a href="#">
            FOSSMeet '16
          </a>
        </div>
        <div id="subtitle">
          "Think Free, Code Better"
        </div>
      </div>
      <nav id="head">
        <ul>
          <?php
            if(isset($_SESSION['username'])){
	  ?>
          <li>
            <a href="logout.php">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">  Log Out </button>
            </a>
          </li>
          <?php
          // the current browser session is logged in as somebody
	  $a = $_SERVER['REQUEST_URI'];
	  if (strpos($a,'index.php') !== false) {
  	    // so redirect to general page if trying to access index.php
	    header('Location: general_view.php');
	  }
          }
	  else{
	  ?>
          <li>
            <a href="login.php">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">  Log In </button>
            </a>
          </li>
          <?php
          }
          ?>
        </ul>
      </nav>

  </header>

  <div id="content">
