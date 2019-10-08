

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

<<<<<<< HEAD
        <title>ggcsocialconnect!</title>
=======
        <title>View Events</title>
>>>>>>> 523717f86c0efff3ff15854121b99ddc8da37d04
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
            	<a class="navbar-brand" href="#page-top">GGC Social Connect</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          			<span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                	<ul class="navbar-nav ml-auto">
                    	<li class="nav-item active">
                        	<a href="index.php" class="btn btn-primary" href="#">Home<span class="sr-only">(current)</span></a>
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
<<<<<<< HEAD
                        	<h2 class="font-weight-light text-center">Events</h2>
=======

                        	


                          	<p>When you're home to over 12,000 students it's hard to find ways to connect with so many students.
GGC Social Connect provides the tool needed for users to access event information, resources and create new social events for fun gatherings.
View our events here!

<br>

                            Apr 29, 2019
  Monthly Learning Series: Emotional Intelligence Workshop
  As faculty and staff, emotional intelligence is critical in our daily lives. It impacts how we deal with conflict, how we work with others, and how we manage stress and pressure at work. Don’t miss this game-changing workshop which includes an EQ (emotional quotient) test to assess and learn how to improve your EQ.

  To register, email learningdevelopment@ggc.edu.</p>

                        	<h2 class="font-weight-light text-center">Events</h2>

>>>>>>> develop
                        </div>
                	</div>


                  <!-- View Event Card. -->

                    <div class="row justify-content-center">
                    <!-- Resourses card box -->
                    <div class="card" style="width: 20rem;">
                  <img class="card-img-top" src="Resourses_photos/housing1.png" alt="Card image cap">
                  <div class="card-body">
                  <h5 class="card-title">Party in Buckhead</h5>
                  <!-- scrolling pane to display all the information about the event  -->
                  <div class="panel-body" runat="server" style="overflow-y: scroll; height: 200px">
            <div class="mid-width wrapItems" style="background-color:white; height:300px">

          <p class="card-text">Date: Friday 3,</p>
          <p class="card-text">Time: 9:00pm - 1:00am</p>
          <p class="card-text">This event is to socialy hangout after the finals</p>
                <div id="Test1" runat="server" width="100%"></div>
                <div id="Test2" runat="server" width="100%"></div>
            </div>
        </div>
           <!-- end of scrolling pan -->

                  <!-- Going button that all number of going -->

                  <a  class="btn btn-primary" onclick="add()" ><div id="result"></div> Going</a>
                    <script>
  function add() {
    if (typeof(Storage) !== "undefined") {
      if (localStorage.clickcount) {
        localStorage.clickcount = Number(localStorage.clickcount)+1;
      } else {
        localStorage.clickcount = 1;
      }
      document.getElementById("result").innerHTML = " " + localStorage.clickcount + "";
    } else {
      document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
    }
  }
  </script>
                 <!-- Going end here -->

                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

                  <!-- Not Going button that count all number of not going -->
                  <a  class="btn btn-primary" onclick="add1()"> <div id="result1"></div> Not Going</a>
                    <script>
                    function add1() {
                      if (typeof(Storage) !== "undefined") {
                        if (localStorage.clickcount1) {
                          localStorage.clickcount1 = Number(localStorage.clickcount1)+1;
                        } else {
                          localStorage.clickcount1 = 1;
                        }
                        document.getElementById("result1").innerHTML = "" + localStorage.clickcount1 + "";
                      } else {
                        document.getElementById("result1").innerHTML = "Sorry, your browser does not support web storage...";
                      }
                    }
                    </script>

                 <!-- Not Going end here -->
                  </div>
                  </div>
                </div>
            
                 <!-- View event card end here  -->

                </div>

            </section>
            <!-- Section 2 -->

        </main>
        <!-- Footer -->
        <footer>
          <nav class="navbar navbar-expand-lg navbar-light bg-light shadow ">
                <div class="container">
                    <a class="navbar-brand" href="#page-top">GGC Social Connect</a>
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
