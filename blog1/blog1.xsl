<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html lang="en">
        <head>
          <title>BLOG</title>
          <meta charset="utf-8"/>
          <meta name="viewport" content="width=device-width, initial-scale=1"/>
          <link rel="stylesheet" href="../blog/blog.css"/>
          <link rel="stylesheet" href="../res/res.css"/>
          <link href='https://fonts.googleapis.com/css?family=Aclon' rel='stylesheet'/>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="../res/res.js"></script>
        </head>
        <body>
            <div>
                <a href="../feedback/feedback.html"><input type="button" name="feedbackButton" class="feedback" /></a>
            </div>
            <div>
                <table class="for-table">
                    <tr>
                      <th class="for-row">MY WORK</th>
                      </tr>
                    <tr>
                      <th class="for-row">LIKED</th>
                    </tr>
                    <tr>
                      <th class="for-row">SUBSCRIPTION</th>
                    </tr>
                    <tr>
                      <th class="for-row">TRENDINGS</th>
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
                <li class="active"><a href="../blog/blog.xml" class="pills-features">BLOG</a></li>
                <li><a href="../about/about.html" class="pills-features" style="margin-right:40px;">ABOUT</a></li>
                  <!--<li><a href="../feedback/feedback.html" class="pills-features">FEEDBACK</a></li>-->
                <li>
                    <a href="../login/login.html" class="pills-features"><img src="../image1/index1.png" alt="Image" width="50" height="50"/> a@gmail.com</a>
                  </li>
              </ul>
          </div>
           </div>
        </div>
        </header>
        <h2>
    	<div class="container">
    	<xsl:for-each select="Blog/User">
            <xsl:sort select="Name"/>
            <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <img src="../image1/index.jpeg" alt="image" class="border-blog"/>
            </div>
            <div class="col-lg-4">
                <ul style="list-style-type:circle;">
                    <li><xsl:value-of select="Name"/></li>
                    <li><xsl:value-of select="Username"/></li>
                    <li><xsl:value-of select="Email"/></li>
                    <li><xsl:value-of select="Quote"/></li>
                </ul>
            </div>
            </div>
            <hr/>
            <br/>
    	</xsl:for-each>
    	</div>
    	</h2>
        <footer style="position:relative;bottom:0;width: 100%;margin-top:300px;">
            <div  class="footer1 container-fluid" style="position:absolute;bottom:0;width:100%">
            <div class="row">
                  <div class="col-lg-4">
                      <b class="foot-head"><div class='fa fa-thumb-tack'></div> LINKS</b>
                      <ul class="foot-text">
                          <li><a href="../blog/blog.xml" class="linkFoot">BLOG</a></li>
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
                          <li><a href="../faq/faq.html" class="linkFoot">Why should I choose this blogging site?</a></li>
                          <li><a href="../faq/faq.html" class="linkFoot">How can quality content grow my audience?</a></li>
                          <li><a href="../faq/faq.html" class="linkFoot">How should I research blog topics and get information for my specific niche?</a></li>
                          <div style="float:right"><a href="../faq/faq.html" class="linkFoot">more.....</a></div>
                      </ul>
                  </div>
            </div>
            </div>
            </footer>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
