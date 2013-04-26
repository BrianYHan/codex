
<html >
  <head>
    <meta charset="utf-8">
    <title>Brian Han</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Southern CA based UI/UX/JavaScript/CSS/HTML5/Ruby design and development. The site is a portfolio of various projects from 2011-Present.">
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
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">  -->
  </head>
  <script>
    var Menu = {
        el : $('.toggle-menu'),
        list : $('.main-nav ul'),
        init : function(){
            if ($(window).width() <= 550) {
                Menu.el.toggle(function(){
                    Menu.list.slideDown(200);
                }, function(){
                    Menu.list.slideUp(200);
                });
            }
        }
    };
  </script>
  <body data-spy="scroll" data-target=".navbar">
<div class="containerFat">
    <!-- Navbar
    ================================================== -->
<?php include("header.php"); ?>
<br>
    
        <div class="container">
        <div class="page-header text-center">
            <h1>Code<small> HTML5, SASS, PHP, RUBY, PYTHON applications</small></h1>
        </div>
       
        <div class="row-fluid">
            <br>
            <!-- <div id="outer_container">
                <div id="customScrollBox">
                    <div class="container">
                        <div class="content">
                            <h1>My application gallery: <br /><span class="light"><span class="grey"><span class="s36">Frontend | Code</span></span></span></h1>
               
                                <div id="toolbar"></div>
                                    <div class="clear"></div>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_lucernarium.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_lucernarium_thumb.jpg" title="Supremus Lucernarium" alt="Supremus Lucernarium" class="thumb" />
                                        </a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_denebola.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_denebola_thumb.jpg" title="Denebola" alt="Denebola" class="thumb" />
                                        </a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_lux.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_lux_thumb.jpg" title="Lux Aeterna" alt="Lux Aeterna" class="thumb" />
                                        </a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_dk.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_dk_thumb.jpg" title="X-Wing on patrol" alt="X-Wing on patrol" class="thumb" /></a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_albireo.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_albireo_thumb.jpg" title="Albireo Outpost" alt="Albireo Outpost" class="thumb" /></a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_church.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_church_thumb.jpg" title="Church of Heaven" alt="Church of Heaven" class="thumb" /></a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_Decampment.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_Decampment_thumb.jpg" title="Decampment" alt="Decampment" class="thumb" /></a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_Hibernaculum.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_Hibernaculum_thumb.jpg" title="Hibernaculum" alt="Hibernaculum" class="thumb" /></a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_moons.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_moons_thumb.jpg" title="Aurea Mediocritas" alt="Aurea Mediocritas" class="thumb" /></a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_praedestinatio.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_praedestinatio_thumb.jpg" title="Praedestinatio" alt="Praedestinatio" class="thumb" /></a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_transitorius.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_transitorius_thumb.jpg" title="Transitorius" alt="Transitorius" class="thumb" /></a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_victimofgravity.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_victimofgravity_thumb.jpg" title="Victim of Gravity" alt="Victim of Gravity" class="thumb" /></a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_lucernarium.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_lucernarium_thumb.jpg" title="Supremus Lucernarium" alt="Supremus Lucernarium" class="thumb" /></a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_denebola.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_denebola_thumb.jpg" title="Denebola" alt="Denebola" class="thumb" /></a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_lux.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_lux_thumb.jpg" title="Lux Aeterna" alt="Lux Aeterna" class="thumb" /></a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_dk.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_dk_thumb.jpg" title="X-Wing on patrol" alt="X-Wing on patrol" class="thumb" /></a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_albireo.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_albireo_thumb.jpg" title="Albireo Outpost" alt="Albireo Outpost" class="thumb" /></a>
                                        <a href="imgs/space/Universe_and_planets_digital_art_wallpaper_church.jpg" class="thumb_link">
                                            <span class="selected"></span>
                                            <img src="imgs/space/Universe_and_planets_digital_art_wallpaper_church_thumb.jpg" title="Church of Heaven" alt="Church of Heaven" class="thumb" /></a>
                                                            
                            <p class="clear"></p>
                            </div>
                            </div>
                            </div>
                            </div>
                <div id="bg">
                    <img src="universe.jpg" title="Supremus Lucernarium" id="bgimg" />
                    <div id="preloader"><img src="assets/img/ajax-loader_dark.gif" width="32" height="32" align="absmiddle" />LOADING...</div>
                    <div id="arrow_indicator"><img src="assets/img/sw_arrow_indicator.png" width="50" height="50"  /></div>
                    <div id="nextimage_tip">Click for next image</div>
                </div> -->

        <div id= "codeBank" class="span3 ">
            <h3 class="text-center">Past Projects</h3>
          <!--   <div id="accordion">
               
                <div id="summer">
                    <h4>Summer</h4>
                    <p>The seasons are considered by some Western countries to start at the equinoxes and solstices, based on astronomical reckoning. In North American-printed English-language calendars, based on astronomy, summer begins on the day of the summer solstice and ends on the day of the autumn equinox. When it is summer in the Southern Hemisphere, it is winter in the Northern Hemisphere, and vice versa.</p>
                    <p>But, because the seasonal lag is less than 1/8 of a year (except near large bodies of water), the meteorological start of the season, which is based on average temperature patterns, precedes by about three weeks the start of the astronomical season. According to meteorology, summer is the whole months of December, January, and February in the Southern Hemisphere, and the whole months of June, July, and August in the Northern Hemisphere. This meteorological definition of summer also aligns with commonly viewed notion of summer as the season with the longest (and warmest) days of the year, in which the daylight predominates, through varying degrees. The use of astronomical beginning of the seasons means that spring and summer have an almost equal pattern of the length of the days, with spring lengthening from the equinox to the solstice and summer shortening from the solstice to the equinox, while meteorological summer encompasses the build up to the longest day and decline thereafter, so that summer has many more hours of daylight than spring.</p>
                    <p>Today, the meteorological reckoning of the seasons is used in Australia, Denmark, the former USSR and by many people in the United Kingdom, but the astronomical definition is still more frequently used in the United States.</p>
                </div>
                <div id="autumn">
                    <h4>Autumn</h4>
                    <p>Autumn (also known as fall in North American English) is one of the four temperate seasons. Autumn marks the transition from summer into winter. In the northern hemisphere, the start of autumn is generally considered to be around September, and in the southern hemisphere, its beginning is considered to be around March. There exist, however, different definitions of autumn, some of which are based on the months of the year while others are based on the equinox and solstice.</p>
                    <p>During autumn, deciduous trees shed their leaves. Leaves change to a yellowish, reddish or brownish hue before falling. Such coloured leaves have come to be colloquially called "fall foliage" in North America. In temperate zones, autumn is the season during which most crops are harvested. It is also the season during which days get shorter and cooler and the nights get longer.</p>
              </div>
              <div id="winter">
                 <h4>Winter</h4>
                 <p>Winter is one of the four seasons of temperate zones. North American calendars go by astronomy and state that winter begins on the winter solstice and ends on the vernal equinox. Calculated meteorologically, it begins and ends earlier (typically at the start of the month with the equinox or solstice) and is the season with the shortest days and the lowest temperatures. Either way, it generally has cold weather and, especially in the higher latitudes or altitudes, snow and ice. The coldest average temperatures of the season are typically experienced in January in the Northern Hemisphere and in July in the Southern Hemisphere.</p>
              </div>
              <div style="float: none; clear: both; height: 0;"> </div>
            </div> -->


            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
              <li><a href="#profile" data-toggle="tab">Profile</a></li>
             
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="home">
                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
              </div>
              <div class="tab-pane fade" id="profile">
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
              </div>
             
            </div>
        </div>
        
        <div id ="codeGallery" class="span8">
            <h3 class="text-center">Front End | Back End</h3>
            <div class="row-fluid">
                <div id="siteThumb" class="span4">
                    
                </div>
                <div id="codeBox" class="span4">
                </div>
            </div>
        </div>
        
   <img src='assets/img/aceHome.gif'/>

</div>


</div>
    <!-- Footer
    ================================================== -->
    <?php include("footer.php"); ?>
    <br>
</div><!--end of containerFat-->

</body>
</html>
