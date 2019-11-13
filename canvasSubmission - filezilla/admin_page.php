<!--
==============================================================================
 Name         :       admin_page.php
 Student      :       Francisco Caceres
 Class        :       CSE 3324-34862 Section 5
 Date         :       10/22/2019
 Student NetID:       FJC56
 Program Description: Presents either admin status or redirect option 
==============================================================================
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Administrator Page</title>
    </head>
    <body>
        <h1>Administrator Page</h1>
        <?php
            session_start();
            if($_SESSION['currentForename'] === "Super" && $_SESSION['userType'] === "admin") {
            // is an Admin logged in? if so, show Admin content
        	// (nothing deeper than saying hey, you're an admin, here's your name as well)
                echo "Welcome back, " . $_SESSION['adminName'] . ".<br>You are an admin.<br>";
                echo "<br><br>Click on <a href=http://pluto.cse.msstate.edu/~fjc56/Lab05/logout_page.php>this link</a> to log out";
            }
            else { //if not, show message and link to login form
                echo "You are currently not logged in <br><br>";
                echo "Follow <a href=http://pluto.cse.msstate.edu/~fjc56/Lab05/login_page.php>this link</a> to log back in";
            }
        ?>
    </body>
</html>
