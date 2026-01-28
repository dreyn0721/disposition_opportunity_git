<?php 
include("init/database.php");
include("init/main-functions.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="assets/js/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">


	<link href="assets/main.css" rel="stylesheet" crossorigin="anonymous">

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<meta name="description" content="<?=$description;?>">
	<meta name="author" content="<?=$author;?>" />
	<title><?=$pagetitle;?></title>




</head>
<body>

	<header>
    <img src="https://dummyimage.com/500x200/000/fff" alt="Logo">



    <!-- ===== Header / Navbar ===== -->
  <nav class="navbar navbar-expand-md justify-content-center">

      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>/blog.php">Blog</a></li>


          
          <?php if( logged_in() ): ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>/logout.php">Logout</a></li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#authModal">
              Login
            </a>
          </li>
        <?php endif; ?>




        </ul>
        <a href="#free-guide" class="header-cta">
          Get Your Free Guide Now
        </a>
      </div>
  </nav>



  </header>



  <?php include("template-parts/auth-modal.php"); ?>