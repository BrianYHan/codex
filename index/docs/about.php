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
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">-->

  <style>
  #feedback { font-size: 1.4em; }
  #selectable .ui-selecting { background: #FECA40; }
  #selectable .ui-selected { background: #F39814; color: white; }
  #selectable { list-style-type: none; margin: 0; padding: 10px; width: 60%; border-radius:15px; background-color:#222;}
  #selectable li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }                                 
  .well{background-color:#222;}
  .contactBox {background-color:#fff;}


  }
</style>
<script>
$(function() {
    $( "#selectable" ).selectable({
      stop: function() {
        var result = $( "#select-result" ).empty();
        $( ".ui-selected", this ).each(function() {
          var index = $( "#selectable li" ).index( this );
          result.append( " #" + ( index + 1 ) );
        });
      }
    });
  });
</script>

 <script>
    $(document).ready(function(){
      $("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
      });
    });
    </script>
  </head>

<body data-spy="scroll" data-target=".navbar" >
  <div class="regularBackground">
  <!-- Navbar
  ================================================== -->
  <?php include("header.php"); ?>
  <br style="clear:both">
  <div class="section" id="section1" style="padding-top:20px">
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          <h1 class="page-header text-center"><span class="active">Bio </span><i class="icon-circle"></i>  
              <a href="#section2">Resume/CV</a> <i class="icon-circle"></i> 
              <a href="#section3">References</a>
          </h1>
        </div>
      </div>
    
      <div class="row-fluid">
        <div class="span3">
          <h1>About</h1>
        </div>
        <div class="span5 pull-left">
             <form>
            <input type="text" id="searchbox" placeholder="Search for any terms here!" />
            <span id="find" type="button" value="Scroll To Anchor"><input type="button" value="Submit Search" onClick="showcvBox(document.getElementById('searchbox').value)" style="margin-bottom:20px" /></span>
          </form>
        </div>
      </div>

    <div class="row-fluid well">
      <div class="span8">
        <p>
          Call me Ishmael. Some years ago--never mind how long precisely --having little or no money in my purse, 
          and nothing particular to interest me on shore, I thought I would sail about a little and see the watery part of the world.
        </p><br>
          <p> It is a way I have of driving off the spleen, and regulating the circulation. Whenever I find myself 
            growing grim about the mouth; whenever it is a damp, drizzly November in my soul; whenever I find myself 
            involuntarily pausing before coffin warehouses, and bringing up the rear of every funeral I meet; and 
            especially whenever my hypos get such an upper hand of me, that it requires a strong moral principle to 
            prevent me from deliberately stepping into the street, and methodically knocking people's hats off--then, 
            I account it high time to get to sea as soon as I can.
        </p>
        <p>
          This is my substitute for pistol and ball. With a philosophical flourish Cato throws himself upon his sword; 
          I quietly take to the ship. There is nothing surprising in this. If they but knew it, almost all men in their degree, 
          some time or other, cherish very nearly the same feelings towards the ocean with me. There now is your insular city 
          of the Manhattoes, belted round by wharves as Indian isles by coral reefs--commerce surrounds it with her surf.
        </p>
      </div>
      <div class="span3">

        <div class="well contactBox" style="color:black; height:150px; padding-top:10px;">
             <h4 class="text-center">Contact Information</h4>
          <div class="row-fluid">
            <div class="span12 text-left">
              <i class="icon-envelope"></i> &nbsp;&nbsp;<a href="mailto:brianyhan@gmail.com?Subject=Hello%20Brian">   Brianyhan@gmail.com</a><br>
              <i class="icon-phone"></i>  &nbsp;&nbsp;<a href="https://github.com/twitter/bootstrap/issues?state=open">   Github</a>  <br>
              <i class="icon-github-alt"></i> &nbsp;&nbsp;   (714) 900-1650<br>
              <i class="icon-linkedin"></i> &nbsp;&nbsp;<a href="http://www.linkedin.com/pub/brian-han/66/a9b/1b3/">   Linkedin</a><br>
              <i class="icon-facebook"></i> &nbsp;&nbsp;   <a href="https://www.facebook.com/profile.php?id=1823422">   Facebook</a><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  
 
    <br>

    <br>
  </div>
  </div> <!-- End of Section 1 -->


  

   

  <div class="section " id="section2" style="padding-top:20px">

      <div class="row-fluid">
        <div class="span12">      
           <h1 class="page-header text-center"><a href="#section1">Bio </a><i class="icon-circle"></i>  
             <span class="active">Resume/CV </span><i class="icon-circle"></i> 
              <a href="#section3">References</a>
            </h1>
        </div>
      </div>
     <div class="row-fluid">   
    

        <div class="span12">
          <center>
            <h3>Search using the options below:</h3>
          <p>
            <p id="feedback">
              <span>You've selected options:</span> <span id="select-result">none</span>
          </p>
          <ol id="selectable">
            <li class="ui-widget-content" id="eduSelect" href="#education" name="Education" onMouseup="eduCheck()">1. Education</li>
            <li class="ui-widget-content" id="jobSelect" href="#experience"  onMouseup="jobCheck()">2. Experience</li>
            <li class="ui-widget-content" id="randomSelect" href="#random"  onMouseup="randomCheck()">3. Personal</li>
            <li class="ui-widget-content" id="uscSelect" href="#usc"  onMouseup="uscCheck()">4. USC</li>
            <li class="ui-widget-content" id="teachingSelect" href="#teaching"  onMouseup="teachingCheck()">5. Teaching</li>
            <li class="ui-widget-content" id="progSelect" href="#prog"  onMouseup="progCheck()">6. Skills | Programming</li>
            <li class="ui-widget-content" id="allSelect" href="#cvBox"  onMouseup="allCheck()">Check All Options</li>
            <li class="ui-widget-content" id="allDeSelect" href="#"  onMouseup="allDeSelectCheck()">Uncheck All Options</li>
          </ol>
        </div>

       </div>
       
 
        
        
                
           
        </div>
               
                
            <div id="cvBox" ><a id="findlink" href="#find"></a>
              <h3 id="experience" onMouseOver="jobHoverDisplay()" onMouseOut="jobHoverHide()" onClick="jobCheck()"> <a>Work Experience</a><span id="jobHover">&nbsp; Display </span> </h3>                
                 <hr />

              <div id="uscTA">  
                <h4>University of Southern California <p class="pull-right">Los Angeles, CA</p></h4>
                  <h5>Teaching Assistant – Viterbi Engineering <p class="pull-right">Aug 2012 – March 2013</p></h5>
                    <ul>
                      <li>Supported Professors' instruction during ITP Department lectures</li>
                        <ul>
                          <li>Sat in during ITP 104: Introduction to Web Publishing lecture</li>
                          <li>Determined students who needed help during lecture and caught them up with the rest of class </li>
                          <li>Acted as grader for exams and assignments </li>
                          <ul> 
                            <li>Professors: 
                              <li>Patrick Dent <a href="mailto:dent@usc.edu?Subject=Hello%20Patrick">dent@usc.edu</a> </li> 
                              <li>Chi So <a href="mailto:chiso@usc.edu?Subject=Hello%20Chi">chiso@usc.edu</a></li>
                          </ul>
                            </li>
                        </ul>
                    <li>Conducted office hours to assist students</li>
                        <ul>
                            <li>Office hours for ITP 104: Introduction to Web Publishing, ITP 499: Advanced Web Publishing, ITP 300: Database and Development, ITP 310 : Design for User Experience</li>
                            <li>Worked with students to find solutions for class assignments and labs</li>
                        </ul>
                    <li>Made class website through which Professor uploaded Video lectures, assignments, and labs</li>
                </ul> 
              </div>
              <div id="abcs">                 
                <h4> Natalie Pace | The ABCs of Financial Literacy <p class="pull-right"> Los Angeles CA</p></h4>
                  <h5 >Chief Application Designer <p class="pull-right">January 2013-Present</p></h5>
                    <ul>
                      <li> Worked with Financial Guru Natalie Pace to design application for Juniors and Seniors in High School </li>
                      <li> Led Front-end Application Design Team using Javascript, Jquery, and Sass CSS Preprocessor</li>
                      <li> Led Back-end Application Design Team using Ruby and Ruby on Rails framework</li>
                      <li> Assisted in development of 'Choose Your Own Ending' game that reinforce financial literacy principles taught by application</li>
                    </ul>
              </div>  
              <div id="cft">                                
                <h4>California Federation of Teachers <p class="pull-right">Los Angeles, CA</p></h4>
                  <h5 >Campaign Organizer<p class="pull-right">June – December 2012</p></h5>
                    <ul>
                        <li>Helped organize union members in traditionally inactive local unions</li>
                        <li>Led teams during phonebanking</li>
                        <li>Directed and opened all Orange County charter meetings</li> 
                    </ul> 
              </div>
                  
  
                  
                  <div id="teaching"> 
                     <h4>Private and Classroom Tutor<p class="pull-right">Orange County | Los Angeles CA</p></h4>
                     
                     <h5 >SAT Math | AP US & World History | English Composition | Conversational English <p class="pull-right">June 2008 - August 2012</p></h5>
                                          
                     <ul>
                      <li>SAT Math (2010-2012)
                        <ul>
                          <li>Taught Ages 14-17 in Private and Classroom settings</li>
                          <li>Courses taught: Algebra, Geometry, Calculus and Trigonometry</li>
                        </ul>  
                      </li>
                      <li>English Composition (2009-2012)
                        <ul>
                          <li>Taught Ages 8-17 in Private and Classroom settings</li>
                          <li>Created curriculum based around composition, reading comprehension and vocabulary</li>
                          <li>Coordinated monthly meetings with parents</li>
                        </ul>  
                      </li>
                      <li>AP US & World History (2009-2012)
                        <ul>
                          <li>Taught Ages 14-16 in Classroom setting</li>
                          <li>Created curriculum for based around composition and document analysis</li>
                          <li>95% pass-rate on AP exams, 80% of students received 5/5</li>
                        </ul>  
                      </li>
                      <li>Conversational English (2009-2012)
                        <ul>
                          <li>Taught Ages 7-18 in Private and Classroom setting</li>
                          <li>Courses taught: Conversational English, Grammar, Vocabulary, Reading Comprehension</li>
                          <li>ESL Students ranged from Chinese, Mexican, and Korean </li>
                        </ul>  
                      </li>
                    </ul>
                  </div>
                
              <h3 id="education" onMouseOver="eduHoverDisplay()" onMouseOut="eduHoverHide()" onClick="eduCheck()"><a>Education </a><span id="eduHover"> &nbsp; Display </span> </h3>


              <hr />
                <div id="usc" style="font-family: 'Playfair Display SC', serif;">
                  <h4 >UNIVERSITY OF SOUTHERN CALIFORNIA <p class="pull-right">January 2010-May 2013</p></h4>
                    <h5 >BA History|Biology</h5>
                    <h5 >Minor: Interactive Web Development</h5>
                      <ul>
                          <li> GPA: 3.3 | Phi Sigma Theta National Honors Society | Phi Theta Kappa Honors Society | Dean's List (2010-2013) | </li>
                          <li> Extracurriculars: Member of Best Buddies, Worked as Tutor for Children with disabilities through No Child Left Behind Act </li>
                      </ul>
                </div>
                   
                <div id="bc">                                
                   <h4>BOSTON COLLEGE <p class="pull-right">September 2008 – Aug 2009</p></h4>
                        <ul>
                            <li>Assisted History department with Doctoral Research</li>
                        </ul>
                </div>

               <h3 id="prog" onMouseOver="skillsHoverDisplay()" onMouseOut="skillsHoverHide()" onClick="progCheck()"><a>Skills | Programming </a><span id="skillsHover"> &nbsp;Display </span> </h3>
                <hr />
                <div id="skills" >
                  <h4 >LANGUAGES </h4>
                    <h5 >Scripting Languages</h5>
                      <ul>
                        <li>HTML, CSS, SASS, LESS, RUBY, PHP, JAVASCRIPT, JQUERY, PYTHON</li>
                      </ul>
                    <h5 >Programming Languages</h5>
                      <ul>
                        <li>C++, JAVA</li>
                      </ul>
                  <h4 >FRAMEWORKS</h4>
                    <ul>
                      <li> Bootstrap, CodeIgniter, Ruby on Rails, Drupal </li>
                    </ul>
                </div>
                                              
                
                 <h3 id="random" onMouseOver="randomHoverDisplay()" onMouseOut="randomHoverHide()" onClick="randomCheck()"><a>Personal Details</a> <span id="randomHover">&nbsp; Display </span> </h3>
                 
                 <hr />
                  <ul>                    
                      <div id="pets">
                        <li><h5 >Pets:</h5> I have 3 pets, a Shih Tzu named Molly, a Yorkie named Baby, and a cat named Samuel L Catson. </li>
                        <li>I'm pretty sure they all hate me except for the Shih Tzu</li>
                      </div>
                      
                      <div id="languages">
                        <li><h5 > Languages:</h5>English, Korean, Spanish, Italian</li>
                      </div>
                    </ul>
                </div>    
        <br /> 
  </div>
