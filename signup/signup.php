<!doctype html>
<html>
    <head>
        <title>Blog</title>
        <link rel="stylesheet" href="signup.css">
        <script src="signup.js"></script>
    </head>
    <body>
        <?php
            $fname= "'".$_POST['fname']."'";
            $lname= "'".$_POST['lname']."'";
            $email= "'".$_POST['email']."'";
            $password= "'".$_POST['pass']."'";
            $channel= "'".$_POST['channel']."'";
            //echo $fname.$lname.$email.$password.$channel;
        $con = mysqli_connect('localhost','root','','BloggingSite');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }
            $sqlupdate="UPDATE `Registration` SET `flag`=0 WHERE 1";
                if ($con->query($sqlupdate) === FALSE) {
                echo "Error: " . $sqlupdate . "<br>" . $con->error;
                }
            
            //mysqli_select_db($con,"ajax_demo");
            $fullName=$fname.' '.$lname;
            $sql="INSERT INTO Registration (`fullName`,`email`, `password`,`channelName`,`flag`)
            VALUES ($fullName,$email,$password,$channel,1)";
            
            if ($con->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $con->error;
            }else{
                
               ?>
                <script>
                    window.history.go(-2);
                </script>
                <?php 
            }
            
            mysqli_close($con);
        ?>
    </body>
</html>
<!--ALTER TABLE tablename AUTO_INCREMENT = 1-->