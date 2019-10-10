<?php
/**
* Reference: https://getbootstrap.com
*            https://startbootstrap.com
*/

session_start();

// Check Database Exist
//require 'resources/database.php';
//  require 'resources/viewer.php';

$title = "Watch Your Baby";
?>

<!-- Move all this header stuff later -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v = "urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

  <title><?php echo $title; ?></title>
  <style>

  .masthead {
    height: 100vh;
    min-height: 500px;
    background-image: url("photos/SocialConnect.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
  </style>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">WYB</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="../index.php" class="btn btn-primary" href="#">Home<span class="sr-only">(current)</span></a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Landing -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h1 class="font-weight-light">CONNECT WITH STUDENTS ON CAMPUS!</h1>
          <p class="lead">A great way to connect with other students</p>
          <form method='post' action="Agreement2.php" action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' id='create'>
            <!-- Email box -->
            <div class="form-group">
              <label for="email">Registration Requirement</label>
              <input type="email" class="form-control" id="email" name="email" placeholder=" email" required>

            </div>

            <!-- Photos box -->
            <div class="custom-file">
              <input type="file" class="form-control" id="customFileLang" lang="es" required>
              <label class="custom-file-label" for="customFileLang">Profile Photo</label><br>
            </div>

            <!-- First Name box -->
            <div class="form-group">
              <input type="name" class="form-control" id="fname" name="fname" placeholder=" First Name" required>
            </div>

            <!-- Last Name box -->
            <div class="form-group">
              <input type="name" class="form-control" id="lname" name="lname" placeholder=" Last Name" required>
            </div>

            <!-- Phone number box -->
            <div class="form-group">
              <input type="Phone" class="form-control" id="phone" name="phone" placeholder=" Phone Number" required>
            </div>


            <!-- User Name box -->
            <div class="form-group">
              <input type="name" class="form-control" id="username" name="username" placeholder=" User Name" required>
            </div>

            <!-- password box -->
            <div class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder=" Password" required>
            </div>

            <!-- confirm password box -->
            <div class="form-group">
              <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder=" Confirm Password" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your Information with anyone else.</small>
            </div>

            <button type="submit" class="btn btn-primary my-2" name="create" value="create">Submit</button>
          </form>
        </div>
      </div>

    </div>
  </header>

  <!-- Footer -->
  <footer>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow ">
      <div class="container">
        <a class="navbar-brand" href="#page-top">Watch Your Baby</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a href="about.php" class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a href="Resources.php" class="nav-link" href="#">Resources</a>
            </li>
            <li class="nav-item">
              <a href="Faq.php" class="nav-link" href="#">FAQ</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </footer>
</body>
</html>
