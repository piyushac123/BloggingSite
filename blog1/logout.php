<?php     
        $con = mysqli_connect('localhost','root','','BloggingSite');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }
        $sqlupdate="UPDATE `Registration` SET `flag`=0 WHERE 1";
        if ($con->query($sqlupdate) === FALSE) {
                echo "Error: " . $sqlupdate . "<br>" . $con->error;
        }
        mysqli_close($con);
?>
<script>
    window.history.go(-1);
</script>