</div>
</div>
</div>

  <div class="section " id="section3" >
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
           <h1 class="page-header text-center"><a href="#section1">Bio </a><i class="icon-circle"></i>  
              <a href="#section2">Resume/CV </a> <i class="icon-circle"></i> <span class="active">
              References</span>
            </h1>
        </div>
      </div>
    </div>
   <div class="container">
      <div class="row-fluid">
        <div class="span12">
          <div id="wrapdaddy">
            <div id="wrapper">
              <h2 class="text-align:center"><span id="test" type="button" value="Scroll To Anchor">Personal References</span></h2>
              <br>
              <div id="current-contact">
                <!-- Javascript prints which contact we want to see here -->
              </div>
              <div id="next-contact-preload">
                <!-- Hidden div that preloads the content to be swapped -->
              </div>
              <div id="prev-contact-preload">
                <!-- Hidden div that preloads the content to be swapped -->
              </div>
          
          </div>
        </div>
      </div>
     <div class="row-fluid">
      <div class="span3">
         <a href="#">
      <div id="previous-contact">
        
            <a id="testlink" href="#test"><i class="icon-double-angle-left icon-4x"></i></a>
      </div>
    </a>
  </div>
  <div class="span4">
    <center>
     <a href="#add-contact" style="margin-left:200px;">
              <i id="toggle-button" class="icon-double-angle-down icon-4x" ></i>
            </a>
          </center>
  </div>
  <div class="span4">
    <a href="#">
      <div id="next-contact">
     
            <a id="testlink" href="#test"><i class="icon-double-angle-right icon-4x"></i></a>
      </div>
    </a>
  </div>
      </div>
   


    <center>
      <div id="add-contact-container">
        <div id="add-contact-left">
        </div>
        <div id="add-contact-title">
          <h3 id="add-contact-show">
           
          </h3>
        </div>
        <div id="add-contact-right">
         
        </div>
      </div>
    </center>
      <div id="contact-form">
        <form id="add-contact" method="post" action="">
          <table>
            <tr>
              <td><h3>Contact Title</h3></td>
              <td><input type="text" name="contact-title" id="contact-title"/></td>
            </tr>
            <tr>
              <td><h3>Year Worked?</h3></td>
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
              <td><h3>Contact's Photo URL</h3></td>
              <td><input type="text" name="contact-picture" id="contact-picture"/></td>
            </tr>
            <tr>
              <td><h3>Comments</h3></td>
              <td><textarea name="contact-comments" id="contact-comments"/></textarea></td>
            </tr>
          </table>
          <center>
          <input type="button" id="submit-new-contact" value="Add New contact" class="btn btn-custom-darken btn-large"/>
          </center>
        </form>
      </div>

        <div id="form-errors">
          <!-- Javascript will populate this list after checking the inputs to the form -->
          <div id="contact-title-error"></div>
        </div>
      </div>
     

<!-- Footer
    ================================================== -->
<script src="assets/js/jquery.scrollpath.js"></script>
<script src="assets/js/about.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<?php include("footer.php"); ?>
          
        </div>
    </div>



</body>
</html>
