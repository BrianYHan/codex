<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CSS Newbie Example: Tabbed Box Using jQuery</title>
   <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
        <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
     <link href="assets/css/FortAwesome-Font-Awesome-13d5dd3/css/font-awesome-ie7.min.css" rel="stylesheet">
    <link href="assets/css/FortAwesome-Font-Awesome-13d5dd3/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/FortAwesome-Font-Awesome-13d5dd3/css/font-awesome.min.css" rel="stylesheet">
<style>
   /* === CSS RESET === */
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
  display: block;
}
body {
  line-height: 1;
}
ol, ul {
  list-style: none;
}
blockquote, q {
  quotes: none;
}
blockquote:before, blockquote:after, q:before, q:after {
  content: '';
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
/* === End of CSS RESET === */

body {

  color: white;
  font-size: 20px;
  font-family: "Terminal Dosis", sans-serif;
  text-shadow: 
    1px 1px 0 transparent,
    2px 2px 0 #101010;
  overflow: hidden;
}
h1 {
  font-size: 75px;
  font-weight: bold;
  line-height: 1.5em;
  text-shadow: 
    2px 2px 0 transparent,
    4px 4px 0 #101010;
}

a, a:visited {
  color: white;
  text-decoration: none;
  border-bottom: 2px dotted;
  transition: color 0.2s;
}

a:hover {
  color: #AAA;
}

a:active {
  color: lightblue;
}

.big {
  display: block;
  font-size: 45px;
  font-weight: bold;
  line-height: 1.3em;
  margin-bottom: 10px;
  text-shadow: 
    2px 2px 0 transparent,
    4px 4px 0 #101010;
}

.wrapper div {
  position: absolute;
}

.setting, nav {
  position: fixed;
  z-index: 9999999;
  bottom: 0;
  background: rgba(10,10,10, 0.5);
  font-family: Helvetica, Arial, sans-serif;
  font-weight: normal;
  font-size: 20px;
}

.setting {
  right: 0;
  padding: 10px 20px;
  border-radius: 10px 0 0 0;
}

.setting a {
  border: none;
}

nav {
  left: 0;
  border-radius: 0 10px 0 0;
}

nav li {
  float: left;
}

nav a {
  display: block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  border: none;
  text-align: center;
  transition: 0.25s;
}

nav li:last-child a {
  border-radius: 0 10px 0 0;
}

nav a:hover {
  background: rgba(15,15,15, 0.5);
}

.sp-canvas {
  display: none;
}

.arrow {
  position: relative;
  display: inline-block;
}

.demo { 
  width: 800px;
  height:1000px;
  font-size: 30px;
  text-align: center;
  font-weight: bold;
}

.demo .arrow {
  font-size: 20px;
  animation: point-down 0.5s alternate infinite;
}

.description {
  top: 740px;
  left: 180px;
  width: 440px;
}

.syntax {
  top: 1510px;
  left: 430px;
  width: 400px;
}

.scrollbar {
  top: 1540px;
  left: 1600px;
  width: 400px;
}

.rotations {
  left: 2185px;
  top: 660px;
  width: 460px;
  transform: rotate(-90deg) translateY(2.5em);
}

.rotations .upside-down {
  font-size: 42px;
  text-align: right;
  transform: rotate(180deg) translateY(3em);
}

.source {
  left: 2200px;
  top: -800px;
  width: 400px;
  transform: rotate(90deg) translateX(50px);
}

.follow {
  width: 475px;
  left: 1100px;
  top: -950px;
  transform: rotate(90deg) translateX(50px);
}

.follow .big {
  font-size: 40px;
}

.highlight {
  animation: highlight 0.2s alternate 6 ;
}

@keyframes point-down {
  from {
    top: 0;
  }
  to {
    top: 5px;
  }
}

@keyframes highlight {
  to {
    background: lightblue;
  }
}

.sp-scroll-bar {
  position: fixed;
  z-index: 9999;
  right: 0;
  top: 5%;
  width: 10px;
  height: 90%;
  border-radius: 5px;
}

.sp-scroll-bar:hover {
  background: white;
  background: rgba(255,255,255, 0.1);
}

.sp-scroll-bar .sp-scroll-handle {
  position: absolute;
  width: 100%;
  height: 50px;
  border-radius: inherit;
  background: gray;
  background: rgba(0,0,0,0.7);
}

.sp-scroll-bar .sp-scroll-handle:hover {
  background: black;
}
</style>
<script language="javascript" type="text/javascript" src="assets/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="assets/js/jquery.equalheights.js"></script>
<script language="javascript" type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>

// <script language="javascript">
   $('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
// </script>
</head>
<body>

 
    <?php include("header.php"); ?>
   <div class="setting">
      <a href="" class="show-path">Show Path</a>
    </div>
    <div class="wrapper">
      <div class="demo">
        <h1>jQuery Scroll Path</h1>
        <span class="arrow">&darr;</span> A Quick Demo <span class="arrow">&darr;</span>
      </div>
      
      <div class="description">
        <span class="big">It's a plugin for defining custom scroll paths.</span>
      </div>

      <div class="syntax">
        <span class="big">It uses canvas flavored syntax to draw lines and arcs.</span>
      </div>

      <div class="scrollbar">
        <span class="big">It comes with a custom scrollbar.</span>
      </div>

      <div class="rotations">
        <span class="big">It also does rotations</span>
        <span class="upside-down big">in <a href="http://caniuse.com/#feat=transforms2d">supported</a> browsers.</span>
      </div>

      <div class="source">
        <span class="big">It's available with documentation on <a href="https://github.com/JoelBesada/scrollpath">GitHub</a>.<span>
      </div>

      <div class="follow">
        <span class="big">Feel free to <a href="https://twitter.com/JoelBesada">follow me</a> on Twitter. You can also be <span class="count">a kind person and</span> <a href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Ftwitter.com%2Fabout%2Fresources%2Fbuttons&source=tweetbutton&text=jQuery%20Scroll%20Path%20Plugin&url=http%3A%2F%2Fjoelb.me%2Fscrollpath%2F&via=JoelBesada" class="tweet">tweet</a> this.</span>
      </div>
    </div>
<br>
<br>
<br>
<br>
<br>
<br> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<script src="assets/js/jquery.scrollpath.js"></script>
    <?php include("footer.php"); ?>

    <!--Contact page -->
</body>
</html>