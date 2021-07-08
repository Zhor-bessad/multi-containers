<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Multi-containers</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Multi-containers</h1>
                <?php

                    $host = 'db';  //the name of the mysql service inside the docker file.
                    $user = 'devuser';
                    $password = 'devpass';
                    $db = 'test_db';
                    $conn = new mysqli($host,$user,$password,$db);
                    if($conn->connect_error){
                    echo 'connection failed'. $conn->connect_error;
                    }
                    echo 'successfully connected to MYSQL';
                ?>
        </div>
    </body>
</html>

