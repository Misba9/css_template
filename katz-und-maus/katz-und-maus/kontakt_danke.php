<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Katz und Maus - Kontakt Danke</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript1.2" src="javascript.js" type="text/javascript"></script>
<!--[if IE 6]><link href="ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body>
<div id="kopfzeile">
  <div id="kopf">
    <div id="menue">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="uebermich.html">&Uuml;ber mich</a></li>
        <li><a href="bildergalerie.html">Bildergalerie</a></li>
        <li><a href="gaestebuch.html">G&auml;stebuch</a></li>
        <li><a href="links.html">Links</a></li>
        <li id="ubermenue"><a href="kontakt.html">Kontakt</a></li>
        <li><a href="impressum.html">Impressum</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="contentzeile">
  <div id="content"> <img src="grafik/t_kontaktbestaetigung.gif" width="515" height="56" border="0" alt="" /><br />
    <br />
    <?
          $weiter=0;
          setlocale(LC_TIME,"de_DE");
          // --- Daten für die e-Mail zusammenstellen ---
          $mail_text="Kontaktanfrage meinehomepage.de vom ".strftime("%c")."\n\n";
          if ($HTTP_POST_VARS[Anrede]) {
            $mail_text.="Name : $HTTP_POST_VARS[Anrede] $HTTP_POST_VARS[Name]\n";
            $weiter++;
          }
          if ($HTTP_POST_VARS[Telefon]) {
            $mail_text.="Telefon : $HTTP_POST_VARS[Telefon]\n";
            $weiter++;
          }
          if ($HTTP_POST_VARS[eMail]) {
            $mail_text.="e-Mail: $HTTP_POST_VARS[eMail]\n\n";
            $weiter++;
          }
          if ($HTTP_POST_VARS[Anfrage]) {
            $mail_text.="Anfrage :\n$HTTP_POST_VARS[Anfrage]\n";
            $weiter++;
          }
          $mail_text.="\n\nDiese eMail wurde über das Kontaktformular unter\nwww.meinehomepage.de erfasst und automatisch versandt\n\n";
  
          if ($weiter>=3) {
            $DieAdresse="info@meinehomepage.de";
            if ($HTTP_POST_VARS[eMail]<>"") {
              $DieAdresse=$HTTP_POST_VARS[eMail];
            }
            $header="From: \"$HTTP_POST_VARS[Anrede] $HTTP_POST_VARS[Name]\" <$DieAdresse>\n";
            mail("info@hpvorlagen24.de","Kontaktanfrage meinehomepage.de",$mail_text,$header);
            echo '<p>Vielen Dank,</p>
                  <p>f&uuml;r Ihr Interesse an meinem Leistungsangebot.</p>
                  <p>Ich werde Ihre Anfrage so schnell wie m&ouml;glich bearbeiten.</p>
                  <p><strong>Mit freundlichem Gruss<br>
                    Ihr Homepage Betreiber</strong></p>
                  <p>mail: <a href="mailto:info@meineemail.de">info@meineemail.de</a><br>
                     net: <a href="http://www.meinehomepage.de">www.meinehomepage.de</a></p>';
          } else {
            echo '<p>Ihre Kontaktanfrage konnte nicht bearbeitet werden da Sie nicht alle Pflichtfelder ausgefüllt haben.</p>
                  <p><strong>Mit freundlichem Gruss<br>
                    Ihr Homepage Betreiber</strong></p>
                  <p>mail: <a href="mailto:info@meineemail.de">info@meineemail.de</a><br>
                     net: <a href="http://www.meinehomepage.de">www.meinehomepage.de</a></p>';
          }
  
        ?>
  </div>
  <div id="sidebar">
    <h2>&raquo; Aktuelles &laquo;</h2>
    <div class="news"> <span class="tuerkis">&raquo;</span> <strong>04.01.2005</strong><br />
      Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor ... </div>
    <hr />
    <div class="news"> <span class="tuerkis">&raquo;</span> <strong>02.01.2005</strong><br />
      Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor ... </div>
    <hr />
    <div class="news"> <span class="tuerkis">&raquo;</span> <strong>01.01.2005</strong><br />
      Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor ... </div>
    <h2>&raquo; Links &laquo;</h2>
    <div class="linkbuttons"> <a href="http://validator.w3.org/check?uri=referer"><img border="0" src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01!" height="31" width="88" /></a><br />
      <br />
      <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a><br />
      <br />
      <img src="grafik/button.gif" width="90" height="33" border="0" alt="" /><br />
      <br />
      <img src="grafik/button.gif" width="90" height="33" border="0" alt="" /> </div>
  </div>
</div>
<div id="fusszeile">
  <div id="fuss"> Design by <a href="http://www.hpvorlagen24.de">www.hpvorlagen24.de</a> copyright &copy; 2005 </div>
</div>
</body>
</html>
