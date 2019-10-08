<?php
    /**
     * Reference: https://getbootstrap.com
     *            https://startbootstrap.com
     */

     session_start();

    require 'resources/database.php';
    require 'resources/viewer.php';

    $title = "GGC Social Connect";
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

        <title><?php echo $title ?></title>
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
                        	<h2 class="font-weight-light">Terms & Agreement</h2>
                          	<p>GGC Social Connector would like your experience on our website and the online
                               community sites to be enjoyable and educational.
                               There will be areas of the site in which users may participate in forums, surveys,
                               discussion boards, and other content creation. Please review the guidelines below before participating in
                               our online communities. These guidelines may be updated from time to time as described in the Terms of Service.
                               Failure to follow these guidelines may result in the termination of your community membership.
                            </p>

                            <p> While visiting and participating in the online community sites, you are solely responsible for your conduct. Below are some,
                            but not all, of the expectations for your participation in our communities. In understanding these guidelines, you agree NOT to:
                            Harass, threaten, belittle, or otherwise distress any other user or entity;
                            Transmit information of any type that is considered unlawful, threatening, abusive, vulgar, obscene, or prejudices against any user
                            or entity in regard to race, color, religion, national origin, gender, sexual preference, age or disability;
                            Impersonate any person, including but not limited to a GGC official;
                            Use our community sites for advertisement, promotion or solicitation of any kind;
                            Invade or violate the privacy of any user, including sharing personal information about any individual in a public site area;
                            Transmit any materials that contain viruses or other malicious items;
                            Break any local, state or federal laws in conjunction with your use of the site.</p>

                            <p>Our online communities may contain facts, statements, recommendations, opinions and views by users and third party entities.
                            GGC Social Connector and its affiliates do not endorse and are not responsible for the accuracy or reliability of content in these areas.
                            You agree that use of this information is at your own risk.</p>

                            <!-- Default unchecked -->
                            <form method='post' action='CreateEvent.php' class="form-horizontal" id='agree'>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value ="" id="invalidCheck" name="agree" required>
                                    <label class="form-check-label" for="invalidCheck">I agree with the Terms & Agreements</label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                                <br/>
                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                            </form>
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
                    <a class="navbar-brand" href="index.php"><?php echo $title; ?></a>
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
