<!--
==============================================================================
 Name         :       user_page.php
 Student      :       Francisco Caceres
 Class        :       CSE 3324-34862 Section 5
 Date         :       10/22/2019
 Student NetID:       FJC56
 Program Description: Presents either user status or redirect option 
==============================================================================
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>User Page</title>
    </head>
    <body>
        <h1>User Page</h1>
        <?php
            session_start();
            if( isset($_SESSION['currentForename']) && $_SESSION['userType'] === "user" ) {
                // is a User logged in? If so, welcome them back using their name
                echo "Welcome back, " . $_SESSION['currentForename'] . ".<br>";
                echo "<br><br>Click on <a href=http://pluto.cse.msstate.edu/~fjc56/Lab05/logout_page.php>this link</a> to log out";
            }
            else { // if not, show message and link to login page
                echo "You are currently not logged in <br><br>";
                echo "Follow <a href=http://pluto.cse.msstate.edu/~fjc56/Lab05/login_page.php>this link</a> to log back in";
            }
        ?>
    </body>

</html>
