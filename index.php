<?php
//Scan directory 'nk' and get list of filenames
$dir    = 'nk';
$files = scandir($dir, 1);
$n = sizeof($files)-2;
$files = array_slice($files, 0, $n);
?>
<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>reveal.js - The HTML Presentation Framework</title>

		<meta name="description" content="A framework for easily creating beautiful presentations using HTML">
		<meta name="author" content="Hakim El Hattab">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic,100italic,100' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/reveal.css">
    	<link rel="stylesheet" href="css/theme/black.css" id="theme">
		<!-- Code syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>
        <script type="text/javascript"
            src="https://c328740.ssl.cf1.rackcdn.com/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
        </script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->

		<!-- Plotting scripts and styles -->
		<script src="http://d3js.org/d3.v3.min.js"></script>
		<script src="js/main.js"></script>
		<script type="text/javascript" src="js/plot.js"></script>
		<link rel="stylesheet" href="css/plot.css"/>

	</head>

	<body onload="plotNew()">
	    <div class="sharing">
	        <a class='rg' href='http://www.researchgate.net/profile/Robert_Treharne'></a>
	    <a class='tw' href='https://twitter.com/share?url=http://pvlink.org/TCO&text=Transparent Conductors: Fundamentals and Applications - A presentation by @robtreharne @livuni' target='_blank'> </a>
            </div> 

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
		        <section>
					<section>
						<h1>Transparent conductors</h1>
						<h3>fundamentals and applications</h3>
						<p>
							<small>By <a href="mailto:R.Treharne@liverpool.ac.uk">Robert Treharne</a> / <a href="http://twitter.com/robtreharne">@robtreharne</a></small>
							</p></br>
						<p>
						<small>This talk is available online at:</small></br>
							<a href="#">http://pvlink.org/TCO</a>
						</p>
					</section>
					<section>
						<p>Dr. Robert Treharne works at the Stephenson Institute for Renewable Energy, University of Liverpool.</p>
				    </section>
				</section>

				<section>
                    <h2>outline</h2>
					<ul>
						<li><a href="#/3">Why are Transparent Conductors (TCs) so special?</a></li>
						<li><a href="#/4">How to make a TC</a></li>
						<li>Basic properties</li>
						<li>Origins of opto-electronic behaviour</li>
						<li>Application of TCs</li>
						<li>TCs for thin-film photovoltaics</li>
				    </ul>			
			    </section>
				
			    <section>
					<h2>what's so special about a tc?</h2>
					<p class="fragment">
					   Are you kidding?
					</p>
			    </section>

                <section>
					<div id="plot" class="svg-holder svg-holder-simple"></div>
                    <select id="tf_select" name="tf_select"  onchange="plotNew('nk/'+this.value);">
				        <option value="">Select...</option>
						 <?php
							  $a = $files;
							  foreach($a as $e) {
								echo "<option value='".$e."'>".str_replace(".csv", "", $e)."</option>";
							  }
						?>
                    </select>
                </section>  
			</div>
			<footer><img src="http://cdt-pv.org/img/uol_white.png"></footer>
		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.js"></script>

		<script>

			// Full list of configuration options available at:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,

				transition: 'convex', // none/fade/slide/convex/concave/zoom

				// Optional reveal.js plugins
				dependencies: [
					{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/highlight/highlight.js', async: true, condition: function() { return !!document.querySelector( 'pre code' ); }, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'plugin/zoom-js/zoom.js', async: true },
					{ src: 'plugin/notes/notes.js', async: true }
				]
			});

		</script>

	</body>
</html>
