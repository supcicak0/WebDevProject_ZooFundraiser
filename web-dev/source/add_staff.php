<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      Add Staff
    </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <ul class="navigation">
    <li><a href="adminhome.php">Home</a></li>
      <li><a href="adminedit.php">Edit Admin</a></li>
      <li><a href="admindonate.php">View Donation</a></li>
      <li><a href="adminstore.php">Edit Store</a></li>
      <li><a href="adminadopt.php">Edit Animal Adoption</a></li>
      <li><a href="adminreport.php">Report</a></li>
    </ul>
    </ul>

	<form action="add_staff2.php" method="post"  enctype="multipart/form-data">



    <div class="container">
    <h1>Add Staff</h1>
    <hr>

    <label for="email"><b><br>Email</br></label>
	<br>
    <input type="email" placeholder="Enter email" name="email" id="email" required><br>

    <label for="password"><b><br>Password</br></label>
	<br>
    <input type="password" placeholder="Enter password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="password" required><br>

    <label for="fullname"><b><br>Fullname</br></label>
	<br>
    <input type="text" placeholder="Enter fullname" name="fullname" id="fullname" required><br></br>

    <button type="submit" class="btn btn-primary">Add</button>
    </div>

  
	</form>

</body>
</html>