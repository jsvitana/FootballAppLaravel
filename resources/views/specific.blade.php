<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Phantom by HTML5 UP</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
        <link rel="stylesheet" href="/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

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
							<li><a href="{{url('/home')}}">Check Favorite Team</a></li>
							<li><a href="{{url('/')}}">Change Favorite Team</a></li>
							<li><a href="{{url('/')}}">Log Out</a></li>
						</ul>
					</nav>

				<!-- Main -->
                    <div id="main">
                        <div class="inner">
                            <h1 hidden id='team'>{{$num}}</h1>  <!-- I need this here for the javaScript to pull it -->

                            <div class="row" id="FootballData">
                                <!--Clock-->
                                <div class="col s12">
                                    <h6>Time left in the Quarter: @{{ object.clock }}</h6>
                                </div>
                                <!--Down-->
                                <div class="col s12">
                                    <h6>Current Down: @{{ object.down }}</h6>
                                </div>
                                <!--Yards to go-->
                                <div class="col s12">
                                    <h6>Yards to go: @{{ object.togo }}</h6>
                                </div>
                                <!--Name of Teams-->
                                <div class="col s4">
                                    <h5>Away</h5>
                                    <h4>@{{ object.Aname }}</h4>
                                </div>
                                <div class="col s4">
                                    <h3>VS</h3>
                                </div>
                                <div class="col s4">
                                    <h5>Home</h5>
                                    <h4>@{{ object.Hname }}</h4>
                                </div>
                                <!--First Quarter Score-->
                                <div class="col s4">
                                    <h2>@{{ object.AFS }}</h2>
                                </div>
                                <div class="col s4">
                                    <h4>First Quarter Score</h4>
                                </div>
                                <div class="col s4">
                                    <h2>@{{ object.HFS }}</h2>
                                </div>
                                <!--Second Quarter Score-->
                                <div class="col s4">
                                    <h2>@{{ object.ASS }}</h2>
                                </div>
                                <div class="col s4">
                                    <h4>Second Quarter Score</h4>
                                </div>
                                <div class="col s4">
                                    <h2>@{{ object.HSS }}</h2>
                                </div>
                                <!--Third Quarter Score-->
                                <div class="col s4">
                                    <h2>@{{ object.ATS }}</h2>
                                </div>
                                <div class="col s4">
                                    <h4>Third Quarter Score</h4>
                                </div>
                                <div class="col s4">
                                    <h2>@{{ object.HTS }}</h2>
                                </div>
                                <!--Fourth Quarter Score-->
                                <div class="col s4">
                                    <h2>@{{ object.ALS }}</h2>
                                </div>
                                <div class="col s4">
                                    <h4>Fourth Quarter Score</h4>
                                </div>
                                <div class="col s4">
                                    <h2>@{{ object.HLS }}</h2>
                                </div>
                                <!--Total Score-->
                                <div class="col s4">
                                    <h2>@{{ object.AST }}</h2>
                                </div>
                                <div class="col s4">
                                    <h4>Total Score</h4>
                                </div>
                                <div class="col s4">
                                    <h2>@{{ object.HST }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
			</div>

		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
            <script src="/assets/js/main.js"></script>
            <script src="/js/vue.js"></script>
            <script src="/js/SpifMain.js"></script>

	</body>
</html>


  
