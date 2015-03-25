<?php
$ischrisonvacation = "no";
$replies['yes'] = array(
  "Go away.",
  "You can get a hold of me by CðÔnT[¹Î Å¤Õn­qe§Ðoi ü\"Ëkq ¶ÙíÍæ",
  "Hard work never killed anybody, but why take the chance?",
  "It's not about going on vacation, it's about telling everyone I'm on one.",
  "I don't always go on vacation, but when I do, I go.",
  "There is never enough time to do all the nothing you want.",
  "Brace yourselves, vacation is coming.",
  "\"Like\" if you need a vacation"
);
$replies['no'] = array(
  "How long until the next one?",
  "Serious case of the Mondays.",
  "Bummer.",
  "Work fascinates me.  I can sit and look at it for hours.",
  "It's not how good your work is, it's how well you explain it.",
  "Not even close...",
  "No man needs a vacation as much as the man who just had one.",
);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Is Chris On Vacation?</title>
    <meta name="keywords" content="chris, vuletich, developer, vacation" />
    <meta name="description" content="Is Chris on vacation? Find out here!">
    <meta name="author" content="Chris Vuletich">
    <link rel="author" href="https://plus.google.com/u/0/+ChrisVuletich" />
    <style>
      html, body {
        background-color: #000;
        color: #fff;
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
      .fb-like {
        color: #fff;
        margin: 10px auto;
        text-align: center;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=247461622069412&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="container">
      <div class="answer"><?php echo strtoupper($ischrisonvacation); ?></div>
      <div class="small"><?php echo $replies[$ischrisonvacation][rand(0, count($replies[$ischrisonvacation]) - 1)]; ?></div>
      <div class="links">
        <span class="right"><a href="http://chrisvuletich.com">http://chrisvuletich.com</a></span>
      </div>
    </div>
    <div class="fb-like" data-colorscheme="dark" data-href="http://ischrisonvacation.com" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
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
