$(document).ready(function() {
	var i = 0;

	$("#add-contact-show").bind("click", function() { 
		if ($("#add-contact").css("visibility") == "hidden") {
			$("#add-contact").css("visibility", "visible");
			$("#add-contact").css("display", "block");
			$("#toggle-button").attr("src", "images/graphics/show-less.png");
		}
		else if ($("#add-contact").css("visibility") == "visible") {
			$("#add-contact").css("visibility", "hidden");
			$("#add-contact").css("display", "none");
			$("#toggle-button").css("src", "images/graphics/show-more.png");
		}
	});

	$("input[type=text]").focus(function() {
		$(this).css("border", "3px solid #222");
	});

	$("textarea").focus(function() {
		$(this).css("border", "3px solid #222");
	});

	$("select").focus(function() {
		$(this).css("border", "3px solid #222");
	});

	$("#next-contact").bind("click", function() {
		if (i == (contact.length - 1)) {
			i = 0;
		}

		else {
			i = i + 1;
		}
		$("#current-contact").animate({
				opacity: 0
			}, 200, function() {
			displaycontact(i, "current-contact");
		});
		$("#current-contact").animate({
				opacity: 1.00
			}, 300, function() {
		});
	});

	$("#previous-contact").bind("click", function() {
		if (i == 0) {
			i = (contact.length - 1);
		}
		else {
			i = i - 1;
		}
		$("#current-contact").animate({
				opacity: 0
			}, 200, function() {
			displaycontact(i, "current-contact");
		});
		$("#current-contact").animate({
				opacity: 1.00
			}, 300, function() {
		});
	});

	$("#submit-new-contact").bind("click", function() {
		contactForm();
	});

	$("#next-contact-preload").hide(); 
	$("#prev-contact-preload").hide(); 

	var dateOptions = "<option value='empty'> </option>"; 

	for(j = 2013; j >= 1900; j = j - 1) { 
		dateOptions = dateOptions + "<option value='" + j + "'>" + j + "</option>"; 
	}

	document.getElementById("contact-year").innerHTML = dateOptions; 
	var contact = [];

	var addcontact = function(mTitle, timeSpent, mname, mresps, mpicture, mcomments) {
		var newcontact = {
			contactTitle: mTitle, 
			releaseDate: timeSpent, 
			name: mname, 
			resps: mresps, 
			pictureURL: 
			mpicture, 
			comments: mcomments
		};
			contact.push(newcontact);
	}

	addcontact("Campaign Organizer", "2012", "Megan Hultgrien", "Organizing unions, Leading local charter clubs, Led phonebanks", "assets/img/megan.jpg", "He's so awesome. ");
	addcontact("Teaching Assistant", "2013", "Kabir Kang", "Assisting Professor during lectures, Exam Grading, ", "assets/img/kabir.jpg", " Greatest guy ever");
	addcontact("Domestic Supervisor", "2012", "Samuel L. Catson", "Cleaning up my poop, Bathing me, Combing me", "assets/img/drake.png", "Yes, my cat is actually Drake.");
	addcontact("Entrepreneur", "2013", "Natalie Pace", "Designed Frontend/Backend of Application - The ABC's of Financial Literacy", "assets/img/pace.jpg", "YOLO baby");

	var displaycontact = function(index, elementID) {
		var currentHTML = "<div id='current-left'><img id='current-picture' class='back-shadow' src='" + contact[index]["pictureURL"];
			currentHTML = currentHTML + "' alt='" + contact[index]["contactTitle"] + " picture'/></div><div id='current-right'><h2 id='contact-job'>";
			currentHTML = currentHTML + contact[index]["contactTitle"] + "</h2>" + "<h3 id='release-year'>" + contact[index]["releaseDate"] + "</h3>";
			currentHTML = currentHTML + "<h3 id='directed-by'>Name: <span class='italics'><a href='#' id='return-name'>";
			currentHTML = currentHTML + contact[index]["name"] + "</a></span></h3><h3 id='resps'>Responsibilities: <span class='italics'>";

			if (contact[index]["resps"].indexOf(",") == -1) { // No comma; therefore, single entry
				currentHTML = currentHTML + "<a href='#' id='return-resps'>" + contact[i]["resps"] + "</a>";
			}
			else if (contact[index]["resps"].indexOf(",") > -1) { // Else there is commas, parse the respss
				var contactResps = contact[index]["resps"]; // Create a variable so we can delete parts of the resps attribute without affecting original
				currentHTML = currentHTML + "<a href='#' id='return-resps'>";
					while (contactResps.indexOf(",") > -1) { // While we still have commas
						for(j = 0; j < contactResps.indexOf(","); j = j + 1) { // Go through and print all characters before comma
							currentHTML = currentHTML + contactResps[j];
						}
						currentHTML = currentHTML + "</a>, <a href='#' id='return-resps'>"; // Close anchor tag and open for the next star
						contactResps = contactResps.substring((contactResps.indexOf(",") + 1), contactResps.length) + "</a>"; // Get rid of the star we just printed
					}

					currentHTML = currentHTML + contactResps; // Print the last star in the comma-separated list
			}

			currentHTML = currentHTML + "</span></h3><p id='contact-comments'> Comments: " + contact[index]["comments"];
			currentHTML = currentHTML + "</p></div>";
		
		$("#" + elementID).html(currentHTML); // JQuery method of innerHTML

		if (elementID == "current-contact") { // If you're calling this function for the current contact div, call the other two recursively
			if (index == 0) { prevIndex = (contact.length - 1); } // Check lower edge of array
			else { prevIndex = index - 1; }

			if (index == (contact.length - 1)) { nextIndex = 0; } // Check upper edge of array
			else { nextIndex = index + 1; }

			displaycontact(prevIndex, "prev-contact-preload");
			displaycontact(nextIndex, "next-contact-preload");
		}
	}
	
		

		

	//var i = Math.floor((Math.random() * contact.length));

	displaycontact(i, "current-contact"); // Load a random contact from the array

	var contactForm = function() {
		var mTitle = $("#contact-job").val();
		var timeSpent = $("#contact-year").val();
		var mname = $("#contact-name").val();
		var mresps = $("#contact-resps").val();
		var mpicture = $("#contact-picture").val();
		var mcomments = $("#contact-comments").val();

		stripFormatting(mTitle, timeSpent, mname, mresps, mpicture, mcomments);
		var newcontact = {
			contactTitle: mTitle, 
			releaseDate: timeSpent, 
			name: mname, 
			resps: mresps, 
			pictureURL: mpicture, 
			comments: mcomments,
		};
		contact.push(newcontact);
	}

	var stripFormatting = function(mTitle, timeSpent, mname, mresps, mpicture, mcomments) {
		mTitle = mTitle.replace(/\"/g,""); 
		timeSpent = timeSpent.replace(/\"/g,""); 
		mname = mname.replace(/\"/g,""); 
		mresps = mresps.replace(/\"/g,""); 
		mpicture = mpicture.replace(/\"/g,""); 
		mcomments = mcomments.replace(/\"/g,"");
	}

	var successSubmission = function() {
		var oldHeight = $("#contact-form").style("height");
		var oldWidth  = $("#contact-form").style("width");
		$("#contact-form").css()
	}


	$("#contact-job").bind('keydown', function() {
		if(checkInput("contact-job")) { $(this).css("border", "3px solid #00ef8d"); }
		else { $(this).css("border", "3px solid #e63625"); }
	});

	var errorReport  = new Array(); // Create the report as an array so we can keep the report in the same order when corrected
	
	// Initialize 10 elements of array to false (if false, do not output the error message)
	for (j = 0; j <= 10; j = j + 1) { errorReport[j] = false; }
 	
 	var errors = []; // Array to store each error; 0 = contact Title, 1 = Release Date, 2 = contact name, 3 = resps respss, 
						  	  // 4 = Ratings containing non-numeric characters, 5 = Ratings exceeding 100, 6 = contact picture URL,
						      // 7 = Plot comments

	// No errors to begin with
	for (j = 0; j <= 7; j = j + 1) { errors[j] = false; }

	var checkInput = function(elementID) {
		var valuetoCheck  = document.getElementById(elementID).value; // Create a variable to store the value of input
		var errorsExist   = false;

		var parsedValue   = parseFloat(valuetoCheck); // Parsed Value used to check the ratings (make sure valid int input)
		var removedBlanks = valuetoCheck.replace(/ /, ""); // Removed Blanks created because entering a bunch of spaces still invalid

		// alert(removedBlanks != "");

		errorReport[0] = "<h3 id='errors'>Errors</h3><h5>Please fix the following errors before submitting the form</h5>"

		switch(elementID) {
			case "contact-job":
				if (removedBlanks != "") { // If not-empty
					if (errors[0] != false) { // If once incorrect, fix the BG color and make correct
						document.getElementById("#contact-job-error").className = "valid"; // Valid has styling of green BG (Keeps error message, just changes BG color)
						// alert(document.getElementById("#contact-job-error").className);
						errors[0] = false;
					}
					return true;
				}
				else { // If empty
					document.getElementById("#contact-job-error").innerHTML = "You cannot leave the contact Title blank"; // Error message
					document.getElementById("#contact-job-error").className = "invalid"; // Invalid has styling of red BG
					errors[0] = true;
					errorsExist = true;
					return false;
				}
				break;
		}
	
}


});