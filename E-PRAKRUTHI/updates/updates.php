<?php
  session_start();

  if ( !isset( $_SESSION['username'] ) ) {
    header("Location: ../index.php");
  }
?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<title>Navigation Bar</title> 
	
	<meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="updates.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->

    <link rel="icon" href="../images/logo.png" type="image/x-icon">

  <style>

    #y{
      position: relative;
      left: 255px;
      width:100%;
    }
    #z{
      position: relative;
      right:150px;
      width:100%;
    }
  </style>
</head> 

<body> 
    <div class="page-content p-5" id="content">

      <!-- Toggle button -->
      <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-3 mb-4"><i class="fa fa-bars" style="font-size:24px;color:red"></i></button>
      
      <div class="wordart blues">        
        <span class="text">E-Prakruthi</span>
      </div>

      <nav class="navbar navbar-expand-sm bg-success navbar-dark" > 
        
        <!-- Brand/logo -->
        <a class="navbar-brand" href="../index.php"> 
          <img src= "../images/logo.png"
          alt="logo" style="width:40px;"> 
        </a> 
        
        <div class="collapse navbar-collapse" id="collapse_Navbar"> 
          <ul class="navbar-nav"> 
            <li class="nav-item"> 
              <a class="nav-link" href="../index.php">Home</a> 
            </li> 
          
            <li class="nav-item"> 
              <a class="nav-link" href="../about/about_us.html">About Us</a> 
            </li> 
          </ul> 
        </div> 
        
        <form class="form-inline" action="#"> 
          <input class="form-control mr-sm-2" type="text"
              placeholder="Search"> 
          <button class="btn btn-primary" type="submit">Search</button> 
        </form> 

      </nav><br>

      <div id="text">
          <iframe src="https://feed.mikle.com/widget/v2/119730/" height="402px" width="100%" class="fw-iframe" scrolling="no" frameborder="0"></iframe>
          <iframe src="https://feed.mikle.com/widget/v2/119732/" height="402px" width="100%" class="fw-iframe" scrolling="no" frameborder="0"></iframe>
          <iframe src="https://feed.mikle.com/widget/v2/119734/" height="402px" width="100%" class="fw-iframe" scrolling="no" frameborder="0"></iframe>
          <iframe src="https://feed.mikle.com/widget/v2/119735/" height="402px" width="100%" class="fw-iframe" scrolling="no" frameborder="0"></iframe>
      </div>
      
    </div>
      
    <!-- Vertical navbar -->
    <div class="vertical-nav bg-white" id="sidebar">
      <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center"><img src="../images/user.jpg" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
          <div class="media-body">
            <h4 class="m-0"> Welcome </h4>
            <p class="font-weight-light text-muted mb-0"><b><?php echo $_SESSION['username']; ?></b></p>
          </div>
        </div>
      </div>
  
      <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>
  
      <ul class="nav flex-column bg-white mb-0" id="main">
        <li class="nav-item">
          <a href="../findout/find_out.php" class="nav-link font-italic ">
                    <i class="fa fa-search-plus mr-3 text-primary fa-fw"></i>
                    Search & Find Out
                </a>
          </li>
        
        <li class="nav-item">
          <a href="../graphs/graph_and_interpretation.php" class="nav-link font-italic">
                    <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                    Statistical Analysis & Graphs
                </a>
        </li>
        <li class="nav-item">
          <a href="../polls/pollsurvey.php" class="nav-link font-italic">
                    <i class="fa fa-list-ul mr-3 text-primary fa-fw"></i>
                    Polls & Surveys
                </a>
        </li>
        <li class="nav-item">
          <a href="../updates/updates.php" class="nav-link font-italic">
                    <i class="fa fa-newspaper-o mr-3 text-primary fa-fw"></i>
                    Newsletters
                </a>
        </li>
        <li class="nav-item">
          <a href="../awareness/awarenesssolution.php" class="nav-link font-italic">
                    <i class="fa fa-sitemap mr-3 text-primary fa-fw"></i>
                    Awareness & Solutions  
                </a>
        </li>
      </ul>
  
      <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Login Credentials</p>
    
      <ul class="nav flex-column bg-white mb-0" id="login">
        <li class="nav-item">
          <a href="../index.php" class="nav-link font-italic">
                    <i class="fa fa-unlock mr-3 text-primary fa-fw"></i>
                    Register/Login
                </a>
        </li>
        <li class="nav-item">
          <a href="../logout.php" class="nav-link font-italic">
          <i class="fas fa-sign-out-alt mr-3 text-primary fa-fw"></i>
          Logout
                </a>
        </li>
      </ul>
  </div>
  <!-- End vertical navbar -->



  <div  id="y" class="w3-light-green col-lg-12 col-centered">
      <div id="z" class="w3-container w3-transparent w3-center w3-opacity w3-padding-32">
          <h1 class="w3-margin w3-xlarge">Contact Us : </h1>
          <i class="fab fa-facebook"></i>
          <i class="fab fa-github" ></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-linkedin-square"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-youtube"></i>
          <br><br>
      </div>
  </div>
    	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"> </script> 
  <script src="updates.js"></script>
  
</body> 

</html>					 
