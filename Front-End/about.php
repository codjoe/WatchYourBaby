

<?php
    /**
     * Reference: https://getbootstrap.com
     *            https://startbootstrap.com
     */
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

        <title>WYB!</title>
        <style>

			.masthead {
            	height: 100vh;
                min-height: 500px;
                background-image: url("photos/aboutUs.png");
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  #customers tr:nth-child(even){background-color: #f2f2f2;}
  #customers tr:hover {background-color: #ddd;}
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #a9afba;
    color: white;
  }
  body {
    background-color: #9a9ca0;
  }
  .txtdec {
    text-shadow: 1px 1px #c8cbd1;
  }
        </style>
    </head>

	<body>
    	<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        	<div class="container">
            	<a class="navbar-brand" href="#page-top">WYB</a>
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
                        <br>
                        <br>
                        <p class="lead">A great way to connect with other students</p>

                    </div>
            	</div>

        	</div>
        </header>

        <main role="main">
          <!-- Section 1 -->
            <section class="py-5">
              <div class="container">
                  <div class="row">
                      <div class="col-md-8 mx-auto">
                          <div class="txtdec"><h2 class="font-weight-light">About Us</h2></div>
                            <p>
                            <table id="customers">
  <tr>

    <th><center>Codjoe Gamadeku</center></th>

  </tr>
  <tr>

    <td><center><img src="../Resourses/photos/codjoe.png"></center></td>

  </tr>
  <tr>

    <td><center>cgamadeku@ggc.edu</center></td>

  </tr>
  <tr>

    <td><center>Enjoys spending quality time with the entourage and love learning new Technology.</center></td>

  </tr>
</table>

                            </p>
                        </div>
                  </div>
                </div>
            </section>
            <!-- Section 2 -->

        </main>
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
