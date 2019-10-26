<!--
==============================================================================
 Name         :       logout_page.php
 Student      :       Francisco Caceres
 Class        :       CSE 3324-34862 Section 5
 Date         :       10/22/2019
 Student NetID:       FJC56
 Program Description: Displays user has logged out. Deletes appropriately.
==============================================================================
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Logged Out</title>
    </head>
    <?php
        // remove session and session cookie
        
    ?> 
    <body>
        <h1>Logged Out</h1>
        <p>
            <?php
                session_start();
                session_destroy();
            ?>
            You are now logged out of the website.<br><br>
        </p>
        <p>
            <a href="login_page.php">Log in</a> again.
        </p>
    </body>
</html>