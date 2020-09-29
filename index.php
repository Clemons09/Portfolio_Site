
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--META IS VERY IMPORTANT FOR RESPONSIVE DESIGN-->
    <meta charset="UTF-8">
    <meta name="description" content="Web Development Portfolio">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Cody Lemons">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">

    <meta name="HandheldFriendly" content="true">
  <div class="pagetop">
      <img src="images/lemons.jpg" class="lemons"/>
      <h1>Cody Lemons</h1>
      <h4 class="diff-font">Writer &amp; Web Developer</h4>
      <h5 class="email-font">Clemons9988@gmail.com</h5>
        <aside class="sidebar-list">
          <!--<img src="images/lemonslice.jpg" class="lemonslice" />-->
          <ul>
            <p id="lang-head">Languages I currently study:</p>
            <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/>  HTML5</li>
            <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/>  CSS</li>
            <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/>  JavaScript</li>
            <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/>  jQuery</li>
            <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/>  Java</li>
            <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/>  PHP</li>
          </ul>
        </aside>

  </div>
    <meta name="description" content="Website for Cody Lemons">
    <meta name="keywords" content="web development, author, writer">
    <meta name="robots" content="nofollow">
    <meta http-equiv="author" content="Cody Lemons">
    <meta http-equiv="pragma" content="no-cache">
    <title>Cody Lemons - Writer/Web Developer</title>
    <link href="indexstyles.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

  <div class="socialmedia">
    <ul>
  <li><a href="http://www.twitter.com/cody_lemons" target="_blank" class="btn btn-block btn-social btn-twitter">
    <span class="fa fa-twitter"></span><p></p>
</a></li>
 <li><a href="http://www.github.com/Clemons09" target="_blank" class="btn btn-block btn-social btn-github">
   <span class="fa fa-github"></span><p></p>
</a></li>
<li><a href="http://www.codylemons.com" target="_blank" class="btn btn-block btn-social btn-book">
  <span class="fa fa-book"></span><p></p>
</a></li>
</ul>
</div>
  <div class="about">
    <img src="images/bgcodybw.jpg" style="max-width:50%;max-height:50%;height:auto;"/>
      <article class="myinfo">My name is Cody Lemons. I graduated from the University
         of Mississippi in 2012 with a B.A. in Journalism. In 2017, I went on to study Web Development through <strong>Bloc.io</strong>. I learned a ton about the world of Web Development
         and now spend my time building websites and experimenting with code. I hope this website displays the things I've learned through my adventures in coding and, if you're a writer or programmer like me, I'd love to hear from you. So please send me a message or find me on Twitter and Github.
         Maybe we can even work together!
       </article>
    </div>
    <div id="links">
      <h3>Stories on Amazon</h3><span class="fa fa-amazon"></span>
    <div class="encore-column">
      <ul>
      <li><a href="https://t.co/QNyYSGXPno?amp=1" target="_blank"><h5>Encore! A Prison Population Story</h5><img src="images/prison.jpg" height="60px" width="75px"/></a></li>
    </ul>
    </div>
    <div class="leak-column">
      <ul>
    <li><a href="https://t.co/qei2bCAAF4?amp=1" target="_blank"><h5>The Leak</h5><img src="images/mental.jpg" height="60px" width="75px"/></a></li>

    </ul>
    </div>
  </div>
    <div class="writingsamples">
      <ul>
      <li><a href="http://www.codylemons.com/writingsamples" target="_blank">Writing Samples<img src="images/pen.jpg" height="120px" width="150px"/></a></li>
    </ul>
    </div>
  </div>
  <div class="container">
  <form id="email-form" class="contact-form" action="contactform.php" method="POST">
    <fieldset>
      <legend>Send me a message:</legend>
    <div id="name-field">
    <input type="text" name="name" placeholder="Full name">
    <br>
    <span class="error"><?php echo $nameErr; ?></span>
  </div>
  <div id="email-field">
    <input type="text" name="mail" placeholder="Your email">
    <br>
    <span class="error"><?php echo $mailErr; ?></span>
  </div>
  <div id="subject-field">
    <input type="text" name="subject" placeholder="Subject">
    <br>
    <span class="error"><?php echo $subjectErr; ?></span>
  </div>
  <div>
</br>
    <textarea id="message-field" name="message" placeholder="Message"></textarea>
    <br>
    <span class="error"><?php echo $messageErr; ?></span>
  </div>
    <button type="submit" name="submit">Send</button>
    <button type="reset" name="reset">Clear</button>
  </fieldset>
  </form>
</div>
    <script src="index.js"></script>
    <script type="text/javascript" src="js/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </body>
    <p class="copyright">Cody Lemons &copy; 2020</p>
    <a href="https://icons8.com/icon/101943/leaf" class="icon"><p>Like the icons? Click here!</p></a>
</html>
