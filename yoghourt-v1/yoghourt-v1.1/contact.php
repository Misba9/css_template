<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Yoghourt - Contact</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
<div id="container">
  <div id="wrapper">
    <div id="sidebar">
      <div id="sb_top">
        <div class="sb_logo"> <a href="#"><img src="images/logo.jpg" alt="" border="0" /></a> </div>
        <p>A free template for your website</p>
      </div>
      <div class="sb_content">
        <ul id="navlist">
          <li><a href="#">home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a class="noborder" href="contact.php">Contact</a></li>
        </ul>
        <h2>&nbsp;</h2>
        <div class="copyright">
          <p>Template design by <a href="http://web-kreation.com">Web-Kreation</a>.<br />
            &copy; All your copyright information here.</p>
          <p>Valid <a target="_blank" href="http://validator.w3.org/check?uri=referer">XHTML</a> &amp; <a target="_blank" href="http://jigsaw.w3.org/css-validator">CSS</a></p>
        </div>
      </div>
    </div>
    <div id="header">
      <input name="search" class="search" type="text" value="Search..." />
      <a href="contact.php" name="Contact"><img src="images/contact.jpg" border="0" alt="" /> Contact</a> </div>
    <div id="content">
      <div id="introduction">
        <h1>Contact Form</h1>
        <p>Anything you would like to tell me? Don't hesitate to contact me. I will be glad to answer any of your questions.</p>
      </div>
      <!-- The contact form starts here-->
      <?php
               $error    = ''; // error message
               $name     = ''; // sender's name
               $email    = ''; // sender's email address
               $subject  = ''; // subject
               $message  = ''; // the message itself

          if(isset($_POST['send']))
          {
               $name     = $_POST['name'];
               $email    = $_POST['email'];
               $subject  = $_POST['subject'];
               $message  = $_POST['message'];

              if(trim($name) == '')
              {
                  $error = '<div class="errormsg">Please enter your name!</div>';
              }
          	    else if(trim($email) == '')
              {
                  $error = '<div class="errormsg">Please enter your email address!</div>';
              }
              else if(!isEmail($email))
              {
                  $error = '<div class="errormsg">You have enter an invalid e-mail address. Please, try again!</div>';
              }
          	    if(trim($subject) == '')
              {
                  $error = '<div class="errormsg">Please enter a subject!</div>';
              }
          	else if(trim($message) == '')
              {
                  $error = '<div class="errormsg">Please enter your message!</div>';
              }
              if($error == '')
              {
                  if(get_magic_quotes_gpc())
                  {
                      $message = stripslashes($message);
                  }

                  // the email will be sent here
                  // make sure to change this to be your e-mail

                  $to      = "info@MYDOMAIN.com";

                  // the email subject
                  // '[Yoghourt Template Contact Form] :' will appear automatically in the subject.
                  // You can change it as you want

                  $subject = '[Contact Form] : ' . $subject;

                  // the mail message ( add any additional information if you want )
                  $msg     = "From : $name \r\ne-Mail : $email \r\n\n" . "Message : \r\n$message";

                  mail($to, $subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n");
          ?>
      <!-- Message sent! (change the text below as you wish)-->
      <center>
        <h1>Congratulations!!</h1>
        <p class="msgSent"> Thank you <b>
          <?=$name;?>
          </b>, your message is sent! <br />
          I will get back to you as soon as I can.</p>
      </center>
      <!--End Message Sent-->
      <?php
              }
          }

          if(!isset($_POST['send']) || $error != '')
          {
          ?>
      <!--Error Message-->
      <?=$error;?>
      <form  method="post" name="contFrm" id="contFrm" onsubmit="return jcap();" action="#">
        <p>Full Name<br />
          <input name="name" type="text" class="box" id="name" size="30" value="<?=$name;?>" />
        </p>
        <p>Email<br />
          <input name="email" type="text" class="box" id="email" size="30" value="<?=$email;?>" />
        </p>
        <p>Subject<br />
          <input name="subject" type="text" class="box" id="subject" size="30" value="<?=$subject;?>" />
        </p>
        <p>Message<br />
          <textarea name="message" cols="40" rows="6"  id="message"><?=$message;?>
</textarea>
          <br />
          <br />
        </p>
        <!-- Submit Button-->
        <input name="send" type="submit" class="button" id="send" value="Send Mail" onclick="return checkForm();" />
      </form>
      <!-- E-mail verification. Do not modify the code below this line -->
      <?php
          }

          function isEmail($email)
          {
              return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i"
                      ,$email));
          }
          ?>
    </div>
  </div>
  <div class="clear">&nbsp;</div>
</div>
</body>
</html>
