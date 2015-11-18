<?php
date_default_timezone_set('Asia/Singapore');
?>
<!doctype html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
xmlns:og="http://ogp.me/ns#"
xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
  <meta charset="UTF-8">
  <title>JSConf.Asia Singapore 2015</title>
  <link href='http://fonts.googleapis.com/css?family=Doppio+One|Open+Sans:100' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/break.css" />
  <link rel="shortcut icon" href="favicon.png" >
  <?php if(!strpos($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
  <meta name="viewport" content="width=500, user-scalable=no" />
  <?php } ?>
  <meta property="og:title" content="JSConf.Asia - 19+20 Nov 2015, Singapore"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="http://2015.jsconf.asia/"/>
  <meta property="og:image" content="http://2015.jsconf.asia/assets/og_jsconfasia.png"/>
  <meta property="og:site_name" content="JSConf.Asia"/>
  <meta property="og:description" content='"It‘s a bit like TED just for web devs" Spread the word. Follow us on Twitter @jsconfasia'/>
  <meta name="title" content="JSConf.Asia - 19+20 Nov 2015, Singapore"/>
  <meta name="description" content='"It‘s a bit like TED just for web devs\" Spread the word. Follow us on Twitter @jsconfasia'/>
</head>
<body>
  <div class="break__container">
    <div class="break__body"> 

      <div class="break__left">
        <div class="logo-container">
          <a class="logo" href="http://twitter.com/jsconfasia">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 630 630">
              <g id="logo">
                <rect id="background" x="0" y="0" width="630" height="630" fill="none"></rect>
                <path id="j" fill="#ffffff" d="m 165.65,526.47375 48.2125,-29.1775 C 223.16375,513.7875 231.625,527.74 251.92,527.74 c 19.45375,0 31.71875,-7.60975 31.71875,-37.21 l 0,-201.3 59.20375,0 0,202.1375 c 0,61.32 -35.94375,89.23125 -88.385,89.23125 -47.36125,0 -74.8525,-24.52875 -88.8075,-54.13"></path>
                <path id="s" fill="#ffffff" d="m 375,520.13 48.20625,-27.91125 c 12.69,20.72375 29.1825,35.9475 58.36125,35.9475 24.53125,0 40.17375,-12.26475 40.17375,-29.18125 0,-20.29875 -16.06875,-27.48875 -43.135,-39.32625 l -14.7975,-6.3475 c -42.715,-18.18125 -71.05,-41.0175 -71.05,-89.2275 0,-44.40375 33.83125,-78.2375 86.695,-78.2375 37.6375,0 64.7025,13.11125 84.15375,47.36625 l -46.09625,29.60125 c -10.15,-18.1825 -21.1425,-25.37125 -38.0575,-25.37125 -17.33875,0 -28.335,10.995 -28.335,25.37125 0,17.7625 10.99625,24.9525 36.3675,35.94875 l 14.8,6.3425 c 50.325,21.56875 78.66,43.5575 78.66,93.03375 0,53.2875 -41.86625,82.465 -98.11,82.465 -54.97625,0 -90.5,-26.2175 -107.83625,-60.47375"></path>
              </g>
            </svg>
          </a>
        </div>
      </div>

      <div class="break__right">
        <div class="sponsors">
          <div class="sponsors__main">
            <div class="sponsor">
              <img src="img/microsoft.png" style="">
            </div>
            <div class="sponsor">
              <img src="img/braintree.png" style="">
            </div>
          </div>
          <div class="sponsors__others">
            <div class="sponsors__group">
              <div class="sponsor">
                <img src="img/smove.png" style="">
              </div>
              <div class="sponsor">
                <img src="img/clubmate.png" style="width: 50px;">
              </div>
              <div class="sponsor">
                <img src="img/redmart.png" style="">
              </div>
              <div class="sponsor">
                <img src="img/flowhero.png" style="">
              </div>
              <div class="sponsor">
                <img src="img/tradegecko.png">
              </div>
              <div class="sponsor">
                <img src="img/myrepublic.png">
              </div>
              <div class="sponsor">
                <img src="img/hired.png">
              </div>
              <div class="sponsor">
                <img src="img/piktochart.png" style="">
              </div>
            </div>
            <div class="sponsors__group">
              <div class="sponsor">
                <img src="img/zopim.png" style="width:160px;">
              </div>
              <div class="sponsor">
                <img src="img/meteor.png" style="margin-top: -25px">
              </div>
              <div class="sponsor">
                <img src="img/skyscanner.png" style="">
              </div>
              <div class="sponsor">
                <img src="img/opera.png" style="width: 160px">
              </div>
              <div class="sponsor">
                <img src="img/kkbox.png" style="width: 140px;">
              </div>
              <div class="sponsor">
                <img src="img/particle.png" style="width: 100px">
              </div>
              <div class="sponsor">
                <img src="img/sonoport.png" style="">
              </div>
              <div class="sponsor">
                <img src="img/meetapp.png" style="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
  <script src="js/bezier-easing.js"></script>
  <script src="js/break.js"></script>

</body>