<?php
            
            $email=isset($_POST['email'])?$_POST['email']:NULL;
            $blogName=isset($_POST['blogName'])?$_POST['blogName']:NULL;
            //echo $email."<br>".$blogName."<br>".$blogContent."<br>".$blogType;
            $path='blogData/'.$email;
    
            $con = mysqli_connect('localhost','root','','BloggingSite');
                if (!$con) {
                    die('Could not connect: ' . mysqli_error($con));
                }
            
            if(isset($_POST['email'])&&isset($_POST['blogName'])){
                $sql1="select uid from Registration where flag=1";
                $result1 = mysqli_query($con,$sql1);
                $row1=mysqli_fetch_array($result1);
                $uid=$row1['uid'];
                $sqlsearch="select * from Post";
                $result = mysqli_query($con,$sqlsearch);
                $blogType='';
                while($row = mysqli_fetch_array($result)){
                    if($row['uid']==$uid){
                        $blogType=$row['category'];
                    }
                }
                $blogContent='';
                $filepath=$path.'/'.$blogName.'.txt';
                $myfile=fopen($filepath,"r") or die("unable to open file");
                $blogContent=fread($myfile,filesize($filepath));
                fclose($myfile);
                $val='<form action="createBlog.php" method="post">';
                $val.='<input type="text" placeholder="Enter email" name="email" class="arrange1" value="'.$email.'"/><br/>';
                $val.='<input type="text" name="blogName" placeholder="Enter blog name" class="arrange1" value="'.$blogName.'"/><br/>';
                $val.='<input type="text" name="blogType" placeholder="Enter blog type(eg. Nature blog, Food blog, etc)" class="arrange1" value="'.$blogType.'"/><br/>';
                $val.='<textarea style="resize:vertical;min-height: 500px;" cols="50" name="blogContent" placeholder="Enter Blog Content" class="arrange1 height1">'.$blogContent.'</textarea><br/>';
                $val.='<input type="submit" value="POST"/></form>';
                echo $val;
            }
                mysqli_close($con);
?>