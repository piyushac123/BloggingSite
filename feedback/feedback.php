 <?php
            $fname='';$lname='';$country='';$response='';$comment='';
            $fname= "'".$_POST['fname']."'";
            $lname= "'".$_POST['lname']."'";
            $country= "'".$_POST['country']."'";
            $response= "'".$_POST['grp1']."'";
            $comment= "'".$_POST['comment']."'";
            $val=0;
            if($response=="'Yes'"){
                $val=1;
            }
        $con = mysqli_connect('localhost','root','','BloggingSite');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }
            
            //mysqli_select_db($con,"ajax_demo");
            $fullName=$fname.' '.$lname;
            
            $sql="INSERT INTO Feedback (`name`,`country`, `response`,`comment`)
            VALUES ($fullName,$country,$val,$comment)";
            
            if ($con->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $con->error;
            }else{
                
               ?>
                <script>
                    alert('Your response have been recorded.');
                    window.history.go(-2);
                </script>
                <?php 
            }
            
            mysqli_close($con);
 ?>
<!--ALTER TABLE tablename AUTO_INCREMENT = 1-->