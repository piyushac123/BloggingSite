<!doctype html>
<html>
    <body>
        <?php
            $email= $_POST['Email'];
            $pass= $_POST['Password'];

            $con = mysqli_connect('localhost','root','','BloggingSite');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }

            //mysqli_select_db($con,"ajax_demo");
            
            $sql="select email,password from Registration";
            $result = mysqli_query($con,$sql);
            $flag=0;
            while($row = mysqli_fetch_array($result)){
                if($row['email']==$email && $row['password']==$pass){
                    $flag=1;
                        $sql1="UPDATE `Registration` SET `flag`=1 WHERE email='".$email."'";
                     $result1 = mysqli_query($con,$sql1);
                     $sqlupdate="UPDATE `Registration` SET `flag`=0 WHERE email<>'".$email."'";
                     $result2 = mysqli_query($con,$sqlupdate);
                    ?>
                    <script>
                        alert("Logged In Successfully");
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
        