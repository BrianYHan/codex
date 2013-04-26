$(document).ready(function() {
	var i = 0;

	$("#add-contact-show").bind("click", function() { // Toggles the visibility of the "Add contact" Form
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
		$(this).css("border", "3px solid #EAF28F");
	});

	$("textarea").focus(function() {
		$(this).css("border", "3px solid #EAF28F");
	});

	$("select").focus(function() {
		$(this).css("border", "3px solid #EAF28F");
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

	$("#next-contact-preload").hide(); // Only preload the first and next because of loading time considerations (esp. contact poster)
	$("#prev-contact-preload").hide(); // Only preload the first and next because of loading time considerations (esp. contact poster)

	var dateOptions = "<option value='empty'> </option>"; // This variable will be used to load the HTML inside the select fields (dates 1900-2013) in the Release Date form field

	for(j = 2013; j >= 1900; j = j - 1) { 
		dateOptions = dateOptions + "<option value='" + j + "'>" + j + "</option>"; 
	}

	document.getElementById("contact-year").innerHTML = dateOptions; 
	var contact = [];

	var addcontact = function(mTitle, relDate, mname, mresps, mPoster, mSynopsis) {
		var newcontact = {
			contactTitle: mTitle, 
			releaseDate: relDate, 
			name: mname, 
			resps: mresps, 
			posterURL: 
			mPoster, 
			Synopsis: mSynopsis
		};
			contact.push(newcontact);
	}

	addcontact("Campaign Organizer", "2012", "Megan Hultgrien", "Organizing unions, Leading local charter clubs, Led phonebanks", "../jquery-data-page/images/posters/side-effects.jpg", "He's so awesome. I just want to have his babies.");
	addcontact("Teaching Assistant", "2013", "Kabir Kang", "Assisting Professor during lectures, Exam Grading, ", "../jquery-data-page/images/posters/the-dark-knight-rises.jpg", "Despite his tarnished reputation after the events of The Dark Knight, in which he took the rap for Dent's crimes, Batman feels compelled to intervene to assist the city and its police force which is struggling to cope with Bane's plans to destroy the city.");
	addcontact("Domestic Supervisor", "2012", "Samuel L. Catson", "Cleaning up my poop, Bathing me, Combing me", "../jquery-data-page/images/posters/the-avengers.jpg", "Marvel Studios presents my butthole");
	addcontact("Ted", "2012", "Seth MacFarlane", "Mark Wahlberg, Mila Kunis, Seth MacFarlane", "../jquery-data-page/images/posters/ted.jpg", "John makes a Christmas miracle happen by bringing his one and only friend to life, his teddy bear. The two grow up together and John must then choose to stay with his girlfriend or keep his friendship with his crude and extremely inappropriate teddy bear, Ted.");

	var displaycontact = function(index, elementID) {
		var currentHTML = "<div id='current-left'><img id='current-poster' class='back-shadow' src='" + contact[index]["posterURL"];
			currentHTML = currentHTML + "' alt='" + contact[index]["contactTitle"] + " Poster'/></div><div id='current-right'><h2 id='contact-title'>";
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

			currentHTML = currentHTML + "</span></h3><p id='contact-synopsis'>" + contact[index]["Synopsis"];
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
		var mTitle = $("#contact-title").val();
		var relDate = $("#contact-year").val();
		var mname = $("#contact-name").val();
		var mresps = $("#contact-resps").val();
		var mPoster = $("#contact-poster").val();
		var mSynopsis = $("#contact-synopsis").val();

		stripFormatting(mTitle, relDate, mname, mresps, mPoster, mSynopsis);
		var newcontact = {
			contactTitle: mTitle, 
			releaseDate: relDate, 
			name: mname, 
			resps: mresps, 
			posterURL: mPoster, 
			Synopsis: mSynopsis,
		};
		contact.push(newcontact);
	}

	var stripFormatting = function(mTitle, relDate, mname, mresps, mPoster, mSynopsis) {
		mTitle = mTitle.replace(/\"/g,""); 
		relDate = relDate.replace(/\"/g,""); 
		mname = mname.replace(/\"/g,""); 
		mresps = mresps.replace(/\"/g,""); 
		mPoster = mPoster.replace(/\"/g,""); 
		mSynopsis = mSynopsis.replace(/\"/g,"");
	}

	var successSubmission = function() {
		var oldHeight = $("#contact-form").style("height");
		var oldWidth  = $("#contact-form").style("width");
		$("#contact-form").css()
	}

	// ERROR REPORTING FOR THE FORM (WIP)
	$("#contact-title").bind('keydown', function() {
		// If Valid Input, change border to green
		if(checkInput("contact-title")) { $(this).css("border", "3px solid #00ef8d"); }
		// Else if Invalid (AKA left empty), change border to red and output corresponding errors
		else { $(this).css("border", "3px solid #e63625"); }
	});

	var errorReport  = new Array(); // Create the report as an array so we can keep the report in the same order when corrected
	
	// Initialize 10 elements of array to false (if false, do not output the error message)
	for (j = 0; j <= 10; j = j + 1) { errorReport[j] = false; }
 	
 	var errors = []; // Array to store each error; 0 = contact Title, 1 = Release Date, 2 = contact name, 3 = resps respss, 
						  	  // 4 = Ratings containing non-numeric characters, 5 = Ratings exceeding 100, 6 = contact Poster URL,
						      // 7 = Plot Synopsis

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
			case "contact-title":
				if (removedBlanks != "") { // If not-empty
					if (errors[0] != false) { // If once incorrect, fix the BG color and make correct
						document.getElementById("#contact-title-error").className = "valid"; // Valid has styling of green BG (Keeps error message, just changes BG color)
						// alert(document.getElementById("#contact-title-error").className);
						errors[0] = false;
					}
					return true;
				}
				else { // If empty
					document.getElementById("#contact-title-error").innerHTML = "You cannot leave the contact Title blank"; // Error message
					document.getElementById("#contact-title-error").className = "invalid"; // Invalid has styling of red BG
					errors[0] = true;
					errorsExist = true;
					return false;
				}
				break;
		}
	
}


});