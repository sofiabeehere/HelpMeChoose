<!DOCTYPE html>
<head>

	<title> HelpMeChoose | Browse Programs </title>

	<!-- Import CSS Stylesheet -->
	<link rel="stylesheet" href="../css/main.css">

	<!-- Import JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

	<header>  
		<img src = "../img/logo.svg">
		<div class = "site-search-bar">
			<input type = "text" name = "site-search-bar" placeholder = "Search entire site">
			<img src = "../img/search.png">
		</div>
		<img src = "../img/profile-icon.png" class = "profile-btn">
	</header>

	<div class="programs-parallax" style = " background-image: linear-gradient(0deg,rgba(72, 179, 197, 0.5),rgba(72, 179, 197, 0.5)),url(../img/programs/env-sci.png);"></div>

	<div class = "program-heading">
		<h2> ENVIRONMENTAL SCIENCE </h2>
		<h3> Simon Fraser University </h3>
	</div>

	<div class = "main-program-content">

		<div class = "breadcrumbs">

			<!-- TODO: Include breadcrumb links -->

		</div>
		
		<section id="program-desc" data-anchor="program-desc">
			<h4> PROGRAM DESCRIPTION </h4>

			<p> The only degree of its kind in Canada, graduates of the Bachelor of Environment will gain a good scientific understanding of environmental processes and the social, political and institutional frameworks in which environmental issues are considered. This broad foundation is achieved through an interdisciplinary approach that exposes students to learning opportunities in a variety of departments both within and outside of the Faculty of Environment. </p>

		</section>

		<section id="program-info" data-anchor="program-info">
			<h4> PROGRAM INFORMATION </h4>

			<table style="width:100%">
				<tr>
					<th>Campus:</th>
					<td>Burnaby, BC</td>
					<th>Co-op:</th>
					<td>Yes</td>
				</tr>
				<tr>
					<th>Faculty:</th>
					<td>Faculty of Environment</td>
					<th>Honours:</th>
					<td>No</td>
				</tr>
				<tr>
					<th>Credentials:</th>
					<td>BA or BSc Degree</td>
					<th>Tuition Fee:</th>
					<td>$184 / Credit</td>
				</tr>
				<tr>
					<th>Length:</th>
					<td>4 years</td>
				</tr>
			</table>


		</section>

		<section id="course-details" data-anchor="course-details">
			<h4> COURSE DETAILS </h4>

			<div class = "tab-container">
				<div class="tab">
					<button class="tablinks" style = "border-bottom: solid 0.5px #A1D3CC; border-top-left-radius: 10px;" onclick="openYear(event, 'Year-1')" id="defaultOpen">YEAR 1</button>
					<button class="tablinks" style = "border-bottom: solid 0.5px #A1D3CC;" onclick="openYear(event, 'Year-2')">YEAR 2</button>
					<button class="tablinks" style = "border-bottom: solid 0.5px #A1D3CC;" onclick="openYear(event, 'Year-3')">YEAR 3</button>
					<button class="tablinks" style = "border-bottom-left-radius: 10px;" onclick="openYear(event, 'Year-4')">YEAR 4</button>
				</div>

				<div id="Year-1" class="tabcontent">
					<div class = "term-1">
						<h5>TERM 1</h5>
						<ul>
							<li> ENV 100 - Great Ideas in Environment (3) </li>
							<li> ENV 197 - Environment Seminar I (1) </li>
							<li> ENV 198 - Environment Seminar II (1) </li>
							<li> ENV 199 - Special Topics in Environment (3) </li>
						</ul>
					</div>
					
					<div class = "term-2">
					<h5> TERM 2 </h5>
					<ul>
						<li> ENV 100 - Great Ideas in Environment (3) </li>
						<li> ENV 197 - Environment Seminar I (1) </li>
						<li> ENV 198 - Environment Seminar II (1) </li>
						<li> ENV 199 - Special Topics in Environment (3) </li>
					</ul>
					</div>
				</div>

				<div id="Year-2" class="tabcontent">
					<h5>YEAR 2</h5>
				</div>

				<div id="Year-3" class="tabcontent">
					<h5>YEAR 3</h5>
				</div>

				<div id="Year-4" class="tabcontent">
					<h5>YEAR 4</h5>
				</div>
			</div>

		</section>

		<section id="project-examples" data-anchor="project-examples" style = "padding-top: 15em;">
			<h4> PROJECT EXAMPLES </h4>

			<section class = "content" id = "search-results">
			<div class = "project-card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<div>
						<h4> [COURSE CODE] </h4>
						<h4> [COURSE NAME] </h4>
						</div>
					</figcaption>
				</figure>
			</div>

			<div class = "project-card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<div>
						<h4> [COURSE CODE] </h4>
						<h4> [COURSE NAME] </h4>
						</div>
					</figcaption>
				</figure>
			</div>

			<div class = "project-card">
				<figure>
					<img src = "http://via.placeholder.com/207x195">
					<figcaption>
						<div>
						<h4> [COURSE CODE] </h4>
						<h4> [COURSE NAME] </h4>
						</div>
					</figcaption>
				</figure>
			</div>
			</section>

		</section>

		<section id="program-reqs" data-anchor="program-reqs">
			<h4> PROGRAM REQUIREMENTS </h4>

			<div class = "tab-container">
				<div class="tab">
					<button class="reqtablinks" style = "border-bottom: solid 0.5px #A1D3CC; border-top-left-radius: 10px;" onclick="openReq(event, 'Grade-12')" id="defaultReqOpen">GRADE 12</button>
					<button class="reqtablinks" style = "border-bottom: solid 0.5px #A1D3CC;" onclick="openReq(event, 'Grade-11')">GRADE 11</button>
					<button class="reqtablinks" style = "border-bottom: solid 0.5px #A1D3CC;" onclick="openReq(event, 'General')">GENERAL</button>
					<button class="reqtablinks" style = "border-bottom-left-radius: 10px;" onclick="openReq(event, 'English')">ENGLISH</button>
				</div>

				<div id="Grade-12" class="reqtabcontent">
					<ul>
						<li> <h5>English 5</h5> (or Français langue première 11)</li>
						<li> <h5>Language 11</h5> (or Language Beginner, American Sign, Language 12 courses)</li>
						<li> <h5>Science 11</h5> </li>
						<li> <h5>Foundations of Mathematics 11</h5> </li>
					</ul>
				</div>

				<div id="Grade-11" class="reqtabcontent">
					<h5>YEAR 2</h5>
				</div>

				<div id="General" class="reqtabcontent">
					<h5>YEAR 3</h5>
				</div>

				<div id="English" class="reqtabcontent">
					<h5>YEAR 4</h5>
				</div>
			</div>

		</section>

		<section id="career-options" data-anchor="career-options" style = "padding-top: 15em;">
			<h4> CAREER OPTIONS </h4>

			<div class = "careers-container">
				<div>
				<ul>
					<li> Environmental managers </li>
					<li> Conservation officers </li>
					<li> Compliance coordinators </li>
					<li> Environmental planners </li>
				</ul>
				</div>
				<div>
				<ul>
					<li> GIS specialists </li>
					<li> Restoration ecology professionals </li>
					<li> Business development managers </li>
					<li> Urban planners </li>
				</ul>
				</div>
			</div>

		</section>

		<section id="rel-programs" data-anchor="rel-programs" style = "padding-top: 9em;">
			<h4> RELATED PROGRAMS </h4>

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
			</section>

		</section>

		<a href = "../browse-programs.php">
		<button class = "browse-more"> BROWSE MORE PROGRAMS </button>
		</a>

	</div>

	<nav class = "progress-sidebar">

		<a href="#" data-scroll="program-desc">PROGRAM DESCRIPTION</a>

		<a href="#" data-scroll="program-info">PROGRAM INFORMATION</a>
		    
		<a href="#" data-scroll="project-examples">PROJECT EXAMPLES</a>
		    
		<a href="#" data-scroll="project-reqs">PROGRAM REQUIREMENTS</a>

	</nav>

	<script src = "../js/tabs.js"></script>
	<script>

		$('.progress-sidebar').on('click', function() {

		var scrollAnchor = $(this).attr('data-scroll'),
		scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top - 28;

		$('body,html').animate({
		scrollTop: scrollPoint
		}, 500);

		return false;

		})


		$(window).scroll(function() {
		var windscroll = $(window).scrollTop();
		if (windscroll >= 100) {
		$('.progress-sidebar').addClass('fixed');
		$('.main-program-content section').each(function(i) {
		    if ($(this).position().top <= windscroll - 20) {
		        $('.progress-sidebar a.active').removeClass('active');
		        $('.progress-sidebar a').eq(i).addClass('active');
		    }
		});

		} else {

		$('.progress-sidebar').removeClass('fixed');
		$('.progress-sidebar a.active').removeClass('active');
		$('.progress-sidebar a:first').addClass('active');
		}

		}).scroll();


	</script>

</body>
</html>

