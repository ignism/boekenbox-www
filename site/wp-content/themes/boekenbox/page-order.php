<?php
/**
* Template Name: Order
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Boekenbox
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<header class="order">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/header-logo.svg" style="width:80%">
					</div>

					<div class="col-xs-12 col-sm-6">

						<div id="slick-header">
							<div class="slick-header__slide">
								<h1>Waar lees je<br>het liefst over?</h1>
								<h3>Kies een thema dat bij je past. Onze collectioneur zoekt de beste boeken voor je uit.</h3>
							</div>
							<div class="slick-header__slide">
								<h1>Voer je gegevens in</h1>
								<h3>Voer hier je gegevens in zodat wij weten waar we het moeten bezorgen.</h3>
							</div>
							<div class="slick-header__slide">
								<h1>Kies een bezorgmoment</h1>
								<h3>Onze bezorger komt het pakketje persoonlijk a everen. Het pakketje kan elke Vrijdag van 17:00 tot 19:00 worden bezorgd.</h3>
							</div>
							<div class="slick-header__slide">
								<h1>Betaal met ideal</h1>
								<h3>Je kan alleen nog maar met iDeal betalen. Dit is wel gratis, en de bezorging is ook gratis.</h3>
							</div>
						</div>

					</div>
				</div>
			</div>
		</header>

		<div class="container">

			<div class="row">
				<div class="col-sm-2 col-sm-offset-1 breadcrump">
					<a href="#" class="slick-goto" data-slide-number="0">Kies een thema</a>
				</div>
				<div class="col-sm-2 breadcrump">
					<a href="#" class="slick-goto disabled" data-slide-number="1">Gegevens</a>
				</div>
				<div class="col-sm-2 breadcrump">
					<a href="#" class="slick-goto disabled" data-slide-number="2">Bezorging</a>
				</div>
				<div class="col-sm-2 breadcrump">
					<a href="#" class="slick-goto disabled" data-slide-number="3">Betaling</a>
				</div>
				<div class="col-sm-2 breadcrump">
					<a href="#" class="slick-goto disabled" data-slide-number="4">Voltooien</a>
				</div>
			</div>

		</div><!-- .container -->

		<div class="container">

			<div class="row pushdown">
				<div class="col-xs-12">
					<div id="slick-form">

						<div class="slick-form__slide">
							<div class="row theme-selection--row">

								<div class="col-xs-4 col-xs-offset-2">
									<div class="theme-selection--block">
										<div class="row">
											<div class="col-xs-12">
												<div class="row">
													<div class="col-xs-3">

													</div>
													<div class="col-xs-8 theme-svg">
														<img src="<?php echo get_template_directory_uri() ?>/assets/images/theme-1.svg" style="width: 200px">
													</div>
												</div>
											</div>
											<div class="col-xs-12 theme-text">
												<h2>
													Literatuur
												</h2>
												<p>
													Boeken met meer diepgang. Er zitten meer lagen in dan alleen het verhaal, je wordt aangezet om na te denken. Auteurs:  Elena Ferrante, Herman Koch, Adriaan van Dis, Dave Eggers
												</p>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xs-4">
									<div class="theme-selection--block">
										<div class="row">
											<div class="col-xs-12">
												<div class="row">
													<div class="col-xs-3">

													</div>
													<div class="col-xs-8 theme-svg">
														<img src="<?php echo get_template_directory_uri() ?>/assets/images/theme-2.svg" style="right: -40px">
													</div>
												</div>
											</div>
											<div class="col-xs-12 theme-text">
												<h2>
													Young Adult
												</h2>
												<p>
													Boeken voor de doelgroep 15+. Er zijn verschillende genres binnen deze groep. Deze kunnen allemaal in de box zitten. Auteurs: John Green, Julie Kagawa, Kiera Cass
												</p>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="row theme-selection--row">

								<div class="col-xs-4 col-xs-offset-2">
									<div class="theme-selection--block">
										<div class="row">
											<div class="col-xs-12">
												<div class="row">
													<div class="col-xs-3">

													</div>
													<div class="col-xs-8 theme-svg">
														<img src="<?php echo get_template_directory_uri() ?>/assets/images/theme-3.svg" style="width: 240px">
													</div>
												</div>
											</div>
											<div class="col-xs-12 theme-text">
												<h2>
													Spannend
												</h2>
												<p>
													Thrillers, detectives. Een boek waarbij de klemtoon ligt op actie en gevaar. Denk hierbij aan auteurs als: Nicci French, Dan Brown, Simone van der Vlugt etc.
												</p>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xs-4">
									<div class="theme-selection--block">
										<div class="row">
											<div class="col-xs-12">
												<div class="row">
													<div class="col-xs-3">

													</div>
													<div class="col-xs-8 theme-svg">
														<img src="<?php echo get_template_directory_uri() ?>/assets/images/theme-4.svg" style="right: -40px">
													</div>
												</div>
											</div>
											<div class="col-xs-12 theme-text">
												<h2>
													Feelgood
												</h2>
												<p>
													Onder deze rubriek vallen chicklits en romantische boeken. Auteurs: Jojo Moyes, Jill Mansell, Santa Montefiore, Nicholas Sparks
												</p>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="row pushdown">
								<div class="col-sm-8 col-sm-offset-2">

									<a href="#" class="slick-goto button slick-next" data-slide-number="1">Verder</a>
								</div>
							</div>

						</div>

						<div class="slick-form__slide">
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2">
									Geslacht
								</div>
								<div class="col-sm-2">
									<input type="radio" name="geslacht" value="man">&nbsp;&nbsp;Man
								</div>
								<div class="col-sm-2">
									<input type="radio" name="geslacht" value="vrouw">&nbsp;&nbsp;Vrouw
								</div>

							</div>
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2">
									Achternaam
								</div>
								<div class="col-sm-4">
									<input type="text" name="achternaam">
								</div>

							</div>
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2">
									Tussenvoegsel<br><span class="optional">Optioneel</span>
								</div>
								<div class="col-sm-2">
									<input type="text" name="tussenvoegsel">
								</div>

							</div>
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2">
									Voornaam
								</div>
								<div class="col-sm-4">
									<input type="text" name="voornaam" placeholder="Voornaam / Voorletters">
								</div>

							</div>
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2">
									Postcode
								</div>
								<div class="col-sm-2">
									<input type="text" name="postcode" placeholder="5600 AB">
								</div>

							</div>
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2">
									Huisnummer
								</div>
								<div class="col-sm-1">
									<input type="text" name="huisnummer" placeholder="">
								</div>

							</div>
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2">
									Toevoeging<br><span class="optional">Optioneel</span>
								</div>
								<div class="col-sm-1">
									<input type="text" name="toevoeging" placeholder="">
								</div>

							</div>
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2">
									Straat
								</div>
								<div class="col-sm-4">
									<input type="text" name="straat" placeholder="">
								</div>

							</div>
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2">
									Woonplaats
								</div>
								<div class="col-sm-4">
									<input type="text" name="woonplaats" placeholder="">
								</div>

							</div>
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2">
									Telefoonnummer
								</div>
								<div class="col-sm-3">
									<input type="text" name="telefoonnummer" placeholder="">
								</div>

							</div>
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2">
									Mobiele nummer<br><span class="optional">Optioneel</span>
								</div>
								<div class="col-sm-3">
									<input type="text" name="mobielenummer" placeholder="">
								</div>

							</div>
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2">
									Emailadres<br><span class="optional">Optioneel</span>
								</div>
								<div class="col-sm-4">
									<input type="text" name="emailadres" placeholder="">
								</div>

							</div>
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2">
									Afleveradres
								</div>
								<div class="col-sm-4">
									<input type="radio" name="afleveradres" value="zelfde">&nbsp;&nbsp;Bovenstaande is ook het aflever adres
								</div>
								<div class="col-sm-4">
									<input type="radio" name="afleveradres" value="zelfde">&nbsp;&nbsp;Een ander adres kiezen
								</div>

							</div>
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2">
								  Hoe heeft u ons gevonden<br><span class="optional">Optioneel</span>
								</div>
								<div class="col-sm-4">
									<input type="text" name="gevonden" placeholder="">
								</div>

							</div>
							<div class="row data-input--row">

								<div class="col-sm-2 col-sm-offset-2 relative">
									Nieuwsbrief<br><span class="optional">Optioneel</span>
								</div>
								<div class="col-sm-8">
									<input type="checkbox" name="nieuwsbrief" placeholder=""> Ja, ik wil de nieuwsbrief van de bibliotheek Eindhoven ontvangen.
								</div>

							</div>
							<div class="row pushdown">
								<div class="col-sm-8 col-sm-offset-2">

									<a href="#" class="slick-goto button slick-next" data-slide-number="2">Verder</a>
								</div>

							</div>

						</div>

						<div class="slick-form__slide">
							<div class="row">
								<div class="col-sm-5 col-sm-offset-2">
									<div class="row data-input--row">
										<div class="col-xs-1">
											<input type="radio" name="bezorging" value="07-07-17">
										</div>
										<div class="col-xs-11">
											Vrijdag 7 juli 2017 tussen 17.00 en 19.00
										</div>
									</div>
									<div class="row data-input--row">
										<div class="col-xs-1">
										<input type="radio" name="bezorging" value="14-07-17">
										</div>
										<div class="col-xs-11">
											Vrijdag 14 juli 2017 tussen 17.00 en 19.00
										</div>
									</div>
									<div class="row data-input--row">
										<div class="col-xs-1">
											<input type="radio" name="bezorging" value="21-07-17">
										</div>
										<div class="col-xs-11">
											Vrijdag 21 juli 2017 tussen 17.00 en 19.00
										</div>
									</div>
									<div class="row data-input--row">
										<div class="col-xs-1">
											<input type="radio" name="bezorging" value="0">
										</div>
										<div class="col-xs-11">
											Alle bovenstaande voorstellen kan ik helaas niet. Ik wil een aspraak maken om het pakket op te halen.
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-5 col-sm-offset-2">
									Wil je nog extra informatie toevoegen? gebruik dan dit vak: <br>
									<textarea name="informatie" rows="8" cols="80"></textarea>
								</div>
							</div>
							<div class="row pushdown">
								<div class="col-sm-8 col-sm-offset-2">

									<a href="#" class="slick-goto button slick-next" data-slide-number="3">Verder</a>
								</div>

							</div>

						</div>

						<div class="slick-form__slide">
							<div class="row data-input--row">
								<div class="col-sm-4 col-sm-offset-2">
									Controlleer de gegevens goed<br>voordat je doorgaat met betalen.
								</div>
							</div>

							<div class="row data-input--row">
								<div class="col-sm-8 col-sm-offset-2 content-block">
									<div class="row data-input--row">
										<div class="col-xs-5">
											<h2 style="margin: 0;">Gegevens</h2><a href="" class="slick-goto change-data" data-slide-number="1">Wijzigen</a>
										</div>
										<div class="col-xs-7">
											<h2 style="margin: 0;">Aflevermoment</h2><a href="" class="slick-goto change-data" data-slide-number="2">Wijzigen</a>
										</div>
									</div>
									<div class="row data-input--row">
										<div class="col-xs-5 plain grey">
											<strong>Factuuradres</strong>
											<ul>
												<li>Dhr. Jan Janssen</li>
												<li>Fuutlaan 12 b</li>
												<li>5613 AB</li>
												<li>Eindhoven</li>
											</ul>
											<br>
											<strong>Afleveradres</strong>
											<ul>
												<li>Dhr. Jan Janssen</li>
												<li>Fuutlaan 12 b</li>
												<li>5613 AB</li>
												<li>Eindhoven</li>
											</ul>
											<br>
											<strong>Overige gegevens</strong>
											<ul>
											<li>06 12 34 56 78</li>
											<li>Janssen@edhv.nl</li>
										</ul>
										</div>
										<div class="col-xs-5 plain grey">
											<strong>Aflevermoment</strong><br>
											Vrijdag 02 Augustus<br>
											<br>
											<strong>Extra informatie</strong><br>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</div>
									</div>
								</div>
							</div>

							<div class="row data-input--row">
								<div class="col-sm-8 col-sm-offset-2 content-block">
									<div class="row data-input--row">
										<div class="col-xs-5">
											<h2 style="margin: 0;">Uw bestelling</h2><a href="" class="slick-goto change-data" data-slide-number="0">Wijzigen</a>
										</div>
									</div>
									<div class="row data-input--row">
										<div class="col-xs-5 plain grey">
											<strong>Thema</strong><br><br>
											<ul>
												<li>Young Adult</li>
											</ul>
										</div>
										<div class="col-xs-5 plain grey">
											<strong>Totaal</strong><br><br>
											<ul>
												<li>&euro; 12,00</li>
												<li>&euro; 2,52 <span class="faded">(21% BTW)</span></li>
												<li><strong>&euro; 14,52</strong></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="row data-input--row">
								<div class="col-sm-4 col-sm-offset-2">
									<h2>Betalen met iDeal</h2>
								</div>
							</div>

							<div class="row pushdown">
								<div class="col-sm-8 col-sm-offset-2">

									<a href="#" class="slick-goto button slick-next" data-slide-number="4">Betalen</a>
								</div>

							</div>


						</div> <!-- .slick-form__slide -->



					</div>
				</div>
			</div>


		</div><!-- .container -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
