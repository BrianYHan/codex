$(document).ready(function() {
   $("#accordion, #accordion div").mouseover(function() {
      $(this).addClass("hover");
   }).mouseout(function() {
      $(this).removeClass("hover");
   });
});

// accHover = function() {
// 	var accContainer = document.getElementById("accordion");
// 	accContainer.onmouseover=function() {
// 		this.className+=" hover";
// 	}
// 	accContainer.onmouseout=function() {
// 		this.className=this.className.replace(new RegExp(" hover\b"), "");
// 	}
 
// 	var accDivs = accContainer.getElementsByTagName("div");
// 	for (var i=0; i<accDivs.length; i++) {
// 		accDivs[i].onmouseover=function() {
// 			this.className+=" hover";
// 		}
// 		accDivs[i].onmouseout=function() {
// 			this.className=this.className.replace(new RegExp(" hover\b"), "");
// 		}
// 	}	
// }
// if (window.attachEvent) window.attachEvent("onload", accHover);