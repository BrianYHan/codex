
$(document).ready(function() {
	var i = 0;

	$("#add-movie-show").bind("click", function() { // Toggles the visibility of the "Add Movie" Form
		if ($("#add-movie").css("visibility") == "hidden") {
			$("#add-movie").css("visibility", "visible");
			$("#add-movie").css("display", "block");
			$("#toggle-button").attr("src", "images/graphics/show-less.png");
		}
		else if ($("#add-movie").css("visibility") == "visible") {
			$("#add-movie").css("visibility", "hidden");
			$("#add-movie").css("display", "none");
			$("#toggle-button").attr("src", "images/graphics/show-more.png");
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

	$("#next-movie").bind("click", function() {
		if (i == (movie.length - 1)) {
			i = 0;
		}

		else {
			i = i + 1;
		}
		$("#current-movie").animate({
				opacity: 0
			}, 200, function() {
			displayMovie(i, "current-movie");
		});
		$("#current-movie").animate({
				opacity: 1.00
			}, 300, function() {
		});
	});

	$("#previous-movie").bind("click", function() {
		if (i == 0) {
			i = (movie.length - 1);
		}
		else {
			i = i - 1;
		}
		$("#current-movie").animate({
				opacity: 0
			}, 200, function() {
			displayMovie(i, "current-movie");
		});
		$("#current-movie").animate({
				opacity: 1.00
			}, 300, function() {
		});
	});

	$("#submit-new-movie").bind("click", function() {
		movieForm();
	});

	$("#next-movie-preload").hide(); // Only preload the first and next because of loading time considerations (esp. movie poster)
	$("#prev-movie-preload").hide(); // Only preload the first and next because of loading time considerations (esp. movie poster)

	var dateOptions = "<option value='empty'> </option>"; // This variable will be used to load the HTML inside the select fields (dates 1900-2013) in the Release Date form field

	for(j = 2013; j >= 1900; j = j - 1) { // For 1900-2013...
		dateOptions = dateOptions + "<option value='" + j + "'>" + j + "</option>"; // Create a new HTML option tag for option field
	}

	document.getElementById("movie-year").innerHTML = dateOptions; // Put the options inside of the select tags

	var movie = [];

	var addMovie = function(mTitle, relDate, mDirector, mStarring, yRating, rtcRating, rtaRating, mPoster, mSynopsis) {
		var newMovie = {movieTitle: mTitle, releaseDate: relDate, director: mDirector, starring: mStarring, yourRating: yRating, 
						rtCritics: rtcRating, rtAudience: rtaRating, posterURL: mPoster, Synopsis: mSynopsis};
		movie.push(newMovie);
	}

	addMovie("Side Effects", "2013", "Steven Soderbergh", "Rooney Mara, Channing Tatum, Jude Law, Catherine Zeta-Jones", "80", "85", "76", "../jquery-data-page/images/posters/side-effects.jpg", "Emily Taylor, despite being reunited with her husband from prison, becomes severely depressed with emotional episodes and suicide attempts. Her psychiatrist, Jonathan Banks, after conferring with her previous doctor, eventually prescribes an experimental new medication called Ablixa. The plot thickens when the side effects of the drug lead to Emily killing her husband in a \"sleepwalking\" state. With Emily plea-bargained into mental hospital confinement and Dr. Banks' practice crumbling around him, the case seems closed. However, Dr. Banks cannot accept full responsibility and investigates to clear his name. What follows is a dark quest that threatens to tear what's left of his life apart even as he discovers the diabolical truth of this tragedy.");
	addMovie("The Dark Knight Rises", "2012", "Christopher Nolan", "Christian Bale, Tom Hardy, Joseph Gordon-Levitt, Anne Hathaway", "90", "87", "92", "../jquery-data-page/images/posters/the-dark-knight-rises.jpg", "Despite his tarnished reputation after the events of The Dark Knight, in which he took the rap for Dent's crimes, Batman feels compelled to intervene to assist the city and its police force which is struggling to cope with Bane's plans to destroy the city.");
	addMovie("The Avengers", "2012", "Joss Whedon", "Robert Downey Jr., Mark Ruffalo, Scarlett Johansson, Chris Evans, Chris Hemsworth, Jeremy Renner", "95", "92", "96", "../jquery-data-page/images/posters/the-avengers.jpg", "Marvel Studios presents Marvel's The Avengers-the Super Hero team up of a lifetime, featuring iconic Marvel Super Heroes Iron Man, The Incredible Hulk, Thor, Captain America, Hawkeye and Black Widow. When an unexpected enemy emerges that threatens global safety and security, Nick Fury, Director of the international peacekeeping agency known as S.H.I.E.L.D., finds himself in need of a team to pull the world back from the brink of disaster. Spanning the globe, a daring recruitment effort begins.");
	addMovie("Ted", "2012", "Seth MacFarlane", "Mark Wahlberg, Mila Kunis, Seth MacFarlane", "78", "69", "80", "../jquery-data-page/images/posters/ted.jpg", "John makes a Christmas miracle happen by bringing his one and only friend to life, his teddy bear. The two grow up together and John must then choose to stay with his girlfriend or keep his friendship with his crude and extremely inappropriate teddy bear, Ted.");

	var displayMovie = function(index, elementID) {
		var currentHTML = "<div id='current-left'><img id='current-poster' class='back-shadow' src='" + movie[index]["posterURL"];
			currentHTML = currentHTML + "' alt='" + movie[index]["movieTitle"] + " Poster'/></div><div id='current-right'><h2 id='film-title'>";
			currentHTML = currentHTML + movie[index]["movieTitle"] + "</h2>" + "<h3 id='release-year'>" + movie[index]["releaseDate"] + "</h3>";
			currentHTML = currentHTML + "<h3 id='directed-by'>Directed by: <span class='italics'><a href='#' id='return-director'>";
			currentHTML = currentHTML + movie[index]["director"] + "</a></span></h3><h3 id='starring'>Starring: <span class='italics'>";

			if (movie[index]["starring"].indexOf(",") == -1) { // No comma; therefore, single entry
				currentHTML = currentHTML + "<a href='#' id='return-actor'>" + movie[i]["Starring"] + "</a>";
			}
			else if (movie[index]["starring"].indexOf(",") > -1) { // Else there is commas, parse the actors
				var movieStars = movie[index]["starring"]; // Create a variable so we can delete parts of the starring attribute without affecting original
				currentHTML = currentHTML + "<a href='#' id='return-actor'>";
					while (movieStars.indexOf(",") > -1) { // While we still have commas
						for(j = 0; j < movieStars.indexOf(","); j = j + 1) { // Go through and print all characters before comma
							currentHTML = currentHTML + movieStars[j];
						}
						currentHTML = currentHTML + "</a>, <a href='#' id='return-actor'>"; // Close anchor tag and open for the next star
						movieStars = movieStars.substring((movieStars.indexOf(",") + 1), movieStars.length) + "</a>"; // Get rid of the star we just printed
					}

					currentHTML = currentHTML + movieStars; // Print the last star in the comma-separated list
			}

			currentHTML = currentHTML + "</span></h3><div id='ratings'><div id='my-rating'>" + movie[index]["yourRating"] + "</div>"
			currentHTML = currentHTML + "<div id='rotten-critics'>" + movie[index]["rtCritics"] + "</div><div id='rotten-audience'>"
			currentHTML = currentHTML + movie[index]["rtAudience"] + "</div></div><br/><p id='film-synopsis'>" + movie[index]["Synopsis"];
			currentHTML = currentHTML + "</p></div>";
		
		$("#" + elementID).html(currentHTML); // JQuery method of innerHTML

		if (elementID == "current-movie") { // If you're calling this function for the current movie div, call the other two recursively
			if (index == 0) { prevIndex = (movie.length - 1); } // Check lower edge of array
			else { prevIndex = index - 1; }

			if (index == (movie.length - 1)) { nextIndex = 0; } // Check upper edge of array
			else { nextIndex = index + 1; }

			displayMovie(prevIndex, "prev-movie-preload");
			displayMovie(nextIndex, "next-movie-preload");
		}

		var myRateScore     = movie[index]["yourRating"];
		var rtCriticScore   = movie[index]["rtCritics"];
		var rtAudienceScore = movie[index]["rtAudience"];

		if      (myRateScore >= 90)                             { $("#my-rating").css("background-position",  "-26px -40px"); }
		else if (myRateScore < 90 && myRateScore >= 80)         { $("#my-rating").css("background-position", "-117px -40px"); } 
		else if (myRateScore < 80 && myRateScore >= 70)         { $("#my-rating").css("background-position", "-208px -40px"); } 
		else if (myRateScore < 70 && myRateScore >= 60)         { $("#my-rating").css("background-position", "-299px -40px"); }
		else if (myRateScore < 60 && myRateScore >= 50)         { $("#my-rating").css("background-position", "-390px -40px"); } 
		else if (myRateScore < 50 && myRateScore >= 0)          { $("#my-rating").css("background-position", "-481px -40px"); } 

		if      (rtCriticScore >= 90)                           { $("#rotten-critics").css("background-position",  "-26px -129px"); }
		else if (rtCriticScore < 90 && rtCriticScore >= 80)     { $("#rotten-critics").css("background-position", "-117px -129px"); } 
		else if (rtCriticScore < 80 && rtCriticScore >= 70)     { $("#rotten-critics").css("background-position", "-208px -129px"); } 
		else if (rtCriticScore < 70 && rtCriticScore >= 60)     { $("#rotten-critics").css("background-position", "-299px -129px"); }
		else if (rtCriticScore < 60 && rtCriticScore >= 50)     { $("#rotten-critics").css("background-position", "-390px -129px"); } 
		else if (rtCriticScore < 50 && rtCriticScore >= 0)      { $("#rotten-critics").css("background-position", "-481px -129px"); }

		if      (rtAudienceScore >= 90)                         { $("#rotten-audience").css("background-position",  "-26px -218px"); }
		else if (rtAudienceScore < 90 && rtAudienceScore >= 80) { $("#rotten-audience").css("background-position", "-117px -218px"); } 
		else if (rtAudienceScore < 80 && rtAudienceScore >= 70) { $("#rotten-audience").css("background-position", "-208px -218px"); } 
		else if (rtAudienceScore < 70 && rtAudienceScore >= 60) { $("#rotten-audience").css("background-position", "-299px -218px"); }
		else if (rtAudienceScore < 60 && rtAudienceScore >= 50) { $("#rotten-audience").css("background-position", "-390px -218px"); } 
		else if (rtAudienceScore < 50 && rtAudienceScore >= 0)  { $("#rotten-audience").css("background-position", "-481px -218px"); }

		

	}

	//var i = Math.floor((Math.random() * movie.length));

	displayMovie(i, "current-movie"); // Load a random movie from the array

	var movieForm = function() {
		var mTitle = $("#movie-title").val();
		var relDate = $("#movie-year").val();
		var mDirector = $("#movie-director").val();
		var mStarring = $("#movie-starring").val();
		var yRating = $("#your-rating").val();
		var rtcRating = $("#rt-critics").val();
		var rtaRating = $("#rt-audience").val();
		var mPoster = $("#movie-poster").val();
		var mSynopsis = $("#movie-synopsis").val();

		stripFormatting(mTitle, relDate, mDirector, mStarring, yRating, rtcRating, rtaRating, mPoster, mSynopsis);
		var newMovie = {movieTitle: mTitle, releaseDate: relDate, director: mDirector, starring: mStarring, yourRating: yRating, 
						rtCritics: rtcRating, rtAudience: rtaRating, posterURL: mPoster, Synopsis: mSynopsis};
		movie.push(newMovie);
	}

	var stripFormatting = function(mTitle, relDate, mDirector, mStarring, yRating, rtcRating, rtaRating, mPoster, mSynopsis) {
		mTitle = mTitle.replace(/\"/g,""); 
		relDate = relDate.replace(/\"/g,""); 
		mDirector = mDirector.replace(/\"/g,""); 
		mStarring = mStarring.replace(/\"/g,""); 
		yRating = yRating.replace(/\"/g,""); 
		rtcRating = rtcRating.replace(/\"/g,""); 
		rtaRating = rtaRating.replace(/\"/g,""); 
		mPoster = mPoster.replace(/\"/g,""); 
		mSynopsis = mSynopsis.replace(/\"/g,"");
	}

	var successSubmission = function() {
		var oldHeight = $("#movie-form").style("height");
		var oldWidth  = $("#movie-form").style("width");
		$("#movie-form").css()
	}

	// ERROR REPORTING FOR THE FORM (WIP)
	$("#movie-title").bind('keydown', function() {
		// If Valid Input, change border to green
		if(checkInput("movie-title")) { $(this).css("border", "3px solid #00ef8d"); }
		// Else if Invalid (AKA left empty), change border to red and output corresponding errors
		else { $(this).css("border", "3px solid #e63625"); }
	});

	var errorReport  = new Array(); // Create the report as an array so we can keep the report in the same order when corrected
	
	// Initialize 10 elements of array to false (if false, do not output the error message)
	for (j = 0; j <= 10; j = j + 1) { errorReport[j] = false; }
 	
 	var errors = []; // Array to store each error; 0 = Movie Title, 1 = Release Date, 2 = Movie Director, 3 = Starring Actors, 
						  	  // 4 = Ratings containing non-numeric characters, 5 = Ratings exceeding 100, 6 = Movie Poster URL,
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
			case "movie-title":
				if (removedBlanks != "") { // If not-empty
					if (errors[0] != false) { // If once incorrect, fix the BG color and make correct
						document.getElementById("#movie-title-error").className = "valid"; // Valid has styling of green BG (Keeps error message, just changes BG color)
						// alert(document.getElementById("#movie-title-error").className);
						errors[0] = false;
					}
					return true;
				}
				else { // If empty
					document.getElementById("#movie-title-error").innerHTML = "You cannot leave the Movie Title blank"; // Error message
					document.getElementById("#movie-title-error").className = "invalid"; // Invalid has styling of red BG
					errors[0] = true;
					errorsExist = true;
					return false;
				}
				break;
		}
	}

	$("#about-my-rating").css("")
 
});