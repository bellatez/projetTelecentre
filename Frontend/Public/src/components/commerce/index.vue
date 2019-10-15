<template>
	<v-app>
		<div class="commerce h-100">
			<div class="container my-5">
				<div class="card create">
					<div class="card-body">
						<h3 class="float-left">MARCHE</h3>
						<button class="btn btn-danger text-white float-right" data-toggle="modal" data-target="#commerce"> 
							<v-icon>fas fa-calendar</v-icon> ADD MY ITEM
						</button>
						<!-- <input class="float-right" type="search" placeholder="enter search"> -->
					</div>
				</div>
				<div class="clearfix"></div>
				<br>
				<div v-if="!loading && products.length">
					<div v-for="(chunk, index) in chunkedItems" :key="index">
						<div class="row ml-5">
							<div v-for="item in chunk" :key="item.id" class="col mt-3">
								<div class="card shadow h-100" style="width: 18rem;">
									<img src="@/assets/images/commerce.jpg" class="card-img-top" height="150px" alt="">
									<div class="card-body">
										<h5 class="card-title text-center">{{item.product_name}}</h5>
										<div class="text-center">
											<div class="badge badge-secondary">
												<h5><span class="text-monospace">Price: </span>
													{{item.price}} frs
												</h5>
											</div>
										</div>
										<br>
										<!-- <p><b>Description: </b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
										<span class="text-muted"><b>Available Qunatity: </b> {{item.quantity}}</span><br>
										<span class="text-muted"><b>Phone: </b> {{item.contact}}</span>
									</div>
									<div class="card-footer">
										<router-link to="/chat" class="btn btn-success text-white float-right">Send Message</router-link>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="commerce" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <h5 class="modal-title" id="exampleModalLongTitle">Add My Item</h5>
			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                    <span aria-hidden="true">&times;</span>
			                </button>
			            </div>
			            <div class="modal-body">
			            	<div id="alert-message" class="col-lg-12">
			            	    <v-alert 
			            	    	dense
			            	    	outlined
			            	        v-if="savedStatus.type == 'success'"
			            	        :value="savedStatus.visible"
			            	        type="success"                        
			            	        transition="scale-transition">
			            	        <strong>{{ savedStatus.message }}</strong>
			            	    </v-alert>
			            	    <v-alert
			            	    	dense
			            	    	outlined 
			            	        v-if="savedStatus.type == 'error'"
			            	        :value="savedStatus.visible"
			            	        type="error"                        
			            	        transition="scale-transition">
			            	        <strong>{{ savedStatus.message }}</strong>
			            	    </v-alert>
			            	</div>
			            	<form v-if="showForm">
			                  	<div class="form-group">
				                    <label for="exampleFormControlInput1">Item Name</label>
				                    <input type="text" class="form-control" name="product_name" v-model="commerce.product_name" placeholder="Write down the Item's name">
			                  	</div>
			                  	<div class="form-row">
				                  	<div class="form-group col">
					                    <label for="exampleFormControlTextarea1">Price</label>
					                    <input type="number" class="form-control" name="price" v-model="commerce.price" placeholder="Price">
				                  	</div>
				                  	<div class="form-group col">
				                      	<label for="exampleFormControlFile1">Available Quantity</label>
				                      	<input type="number" class="form-control" name="quantity" v-model="commerce.quantity" placeholder="number of items">
				                    </div>
			                  	</div>
			                  	<div class="form-row">
				                    <div class="form-group col">
				                      	<label for="exampleFormControlFile1">Phone Number</label>
				                      	<input type="text" class="form-control" name="contact" v-model="commerce.contact" placeholder="Write the contact">
				                    </div>
				                    <div class="form-group col">
				                      	<label for="exampleFormControlFile1">Add a Picture</label>
				                      	<input type="file" class="form-control-file">
				                    </div>
			                  	</div>
			                </form>
			            </div>
			            <div class="modal-footer">
			                <button v-if="showForm" type="button" class="btn btn-primary" @click="addItem">Add</button>
			                <button type="button" v-if="!showForm" class="btn btn-close" @click="updateItems" data-dismiss="modal">Close</button>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</v-app>
</template>

<style>
	.commerce {
		background: linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(117, 19, 93, 0.73)), url('../../assets/images/mar.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
		/*position: relative;*/
	}
	/*.create {
		position: fixed;
		z-index: 1
	}*/
</style>

<script>
	/* eslint-disable */
	import axios from 'axios';

	export default {
		data(){
			return{
				loading: true,
				mainLoad: true,
				showDetails: false,
				products: [],
				commerce: {
					product_name: '',
					quantity: '',
					price: '',
					contact: '',
				},
				savedStatus: {
				    type: '',
				    message: '',
				    visible: false
				},
				showForm: true,
			}
		},

		computed: {
			chunkedItems () {
			    return this._.chunk(this.products,3);
			}
		},

		mounted(){
			axios.get('http://localhost:8000/community/commerce').then((res)=>{
				this.products = res.data;
				this.loading = false;
			})
		},

		methods: {
			addItem(){
				axios.post('http://localhost:8000/community/commerce',this.$data.commerce).then((res)=> {
				    this.showForm = false;
		    	    this.savedStatus.visible = true;
		    	    this.savedStatus.type = 'success';
		    	    this.savedStatus.message = "Congratulations! Your Item is now on the market";
		    	})
		    	.catch(error => {
		    	            this.savedStatus.visible = true;
		    	            this.savedStatus.type = 'error';
		    	            this.savedStatus.message = "Please try again";
		    	})

			},
			updateItems(){
				axios.get('http://localhost:8000/community/commerce').then((res)=>{
					this.products = res.data;
				})
			}
		}
	};
</script>