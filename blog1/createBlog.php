<?php
            
            $email=isset($_POST['email'])?$_POST['email']:NULL;
            $blogName=isset($_POST['blogName'])?$_POST['blogName']:NULL;
            $blogContent=isset($_POST['blogContent'])?$_POST['blogContent']:NULL;
            $blogType=isset($_POST['blogType'])?$_POST['blogType']:NULL;
            //echo $email."<br>".$blogName."<br>".$blogContent."<br>".$blogType;
            $path='blogData/'.$email;

            $con = mysqli_connect('localhost','root','','BloggingSite');
                if (!$con) {
                    die('Could not connect: ' . mysqli_error($con));
                }
            
            if(isset($_POST['email'])&&isset($_POST['blogName'])&&isset($_POST['blogContent'])&&isset($_POST['blogType'])){
                $sqlsearch="select uid,email from Registration";
                $result = mysqli_query($con,$sqlsearch);
                $uid='';
                while($row = mysqli_fetch_array($result)){
                    if($row['email']==$email){
                        $uid=$row['uid'];
                    }
                }
                //echo $uid;
                $blogName1="'".$blogName."'";
                $blogType1="'".$blogType."'";
                if(!file_exists($path."/".$blogName.".txt")){
                    $sql11="INSERT INTO Post (`uid`,`pname`, `category`)
                    VALUES ($uid,$blogName1,$blogType1)";

                    if ($con->query($sql11) === FALSE) {
                        echo "Error: " . $sql11 . "<br>" . $con->error;
                    }
                }
            if(is_dir($path)==false){
                mkdir($path);
                chmod($path,0777);
                //echo "folder formed";
            }
            /*else{
                echo "folder present";
            }*/
            $filepath=$path.'/'.$blogName.'.txt';
            $myfile=fopen($filepath,"w+") or die("unable to open file");
            chmod($filepath,0777);
            fwrite($myfile,$blogContent);
            fclose($myfile);
            }
            mysqli_close($con);
        ?>
        <script>
            alert('Your Blog has been successfully posted.');
            window.location.href="blog1.php";
        </script>