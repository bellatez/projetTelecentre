<template>
    <div id="overlay" class="tex">
		<main role="main" class="mt-5">
				<div class="album bg-white">
						<div class="container">
								<div class="row">
									<div class="col-md-9">
										<div class="container-fluid">
											<div class="row">
												<div class="col-md-3 mb-3">
													<router-link to="/calendar">
														<div class="card text-dark" style="width: auto">
															<img src="@/assets/GIZ-logo.png" class="card-img-top" alt="...">
															<div class="card-body text-center">
																<h5 class="card-title">TELECENTRE</h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

												<div class="col-md-6 mb-3">
													<router-link to="/">
														<div class="card text-dark" style="width: auto">
															<img src="@/assets/GIZ-logo.png" class="card-img-top img-size" alt="...">
															<div class="card-body text-center">
																<h5 class="card-title">J'APPRENDS J'AVANCE</h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

												<div class="col-md-3 mb-3">
													<router-link to="/announcement">
														<div class="card text-dark" style="width: auto">
															<img src="@/assets/GIZ-logo.png" class="card-img-top" alt="...">
															<div class="card-body text-center">
																<h5 class="card-title">BIBÉMI</h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

												<div class="col-md-3 mb-3">
													<router-link to="/">
														<div class="card text-dark" style="width: auto">
															<img src="@/assets/GIZ-logo.png" class="card-img-top" alt="...">
															<div class="card-body text-center">
																<h5 class="card-title">JEUX</h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

												<div class="col-md-9 mb-3">
													<router-link to="/library-index">
														<div class="card text-dark" style="width: auto">
															<img src="@/assets/GIZ-logo.png" class="card-img-top img-size" alt="...">
															<div class="card-body text-center">
																<h5 class="card-title">MES LIVRES ET DOCUMENTS GRATUIT</h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

												<div class="col-md-4 mb-3">
													<router-link to="/announcement">
														<div class="card text-dark" style="width: auto">
															<img src="@/assets/GIZ-logo.png" class="card-img-top img-size" alt="...">
															<div class="card-body text-center">
																<h5 class="card-title">BIBÉMI</h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

												<div class="col-md-4 mb-3">
													<router-link to="/commerce">
														<div class="card text-dark" style="width: auto">
															<img src="@/assets/GIZ-logo.png" class="card-img-top img-size" alt="...">
															<div class="card-body text-center">
																<h5 class="card-title">LE MARCHÉ</h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

												<div class="col-md-4 mb-3">
													<router-link to="/">
														<div class="card text-dark" style="width: auto">
															<img src="@/assets/image/geocommunal.png" class="card-img-top" alt="..." style="height:150px;">
															<div class="card-body text-center">
																<h5 class="card-title"><strong>GéoCommunal</strong></h5>
																<p class="card-text"></p>
															</div>
														</div>
														
													</router-link>
												</div>

												<div class="col-md-12 mb-3">
													<router-link to="/">
														<div class="card text-dark" style="width: auto">
															<img src="@/assets/image/Citoyen.png" class="card-img-top" alt="..." style="height:150px;">
															<div class="card-body text-center">
																<h5 class="card-title"></h5>
																<p class="card-text"></p>
															</div>
														</div>
													</router-link>
												</div>

											</div>
										</div>
									</div>
									<div class="col-3 px-0" style="position:fixed; width: 250px; overflow-y: scroll; height:450px;right: 60px;">
										<router-link to="/"></router-link>
										<div class="card mb-3 bg-info">
											<img src="@/assets/image/Citoyen.png" class="card-img-top" alt="...">
											<div class="py-1 text-center">
												<h5 class="py-1 text-white"><strong>CONNEXION INTERNET</strong></h5>
												<p class="card-text"></p>
												<a href="#" class="btn btn-light btn-sm">Voir</a>
											</div>
										</div>

										<router-link to="/"></router-link>
										<div class="card mb-4 bg-info">
											<img src="@/assets/image/Citoyen.png" class="card-img-top" alt="...">
											<div class="py-1 text-center">
												<h5 class="py-1 text-white"><strong>GARDE DOCUMENT</strong></h5>
												<p class="card-text"></p>
												<a href="#" class="btn btn-light btn-sm">Voir</a>
											</div>
										</div>

										<router-link to="/"></router-link>
										<div class="card mb-4 bg-info">
											<img src="@/assets/image/Citoyen.png" class="card-img-top" alt="...">
											<div class="py-1 text-center">
												<h5 class="py-1 text-white"><strong>APPLICATION</strong></h5>
												<p class="card-text"></p>
												<a href="#" class="btn btn-light btn-sm">Voir</a>
											</div>
										</div>

									</div>
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

	/******* TYPOGRAPHY **********/
/******* COLOR **********/
.img-size{
	height: 150px;
	width:198px;
	margin-left:auto;
	margin-right:auto;
}
</style>
