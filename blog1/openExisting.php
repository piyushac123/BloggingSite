<?php
    
    $con = mysqli_connect('localhost','root','','BloggingSite');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    //mysqli_select_db($con,"ajax_demo");
            
    
    
    $sql1="select uid,email,channelName from Registration where flag=1";
    $result1 = mysqli_query($con,$sql1);
    $row1=mysqli_fetch_array($result1);
    $uid=$row1['uid'];
    $email=$row1['email'];
$channelName=$row1['channelName'];
$command='<div class="container"><div class="row"><div class="col-lg-2"></div><div class="col-lg-8"><center><form action="goToExisting.php" method="post"><input type="text" placeholder="Enter email" name="email" class="arrange1" value="'.$email.'"/><br/><select style="margin-top:20px;padding:10px;width:30%" name="blogName">';
    //echo $uid."<br>".$email;
    $sql="select pname from Post where uid='".$uid."'";
    $result = mysqli_query($con,$sql);
    //$cnt=50;
    while($row = mysqli_fetch_array($result)){
        /*$path="blogData/".$email."/".$row['pname'].".txt";
        $myfile=fopen($path,"r") or die("unable to open file");
        $blogData=fread($myfile,filesize($path));
        //echo $blogData[$cnt].' '.$cnt.'<br><br>';
        fclose($myfile);*/
        //$val1=strpos($blogData[$cnt],'.');
        //echo $val1." ";
        //$blogContent=file_get_contents($path,false,NULL,0,$val1);
        $command.='<option>'.$row["pname"].'</option>';
    }
    $command.='</select><br><input type="submit" style="margin-top:20px;padding:10px;width:30%" value="Submit"></form></center></div></div></div>';
    echo $command;
mysqli_close($con);
?>