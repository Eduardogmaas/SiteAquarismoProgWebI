<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Search results</title>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	 <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
	 <script type="text/javascript" src="js/jquery.responsivemenu.js"></script>
	 <script src="search/search.js"></script>
	<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
    <!--[if lt IE 9]>
   	<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body>
<div class="main">
	 <nav>
		  <div class="container_12">
				<ul class="sf-menu">
					 <li class="sf-with-ul"><a href="index.html">home</a>
						  <ul>
								 <li><a href="#">Annual Passes</a></li>
								 <li><a href="#">Oceans Society</a></li>
								 <li><a href="#">Sponsors</a>
									 <ul>
										  <li><a href="#">Aquarium Events</a></li>
										  <li><a href="#">Neon Tetras</a></li>
										  <li><a href="#">Mollies</a></li>
										  <li class="bd_none"><a href="#">Species</a></li>
									 </ul>
								 </li>
								 <li class="bd_none"><a href="#">Swordtails</a></li>
						  </ul>
					 </li>
					 <li><a href="index-1.html">about</a></li>
					 <li><a href="index-2.html">photos</a></li>
					 <li><a href="index-3.html">club info</a></li>
					 <li><a href="index-4.html">fish</a></li>
					 <li><a href="index-5.html">contact us</a></li>
				</ul>
				<form id="search" action="search.php" method="GET" accept-charset="utf-8">
					 <input type="text" name="s" />
					 <a onclick="document.getElementById('search').submit()"></a>
				 </form>
				<div class="clear"></div>
		  </div>
	 </nav>
	 <div class="container_12">
	 <!--==============================header=================================-->
		  <header>
				<h1><a class="logo" href="index.html">Aquamarine</a></h1>
				<div class="social">
					 <a href="#" title="Facebook"><img src="images/soc1.png" width="23" height="46" alt=""></a>
					 <a href="#" title="RSS"><img src="images/soc2.png" width="23" height="46" alt=""></a>
					 <a href="#" title="Google +"><img src="images/soc3.png" width="23" height="46" alt=""></a>
					 <a href="#" title="Twitter"><img src="images/soc4.png" width="23" height="46" alt=""></a>
				 </div>
		  </header>
	 <!--==============================content================================-->
		  <section id="content">
				<div class="container_12">
						<div class="wrapper">
								<article class="grid_12">
									<h2 class="last">Search result:</h2>
									<div id="search-results"></div>
								</article>
						</div>
				</div>
		  </section>
	 </div>
	 <!--==============================footer=================================-->
	 <footer>
		  Aquamarine &nbsp;&copy; 2012&nbsp; |&nbsp;  <a href="index-6.html">Privacy Policy</a>
	 </footer>
</div>
</body>
</html>