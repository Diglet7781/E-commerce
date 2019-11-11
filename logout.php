<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Logged Out</title>
    </head>
    <?php
        session_start();
        session_destroy();
        
        
    ?> 
    <body>
        <h1>Logged Out</h1>
        <p>
            You are now logged out of the website.
        </p>
        <p>
            <a href="login.php">Log in</a> again.
        </p>
    </body>
</html>