
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--META IS VERY IMPORTANT FOR RESPONSIVE DESIGN-->
    <meta charset="UTF-8">
    <meta name="description" content="Web Development Portfolio">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Cody Lemons">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <div class="pagetop">
      <img src="images/lemons.jpg" class="lemons"/>
      <h1>Cody Lemons</h1>
      <h4 class="diff-font">Writer &amp; Web Developer</h4>
      <h5 class="email-font">Clemons9988@gmail.com</h5>
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
  <h4>Programming Languages I Know:</h4>
  <div class="sidebar">
    <aside>
      <img src="images/lemonslice.jpg" class="lemonslice" />
      <p>
      <ul> <br/>
        <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/> HTML5</li>
        <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/> CSS</li>
        <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/> JavaScript</li>
        <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/> jQuery</li>
        <li><img src="https://img.icons8.com/material-two-tone/12/000000/leaf.png"/> Java</li>
      </ul>
    </p>
    </aside>
  </div>
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
    <img src="images/bgcodybw.jpg" width="280px" height="350px"/>
      <p class="myinfo">My name is Cody Lemons and writing is my passion. After graduating from the University
         of Mississippi in 2012 with a Bachelor's in Journalism, I went to work right away for two different
         publications, The Daily Mississippian and The Desoto Times-Tribune. A few years later, I started writing short fiction, purely for fun. That, like journalism, was a blast.
         However, something was missing from my writing life; I couldn't figure out what.
         Then, one day in 2017, a friend introduced me to Web Development. I was hooked!</br>
         I went on to study Full-Stack Web Development later that year through <strong>Bloc.io</strong>. I learned a ton about the world of Web Development
         and now spend my time building and designing websites from scratch.</br>
         I hope this website displays the things I've learned through my adventures in coding and, if you're a writer or programmer like me, I'd love to hear from you. So please send me a message or find
         me on Twitter and Github. Maybe we can even work together!
        </p>
    </div>
    <div class="amazon">
      <h4>Stories on Amazon <i class="fa fa-amazon"></i></h4>
  </div>
    <div class="row">
    <div class="column ecolumn">
      <h5>Encore! A Prison Population Story</h5>
      <a href="https://t.co/QNyYSGXPno?amp=1" target="_blank"><img src="images/prison.jpg" style="width:120px"/></a>
    </div>
    <div class="column lcolumn">
      <h5>The Leak</h5>
      <a href="https://t.co/qei2bCAAF4?amp=1" target="_blank"><img src="images/mental.jpg" style="width:120px"/></a>
    </div>
    <div class="linktwo">
      <a href="http://www.codylemons.com/writingsamples" target="_blank">Writing Samples<img src="images/pen.jpg" height="100" width="250"/></a>
    </div>
  </div>
  <!--  <div class="container">
      <form id="email-form" action="contactform.php" method="post" enctype="text/plain">
        <fieldset>
          <legend>Send me a message:</legend>
        <div name="name-field" id="name-field">
          <input name="name" onclick="document.getElementById('myInput').value = ''" type="text" value="Your Name" id="myInput">
        </div>
        <div  id="email-field">
          <input name="email" onclick="document.getElementById('email').value = ''" type="email" id="email" value="Your Email"/>
        </div>
        <div>
        <br>
        <textarea name="message" id="message"></textarea>
        </div>
        <div id="submit-field">
          <button type="submit" name="submit">Send</button>
          <input type="reset" value="Reset"/>
        </div>
      </fieldset>
    </form>
  </div>-->
  <div class="container">
  <form id="email-form" class="contact-form" action="contactform.php" method="post">
    <fieldset>
      <legend>Send me a message:</legend>
    <div id="name-field">
    <input type="text" name="name" placeholder="Full name" onclick="document.getElementById('name-field').value = ''">
  </div>
  <div id="email-field">
    <input type="text" name="mail" placeholder="Your email" onclick="document.getElementById('email-field').value = ''">
  </div>
  <div id="subject-field">
    <input type="text" name="subject" placeholder="Subject" onclick="document.getElementById('subject-field').value = ''">
  </div>
  <div>
</br>
    <textarea id="message-field" name="message" placeholder="Message" onclick="document.getElementById('message-field').value = ''"></textarea>
  </div>
    <button type="submit" name="submit">Send</button>
    <button type="reset" name="reset">Clear</button>
  </fieldset>
  </form>
</div>
    <script type="text/javascript" src="js/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-validation/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/form-validation.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </body>
    <p class="copyright">Cody Lemons &copy; 2020</p>
    <a href="https://icons8.com/icon/101943/leaf" class="icon"><p>Like the icons? Click here!</p></a>
</html>
