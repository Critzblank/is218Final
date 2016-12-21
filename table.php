<?php require('includes/config.php');

//redirect to login page if you are not signed in
if(!$user->is_logged_in()){ header('Location: login.php'); }

//define page title
$title = 'Table';

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
				<h2> Table</h2>
				
				<hr>

		</div>
	</div>

                
  <?php 
  $con=mysqli_connect("sql2.njit.edu","jc675","Wu4OCSwRp","jc675");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM members");
echo "<table border='1'>
<tr>
<th>Member ID</th>
<th>UserName</th>
<th>Email</th>
</tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['memberID'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
  
  
  ?>
  </p>
 
  
  </div>
    </div>


</div>

<?php 
//include header template
require('layout/footer.php'); 
?>