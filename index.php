
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
    <title>Cody Lemons - Writer/Web Developer</title>

    <link href="indexstyles.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="pagetop">

    <h1>Cody Lemons</h1>
    <h4 class="diff-font">Writer &amp; Web Developer</h4>
    <h5 class="email-font">Clemons9988@gmail.com</h5> <hr>
    <!--<aside class="sidebar-list">
      <ul>
        <p id="lang-head">Languages I currently study:</p>
        <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/>  HTML5</li>
        <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/>  CSS</li>
        <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/>  JavaScript</li>
        <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/>  jQuery</li>
        <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/>  Java</li>
        <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/>  PHP</li>
      </ul>
    </aside>-->
  </div>

  </head>
  <body>
    <ul>
      <li id="social"><a href="http://www.twitter.com/cody_lemons" target="_blank" class="btn btn-block btn-social btn-twitter">
      <span class="fa fa-twitter"></span><p></p>
      </a></li>
      <li id="social"><a href="http://www.github.com/Clemons09" target="_blank" class="btn btn-block btn-social btn-github">
      <span class="fa fa-github"></span><p></p>
      </a></li>
      <li id="social"><a href="http://www.codylemons.com" target="_blank" class="btn btn-block btn-social btn-book">
      <span class="fa fa-book"></span><p></p>
      </a></li>
    </ul> <hr>
  <div id="about">
    <img src="images/sunshine-cody.jpeg" height="420" width="310"/>
    <div id="panel"><span>About Me</span></div>
    <div id="dropdown-content"><span>I graduated from the <em>University of Mississippi</em> in 2012 with a B.A. in Journalism. In 2017, I went on to study Web Development through <em>Bloc.io</em>. Now, I spend my time building websites and experimenting with code. If you're a writer or programmer like me, I'd love to hear from you. So please send me a message or find me on Twitter and Github.</span>
    </div><hr>
  </div>
  <br>
  <br>
  <br>
  <div class="wsheader"><h3>Professional Writing Samples</h3></div>
    <div class="writingsamples">
      <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/article1.jpg">
      <img src="images/article1.jpg" alt="writing sample" width="600" height="400">
    </a>
    <div class="desc">First published article (2009) - <em>The Daily Mississippian</em></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/article2.jpg">
      <img src="images/article2.jpg" alt="writing sample" width="600" height="400">
    </a>
    <div class="desc">Second published article (2012) - <em>DeSoto Times-Tribune</em></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/article3.jpg">
      <img src="images/article3.jpg" alt="writing sample" width="600" height="400">
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
        <a target="_blank" href="images/mental.jpg">
          <img src="images/mental.jpg" alt="The Leak by Cody Lemons" width="600" height="400">
        </a>
        <div class="description-amazon">"The Leak" - <em>Available on Amazon!</em></div>
      </div>
    </div>
    <div class="resp-amazon">
      <div class="gall-amazon">
        <a target="_blank" href="images/prison.jpg">
          <img src="images/prison.jpg" alt="Encore! by Cody Lemons" width="600" height="400">
        </a>
        <div class="description-amazon">"Encore! A Prison Population Story" - <em>Available on Amazon!</em></div>
      </div>
    </div>
    <div class="clearfix"></div>
    </div>

  <!--  <div class="container">
  <form action="contactform.php" method="post">
    <div class="row">
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Your name...">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder="Your email...">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <input id="subject" name="subject" placeholder="Subject...">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <textarea id="message" name="message" rows="8" cols="80" placeholder="Your message..." style="height:120px" "width:200px"></textarea>
      </div>
    </div>

    <div class="row">
      <button id="submitbtn" type="submit" name="submit">Send</button>
      <button id="resetbtn" type="reset" name="reset">Clear</button>
    </div>
  </form>
</div>-->
    <div class="container">
      <form id="email-form" class="contact-form" action="contactform.php" method="POST">
      <fieldset>
        <legend>Send me a message:</legend>
    <div id="name-field">
      <input type="text" name="name" placeholder="Full name">
      <br>
    </div>
    <div id="email-field">
      <input type="text" name="mail" placeholder="Your email">
      <br>
    </div>
    <div id="subject-field">
      <input type="text" name="subject" placeholder="Subject">
      <br>
    </div>
    <div>
    <br>
      <textarea id="message-field" name="message" placeholder="Message"></textarea>
      <br>
    </div>
      <button type="submit" name="submit">Send</button>
      <button type="reset" name="reset">Clear</button>
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
    <script type="text/javascript" src="scripts/index.js"></script>
  </body>
      <p class="copyright">Cody Lemons &copy; 2020</p>
      <a href="https://icons8.com/icon/101943/leaf" class="icon"><p>Like the icons? Click here!</p></a>
</html>
