<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
    <?php
                $dbUser = "cjpepin";
                $dbPass = "test1234";
                
                $usersArr["cjpepin"] = "Location: http://ec2-3-22-183-205.us-east-2.compute.amazonaws.com/~cjpepin/PP/UserPassTestSP/main.php";
                $usersArr["nrodrin1904"] = "usuk6969";
                
                function test_in($input){
                    $input = trim($input);
                    $input = stripslashes($input);
                    $input = htmlspecialchars($input);
                    return $input;
                
                }

                $user = test_in($_POST["user"]);
                $pass = test_in($_POST["pass"]);

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["user"])) {
                        $userErr = "Username is required.";
                    } elseif (empty($_POST["pass"])) {
                        $passErr = "Password is required.";
                    } elseif ($dbUser != $user || $dbPass != $pass){
                        $allErr = "Incorrect username or password.";                       
                    } elseif ($dbUser == $user){
                        header($usersArr[$user]);
                    }
                }
            ?>
        <form name="input" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

            <div class="input-wrapper">
                Username: <input type="text" name="user"> <span class="error"> <?php echo $userErr;?> </span>
                
                Password: <input type="password" name="pass"> <span class="error"> <?php echo $passErr;?> </span>
                
                <span class="error"> <?php echo $allErr;?> </span>
            </div>

            <input type="submit" value="Submit">
            
           
        </form>
        
        
        <script src="" async defer></script>
    </body>
</html> 