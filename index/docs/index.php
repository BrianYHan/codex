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
      <link href="assets/css/about.css" rel="stylesheet">
        <script type="text/javascript" src="assets/js/styleswitcher.js"></script>
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
      <script type="text/javascript" src="assets/js/styleswitcher.js"></script>
<script src="http://webdev.usc.edu/jquery.js"></script>
<link rel="alternate stylesheet" type="text/css" href="assets/css/cream.css" title="alternate">
<link rel="alternate stylesheet" type="text/css" href="assets/css/butter.css" title="alternate2">
<link rel="alternate stylesheet" type="text/css" href="assets/css/yoyo.css" title="alternate3">

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
    
    <!--Document goes to top of page-->                          
    <script>
    $(document).ready(function(){
      $("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
      });
    });
    </script>
    <script>
      if($.cookie("css")) {
         $("link").attr("href",$.cookie("css"));
      }
   $(document).ready(function() { 
      $("#nav li a").click(function() { 
         $("link").attr("href",$(this).attr('rel'));
         $.cookie("css",$(this).attr('rel'), {expires: 365, path: '/'});
         return false;
      });
   });
</script>
    <!--Document loads at bottom-->
    <script>

      $(function() {
      $('html, body').scrollTop($(document).height() - $(window).height());
      });
    </script>
    

    
  </head>

<body data-spy="scroll" data-target=".navbar" >



    <!-- Navbar
    ================================================== -->
  <div class="laBackground">
    <?php include("header.php"); ?>

    <br>

    <!-- Footer
    ================================================== -->

          <br>
          <br>
          <br>    <a id="testlink" href="#test"></a>
          <br>
          <br>
      <div class="row-fluid">
  <div class="span10 offset1 mainInfo text-right">
  

    <strong><h1>
      <a href="#" id="default" onclick="setActiveStyleSheet('default'); return false;">B</a><a href="#" id="alternate2" onclick="setActiveStyleSheet('alternate2'); return false;">R</a><a href="#" id="alternate" onclick="setActiveStyleSheet('alternate'); return false;">I</a><a href="#" id="alternate3" onclick="setActiveStyleSheet('alternate3'); return false;">A</a><span id="test" type="button" value="Scroll To Anchor">N</span> HAN</h1></strong>
    <br>
  </div>
</div>
    </div>

        <?php include("footer.php"); ?>
        
        
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
 $('#test').click(function(){
  $('html, body').animate({ scrollTop: $('#testlink').offset().top }, 4000);
   return false;
 });
});
  
</script>

</body>
</html>
