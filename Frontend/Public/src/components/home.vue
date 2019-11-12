<template>
	<main role="main" class="inner cover text-center">
		<div>
			<div class="row">
				<!--<div class="video col-md-12 mb-5" style="padding: 0; margin: 0;z-index: 9999">
     			 <iframe width="100%" height="520px" src="https://www.youtube.com/embed/w_AGPkESs3s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   				 </div>-->

				<!-- VIDEO PRESENTATION -->
				<div class="col-md-9 bg-perso py-5">
					<div class="container-fluid mx-5 services">

						<!-- EDUCATION -->
						<div class="row">
							<div class="col-md-6 services" style="margin-bottom: 5px">
								<a href="http://kolibridemo.learningequality.org/en/learn/#/topics">
									<div class="block first border-r" style="height: 206px;">
										<div class="img container" style="height:206.455px; width:100%; max-width: 100%">
											<img src="@/assets/img/undraw_true_friends_c94g.svg" alt="" style="height:170px; width:100%">
											<div class="top-left"><h5 class="font-weight-bold text-dark">ESPACE ÉLÈVE</h5></div>
										</div>

										<div class="texts block-element p-5 text-left" style="height: 206.455px; background-repeat: no-repeat; background-size:cover" :style="{ backgroundImage: 'url(' + require('./../assets/img/red.png') + ')' }">
											<strong class="text-white"><h3>J'APPRENDS ET J'AVANCE</h3></strong>
											<small class="text-white lead">Retrouver une liste de lecon et de jeux éducatifs</small>
											<br>
											<small class="text-white lead">Une section spéciallement dédié a apprendre</small>
											<br><br>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-6 services" style="margin-bottom: 5px">
								<router-link to="/library-index">
									<div class="block first border-r"style="height: 206.455px;">
										<div class="img container" style="height:206.455px; width:100%; max-width: 100%">
											<img src="@/assets/img/undraw_book_lover_mkck.svg" alt="" style="height:170px; width:100%; max-width: 100%; margin-left: 30px">
											<div class="top-left"><h5 class="font-weight-bold text-dark">MY LIBRARY</h5></div>
										</div>

										<div class="texts block-element p-5 text-left" style="height: 206.455px; background-repeat: no-repeat; background-size:cover" :style="{ backgroundImage: 'url(' + require('./../assets/img/red.png') + ')' }">
											<strong class="text-white"><h3>MON BIBLIOTEQUE</h3></strong>
											<small class="text-white lead">Retrouver une liste de livre et épreuves d'examens officiels</small>
											<br>
											<small class="text-white lead">Une section spéciallement dédié à l'éducation dans tous les domaines</small>
											<br><br>

										</div>
									</div>
								</router-link>
							</div>
						</div>
						<!-- /EDUCATION -->


						<!-- ANNOUNCEMENT -->
						<div class="row">
							<div class="col-md-3 services" style="margin-bottom: 5px">
								<router-link to="/calendar">
									<div class="block first border-r" style="height: 206.455px;">
										<div class="img container" style="height:206.455px; width:100%; max-width: 100%">
											<img src="@/assets/img/undraw_booking_33fn.svg" alt="" style="height: 170px; width:100%">
											<div class="top-left"><h5 class="font-weight-bold text-dark">AGENDA</h5></div>
										</div>

										<div class="texts p-3 text-left block-element" style="height: 206.455px; background-repeat: no-repeat; background-size:cover" :style="{ backgroundImage: 'url(' + require('./../assets/img/bg.png') + ')' }">
											<strong class="text-white"><h3>AGENDA</h3></strong>
											<small class="text-white lead">Find all the activities of the Telecentre</small>
											<small class="text-white lead">training, services within the centre</small>
											<br><br>

										</div>
									</div>
								</router-link>
							</div>
							<div class="col-md-5 services" style="margin-bottom: 5px">
								<router-link to="/announcement">
									<div class="block first border-r" style="height: 206.455px;">
										<div class="img container" style="height:206.455px; width:100%; max-width: 100%">
											<img src="@/assets/img/undraw_conference_speaker_6nt7.svg" alt="" style="height:170px; width:100%; max-width: 100%">
											<div class="top-left"><h5 class="font-weight-bold text-dark">COMMUNIQUE</h5></div>
										</div>

										<div class="texts block-element p-5 text-left bg-success" style="height: 206.455px; background-repeat: no-repeat; background-size:cover" :style="{ backgroundImage: 'url(' + require('./../assets/img/bg.png') + ')' }">
											<strong class="text-white"><h3>COMMUNIQUE</h3></strong>
											<small class="text-white lead">Retrouver toutes les informations au sujet de la communauté</small>
											<br>
											<small class="text-white lead">Une section spéciallement dédié a apprendre</small>
											<br><br>
										</div>
									</div>
								</router-link>
							</div>
							<div class="col-md-4 services" style="margin-bottom: 5px">
								<router-link to="/commerce">
								<div class="first block border-r" style="height: 206.455px; ">
									<div class="img container" style="height:206.455px; width:100%; max-width: 100%">
										<img src="@/assets/img/undraw_wallet_aym5.svg" alt="" style="height: 170px; width:100%; max-width: 100%">
										<div class="bottom-right"><h5 class="font-weight-bold text-dark">MARKET PLACE</h5></div>
									</div>

									<div class="texts block-element p-5 text-left" style="height: 206.455px; background-repeat: no-repeat; background-size:cover" :style="{ backgroundImage: 'url(' + require('./../assets/img/yellow.jpg') + ')' }">
										<strong class="text-white"><h3>NOTRE MARCHÉ</h3></strong>
										<small class="text-white lead">Retrouver une liste de lecon et de jeux éducatifs</small>
										<br>
										<small class="text-white lead">Une section spéciallement dédié a apprendre</small>
										<br><br>

									</div>
								</div>
								</router-link>
							</div>

						</div>
						<!-- /ANNOUNCEMENT -->


						<!-- EXTRA -->
						<!-- <div class="row">
							
						</div> -->
						<!-- /EXTRA -->


						<!-- CHAT AND GAME -->
						<div class="row">
							<div class="col-md-6 services" style="margin-bottom: 5px">
								<router-link to="/communication">
									<div class="block first border-r" style="height: 206.455px;">
										<div class="img container" style="height: 206.455px; width:100%; max-width: 100%">
											<img src="@/assets/img/undraw_chatting_2yvo.svg" alt="" style="height: 170px; width:100%; max-width: 100%">
											<div class="top-left"><h5 class="font-weight-bold text-dark">MESSAGERIE COMMUNAUTAIRE</h5></div>
										</div>

										<div class="texts block-element p-5 text-left bg-success" style="height: 206.455px; background-repeat: no-repeat; background-size:cover" :style="{ backgroundImage: 'url(' + require('./../assets/img/bg.png') + ')' }">
											<strong class="text-white"><h3>MESSAGERIE COMMUNAUTAIRE</h3></strong>
											<small class="text-white lead">Service de messagerie gratuite</small>
											<br>
											<small class="text-white lead">En un click retrouvez-vous</small>
											<br><br>

										</div>
									</div>
								</router-link>
							</div>
							<div class="col-md-6 services" style="margin-bottom: 5px">
								<div class="block first border-r" style="height: 206.455px;">
									<div class="img container" style="height:206.455px; width:100%; max-width: 100%">
										<img src="@/assets/img/undraw_gaming_6oy3.svg" alt="" style="height:170px; width:100%; max-width: 100%">
										<div class="top-left"><h5 class="font-weight-bold text-dark">GAMES</h5></div>
									</div>

									<div class="texts block-element text-left p-5 bg-info" style="height: 206.455px; background-repeat: no-repeat; background-size:cover" :style="{ backgroundImage: 'url(' + require('./../assets/img/bg.png') + ')' }">
										<strong class="text-white"><h3>JEUX</h3></strong>
										<small class="text-white lead">Retrouver une liste de jeux éducatifs</small>
										<br>
										<small class="text-white lead">Une section dédié au divertissement</small>
										<br><br>
									</div>
								</div>
							</div>
						</div>
						<!-- /CHAT AND GAMES -->

						<!-- ESPACE CITOYEN -->
						<div class="row">
							<div class="col-md-8 services" style="margin-bottom: 5px">
								<div class="first block " style="height: 206.455px;">
									<div class="img top">
										<img src="@/assets/img/citoyen.png" class="border-r" style="height:170px; width:100%;">
									</div>

									<div class="texts bottom">
										<div class="mr-auto ml-auto p-5 text-left block-element border-r" style="height: 206.455px; background-repeat: no-repeat; background-size:cover" :style="{ backgroundImage: 'url(' + require('./../assets/img/yellow.jpg') + ')' }">
											<strong class="text-white"><h3>ESPACE CITOYEN</h3></strong>
											<small class="text-white lead">Retrouver toutes les informations a propos des services de la communes</small>
											<br>
											<small class="text-white lead">les informations a propos des services de la mairies</small>
											<br><br>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 services" style="margin-bottom: 5px">
								<a href="http://ngong.geocameroun.cm/#/">
									<div class="first block border-r" style="height: 206.455px;">
										<div class="img container" style="height:206.455px; width:100%; max-width: 100%">
											<img src="@/assets/img/geocommunals.png" alt="" class="" style="margin-top: 8%; height: 150px; width:60%;">
											<div class="bottom-right"><h5 class="font-weight-bold text-dark" style="margin: auto">GEOCOMMUNAL</h5></div>
										</div>

										<div class="texts block-element p-4 text-left " style="height: 206.455px; background-repeat: no-repeat; background-size:cover" :style="{ backgroundImage: 'url(' + require('./../assets/img/yellow.jpg') + ')' }">
											<strong class="text-white"><h3>GEOCOMMUNAL</h3></strong>
											<small class="text-white lead">Location service</small>
											<small class="text-white lead">In one click find hospitals, town halls, etc....</small>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- /ESPACE CITOYEN -->
					</div>

				</div>

				<!-- SIDEBAR  -->
				<div class="col-md-3 bg-perso py-5">
					<div class="sidebar">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-9 bg-nice h-sidebar container" style="border-radius: 5% ;margin-bottom: 5px">
									<img src="@/assets/img/undraw_broadcast_jhwxs.svg" class="" alt="" style="height: 206.455px; width:100%; max-width: 100%;">
									<div class="bottom-right" style="margin-left: auto; margin-right: auto"><h5 class="font-weight-bold text-uppercase text-center text-white">Connect to the internet here</h5></div>
								</div>

								<div class="col-md-9 services  h-sidebar container" style="background: #C5C1B7; border-radius: 5%; margin-bottom: 5px">
									<a href="http://192.168.8.101/aurora-files">
										<img src="@/assets/img/cloud2.png" alt="" class="border-r" style="height: 160.455px; width:80%; max-width: 100%; background: white">
										<div class="bottom-right"><h5 class="font-weight-bold text-uppercase text-center text-dark">Keep all your documents</h5></div>
									</a>
								</div>

								<div class="col-md-9 services bg-nice h-sidebar container border-r" style="border-radius: 5%; margin-bottom: 5px">
									<img src="@/assets/img/undraw_social_growth_d0y3.svg" class="border-r" alt="" style="height: 150px; width:80%; max-width: 100%;">
									<h5 class="font-weight-bold text-center text-uppercase text-white">App Store</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</main>
</template>


<script>
	export default {
		name: 'home',

	}


import backgroundUrl from '@/assets/img/yellow.jpg'
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="css">
	@import './style.css';

</style>
