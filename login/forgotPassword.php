<!doctype html>
<html>
    <body>
        <?php
            $email= $_POST['email1'];
            $pass= $_POST['password1'];

            $con = mysqli_connect('localhost','root','','BloggingSite');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }

            //mysqli_select_db($con,"ajax_demo");
            
            $sql="select email from Registration";
            $result = mysqli_query($con,$sql);
            $flag=0;
            while($row = mysqli_fetch_array($result)){
                if($row['email']==$email){
                    $flag=1;
                        $sqlupdate="UPDATE `Registration` SET `password`='".$pass."' WHERE email='".$email."'";
                if ($con->query($sqlupdate) === FALSE) {
                echo "Error: " . $sqlupdate . "<br>" . $con->error;
                }
                    ?>
                    <script>
                        alert("Password Updated Successfully");
                        window.history.go(-2);
                    </script>
                    <?php
                        break;
                    }
                }
                
            if($flag!=1&&$email!=''&&$pass!='')
                {
                ?>
                <script>
                    alert("Match not found");
                    window.history.go(-1);
                </script>
                <?php
                }
            else if($flag!=1){?>
                <script>
                window.history.go(-1);
                </script>
            <?php
            }
            mysqli_close($con);
        ?>
    </body>
</html>
        