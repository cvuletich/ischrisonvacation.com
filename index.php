<?php
$ischrisonvacation = "no";
$replies['yes'] = array("Go away.","You can get a hold of me by","Hard work never killed anybody, but why take the chance?");
$replies['no'] = array("How long until the next one?","Serious case of the Mondays.","Bummer.","Work fascinates me.  I can sit and look at it for hours.","It's not how good your work is, it's how well you explain it.","Not even close...");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Is Chris On Vacation?</title>
    <style>
      html, body {
        background-color: #000;
        font-family: Courier;
      }
      .container {
        border: 2px solid #fff;
        color: #fff;
        height: 400px;
        margin: 150px auto 0;
        position: relative;
        text-align: center;
        width: 700px;
      }
      .small {
        font-size: 10px;
      }
      .answer {
        font-size: 300px;
        line-height: 220px;
        margin: 80px 0 0 0;
        padding: 0;
      }
      .links {
        font-size: 20px;
      }
      .links a {
        color: #fff;
        text-decoration: none;
      }
      .links a:hover {
        text-decoration: underline;
      }
      .left {
        float: left;
      }
      .right {
        bottom: 10px;
        position: absolute;
        right: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="answer"><?php echo strtoupper($ischrisonvacation); ?></div>
      <div class="small"><?php echo $replies[$ischrisonvacation][rand(0, count($replies[$ischrisonvacation]) - 1)]; ?></div>
      <div class="links">
        <span class="right"><a href="http://chrisvuletich.com">http://chrisvuletich.com</a></span>
      </div>
    </div>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-11868870-11']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </body>
</html>
