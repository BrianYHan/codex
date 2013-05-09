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
                                   <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

<script language="javascript">
function checkEmail(inputvalue){  
    var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
    if(pattern.test(inputvalue)){         
    alert("true");   
    }else{   
    alert("false"); 
    }
}
</script>
<script LANGUAGE="JavaScript">
    function getCookie(name){
        var cname = name + "=";
        var dc = document.cookie;
    if (dc.length > 0) {
        begin = dc.indexOf(cname);
    if (begin != -1) {
        begin += cname.length;
        end = dc.indexOf(";", begin);
    if (end == -1) end = dc.length;
    return unescape(dc.substring(begin, end));
        }
    }
    return null;
    }
function setCookie(name, value) {
    var now = new Date();
    var then = new Date(now.getTime() + 1000000000000);
    document.cookie = name + "=" + escape(value) + "; expires=" + then.toGMTString() + "; path=/";
    }
function getInfo(form) {
    form.info.value = "Browser Information: " + navigator.userAgent;
    }
function getValue(element) {
    var value = getCookie(element.name);
    if (value != null) element.value = value;
    }
function setValue(element) {
    setCookie(element.name, element.value);
    }
function fixElement(element, message) {
    alert(message);
    element.focus();
    }
function isMailReady(form) {
    var passed = false;
    if (form.fullname.value == "") {
    fixElement(form.fullname, "Please include your name.");
    }
else if (form.email.value.indexOf("@") == -1 ||
    form.email.value.indexOf(".") == -1) {
    fixElement(form.email, "Please include a proper email address.");
}
else if (form.message.value == "") {
    fixElement(form.message, "Please include a message.");
}
else {
    getInfo(form);
    passed = true;
}
return passed;
}
// End -->
</SCRIPT>
  </head>

<body data-spy="scroll" data-target=".navbar">
  <div class="regularBackground">
    <!-- Navbar
    ================================================== -->
<?php include("header.php"); ?>

    <div class="container">
         <div class="row-fluid">
      <div class="span12 page-header">
      
   
        <h1 class="text-center">Contact Me!</h1>
    <h3></h3>
      </div>
    </div>
<!---<SCRIPT LANGUAGE="JavaScript">
//         cookie_name = "dataCookie";
//         var YouEntered;
//         function putCookie() {
//             if(document.cookie != document.cookie) 
//             {index = document.cookie.indexOf(cookie_name);}
//             else 
//                 { index = -1;}

//             if (index == -1){
//                 YouEntered=document.cf.cfd.value;
//                 document.cookie=cookie_name+"="+YouEntered+"; expires=Monday, 04-Apr-2015 05:00:00 GMT";
//             }
//         }
// </SCRIPT>

// <form name="cf">

// <label>Name</label> <input TYPE="text" NAME="cfd" size="20">

// <input TYPE="button" Value="Set to Cookie" onClick="putCookie()">

// </FORM>

// <SCRIPT LANGUAGE="JavaScript">

// cookie_name = "dataCookie";
// var YouWrote;

// function getName() {
// if(document.cookie)
// {
// index = document.cookie.indexOf(cookie_name);
// if (index != -1)
// {
// namestart = (document.cookie.indexOf("=", index) + 1);
// nameend = document.cookie.indexOf(";", index);
// if (nameend == -1) {nameend = document.cookie.length;}
// YouWrote = document.cookie.substring(namestart, nameend);
// return YouWrote;
// }
// }
// }

// YouWrote=getName();
// if (YouWrote == "dataCookie")
// {YouWrote = "Nothing_Entered"}


// </SCRIPT> 

// <SCRIPT LANGUAGE="javascript">
// document.write("You Entered " +YouWrote+ ".");
// </SCRIPT>
// <SCRIPT LANGUAGE="javascript">
// document.write("<FORM>")
// document.write("You Entered:") 
// document.write("<input TYPE=text SIZE=30 VALUE=" +YouWrote+ ">");
// document.write("</FORM>")
// </SCRIPT>
   <!-- Footer ================== -->
<!--<?php  
  
        // // check for a successful form post  
        // if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
  
        // // check for a form error  
        // elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
  
?>  
        <form method="POST" action="contact-form-submission.php" class="form-horizontal">  
            <div class="control-group">  
                <label class="control-label" for="input1">Name</label>  
                <div class="controls">  
                    <input type="text" name="contact_name" id="input1" placeholder="Your name">  
                </div>  
            </div>  
            <div class="control-group">  
                <label class="control-label" for="input2">Email Address</label>  
                <div class="controls">  
                    <input type="text" name="contact_email" id="input2" placeholder="Your email address" onClick="checkEmail(document.signupform.email.value)">  
                </div>  
            </div>  
            <div class="control-group">  
                <label class="control-label" for="input3">Message</label>  
                <div class="controls">  
                    <textarea name="contact_message" id="input3" rows="8" class="span5" placeholder="The message you want to send to me."></textarea>  
                </div>  
            </div>  
            <div class="form-actions">  
                <input type="hidden" name="save" value="contact">  
                <button type="submit" class="btn btn-primary">Send</button>  
            </div>  
        </form>  
    </div> <!--End of containerFat -->




<CENTER>
    <div class="well ralewayFont" style="color:black; width:800px">
<form name = "mail" ACTION = "mailto:brianyhan@gmail.com" METHOD = "POST" ENCTYPE = "text/plain" onSubmit = "return isMailReady(this);">
    <input TYPE = "hidden" NAME = "info">
    <table border = 0 cellpadding = 5 CELLSPACING = 0>
        <tr>
        <td>
        Your Name:
        <p>
            <input TYPE = "TEXT" NAME = "fullname" onFocus = "getValue(this)" onBlur = "setValue(this)">
        </td>
        <td>
        Your Email Address:
        <p>
        <input TYPE = "TEXT" NAME = "email" onFocus = "getValue(this)" onBlur = "setValue(this)">
        </td>
        </tr>
        <tr>
        <td colspan = "2">
        Enter your Message:
        <p>
        <textarea rows = "8" cols = "38" name = "message" style="width:560px">
        </textarea>
        </td>
        </tr>
        <tr>
        <td colspan = "2">
            <center>
        <input type = "submit" VALUE = " Submit " class="btn btn-primary btn-large">
        <input type = "reset" VALUE = " Cancel " class="btn btn-danger btn-large">
    </center>
        </td>
        </tr>
    </table>
</FORM>
</CENTER>



    <br style="clear:both">
 <?php include("footer.php"); ?>

  </body>
</html>

