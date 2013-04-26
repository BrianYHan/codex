<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Brian Han</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Los Angeles based UI/UX/JavaScript/CSS/HTML5/Ruby design and development. The site is a portfolio of various projects from 2011-Present.">
    <meta name="author" content="Brian Han">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons 
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">-->

  </head>

<body data-spy="scroll" data-target=".navbar" >

 <div class="containerFat">
    <!-- Navbar
    ================================================== -->
  
    <?php include("header.php"); ?>

    <div class="mainContent">
      <br>
        <div class="container">
          <br>
          <br>
          <br>
          <div class="section black" id="section1">
    <h2>Section 1</h2>
    <p>
        MY Spectre around me night and day
        Like a wild beast guards my way;
        My Emanation far within
        Weeps incessantly for my sin.
    </p>
    <ul class="nav">
        <li>1</li>
        <li><a href="#section2">2</a></li>
        <li><a href="#section3">3</a></li>
    </ul>
</div>
<div class="section white" id="section2">
    <h2>Section 2</h2>
    <p>
        A fathomless and boundless deep,
        There we wander, there we weep;
        On the hungry craving wind
        My Spectre follows thee behind.
 
    </p>
    <ul class="nav">
        <li><a href="#section1">1</a></li>
        <li>2</li>
        <li><a href="#section3">3</a></li>
    </ul>
</div>
<div class="section black" id="section3">
    <h2>Section 3</h2>
    <p>
        He scents thy footsteps in the snow
        Wheresoever thou dost go,
        Thro' the wintry hail and rain.
        When wilt thou return again?
 
    </p>
    <ul class="nav">
        <li><a href="#section1">1</a></li>
        <li><a href="#section2">2</a></li>
        <li>3</li>
    </ul>
</div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>  
          <br>
    <!-- Footer
    ================================================== -->
<script src="assets/js/jquery.scrollpath.js"></script>
<script>$(function() {
    $('ul.nav a').bind('click',function(event){
        var $anchor = $(this);
 
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500,'easeInOutExpo');
        /*
        if you don't want to use the easing effects:
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        */
        event.preventDefault();
    });
});
</script>
    <?php include("footer.php"); ?>
          <br>
          <br>
          <br>
          <br>
          <br>
        </div>
    </div>
  </div>


</body>
</html>
