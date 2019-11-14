<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Phantom by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
                <nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="{{url('/')}}">Home</a></li>
							<li><a href="generic.html">Check Favorite Team</a></li>
							<li><a href="generic.html">Change Favorite Team</a></li>
							<li><a href="generic.html">Log Out</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Welcome to Football</h1>
								<p>Here is your personal gamecenter for every NFL game going on this week</p>
							</header>
							<section id="test" class="tiles">
									<article v-for="(score, index) in object.scores" class="style2">
										<span class="image">
											<img v-bind:src="'images/' + object.homeTeamAbbrs[index] + '.png'" alt="" />
										</span>
										<a v-bind:href="'/teamstats/' + object.homeTeamAbbrs[index]">
											<h1>
												@{{score}}
											</h1>
										</a>
									</article>
								</section>
						</div>
					</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="./js/vue.js"></script>
        	<script src="./js/main.js"></script>

	</body>
</html>