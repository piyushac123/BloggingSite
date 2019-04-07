<!doctype html>
<html>
        <head>
          <title>BLOG</title>
          <meta charset="utf-8"/>
          <meta name="viewport" content="width=device-width, initial-scale=1"/>
          <link rel="stylesheet" href="../blog/blog.css"/>
            <link rel="stylesheet" href="blog1.css"/>
            <link rel="stylesheet" href="../res/res.css"/>
          <link href='https://fonts.googleapis.com/css?family=Aclon' rel='stylesheet'/>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="../res/res.js"></script>
            <script src="blog1.js"></script>
        </head>
        <body>
            <div>
                <a href="../feedback/feedback.html"><input type="button" name="feedbackButton" class="feedback" /></a>
            </div>
            <?php
                $con = mysqli_connect('localhost','root','','BloggingSite');
                if (!$con) {
                    die('Could not connect: ' . mysqli_error($con));
                }
                $sql="select * from Registration";
                $result = mysqli_query($con,$sql);
                $flag=0;
                $email='';
                while($row = mysqli_fetch_array($result)){
                    if($row['flag']==1){
                        ?>
                        <script>
                            $(document).ready(function(){
                                $("#section11").hide();
                                $("#section12").hide();
                                $("#sectionDefault").hide();
                                  $("#section21").show();
                                $('#selectionBox').show();
                            });
                            callIfLogin();
                        </script>
                        <?php
                        $email=$row['email'];
                        break;
                    }
                    else{
                        ?>
                        <script>
                            ReInitialize();
                        </script>
                        <?php
                    }
                }
            $path1='blogData/'.$email;
            if(!is_dir($path1)){
                ?>
                <script>
                    dirAbsent();
                </script>
                <?php
            }
            mysqli_close($con);
            ?>
            <div id="selectionBox">
                <table class="for-table">
                    <tr>
                      <th class="for-row"><a href="#section1" class="link1 show1">MY WORK</a></th>
                      </tr>
                    <!--<tr>
                      <th class="for-row"><a href="#section2" class="link1 show2">LIKED</a></th>
                    </tr>
                    <tr>
                      <th class="for-row"><a href="#section3" class="link1 show3">SUBSCRIPTION</a></th>
                    </tr>-->
                    <!--<tr>
                      <th class="for-row"><a href="#section4" class="link1 show4">TRENDINGS</a></th>
                    </tr>-->
		    <tr>
                      <th class="for-row"><a href="#section5" class="link1 show5">ADD POST</a></th>
                    </tr>
                </table>
            </div>
        <header>
        <div class="container-fluid  back1"> 
          <div class="row" style="line-height: 110px;">
            <div class="col-lg-6"><a href="../home/home.html" alt="Symbol"><img src="../image1/images.png" alt="Image" width="100" height="100"/></a>
              <span class="heading">loggers</span></div>
              <div class="col-lg-6">
              <ul class="nav nav-pills" style="float:right;">
                <li class="active"><a href="../blog1/blog1.php" class="pills-features">BLOG</a></li>
                <li><a href="../about/about.html" class="pills-features" style="margin-right:40px;">ABOUT</a></li>
                  <!--<li><a href="../feedback/feedback.html" class="pills-features">FEEDBACK</a></li>-->
                <li id="section11"><a href="../login/login.html" class="pills-features">LOGIN</a></li>
                <li id="section12"><a href="../signup/signup.html" class="pills-features">SIGN UP</a></li>
                  <li id="section21"class="pills-features">
                      <a href="logout.php" style="color:turquoise;" onclick="ReInitialize()"><acronym title="LOGOUT"><img src="../image1/index1.png" alt="Image" width="50" height="50"/> <?php echo $email;?></acronym></a></li>
              </ul>
          </div>
           </div>
        </div>
        </header>
        <div id="sectionDefault">
    	<?php include('defaultwork.php'); ?>

    	</div> 
        <div id="section1">
    	<?php include('mywork.php'); ?>

    	</div>
	<!--<div id="section2">
		<h1>Section2</h1>
        <div class="margin-top:100px;"></div>
		<div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
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
            <div class="row">
                <div class="col-lg-2"></div>
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
        
	</div>
	<div id="section3">
        <div class="margin-top:100px;"></div>
		<h1>Section3</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
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
            <div class="row">
                <div class="col-lg-2"></div>
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
	</div>
	<div id="section4">
        <div class="margin-top:100px;"></div>
		<h1>Section4</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
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
            <div class="row">
                <div class="col-lg-2"></div>
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
	</div>-->
    <div id="section5">
        <div class="margin-top:100px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <button style="margin-top:20px;padding:20px;width:100%" onclick="changeToSection7()">Open Existing Blog</button><br>
                    <button style="margin-top:20px;padding:20px;width:100%" onclick="changeToSection6()">Add New Blog</button>
                </div>
            </div>
        </div>
        <div class="margin-down:500px;z-index:1"></div>
    </div>
	<div id="section6">
        <div class="margin-top:100px;"></div>
		<div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <h1>Add Post</h1>
                    <form action="createBlog.php" method="post">
                        <input type="text" placeholder="Enter email" name="email" class="arrange1" value="<?php echo $email ?>" required/><br/>
                        <input type="text" name="blogName" placeholder="Enter blog name" class="arrange1" required/><br/>
                        <input type="text" name="blogType" placeholder="Enter blog type(eg. Nature blog, Food blog, etc)" class="arrange1"/><br/>
                        <textarea style="resize:vertical" cols="50" name="blogContent" placeholder="Enter Blog Content" class="arrange1 height1" required></textarea><br/>
                        <input type="submit" value="POST"/>
                    </form>
                </div>
            </div>
        </div>
	</div>
        <div id="section7">
    	<?php include('openExisting.php'); ?>
            </div>
        <footer class="footRelative1">
            <div  class="footer1 container-fluid" style="position:absolute;bottom:0;width:100%">
            <div class="row">
                  <div class="col-lg-4">
                      <b class="foot-head"><div class='fa fa-thumb-tack'></div> LINKS</b>
                      <ul class="foot-text">
                          <li><a href="../blog1/blog1.php" class="linkFoot">BLOG</a></li>
                          <li><a href="../about/about.html" class="linkFoot">ABOUT</a></li>
                          <li><a href="../feedback/feedback.html" class="linkFoot">FEEDBACK</a></li>
                          <li><a href="../login/login.html" class="linkFoot">LOGIN</a></li>
                          <li><a href="../signup/signup.html" class="linkFoot">SIGN UP</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-4">
                      <b class="foot-head"><div class='fa fa-thumb-tack'></div> JOIN US</b><br/>
                      <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                      <a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a>
                      <a href="https://plus.google.com/discover"><i class="fa fa-google"></i></a>
                      <a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="col-lg-4">
                      <b class="foot-head"><div class='fa fa-thumb-tack'></div> Frequently asked questions</b>
                      <ul class="foot-text">
                          <li><a href="../faq/faq.xml" class="linkFoot">Why should I choose this blogging site?</a></li>
                          <li><a href="../faq/faq.xml" class="linkFoot">How can quality content grow my audience?</a></li>
                          <li><a href="../faq/faq.xml" class="linkFoot">How should I research blog topics and get information for my specific niche?</a></li>
                          <div style="float:right"><a href="../faq/faq.xml" class="linkFoot">more.....</a></div>
                      </ul>
                  </div>
            </div>
            </div>
            </footer>
        </body>
    </html>
