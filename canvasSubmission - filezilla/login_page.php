<!--
==============================================================================
 Name         :       login_page.php
 Student      :       Francisco Caceres
 Class        :       CSE 3324-34862 Section 5
 Date         :       10/22/2019
 Student NetID:       FJC56
 Program Description: Allows user to login. Links appropriately if successful.
==============================================================================
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log in to Website</title>
        <style>
            input {
                margin-bottom: 0.5em;
            }
        </style>
    </head>
    <body>
        <?php
      
	        // Is someone already logged in? If so, forward them to the correct page.
	        //(HINT: Implement this last, you cannot test this until someone can log in.)
	        session_start();
	        if( $_SESSION['userLoggedIn'] ){
	        	if($_SESSION['currentForename'] === "Super" && $_SESSION['userType'] === "admin")
		        	header("Location: http://pluto.cse.msstate.edu/~fjc56/Lab05/admin_page.php");
		        if ($_SESSION['userType'] === "user" )
		        	header("Location: http://pluto.cse.msstate.edu/~fjc56/Lab05/user_page.php");
	        }
	        
	          
          	// Were a username and password provided? If so check them against the database.
	        if (isset($_POST['username']) && isset($_POST['password'])) {
	        	$logIn = false;
		        $logIn = isValidCombo( $_POST['username'], $_POST['password'] );

		        // If username / password were valid, set session variables and forward them to the correct page
		        if($logIn == true)
		        	frwdUsr();
		        else {
		        	$loginErrorMessage = "Failed login, try again.<br><br>";
		        	$usrNmFail = $_POST['username'];
		            $pswdFail = $_POST['password'];
		        } // If the username / password were not valid, show error message and populate form with the original inputs
		    }
		?>

        <h1>Welcome to <span style="font-style:italic; font-weight:bold; color: maroon">
                Great Web Application</span>!</h1>
                
        <p style="color: red">
        	<?php if (isset($_POST['submit'])) if($loginErrorMessage)echo $loginErrorMessage; ?>
        </p>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>Username: </label>
            <input type="text" name="username" value="<?php if (isset($_POST['submit'])) echo $usrNmFail; ?>"><br>
            <label>Password: </label>
            <input type="password" name="password" value="<?php if (isset($_POST['submit'])) echo $pswdFail; ?>"><br>
            <input type="submit" name="submit" value="Log in">
        </form>
        
        <p style="font-style:italic">
            Placeholder for "forgot password" link<br><br>
            Placeholder for "create account" link
        </p>
</html>
<?php
	function hashString($hashing) { // salt and hash a string
	  $salt1    = "qm&h*";
	  $salt2    = "pg!@";
	  $hashing    = hash('ripemd128', "$salt1$hashing$salt2");
	  return $hashing;
	}

	function isValidCombo($usrNm, $pswd) { 	// check to see if a username/password combination is valid
	  require('login.php');
	  $connection = new mysqli($hn, $un, $pw, $db);

	  if ($connection->connect_error) die("Could not connect " . $connection->connect_error);

	  if (isset($_POST['username']) && isset($_POST['password'])) {
	    $isValidBool = false;

	    $usrSql = "SELECT * FROM lab4_users WHERE username = '$usrNm'";
	    $usrResult = mysqli_query($connection, $usrSql) or die("Error1<br>" . mysqli_error());

	    if( mysqli_num_rows($usrResult) === 1 ) {
	      $row = mysqli_fetch_assoc($usrResult);
	      $ding = hashString($pswd);

	      if ($ding === $row['password'] )
	        $isValidBool = true;
	    }
	  }
	  return $isValidBool;
	}

	function frwdUsr() { // forward user or admin to the correct page
		require("login.php");
		$conn = new mysqli($hn, $un, $pw, $db);
		if($conn->connect_error)
			die("Could not connect: " . $conn->connect_error );
		$logInName = $_POST['username'];

		$usrSql = "SELECT * FROM lab4_users WHERE username = '$logInName'";
		$userResult = $conn->query($usrSql);

		if( $userResult->num_rows > 0 ) {
			session_start();
			$row = $userResult->fetch_assoc();
			$_SESSION['userLoggedIn'] = true;
			$_SESSION['currentForename'] = $row['forename'];
			$_SESSION['userType'] = $row['type'];
			if($_SESSION['currentForename'] === "Super" && $_SESSION['userType'] === "admin") {
				$_SESSION['adminName'] = $row['forename'] . $row['surname'];
				header("Location: http://pluto.cse.msstate.edu/~fjc56/Lab05/admin_page.php");
			}
			else
				header("Location: http://pluto.cse.msstate.edu/~fjc56/Lab05/user_page.php");
		}
	}
?>