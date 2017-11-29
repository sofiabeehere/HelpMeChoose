<!doctype html>
<head>

	<title> HelpMeChoose | Browse Programs </title>

	<!-- Import CSS Stylesheet -->
	<link rel="stylesheet" href="css/main.css">

	<!-- Import JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

	<header>  
		<h1> helpmechoose</h1>
		<nav>
			<!-- TO-DO: Define/discuss navigation menu... Is there still a login functionality? -->
		</nav>
	</header>

	<div class = "parallax-banner">

	<div class = "main">

	<h2> BROWSE PROGRAMS </h2>

	<div class = "container">

		<form class = "content" id = "filter-programs" name = "filter-programs">
			
			<h3> SEARCH FOR </h3>
			<div class = "search-container">
				<input type = "text" class = "search-bar" name = "search_bar" placeholder = "programs / school">
				<img src = "img/search.png">
			</div>

			<h3> FILTER </h3>

			<div class = "filter-dropdowns-container">

				<div class = "filter-dropdown">
				
					<button type = "button" onclick = "toggleDropdown(this)" class = "dropdown-btn"> 

						CREDENTIALS 

						<img src = "img/arrow.png" class = "dropdown-arrow">

					</button>
					
					<div class = "dropdown-content">
						<ul class = "checkbox-values">
							<li><input type = "checkbox" name = "credential_certificate">
							<label for = "credential_certificate"> Certificate </label></li>
							<li><input type = "checkbox" name = "credential_degree">
							<label for = "credential_degree"> Degree </label></li>
							<li><input type = "checkbox" name = "credential_diploma">
							<label for = "credential_diploma"> Diploma </label></li>
							<li><input type = "checkbox" name = "credential_noncred">
							<label for = "credential_noncred"> Non-Credential </label></li>
						</ul>
					</div>

				</div>

				<div class = "filter-dropdown">

					<button type = "button" onclick = "toggleDropdown(this)" class = "dropdown-btn"> 

						LOCATION 

						<img src = "img/arrow.png" class = "dropdown-arrow">

					</button>
					
					<div class = "dropdown-content">
						<ul class = "checkbox-values">
							<li><input type = "checkbox" name = "location_burnaby">
							<label for = "location_burnaby"> Burnaby </label></li>
							<li><input type = "checkbox" name = "location_okanagan">
							<label for = "location_okanagan"> Okanagan </label></li>
							<li><input type = "checkbox" name = "location_vancouver">
							<label for = "location_vancouver"> Vancouver </label></li>
							<li><input type = "checkbox" name = "location_surrey">
							<label for = "location_surrey"> Surrey </label></li>
							<li><input type = "checkbox" name = "location_victoria">
							<label for = "location_victoria"> Victoria </label></li>

						</ul>
					</div>

				</div>

				<div class = "filter-dropdown">

					<button type = "button" onclick = "toggleDropdown(this)" class = "dropdown-btn"> 

						PROGRAM LENGTH

						<img src = "img/arrow.png" class = "dropdown-arrow">

					</button>

					<div class = "dropdown-content">
						<ul class = "checkbox-values">
							<li><input type = "checkbox" name = "prgm_length_less1yr">
							<label for = "prgm_length_less1yr"> Less than 1 year </label></li>
							<li><input type = "checkbox" name = "prgm_length_1to2yr">
							<label for = "prgm_length_1to2yr"> 1 - 2 years </label></li>
							<li><input type = "checkbox" name = "prgm_length_more2yrs">
							<label for = "prgm_length_more2yrs"> 2+ years </label></li>
							<li><input type = "checkbox" name = "prgm_length_pt">
							<label for = "prgm_length_pt"> Part-Time </label></li>
						</ul>
					</div>

				</div>

				<div class = "filter-dropdown">

					<button type = "button" onclick = "toggleDropdown(this)" class = "dropdown-btn"> 

						TUITION FEES (PER CREDIT)

						<img src = "img/arrow.png" class = "dropdown-arrow">

					</button>

					<!-- TO-DO: slider for tuition fees -->
					<div id="tuition-slider">
						<p> Less than $50 </p>
					 	<input type="range" min="0" max="100" value="50" class="slider" id="tuitionSlider" name = "tuition-slider">
					 	<p> $200+ </p>
					 	<label for = "tuition-slider" style = "width: 100%;
	    text-align: center;"> <span id = "tuition-value"> [display choice] </span> </label>
					</div>

				</div>

				<div class = "filter-dropdown">
				
					<button type = "button" onclick = "toggleDropdown(this)" class = "dropdown-btn"> 

						FIELD OF STUDY

						<img src = "img/arrow.png" class = "dropdown-arrow">

					</button>

					<div class = "dropdown-content">
						<ul class = "checkbox-values">
							<li><input type = "checkbox" name = "field_apsci">
							<label for = "field_apsci"> Applied Sciences </label></li>
							<li><input type = "checkbox" name = "field_arch">
							<label for = "field_arch"> Architecture </label></li>
							<li><input type = "checkbox" name = "field_arts">
							<label for = "field_arts"> Arts </label></li>
							<li><input type = "checkbox" name = "field_bus">
							<label for = "field_bus"> Business </label></li>
							<li><input type = "checkbox" name = "field_cmns">
							<label for = "field_cmns"> Communications </label></li>
							<li><input type = "checkbox" name = "field_den">
							<label for = "field_den"> Dentiistry </label></li>
							<li><input type = "checkbox" name = "field_educ">
							<label for = "field_educ"> Education </label></li>
							<li><input type = "checkbox" name = "field_env">
							<label for = "field_env"> Environmenal Sciences </label></li>
							<li><input type = "checkbox" name = "field_hsci">
							<label for = "field_hsci"> Health Sciences </label></li>
							<li><input type = "checkbox" name = "field_kin">
							<label for = "field_kin"> Kinesiology </label></li>
							<li><input type = "checkbox" name = "field_law">
							<label for = "field_law"> Law </label></li>
							<li><input type = "checkbox" name = "field_med">
							<label for = "field_med"> Medicine </label></li>
							<li><input type = "checkbox" name = "field_mus">
							<label for = "field_mus"> Music </label></li>
							<li><input type = "checkbox" name = "field_nurs">
							<label for = "field_nurs"> Nursing </label></li>
							<li><input type = "checkbox" name = "field_pharm">
							<label for = "field_pharm"> Pharmaceutical Studies </label></li>
							<li><input type = "checkbox" name = "field_sci">
							<label for = "field_sci"> Sciences </label></li>
						</ul>

					</div>

				</div>
			
			</div>

		</form>

		<section class = "content" id = "search-results">
			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

			<div class = "card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<h4> [PROGRAM TITLE] </h4>
						<p> [SCHOOL NAME] </p>
						<button type = "button" class = "compare-btn"> ADD TO COMPARE </button>
					</figcaption>
				</figure>
			</div>

		</section>

		</div>

	</div>

<?php
    

?>

<script type="text/javascript">

function toggleDropdown(t) {
	$(t).siblings(".dropdown-content").toggle();
	$(t).children(".dropdown-arrow").toggleClass('rotate');
	$(t).toggleClass('hide-border');
}

</script>

</body>
</html>