<footer class="footer">
      <div class="container">
        <div class="row">
        <ul class="footer-links">
          <li><a href="/index">Home</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/issues?state=open">Github</a></li>
          <li class="muted">&middot;</li>
          <li><a href="http://www.linkedin.com/pub/brian-han/66/a9b/1b3/">Linkedin</a></li>
        </ul>
      </div>
      </div>
    </footer>

     <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/application.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/jquery.mousewheel.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="assets/js/jquery.masonry.min.js"></script>

    <script src="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

    <script src="assets/js/bgImage.js"></script>
    <script src="assets/js/imagePanner.js"></script>

    <script src="assets/js/jquery.ascensor.min.js"></script>
    <script src="assets/js/jquery.ascensor.js"></script>


    

    <!--Contact page --> 
    <script src="assets/js/contactPage.js"></script>

    <!--JS for the nav-->
    <script src="assets/js/header.js"></script>


    <!--JS to make moving page smoother-->
    <script src="assets/js/jquery.equalheights.js"></script>

    <script><!--Changes stylesheet according to time-->
      function getStylesheet() {
        var currentMinute = (currentDate.getHours()  * 60) + currentDate.getMinutes();
         if (0 <= currentMinute&&currentMinute < 30) {
         document.write("<link rel='stylesheet' href='assets/css/bootstrap.css' type='text/css'>");
         document.write("<link rel='stylesheet' href='assets/css/bootstrap-responsive.css' type ='text/css'>");
         document.write("<link rel='stylesheet' href='assets/css/docs.css' type ='text/css'>");
          }
        if (30 <= currentMinute&&currentMinute < 90) { {
         document.write("<link rel='stylesheet' href='morning.css' type='text/css'>");
          }
        if (90 <= currentTime&&currentTime < 200) {
         document.write("<link rel='stylesheet' href='assets/css/bootstrap.css' type='text/css'>");
         document.write("<link rel='stylesheet' href='assets/css/bootstrap-responsive.css' type ='text/css'>");
         document.write("<link rel='stylesheet' href='assets/css/docs.css' type ='text/css'>");
          }
        if (200 <= currentMinute&&currentMinute <= 600) {
         document.write("<link rel='stylesheet' href='evening.css' type='text/css'>");
         }
        if (600 <= currentMinute&&currentMinute <= 1400) {
         document.write("<link rel='stylesheet' href='assets/css/bootstrap.css' type='text/css'>");
         document.write("<link rel='stylesheet' href='assets/css/bootstrap-responsive.css' type ='text/css'>");
         document.write("<link rel='stylesheet' href='assets/css/docs.css' type ='text/css'>");
         }
      }
    getStylesheet();
-->
</script>

<!-- -->
<script>
$(document).ready(function(){
    $nav_li=$("#nav li");
    $nav_li_a=$nav_li.children("a");
    var animSpeed=450; //fade speed
    var hoverTextColor="#fff"; //text color on mouse over
    var hoverBackgroundColor="red"; //background color on mouse over
    var textColor=$nav_li_a.css("color");
    var backgroundColor=$nav_li.css("background-color");
    $nav_li_a.hover(function() {
        var $this=$(this);
        $this.stop().animate({ color: hoverTextColor }, animSpeed).parent().stop().animate({ backgroundColor: hoverBackgroundColor }, animSpeed);
    },function() {
        var $this=$(this);
        $this.stop().animate({ color: textColor }, animSpeed).parent().stop().animate({ backgroundColor: backgroundColor }, animSpeed);
    });
});
</script>

  
