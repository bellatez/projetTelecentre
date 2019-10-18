<template>
    <div id="overlay" class="tex" style="margin-top: 30px;">
		<main role="main" class="mt-5">
				<div class="album bg-white">
						<div class="container">
								<div class="row">
									<div class="col-md-9">
										<div class="container-fluid">
											<div class="row">

												<div class="col-md-12 mb-3">
													<router-link to="/">
														<div class="card text-dark bg-success" style="width: auto">
															<img src="@/assets/image/Citoyen.png" class="card-img-top" alt="..." style="height:150px;">
															<div class="card-body text-center">
																<h5 class="card-title"></h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

												<div class="col-md-3 mb-3">
													<router-link to="/calendar">
														<div class="card text-dark cloudStorage-color" style="width: auto">
															<img src="@/assets/image/calendar.svg" class="card-img-top" alt="..." style="height: 125px;">
															<div class="card-body text-center">
																<h5 class="card-title text-white">ACTIVITÉS</h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

												<div class="col-md-6 mb-3">
													<a href="https://kolibridemo.learningequality.org/fr-fr/learn/#/topics">
														<div class="card text-dark library-color" style="width: auto">
															<img src="@/assets/image/student.svg" class="card-img-top img-size" alt="...">
															<div class="card-body text-center">
																<h5 class="card-title text-white">J'APPRENDS J'AVANCE</h5>
																<p class="card-text"></p>
															</div>
														</div>
													</a>
												</div>

												<div class="col-md-3 mb-3">
													<router-link to="/announcement">
														<div class="card text-dark cloudStorage-color" style="width: auto">
															<img src="@/assets/image/gossip.svg" class="card-img-top img-size" alt="...">
															<div class="card-body text-center">
																<h5 class="card-title text-white">NOUVELLE</h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

												<div class="col-md-3 mb-3">
													<router-link to="/communication">
														<div class="card text-dark library-color" style="width: auto">
															<img src="@/assets/image/Conversation.svg" class="card-img-top" alt="..." style="height: 125px">
															<div class="card-body text-center">
																<h5 class="card-title text-white">MESSAGE</h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

												<div class="col-md-9 mb-3">
													<router-link to="/library-index">
														<div class="card  library-color" style="width: auto">
															<img src="@/assets/image/librairies.svg" class="card-img-top img-size" alt="...">
															<div class="card-body text-center">
																<h5 class="card-title text-white">MES LIVRES ET DOCUMENTS GRATUIT</h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

												<div class="col-md-4 mb-3">
													<router-link to="/announcement">
														<div class="card announcement-color library-color" style="width: auto">
															<img src="@/assets/image/games.svg" class="card-img-top img-size" alt="...">
															<div class="card-body text-center">
																<h5 class="card-title text-white">JEUX</h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

												<div class="col-md-4 mb-3">
													<router-link to="/commerce">
														<div class="card cloudStorage-color" style="width: auto">
															<img src="@/assets/images/mar.jpg" class="card-img-top img-size" alt="...">
															<div class="card-body text-center">
																<h5 class="card-title text-white">LE MARCHÉ</h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

												<div class="col-md-4 mb-3">
													<router-link to="/">
														<div class="card announcement-color" style="width: auto">
															<img src="@/assets/image/geocommunal.png" class="card-img-top" alt="..." style="height:124px; margin: auto;margin-left: -0.5px;">
															<div class="card-body text-center">
																<h5 class="card-title text-white"><strong>GéoCommunal</strong></h5>
																<p class="card-text"></p>
															</div>
														</div>

													</router-link>
												</div>



											</div>
										</div>
									</div>
									<div class="col-md-1 col-sm-1 "></div>
									<!--<div class="col-3 px-0" style="position:fixed; width: 250px; overflow-y: scroll; height:450px;right: 60px;">-->
									<div class="col-md-2 px-0 col-sm-10 sidebar" style="width: 250px; margin-top: 15px;">

										<router-link to="/"></router-link>
										<div class="card mb-3 commerce-color">
											<img src="@/assets/image/sidebar.jpg" class="card-img-top" alt="...">
											<div class="py-1 text-center">
												<h5 class="py-1 text-white"><strong class="small">CONNEXION INTERNET</strong></h5>
											</div>
										</div>

										<router-link to="/"></router-link>
										<div class="card mb-4 commerce-color">
											<img src="@/assets/image/usb.svg" class="card-img-top" alt="..." style="height: 125px;">
											<div class="py-1 text-center">
												<h5 class="py-1 text-white"><strong class="small">GARDE DOCUMENT</strong></h5>
											</div>
										</div>

										<router-link to="/"></router-link>
										<div class="card mb-4 commerce-color">
											<img src="@/assets/image/sidebar.jpg" class="card-img-top" alt="...">
											<div class="py-1 text-center">
												<h5 class="py-1 text-white"><strong class="small">APPLICATION</strong></h5>
											</div>
										</div>

									</div>
									<div class="col-sm-1"></div>
								</div>
						</div>
				</div>
		</main>
	</div>
</template>


<script>
export default {
	name: 'home'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
body, html{
   font-family: 'Poppins', sans-serif !important;
}
a:hover{
	text-decoration: none;
}

	/******* TYPOGRAPHY **********/
/******* COLOR **********/
.img-size{
   min-height: 124px;
	height: 124px;
	/*width:198px;*/
	margin-left:auto;
	margin-right:auto;
}
.calendar-color{
	background-color: rgb(208, 209, 211);
}
.cloudStorage-color{
	background-color: rgb(54, 103, 150);
}
.chat-color{
	background-color: #2ab1e0;
}
.commerce-color{
	background-color: rgb(5, 190, 166);
}
.library-color{
	background-color: rgb(152, 50, 98);
}
.voucher-color{
	background-color: rgb(253, 132, 105);
}
.announcement-color{
	background-color: rgb(241, 84, 63);
}
.education-color{
	background-color: rgb(153, 97, 137);
}
.citizenSpace-color{
	background-color: rgb(124, 137, 190);
}
.geocommunal{
	background: #faae1f;
}

@media screen and (max-width: 767px) {
    .sidebar, .descript-title {
      display: none;
    }
    body, html{
        font-size: 50% !important;
    }

}
</style>
