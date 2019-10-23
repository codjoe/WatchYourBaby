<?php
    /**
     * Reference: https://getbootstrap.com
     *            https://startbootstrap.com
     */

     session_start();
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


          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
          <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />



        <script>
        <!-- Script to make the pop-up not disapear  -->
        $(document).ready(function(){
        	$('#MybtnModalPreventScript').click(function(){
          		$('#MymodalPreventScript').modal({
            		backdrop: 'static',
            		keyboard: false
        		});
        	});
        });
        </script>
    <script>

        $(document).ready(function(){
          $('#MybtnModalPreventScript1').click(function(){
              $('#MymodalPreventScript1').modal({
                backdrop: 'static',
                keyboard: false
            });
          });
        });
        </script>


        <title>ggcsocialconnect!</title>``
        <style>

			.masthead {
            	height: 100vh;
                min-height: 500px;
                background-image:url("photos/SocialConnect.png");
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

<!-- Modal(pop-up) first button -->
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a
<!-- Trigger the modal with a button -->
<button type="button" id="MybtnModalPreventScript" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Create on Campus Event</button>

<!-- Modal -->
<div id="MymodalPreventScript" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">on Campus</h4>
      </div>
      <div class="modal-body">

<!-- Enter event name box-->
        <div class="form-group">
          <input type="email" class="form-control" id="event_name" aria-describedby="event_name" placeholder="Event name">
        </div>

        <!-- Enter type box-->
            <div class="form-group">
          <select class="form-control" id="sel1">
            <option>educational</option>
            <option>party</option>
            <option>sport</option>
            <option>religious</option>
            <option>organization</option>
          </select>
        </div>

<!-- Enter event location box-->
        <div class="form-group">
          <input type="email" class="form-control" id="event_location" aria-describedby="event_location" placeholder="Event location/Address">
        </div>

<!-- Enter event purpose box-->
        <div class="form-group">
           <input type="email" class="form-control" id="event_purpose" aria-describedby="event_purpose" placeholder="Event purpose">
        </div>

<!-- Enter start date and time(ST)-->
<input id="datetimepicker" placeholder="Enter Start Date and Time" />
<script>
    $('#datetimepicker').datetimepicker({
        uiLibrary: 'bootstrap4'
    });
</script></br>

<!-- Enter end date and time(ET)-->
<input id="datetimepicker1" placeholder="Enter End Date and Time" />
<script>
    $('#datetimepicker1').datetimepicker({
        uiLibrary: 'bootstrap4'
    });
</script></br>

<!-- Enter Short description about the event purpose box-->
          <div class="form-group" >
            <input type="email" class="form-control" id="description_purpose" aria-describedby="description_purpose" placeholder="Event Short description" >
          </div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
      </div>
    </div>

  </div>
</div>
</a></br></br></br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

<!-- Modal(pop-up) second button(off campus) -->
<a
<!-- Trigger the modal with a button -->
<button type="button" id="MybtnModalPreventScript1" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">Create off Campus Event</button>

<!-- Modal -->
<div  class="modal fade" role="dialog" id="MymodalPreventScript1">
  <div class="modal-dialog">

    <!-- Modal(pop-up body) content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Off Campus</h4>
      </div>
      <div class="modal-body">

<!-- Enter event name box-->
        <div class="form-group">
          <input type="email" class="form-control" id="event_name" aria-describedby="event_name" placeholder="Event name">
        </div>

<!-- Enter type box-->
    <div class="form-group">
  <select class="form-control" id="sel1">
    <option>educational</option>
    <option>party</option>
    <option>sport</option>
    <option>religious</option>
    <option>organization</option>
  </select>
</div>

<!-- Enter event location box-->
        <div class="form-group">
          <input type="email" class="form-control" id="event_location" aria-describedby="event_location" placeholder="Event location/Address">
        </div>

<!-- Enter event purpose box-->
        <div class="form-group">
           <input type="email" class="form-control" id="event_purpose" aria-describedby="event_purpose" placeholder="Event purpose">
        </div>

<!-- Enter start date and time(ST)-->
<input id="datetimepicker2" placeholder="Enter Start Date and Time" />
<script>
    $('#datetimepicker2').datetimepicker({
        uiLibrary: 'bootstrap4'
    });
</script></br>

<!-- Enter end date and time(ET)-->
<input id="datetimepicker3" placeholder="Enter End Date and Time" />
<script>
    $('#datetimepicker3').datetimepicker({
        uiLibrary: 'bootstrap4'
    });
</script></br>

<!-- Enter Short description about the event purpose box-->
          <div class="form-group" >
            <input type="email" class="form-control" id="description_purpose" aria-describedby="description_purpose" placeholder="Event Short description" >
          </div>
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>
</a>
<!-- end of pop-up -->



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
                    <a class="navbar-brand" href="#page-top">WYB</a>
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
