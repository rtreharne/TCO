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
		<?php include_once("head.html"); ?>
	</head>

	<body onload="plotNew()">

	    <div class="sharing">
	        <a class='rg' href='http://www.researchgate.net/profile/Robert_Treharne'></a>
	    	<a class='tw' href='https://twitter.com/share?url=http://pvlink.org/TCO&text=Transparent Conductors: Fundamentals and Applications - A presentation by @robtreharne @livuni' target='_blank'> </a>
        </div> 

		<div  class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
				
		        <section id="title">
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
						<p>
						   Dr. Robert Treharne works at the Stephenson Institute for Renewable Energy, University of Liverpool.
						</p>
				    </section>
					
				</section>

				<section>
                    <h2>outline</h2>
					<ul>
						<li><a href="#/special">Why are Transparent Conductors (TCs) so special?</a></li>
						<li><a href="#/bandc">Energy bands and conductivity</a></li>
						<li><a href="#/dielectric_function">The Dielectric Function</a></li>
						<li><a href="#/transitions">Band Transitions</a></li>
						<li><a href="#/make">How to make a TC</a></li>
						<li><a href="#/PV">TCs for Photovoltaics</a></li>
						<li><a href="#/other_apps">Other Applications</a></li>
						<li><a href="#/my_research">My Research</a></li>
				    </ul>			
			    </section>
				
				<section>

			        <section id="special">
				    	<h2>what's so special about a tc?</h2>
						<p class="fragment">
						   Are you kidding?
						</p>
				    </section>

					<section>
					    <a href="https://www.youtube.com/watch?v=4bX5pyxJ3wA" target="_blank"><img src="img/minority.jpg"></a>
					    <p class="fragment">
							TCs are effectively metals you can see through.
					    </p>
						<p class="fragment">
						    That's crazy!
					    <p>

					</section>

				    <section style="font-size: 0.7em;">
					    <div style="color:#ff4141;" class="split">
							<h3>metals</h3>
						    <ul>
							    <li>Highly conductive</li>
							    <li>$$\rho\sim10^{-6}\, \Omega\mathrm{.cm}$$</li>
							    <li>$$n_e\sim10^{23}\, \mathrm{cm}^{-3}$$</li>
								<hr>
								<li>Highly reflective</li>
								<li>Free electron absorption</li>
							</ul>
						</div>
						<div style="color:#7ACCFF;" class="split fragment">
						    <h3>insulators</h3>
							<ul>
							    <li>Highly resistive</li>
							    <li>$$\rho\sim10^{14}\textrm{-}10^{19}\, \Omega\mathrm{.cm}$$</li>
								<li>No free electrons</li>
							    <hr>
								<li>Highly transparent</li>
								<li><u>Band gap!</u></li>
								<br><br>
							</ul>
						</div>
						<div class="fragment" style="color:#c072ff">
						<h3>Transparent Conductors</h3>
						    <ul>
							    <li>Highly conductive</li>
								<li>\(\rho\sim10^{-4}\, \Omega\textrm{.cm}\)</li>
								<li>\(n_e\sim10^{20}\textrm{-}10^{21}\, \textrm{cm}^{2}\)</li>
								<hr>
								<li>Highly transparent (in visible)</li>
								<li>Free electron absorbtion </li>
								<li>Band gap</li>
							</ul>
						</div>
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

			    </section>

				<section id="band">
					
                    <section>
					    <h2>Energy bands and conductivity</h2>
				    </section>

					<section>
						<a href="img/bands.png" target="_blank"><img src="img/bands.png"></a>
					</section> 

				</section>

				<section>
					
					<section id="dielectric_function">
					    <h2>The Dielectric Function</h2>
				    </section>
					
					<section>
						<a href="img/lorenz.jpg" target="_blank"><img src="img/lorenz.jpg"></a>
					</section> 

                    <section>
						<a href="img/lorenz_t.jpg" target="_blank"><img src="img/lorenz_t.jpg"></a>
					</section> 
					
					<section>
						<a href="img/drude_1.jpg" target="_blank"><img src="img/drude_1.jpg"></a>
					</section> 

					<section>
					    <div class="img_shell_3">
						<a href="img/drude_1a.jpg" target="_blank"><img src="img/drude_1a.jpg"></a>
						<a href="img/drude_1b.jpg" target="_blank"><img src="img/drude_1b.jpg"></a>
						<a href="img/drude_1c.jpg" target="_blank"><img src="img/drude_1c.jpg"></a>
						</div>
					</section>

					<section>
						<a href="img/drude_2.jpg" target="_blank"><img src="img/drude_2.jpg"></a>
					</section>

				</section>

				<section id="transitions">
					
					<section>
					    <h2>Band Transitions</h2>
				    </section>
					
					<section>
					    <div class="img_shell_2">
						<a href="img/direct_1a.jpg" target="_blank"><img src="img/direct_1a.jpg"></a>
						<a href="img/direct_1b.jpg" target="_blank"><img src="img/direct_1b.jpg"></a>
						</div>
						<div class="split">
						    <p>Nice parabolic onset of \(\varepsilon_2\) at \(E_G\).</p>
						</div>
						<div class="split">
						    <p>Manifests as sharp cut-off in transmittance at \(E_G\).</p>
						</div>
					</section>
					
					<section>
					    <div class="img_shell_2">
						<a href="img/direct_2a.jpg" target="_blank"><img src="img/direct_2a.jpg"></a>
						<a href="img/direct_2b.jpg" target="_blank"><img src="img/direct_2b.jpg"></a>
						</div>
						<div class="split">
						    <p>#</p>
						</div>
						<div class="split">
						    <p>#</p>
						</div>
					</section>

					<section>
					    <div class="img_shell_2">
						<a href="img/urbach_a.jpg" target="_blank"><img src="img/urbach_a.jpg"></a>
						<a href="img/urbach_b.jpg" target="_blank"><img src="img/urbach_b.jpg"></a>
						</div>
						<div class="split">
						    <p>#</p>
						</div>
						<div class="split">
						    <p>#</p>
						</div>
					</section>


				</section>

				<section id="make">
					
					<section>
					    <h2>How to make a TCO</h2>
				    </section>

					<section>
                        <ul class="gallery2">
						    <li>
							    <a href=""><img src="img/sputtering.jpg"></a>
								<p>Magnetron Sputtering</p>
						    </li>
						    <li>
							    <a href=""><img src="img/cvd.jpg"></a>
								<p>Chemical Vapor Deposition (CVD)</p>
						    </li>
                        </ul>
					    <ul class="gallery">
							<li>
								<a href=""><img src="img/pld.jpg"></a>
								<p>PLD</p>
							</li>
							<li>
								<a href=""><img src="img/ald.jpg"></a>
								<p>ALD</p>
							</li>
							<li>
								<a href=""><img src="img/mocvd.jpg"></a>
								<p>MOCVD</p>
							</li>
							<li>
								<a href=""><img src="img/ebe.jpg"></a>
								<p>EBE</p>
							</li>
							<li>
								<a href=""><img src="img/solgel.jpg"></a>
								<p>Sol-Gel</p>
							</li>
						</ul>
				    </section>

				</section>

				<section id="PV">
					
					<section>
					    <h2>TCs for Photovoltaics</h2>
				    </section>

				</section>
				
				<section id="other_apps">
					
					<section>
					    <h2>Other Applications</h2>
				    </section>

				</section>

				<section>
					
					<section id="my_research">
					    <h2>My Research</h2>
				    </section>

				</section>

				<section>
					
								    <h2>My Research</h2>
				    </section>

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
