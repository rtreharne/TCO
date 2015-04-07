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
    <div id="header">
			<a href="#"></a>
			<div class="sharing">
				<a class='fb' target='_blank' href='https://www.researchgate.net/profile/Robert_Treharne'> </a>
				<a class='tw' href='https://twitter.com/share?url=http://pvlink.org/TCO&text=Transparent Conductors: Fundamentals and Applications. A presentation by @robtreharne #TCO #PV' target='_blank'> </a>
			</div>
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

				</section>

				<section>
                    <h2>outline</h2>
					<ul>
						<li><a href="#/special">What is a TC? (and why are they special?)</a></li>
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
				    	<h2>What is a TC?</h2>
						<h4>And why are they special?<h4>
				    </section>

					<section>
						<p style="font-size: 1.3em;">
							<font style="1.5em">TCs are effectively metals you can see through.</font>
					    </p>
						<p class="fragment">
						   That's insane! But why?
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
								<li>Free electron absorption </li>
								<li>Band gap</li>
							</ul>
						</div>
					</section>

					<!---<section>
						<div style="width: 900px; margin: 0 auto;">
						<iframe width="560" height="400" src="https://www.youtube.com/embed/U-8NRaL5WzE" frameborder="0" allowfullscreen></iframe>
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
					</section> --> 

					<section>
					    <div class="img_shell_3">
						<a href="img/bands_a.png" target="_blank"><img src="img/bands_a.png"></a>
						<a href="img/bands_b.png" target="_blank"><img src="img/bands_b.png"></a>
						<a href="img/bands_c.png" target="_blank"><img src="img/bands_c.png"></a>
						</div>
						<ol type="a">
						    <li>Classic insulator. Fermi level at mid-gap position.</li>
							<li>Introduce states below C.B. e.g. native defects, extrinsic doping.</li>
							<li>Beyond critical level, C.B begins to fill.</li>
						</ol>
					</section>

			    </section>

				<section>
					
					<section id="dielectric_function">
					    <h2>The Dielectric Function</h2>
						<p class="fragment">
						    $$\varepsilon = \varepsilon_1 - i\varepsilon_2$$
					    </p>
				    </section>
					
					<section id="dielectric_function">
					    <p>$$\varepsilon = \varepsilon_1 - i\varepsilon_2$$</p>
						<ul>
						    <li>A complex function</li>
						    <li>Describes response of electrons to \(E\)-field</li>
						    <li>Frequency dependent</li>
						    <li>Tells us all we need to know!</li>
					    <ul>

				    </section>

					<section>
					    <p>From \(\varepsilon\) can extract the following:</p>
						<ul>
						    <li>Refractive index, \(n\)</li>
						    <li>Absorption coefficient, \(\alpha\)</li>
						    <li>Resistivity, \(\rho\)</li>
						    <li>Dopant concentration, \(n_e\)</li>
						    <li>Electron mobility, \(\mu_e\)</li>
						</ul>
						<p>These are all really useful parameters for materials design.</p>
					</section>

					<section>
						<h3 style="margin-top: -5%;">Example: Disperison</h3>
						<p>\(\varepsilon\) is related to the <a href="http://en.wikipedia.org/wiki/Refractive_index#Complex_refractive_index" target="_blank">complex refractive index</a> according to</a></p>
						<p>$$\varepsilon = \tilde{n} = (n-i\kappa)^2$$<p>
						<p>where \(n\) is the <a href="http://en.wikipedia.org/wiki/Refractive_index" target="_blank">refractive index</a> and \(\kappa\) is the <a href="http://en.wikipedia.org/wiki/Complex_index_of_refraction" target="_blank">extinction coefficient</a></p>
						<div class="split">
								<p>$$ n = \left(\frac{\sqrt{\varepsilon_1^2 + \varepsilon_2^2}+\varepsilon_1}{2}\right)^{1/2}$$</p>
						</div>
						<div class="split">
								<p>$$ \kappa = \left(\frac{\sqrt{\varepsilon_1^2 - \varepsilon_2^2}+\varepsilon_1}{2}\right)^{1/2}$$</p>
						</div>
						<p> and \(\kappa\) is related to the <a href="http://en.wikipedia.org/wiki/Attenuation_coefficient" target="_blank">absorption coefficient</a> \(\alpha\) according to</p>
						<p>$$\alpha = \frac{2\omega\kappa}{2}$$</p>
						<p>Can now calculate transmittance, reflection and absorption for a thin film</p>
					</section>

					<section>
					    <h2>What does \(\varepsilon\) look like?</h2>
						<p><strong>Three</strong> key components</p>
						<ul>
						    <li>Bound electrons (Lorentz)</li>
							<li>Free electrons (Drude)</li>
							<li>Band gap (QM required)</li>
					    </ul>
					</section>

					<section>
					    <h3>Bound Electrons</h3>
						<p>Hooks on springs (classical Lorentz)!</p>
						<p>$$m_e \frac{d^2\mathbf{r}}{dt^2} + m_e \gamma \frac{d\mathbf{r}}{dt} + m_e \omega_0^2\mathbf{r} = -e\mathbf{E}$$</p>
					    <ul class="parameters">
						    <li>\(m_e\) - electron effective mass</li>
							<li>\(\mathbf{r}\) - displacement from equilibrium</li>
							<li>\(\omega_0\) - resonant frequency</li>
							<li>\(\gamma\) - damping coefficient</li>
						</ul>
						<p>Lets solve using \(\mathbf{E} = \mathbf{E_0}\exp(-i\omega t)\) - i.e. Light wave!</p>
					</section>
					
					<section>
					    <p>Here's the results (<a href="thesis.pdf#page=22" target="_blank">full derevation</a>)</p> 
						<p>$$\varepsilon = 1 + \frac{e^2N}{m_e\varepsilon_0}\left(\frac{1}{\omega_0^2-\omega^2+i\gamma\omega}\right)$$</p>
						<ul class="parameters">
						    <li>\(\varepsilon_0\) - permittivity of free space</li>
							<li>\(N\) - number of bound electrons per unit volume</li>
						</ul>
					    <p>Splitting into real and imaginary components</p>
						<div style="font-size: 75%;" class="split">
						<p>$$\varepsilon_1 = 1+ \frac{Ne^2}{m_e\varepsilon_0}\left[\frac{(\omega_0^2 - \omega^2)}{(\omega_0^2-\omega^2)^2 + (\gamma\omega)^2}\right]$$</p>
						</div>
						<div style="font-size: 75%;" class="split">
						<p>$$\varepsilon_2 = \frac{Ne^2}{m_e\varepsilon_0}\left[\frac{\gamma\omega}{(\omega_0^2-\omega^2)^2+(\gamma\omega)^2}\right]$$</p>
						</div>
					</section>
					<section>
						<a href="img/lorenz.jpg" target="_blank"><img src="img/lorenz.jpg"></a>
						<p>\(N=7.8\times10^{22} \mathrm{cm}^{-3}\), \(\hbar\omega_0=33 \mathrm{eV}\)</p>
					</section> 

                    <section>
					    <p>What does this really mean? Real world obserables:</p>
						<div class="img_shell_2">
                            <a href="img/lorenz_n.jpg" target="_blank"><img src="img/lorenz_n.jpg"></a>
                            <a href="img/lorenz_t2.jpg" target="_blank"><img src="img/lorenz_t2.jpg"></a>
							
						</div>
						<div class="split">
						    <p>Refractive index, \(n\), is almost 'flat' over visible wavelengths. Absorbtion (i.e. \(\kappa\) is negligible).</p>
						</div>
						<div class="split">
						    <p>Resultant Transmittance profile. Fringes due to constructive/destructive interference at interfaces.</p>
						</div>
					</section> 
					
					<section>
					    <h3>Free Electrons (Drude)</h3>
						<p>Key assumptions:</p>
						<ul style="color:red;">
						    <li>Electrons behave like billiard balls</li>
							<li>Interactions are instantaneous and elastic</li>
							<li>Electrons do not interact with atoms or other electrons</li>
						</ul>
						<p>Ridiculously simple. But it works!</p>
					</section>

					<section>
						<p>Re-write equation of motion without restoring force term, i.e <font style="color:red;">cut the springs!</font></p>
						<p>$$m_e\frac{d^2\mathbf{r}}{dt^2}+m_e\gamma\frac{d\mathbf{r}}{dt}=-e\mathbf{E}$$</p>
						<p>Lets re-write \(\gamma\) in terms of scattering time \(\tau\)</p>
						<p>$$\gamma = \frac{1}{\tau}=\frac{1}{\tau_p}+\frac{1}{\tau_{ii}}+\frac{1}{\tau_{gb}}$$</p>
						<ul>
						    <li>\(\tau_p\) - vibrational scattering (phonons!)</li>
							<li>\(\tau_{ii}\) - scattering due to ionized impurities</li>
							<li>\(\tau_{gb}\) - grain boundary scattering</li>
						</ul>
				    </section>

					<section>
					    <p>Can get some useful definitions if we first solve e.o.m. using a static DC field (<a href="thesis.pdf#page=26">see derivation</a>).</p>
						<p>$$\sigma_0=\frac{1}{\rho}=\frac{n_ee^2\tau}{m_e} = n_e\mu_e$$<p>
						<ul style="color:red;">
						    <li>\(\sigma_0\) - DC conductivity</li>
							<li>\(\rho\) - Bulk resistivity</li>
							<li>\(\mu_e=\frac{e\tau}{m_e}\) - Electron Mobility</li>
						</ul>
					    <p style="font-size: 60%;">\(n_e\) - number of free electrons per unit volume</p>

					</section>
					<section>
					    <p>Now lets solve using AC field again (<a href="thesis.pdf#page=27">see derivaion)</a></p>
						<p>$$\varepsilon = 1 - \frac{i\sigma(\omega)}{\omega\varepsilon_0}$$</p>
						<ul class="parameters">
						    <li>where \(\sigma(\omega)\) is commonly called the <i>optical conductivity</i></li>
							<li>\(\sigma(\omega)=\sigma_0\left(\frac{1}{1-i\omega\tau}\right)\)</li>
						</ul>
					    <p>Splitting into real and imaginary components:</p>
						<div class="split">
						    <p>$$\varepsilon_1 = 1 - \frac{\sigma_0}{\varepsilon_0}\left(\frac{\tau}{1+\omega^2\tau^2}\right)$$</p>
						</div>
						<div class="split">
						    <p>$$\varepsilon_2 = \frac{i\sigma_0}{\omega\varepsilon_0}\left(\frac{1}{1+\omega^2\tau^2}\right)$$</p>
						</div>
					</section>

					<section>
					    <p>DEFINITION: <i>plasma frequency</i>, \(\omega_p\)</p>
						<p style="color:red;">The point at which \(\varepsilon_1=0\)</p>
						<p>$$\omega_p \approx \sqrt{\frac{\sigma_0}{\varepsilon_0\tau}} = \sqrt{\frac{n_e e^2}{m_e\varepsilon_0}}$$</p>
					</section>

					<section>
					    <div class="img_shell_3">
						<a href="img/drude_1a.jpg" target="_blank"><img src="img/drude_1a.jpg"></a>
						<a href="img/drude_1b.jpg" target="_blank"><img src="img/drude_1b.jpg"></a>
						<a href="img/drude_1c.jpg" target="_blank"><img src="img/drude_1c.jpg"></a>
						</div>
						<p style="color:red;">\(\omega_p \propto \sqrt{n_e}\)</p>
						<p><font color="red">KEY POINT:</font> The trade-off in a TC's electrical and optical properties can be controlled by the level of \(n_e\).</p>
						<p>How? <font color="red">DOPING</font></p>
					</section>

					<section>
					    <a href="img/drude_2.jpg" target="_blank"><img src = "img/drude_2.jpg"></a>
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
                        <ul class="gallery2" style="margin-top: -30px;">
						    <li>
							    <a href="#/6/2"><img src="img/sputtering.jpg"></a>
								<p>Magnetron Sputtering</p>
						    </li>
						    <li>
							    <a href=""><img src="img/cvd.jpg"></a>
								<p>Chemical Vapor Deposition</p>
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

					<section>
					    <h4>Magnetron Sputtering</h4>
					    <ul class="gallery3">
						    <li>
							<iframe width="420" height="315" src="https://www.youtube.com/embed/fSV_UyAFEKM" frameborder="0" allowfullscreen></iframe>
							<p><a href="cdt-pv.org/podcasts">CDT-PV Podcast</a></p>
							</li>
						    <li>
							<iframe width="560" height="315" src="https://www.youtube.com/embed/L6ZIkmIVm6c" frameborder="0" allowfullscreen></iframe>
							<p>What is Sputtering?</p>
							</li>
						    <li>
							<iframe width="560" height="315" src="https://www.youtube.com/embed/NSb4zFzQD_0" frameborder="0" allowfullscreen></iframe>
							<p>Lab Scale (good overview)</p>
							</li>
						    <li>
						    <iframe width="560" height="315" src="https://www.youtube.com/embed/fDdAbFP7TtE" frameborder="0" allowfullscreen></iframe>
							<p>Jam Jar Sputtering!</p>
							</li>
						    <li>
							<iframe width="560" height="315" src="https://www.youtube.com/embed/MRKtFwEPEiM" frameborder="0" allowfullscreen></iframe>
							<p>Industry Scale</p>
							</li>
						    <li>
							<iframe width="420" height="315" src="https://www.youtube.com/embed/cJgJIZ-hhs4" frameborder="0" allowfullscreen></iframe>
							<p>In-line (nice graphics)</p>
							</li>
						</ul> </section>

					<section>
					    <h4>Chemical Vapour Deposition (CVD)</h4>
					    <ul class="gallery3">
						    <li>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/k27ukETADD8" frameborder="0" allowfullscreen></iframe>
							<p>Great Lecture</p>
							</li>
						    <li>
							<iframe width="560" height="315" src="https://www.youtube.com/embed/OVokYKqWRZE" frameborder="0" allowfullscreen></iframe>
							<p>Float Glass (see 5:00)</p>
							</li>
						    <li>
							<iframe width="560" height="315" src="https://www.youtube.com/embed/OA4F0DdNO9k" frameborder="0" allowfullscreen></iframe>
							<p>Tin Oxide</p>
							</li>
						</ul> </section>
				    
					<section>
					    <h3>Sputtering vs CVD</h3>
						</br>
						<div class="split" style="color: #FF9346;">
						    <h5>Sputtering</h5>
							<ul>
							    <li>Low temp</li>
								<li>Requires Vacuum</li>
								<li>Technology of choice for flat panel displays</li>
								<li>Predominantly used for ITO and AZO</li>
								<li>Relatively slow/expensive</li>
								<li><a href="http://onlinelibrary.wiley.com/doi/10.1002/ente.201402174/abstract?deniedAccessCustomisedMessage=&userIsAuthenticated=false">Roll to roll for large scale OPV</a></li>
						    </ul>
						</div>
						<div class="split" style="color: #80bc63;">
						    <h5>CVD</h5>
						    <ul>
							    <li>High Temperature</li>
								<li>Vacuum or atmospheric pressure (APCVD)</li>
								<li>Technology of choice for float glass industry</li>
								<li>Predominantly SnO<sub>2</sub>:F (<a href="https://www.pilkington.com/products/bp/bybenefit/solarenergy/tec/default.htm">TEC glass!</a>)</li>
								<li>Highly cost effective on large scale</li>
								<li><a href="http://www.graphenea.com/blogs/graphene-news/8017795-graphene-mass-production-roll-to-roll">Roll to roll graphene</a></li>

						    </ul>
						</div>
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
			<footer><a href="http://cdt-pv.org"><img class="logo" src="img/cdtpv_logo.png"></a><!--<a href="http://liv.ac.uk"><img class="logo" src="img/uol_logo.png"></a><a href = "https://www.liv.ac.uk/renewable-energy/"><img class="logo" src="img/si_logo.png"></a>--></footer>
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
