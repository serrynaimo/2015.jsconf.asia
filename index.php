<?php
  date_default_timezone_set('Asia/Singapore');
?>
<!doctype html>
<!--

    oooooohhhh, it's gonna be so exciting!
	If you want to help us out, drop thomas@jsconf.asia an email! ;)

//-->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta charset="UTF-8">
	<title>JSConf.Asia Singapore 2015</title>
	<link href='http://fonts.googleapis.com/css?family=Doppio+One|Open+Sans:100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/app1.css" />
	<link rel="stylesheet" type="text/css" href="css/colours.css" />
	<link rel="shortcut icon" href="favicon.png" >
	<?php if(!strpos($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
	<meta name="viewport" content="width=500, user-scalable=no" />
	<?php } ?>
	<meta property="og:title" content="JSConf.Asia - 19+20 Nov 2015, Singapore"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://2015.jsconf.asia/"/>
	<meta property="og:image" content="http://2015.jsconf.asia/assets/og_jsconfasia.jpg"/>
	<meta property="og:site_name" content="JSConf.Asia"/>
	<meta property="og:description" content='"It‘s a bit like TED just for web devs" Spread the word. Follow us on Twitter @jsconfasia'/>
	<meta name="title" content="JSConf.Asia - 19+20 Nov 2015, Singapore"/>
	<meta name="description" content='"It‘s a bit like TED just for web devs\" Spread the word. Follow us on Twitter @jsconfasia'/>
</head>
<body>
	<h1>JSConf.Asia 2015</h1>
	<section id="intro">
	<div>
		<div class="js"><a class="logo" href="http://twitter.com/jsconfasia"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 630 630">
		<g id="logo">
		  <rect id="background" x="0" y="0" width="630" height="630" fill="none" />
		  <path id="j" fill="#ffffff" d="m 165.65,526.47375 48.2125,-29.1775 C 223.16375,513.7875 231.625,527.74 251.92,527.74 c 19.45375,0 31.71875,-7.60975 31.71875,-37.21 l 0,-201.3 59.20375,0 0,202.1375 c 0,61.32 -35.94375,89.23125 -88.385,89.23125 -47.36125,0 -74.8525,-24.52875 -88.8075,-54.13" />
		  <path id="s" fill="#ffffff" d="m 375,520.13 48.20625,-27.91125 c 12.69,20.72375 29.1825,35.9475 58.36125,35.9475 24.53125,0 40.17375,-12.26475 40.17375,-29.18125 0,-20.29875 -16.06875,-27.48875 -43.135,-39.32625 l -14.7975,-6.3475 c -42.715,-18.18125 -71.05,-41.0175 -71.05,-89.2275 0,-44.40375 33.83125,-78.2375 86.695,-78.2375 37.6375,0 64.7025,13.11125 84.15375,47.36625 l -46.09625,29.60125 c -10.15,-18.1825 -21.1425,-25.37125 -38.0575,-25.37125 -17.33875,0 -28.335,10.995 -28.335,25.37125 0,17.7625 10.99625,24.9525 36.3675,35.94875 l 14.8,6.3425 c 50.325,21.56875 78.66,43.5575 78.66,93.03375 0,53.2875 -41.86625,82.465 -98.11,82.465 -54.97625,0 -90.5,-26.2175 -107.83625,-60.47375" />
		</g>
		</svg></a></div>
        <div class="overlay"></div>
        <div class="years">
            <a href="http://blog.devfest.asia/early-buddy-tickets-for-cssconf-and-jsconf-asia/">
            <span class="year2014" id="countdown">49:50:17</span>
            <br/>
            <span class="year2012">Ticket sales in</span>
            </a>
        </div>
        <form id="subscribeForm" action="http://2012.jsconf.asia/addsubscriber.php" method="get">
            <div class="input"><span><input type="text" name="fname" placeholder="Enter your first name and" /><input type="email" name="email" placeholder="email address for updates" /><input type="submit" value="Subscribe" /></span></div>
            <div class="msg"><span></span></div>
        </form>
        <div class="links">
            <a href="https://jsconfasia.wufoo.com/forms/cssconf-and-jsconfasia/">Call for Speakers</a>
            <a href="mailto:sponsors@jsconf.asia">Sponsor interest</a>
        </div>
	</div>
	</section>


    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="js/jquery.form.min.js"></script>
	<script src="js/app.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-31025490-9', 'auto');
      ga('send', 'pageview');

    </script>
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-31025490-8', 'auto');
      ga('send', 'pageview');

   CountDownTimer('Fri 28 Aug 2015 15:00:00 +0800', 'countdown');

    function CountDownTimer(dt, id)
    {
        var end = new Date(dt);

        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var start = new Date('<?php echo date("r"); ?>');
        var startjs = new Date();
        var diff = startjs - start;
        var timer;

        function showRemaining() {
            var now = new Date();
            var passed = now - startjs;
            var distance = end - start - passed;
            if (distance < 0) {

                clearInterval(timer);
                document.getElementById(id).innerHTML = 'NOW!';

                return;
            }
            var days = Math.floor(distance / _day);
            var hours = days * 24 + Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

          if(seconds < 10)
            seconds = "0" + seconds;

          if(minutes < 10)
            minutes = "0" + minutes;

            document.getElementById(id).innerHTML = hours + ':';
            document.getElementById(id).innerHTML += minutes + ':';
            document.getElementById(id).innerHTML += seconds;
        }

        timer = setInterval(showRemaining, 1000);
    }

    </script>
</body>
</html>
