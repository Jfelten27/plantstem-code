<!DOCTYPE html>
<html>
    <head>
        <?php include('htmlhead.php');?>
    </head>
    <body class="bg-green">
        <?php include('navbar.php')?>
        <div class="w3-container">
            <h1>Class Schedule</h1>
            <?php
                require('config.php');
                $sqlconnection = new mysqli($hostname, $username, $password, 'classes');

                if($sqlconnection->connect_error) {
                    die('Connection failed:' . $sqlconnection->connect_error);
                }
                $sqlconnection->query('');
            ?>
        </div>
    </body>
</html>


