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
<!--     <link href="assets/css/docs.css" rel="stylesheet"> -->
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="assets/css/about.css" rel="stylesheet">
    <link href="assets/css/FortAwesome-Font-Awesome-13d5dd3/css/font-awesome-ie7.min.css" rel="stylesheet">
    <link href="assets/css/FortAwesome-Font-Awesome-13d5dd3/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/FortAwesome-Font-Awesome-13d5dd3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons 
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png"> -->


  </head>
  <body data-spy="scroll" data-target=".navbar">
<div class="containerFat">
    <!-- Navbar
    ================================================== -->
<?php include("header.php"); ?>
<div class="container-fluid span12">
<div class="row-fluid span12">
    
        <div class="page-header"><h1 class="text-center ">About Me</h1></div>

 
    
    </div>
   </div>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="container-fluid span12">
  <div class="row-fluid span12">
    <div id="wrapdaddy">
      <div id="wrapper">
        <header>
          <h2>Personal References</h2>
            <br>
           
          <h5>Chakachakachaka</h5>
            <br>
            <br>
          <hr/>
        <br>
        </header>

      <div id="current-contact">
        <!-- Javascript prints which contact we want to see here -->
      </div>

    

      <div id="next-contact-preload">
        <!-- Hidden div that preloads the content to be swapped -->
      </div>

      <div id="prev-contact-preload">
        <!-- Hidden div that preloads the content to be swapped -->
      </div>

      <br/>
      <br/>
      
      <div id="add-contact-container">
        <div id="add-contact-left">
          <hr/>
        </div>
        <div id="add-contact-title">
          <h3 id="add-contact-show">
            <a href="#add-contact">
              <img src="images/graphics/show-more.png" 
                 alt="Show Add contact Form" 
                 class="show-more-less" 
                 id="toggle-button"/>
              Add contact
            </a>
          </h3>
        </div>
        <div id="add-contact-right">
          <hr/>
        </div>
      </div>
      
      <div id="contact-form">
        <form id="add-contact" method="post" action="">
          <table>
            <tr>
              <td><h3>Contact Title</h3></td>
              <td><input type="text" name="contact-title" id="contact-title"/></td>
            </tr>
            <tr>
              <td><h3>Release Date</h3></td>
              <td><select name="contact-year" id="contact-year">
                <!-- Javascript populates the options with all years from 1900-2013 -->
              </select></td>
            </tr>
            <tr>
              <td><h3>Contact Name</h3></td>
              <td><input type="text" name="contact-name" id="contact-name"/></td>
            </tr>
            <tr>
              <td><h3>Responsibilities</h3></td>
              <td><input type="text" name="contact-resps" id="contact-resps"/></td>
            </tr>
          
            <tr>
              <td><h3>Contact Poster's URL</h3></td>
              <td><input type="text" name="contact-poster" id="contact-poster"/></td>
            </tr>
            <tr>
              <td><h3>Comments</h3></td>
              <td><textarea name="contact-synopsis" id="contact-synopsis"/></textarea></td>
            </tr>
          </table>
          <input type="button" id="submit-new-contact" value="Add New contact"/>
        </form>
      </div>

      <div id="form-errors">
        <!-- Javascript will populate this list after checking the inputs to the form -->
        <div id="contact-title-error"></div>
      </div>

    </div>
  </div>
    
    <br>
  </div>

    <a href="#">
      <div id="previous-contact">
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
        <i class="icon-double-angle-left icon-4x"></i><!-- Absolute positioned div to the left with a background image is left arrow -->
      </div>
    </a>
    <a href="#">
      <div id="next-contact">
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
        <i class="icon-double-angle-right icon-4x"></i><!-- Absolute positioned div to the left with a background image is left arrow -->
      </div>
    </a>
  </div>
</div>
   <!-- Footer ================== -->
    <?php include("footer.php"); ?>
    <br>
    <br>


    </div> <!--End of containerFat -->

     <br>
 <br>
 <br>
  <br>
 <br>
 <br>
  </body>
</html>

