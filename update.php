<?php require('includes/config.php');

//redirect to login page if you are not signed in
if(!$user->is_logged_in()){ header('Location: login.php'); }

//Header on browser
$title = 'Update';

//include header template
require('layout/header.php');  
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile Page</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/portfolio-item.css" rel="stylesheet">



</head>

<body>


    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#">Login as <?php echo $_SESSION['username']; ?></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
				<li>
                      <a href="memberpage.php">Home</a>
                  </li>
                    <li>
                      <a href='profile.php'>Profile</a>
                  </li>
                  <li>
                      <a href="table.php">Members Table</a>
                  </li>
				  <li>
                      <a href='edit.php'>Edit User Profile</a>
                    </li>
                  <li>
                      <a href='logout.php'>Logout</a>
                    </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                 Thank you! Your profile will be updated shortly.
                </h1>
            </div>
        </div>
       

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
