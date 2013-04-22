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

<div class="row-fluid">
    <br>
     <br>
    
     <br>
   
    <div class="container-fluid span12">
      <div class="row-fluid span6 ">
        <h1 class="text-right">About Me </h1>
      </div>
    <div id="" class="row-fluid span6 text-left">
      <ul class="footer-links ">
        <li >1168 E. Little Dr.</li> 
        <li class="muted">&middot;</li> 
        <li>Placentia, CA 92870</li> 
        <li class="muted">&middot;</li>   
        <li><a href="mailto:brianyhan@gmail.com?Subject=Hello%20Brian">Brianyhan@gmail.com</a></li>  
        <br>
        <br>
        <li><i class="icon-phone-sign "></i> (714) 900-1650</li>
        <li class="muted">&middot;</li> 
        <li><a href="DesignCV.pdf">CV | Resume</a></li>
      </ul>
      </div>
    
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="wrapdaddy">
  <div id="wrapper">
      <header>
        <h1>Personal References</h1>
        <h5>These people approve of my work, I know right??</h5>
        <hr/>
      </header>

      <div id="current-movie">
        <!-- Javascript prints which movie we want to see here -->
      </div>

    

      <div id="next-movie-preload">
        <!-- Hidden div that preloads the content to be swapped -->
      </div>

      <div id="prev-movie-preload">
        <!-- Hidden div that preloads the content to be swapped -->
      </div>

      <br/>
      <br/>

      <div id="add-movie-container">
        <div id="add-movie-left">
          <hr/>
        </div>
        <div id="add-movie-title">
          <h3 id="add-movie-show">
            <a href="#add-movie">
              <img src="images/graphics/show-more.png" 
                 alt="Show Add Movie Form" 
                 class="show-more-less" 
                 id="toggle-button"/>
              Add Movie
            </a>
          </h3>
        </div>
        <div id="add-movie-right">
          <hr/>
        </div>
      </div>
      
      <div id="movie-form">
        <form id="add-movie" method="post" action="">
          <table>
            <tr>
              <td><h3>Movie Title</h3></td>
              <td><input type="text" name="movie-title" id="movie-title"/></td>
            </tr>
            <tr>
              <td><h3>Release Date</h3></td>
              <td><select name="movie-year" id="movie-year">
                <!-- Javascript populates the options with all years from 1900-2013 -->
              </select></td>
            </tr>
            <tr>
              <td><h3>Movie Director</h3></td>
              <td><input type="text" name="movie-director" id="movie-director"/></td>
            </tr>
            <tr>
              <td><h3>Starring Actors</h3></td>
              <td><input type="text" name="movie-starring" id="movie-starring"/></td>
            </tr>
            <tr>
              <td><h3>Your Rating (0-100)</h3></td>
              <td><input type="text" name="your-rating" id="your-rating" maxlength="3" size="3"/></td>
            </tr>
            <tr>
              <td><h3>Rotten Tomatoes Critics (0-100)</h3></td>
              <td><input type="text" name="rt-critics" id="rt-critics" maxlength="3" size="3"/></td>
            </tr>
            <tr>
              <td><h3>Rotten Tomatoes Audience (0-100)</h3></td>
              <td><input type="text" name="rt-audience" id="rt-audience" maxlength="3" size="3"/></td>
            </tr>
            <tr>
              <td><h3>Movie Poster's URL</h3></td>
              <td><input type="text" name="movie-poster" id="movie-poster"/></td>
            </tr>
            <tr>
              <td><h3>Plot Synopsis</h3></td>
              <td><textarea name="movie-synopsis" id="movie-synopsis"/></textarea></td>
            </tr>
          </table>
          <input type="button" id="submit-new-movie" value="Add New Movie"/>
        </form>
      </div>

      <div id="form-errors">
        <!-- Javascript will populate this list after checking the inputs to the form -->
        <div id="movie-title-error"></div>
      </div>

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
    <br>  <br>
    <br>
    <br>
    <br>  <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>

    <a href="#">
      <div id="previous-movie">
        <!-- Absolute positioned div to the left with a background image is left arrow -->
      </div>
    </a>
    <a href="#">
      <div id="next-movie">
        <!-- Absolute positioned div to the left with a background image is left arrow -->
      </div>
    </a>
   <!-- Footer ================== -->
    <?php include("footer.php"); ?>
    <br>
    <br>

    </div> <!--End of containerFat -->
  </body>
</html>