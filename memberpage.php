<?php require('includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

//define page title
$title = 'Members Page';

//include header template
require('layout/header.php');
?>

<div class="container">

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			
			<li>
							<a href='#'>Logged as <?php echo $_SESSION['username']; ?></a>
					</li>
					<li>
							<a href='memberpage.php'>Home</a>
					</li>
               	<li>
							<a href="table.php">Members Table</a>
					</li>
					<li>
							<a href='profile.php'>Profile</a>
					</li>
				
					<li>
							<a href='edit.php'>Edit User Profile</a>
					</li>
					<li>
							<a href='logout.php'>Logout</a>
					</li>
			</ul>
	</div>

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<h2> IS 218 </h2>
				<h2>Welcome <?php echo $_SESSION['username']; ?></h2>
				
				<hr>

		</div>
	</div>
	

<?php
//include header template
require('layout/footer.php');
?>
