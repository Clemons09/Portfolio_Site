
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Web Development Portfolio">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Cody Lemons">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="description" content="Website for Cody Lemons">
    <meta name="keywords" content="web development, author, writer">
    <meta name="robots" content="nofollow">
    <meta http-equiv="author" content="Cody Lemons">
    <meta http-equiv="pragma" content="no-cache">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <title>Cody Lemons - Writer/Web Developer</title>
    <link href="indexstyles.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

  <div class="pagetop">
    <h1 id="my-name">Cody Lemons</h1>
    <h4 class="diff-font">Writer &amp; Web Developer</h4>
    <h5 class="email-font">Clemons9988@gmail.com</h5>
    <div id="time">
      <span id="local-time-message"><u>My Local Time:</u></span>
      <span id="local-time">Here's My Local Time</span>
    </div>
  </div>

  </head>
  <body>
    <ul id="social-links">
      <li id="social"><a href="http://www.twitter.com/cody_lemons" target="_blank" class="btn btn-block btn-social btn-twitter">
      <span class="fa fa-twitter"></span><p></p>
      </a></li>
      <li id="social"><a href="http://www.github.com/Clemons09" target="_blank" class="btn btn-block btn-social btn-github">
      <span class="fa fa-github"></span><p></p>
      </a></li>
      <li id="social"><a href="http://www.codylemons.com" target="_blank" class="btn btn-block btn-social btn-book">
      <span class="fa fa-book"></span><p></p>
      </a></li>
    </ul> 
    <!--<img src="images/sunshine-cody.jpeg" alt="Cody Lemons and his wife Sunshine taking a selfie and smiling" height="420" width="310"/>-->
    <button id="panel">About Me</button>
      <div id="content"><span><span id="content-message"></span><br><br>I graduated from the <em>University of Mississippi</em> in 2012 with a B.A. in Journalism. In 2017, I went on to study Web Development through <em>Bloc.io</em>. Now, I spend my time building websites and experimenting with code. If you're a writer or programmer like me, I'd love to hear from you. So please send me a message or find me on Twitter and Github.</span>
    </div>
  <br>
  <br>
  <br>
  <div class="wsheader"><h3>Professional Writing Samples</h3></div>
    <div class="writingsamples">
      <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/article1.jpg">
      <img src="images/article1.jpg" alt="first published article from 2009" width="600" height="400">
    </a>
    <div class="desc">First published article (2009) - <em>The Daily Mississippian</em></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/article2.jpg">
      <img src="images/article2.jpg" alt="second published article from 2012" width="600" height="400">
    </a>
    <div class="desc">Second published article (2012) - <em>DeSoto Times-Tribune</em></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/article3.jpg">
      <img src="images/article3.jpg" alt="third published article from 2012" width="600" height="400">
    </a>
    <div class="desc">Third published article (2012) - <em>DeSoto Times-Tribune</em></div>
  </div>
</div>
<div class="clearfix"></div>
</div> <br><br>
    <div class="wsaheader"><h3>Short Stories Available on Amazon!</h3></div>
    <div class="writings-amazon">
    <div class="resp-amazon">
      <div class="gall-amazon">
        <a target="_blank" href="https://t.co/qei2bCAAF4?amp=1">
          <img src="images/mental.jpg" alt="outline of a head facing to the right with jumbled lines inside the head to show confusion" width="600" height="400">
        </a>
        <div class="description-amazon">"The Leak" - <em>Available on Amazon!</em></div>
        <!--<span id="info-icon" class="iconify" data-icon="bi:info-circle" data-inline="false"></span>-->
      </div>
    </div>
    <div class="resp-amazon">
      <div class="gall-amazon">
        <a target="_blank" href="https://t.co/QNyYSGXPno?amp=1">
          <img src="images/prison.jpg" alt="image of a prisoner's silhouette walking down a dark prison corridor alone" width="600" height="400">
        </a>
        <div class="description-amazon">"Encore! A Prison Population Story" - <em>Available on Amazon!</em></div>
        <!--<span id="info-icon" class="iconify" data-icon="bi:info-circle" data-inline="false"></span>-->
      </div>
    </div>
    <div class="clearfix"></div>
    </div>
    <div class="container">
      <form id="email-form" class="contact-form" action="contactform.php" method="POST">
      <fieldset>
        <legend>Send me a message:</legend>
    <div id="name-field" class="form-group">
      <input class="form-control" type="text" name="name" placeholder="Full name">
      <span class="error">* <?php echo $nameErr;?></span>
      <br>
    </div>
    <div id="email-field" class="form-group">
      <input class="form-control" type="text" name="mail" placeholder="Your email">
      <span class="error">* <?php echo $emailErr;?></span>
      <br>
    </div>
    <div id="subject-field" class="form-group">
      <input class="form-control" type="text" name="subject" placeholder="Subject">
      <span class="error">* <?php echo $subjectErr;?></span>
      <br>
    </div>
    <div class="form-group">
    <br>
      <textarea class="form-control" id="message-field" name="message" placeholder="Message"></textarea>
      <span class="error">* <?php echo $messageErr;?></span>
      <br>
    </div>
      <button id="btn1" type="submit" name="submit">Send</button>
      <button id="btn2" type="reset" name="reset">Clear</button>
      <?php
        function function_alert($successmsg) {
          if ( isset($_GET['success']) && $_GET['success']==true )
          echo "<script>alert('$successmsg');</script>";
        }
        function_alert("Message Sent!");
        ?>
    </fieldset>
    </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/index.js"></script>
  </body>
      <p class="copyright">Cody Lemons &copy; 2021</p>
