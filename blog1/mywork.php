<?php
    $command='<div class="container">';
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
    //echo $uid."<br>".$email;
    $sql="select * from Post where uid='".$uid."'";
    $result = mysqli_query($con,$sql);
    $cnt=50;
    while($row = mysqli_fetch_array($result)){
        $path="blogData/".$email."/".$row['pname'].".txt";
        $myfile=fopen($path,"r") or die("unable to open file");
        $blogData=fread($myfile,filesize($path));
        //echo $blogData[$cnt].' '.$cnt.'<br><br>';
        fclose($myfile);
        //$val1=strpos($blogData[$cnt],'.');
        //echo $val1." ";
        //$blogContent=file_get_contents($path,false,NULL,0,$val1);
        $command.='<div class="row"><div class="col-lg-2"></div><div class="col-lg-10"><div class="jumbotron"><h1>'.$row['pname'].'</h1>';
        $command.='<p>'.$blogData.'.</p><br>';
        $command.='<b>Channel Name :'.$channelName.'</b></div></div></div>';
        $cnt++;
    }
    $command.='</div>';
    echo $command;
mysqli_close($con);
     /*   <div class="row"><div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <div class="jumbotron">
                        <h1>Heading</h1>
                        <p>Paragraph is being displayed.Paragraph is being displayed.Paragraph is being displayed.</p>
                        <B style="float:right">....read more</B>
                        <i class='fa fa-thumbs-up' style="font-size:24px;"></i>112<button><b>SUBSCRIBE</b></button><br>
                        <b>Channel Name: channel</b>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>*/
    ?>