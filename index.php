
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
    <div id= "aboutbutton" class="aboutbtn center" style="text-align:center;">About Me</div>
      <div id="content" class="responsive"><span><span id="content-message"></span><br><br>I graduated from the <em>University of Mississippi</em> in 2012 with a B.A. in Journalism. In 2017, I went on to study Web Development through <em>Bloc.io</em>. Now, I spend my time building websites and experimenting with code. If you're a writer or programmer like me, I'd love to hear from you. So please find me on Twitter and Github.</span>
    </div>

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
  <br>
  <br>
  <br>
  <br>

<div class="slideshow-container">
  
<div class="code-header header"><h3>Coding Projects</h3></div>

  <div class="mySlides fade">
    <img class="projectimage" src="images/project1.png">
    <div class="text">Food Ordering App With Cart & Menu!<br><span class="sourcecode"><em style="font-size:10px; color:white;"><a href="https://github.com/Clemons09/Sunshines-Kitchen" target="_blank" style="text-decoration:none; color:antiquewhite;">Click for Source Code</em></span></div>
    
  </div>
  <div class="mySlides fade">
    <img class="projectimage" src="images/project2.png">
    <div class="text">ECommerce App With Advanced Cart Features!</div>
  </div>
  <div class="mySlides fade">
    <img class="projectimage" src="images/project3.png">
    <div class="text">Blog/Forum with Sign-in/Sign-out Features</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<hr>
 <br><br>
 <br><br>
    <!-- Trigger the Modal -->
    <div class="prosamples header"><h3>Professional Writing Samples</h3></div>

<img id="myImg" src="images/article1.jpg" style="width:100%;max-width:300px">

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>


    <!-- Trigger the Modal -->
<img id="mySecondImg" src="images/article2.jpg" style="width:100%;max-width:300px">
<!-- The Modal -->
<div id="mySecondModal" class="modal">
  <!-- The Close Button -->
  <span class="close2">&times;</span>
  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img02">
  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
    <!-- Trigger the Modal -->
    <img id="myThirdImg" src="images/article3.jpg" style="width:100%;max-width:300px">

<!-- The Modal -->
<div id="myThirdModal" class="modal">

  <!-- The Close Button -->
  <span class="close3">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img03">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
    <div class="clearfix"></div>
    </div>
    <hr>

    <div class="shorts-header"><h3>Short Stories on Amazon!</h3></div>
    <div class="writings-amazon">
      <div class="resp-amazon">
      <div class="gall-amazon">
        <a target="_blank" href="https://t.co/qei2bCAAF4?amp=1">
          <div class="tooltip"><img class="leakimage" src="images/mental.jpg" alt="outline of a head facing to the right with jumbled lines inside the head to show confusion" width="600" height="400"></div>
        </a>
        <div class="description-amazon"><strong>"The Leak"</strong> - <em>Available on Amazon!</em></div>
      </div>
    </div>
    <div class="resp-amazon">
      <div class="gall-amazon">
        <a target="_blank" href="https://t.co/QNyYSGXPno?amp=1">
          <img class="encoreimage" src="images/prison.jpg" alt="image of a prisoner's silhouette walking down a dark prison corridor alone" width="600" height="400">
        </a>
        <div class="description-amazon"><strong>"Encore! A Prison Population Story"</strong> - <em>Available on Amazon!</em></div>
      </div>
    </div>
    <div class="clearfix"></div>
    </div>
    <!--<div class="container">
      <form id="email-form" class="contact-form" action="contactform.php" method="POST">
      <fieldset>
        <legend>Send me a message:</legend>
    <div id="name-field" class="form-group">
      <input class="form-control" type="text" name="name" placeholder="Full name">
      <br>
    </div>
    <div id="email-field" class="form-group">
      <input class="form-control" type="text" name="mail" placeholder="Your email">
      <br>
    </div>
    <div id="subject-field" class="form-group">
      <input class="form-control" type="text" name="subject" placeholder="Subject">
      <br>
    </div>
    <div class="form-group">
    <br>
      <textarea class="form-control" id="message-field" name="message" placeholder="Message"></textarea>
      
      <br>
    </div>
      <button id="btn1" type="submit" name="submit">Send</button>
      <button id="btn2" type="reset" name="reset">Clear</button>
    </fieldset>
    </form>
    </div>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/index.js"></script>
    
  </body>
      <p class="copyright">Cody Lemons &copy; 2021</p>
