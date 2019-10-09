<template>
	<v-app>
		<div class="information">
			<div class="container my-5">
				<router-link to="/calendar" class="btn btn-danger text-white float-right"> 
					<v-icon>fas fa-calendar</v-icon> Visit Calendar for Activities
				</router-link>
				<div class="clearfix"></div>
				<br>
				<div class="card" style="background-color: #fdfdfd;">
					<h3 class=" card-header">Important Announcements ({{topInfo.length}})</h3>
					<div class="card-body ml-5">
						<div v-if="!mainLoad && !showDetails" class="row">
							<div v-for="item in topInfo.slice(0,6)" :key="item.id">
								<div class="col-md-4 mt-3">
									<div class="card shadow h-100" style="width: 18rem;">
										<!-- <img src="media/information.jpg" class="card-img-top" height="150px" alt=""> -->
										<div class="card-body text-center">
											<div class="badge badge-danger float-left">{{item.category.name}}</div>
											<div class="badge badge-secondary float-right">From: {{item.user.location.district}}</div>
											<div class="clearfix"></div>
											<br>
											<h5 class="card-title">Title: {{item.title}}</h5>
										</div>
										<div class="card-footer">
											<button class="btn btn-primary" :id="item.id" @click="viewInfo"  data-toggle="modal" data-target="#information">Read All</button>
											<span class="text-muted float-right">1 hour ago</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div v-if="!mainLoad && showDetails" class="row">
							<div v-for="item in topInfo" :key="item.id">
								<div class="col-md-4 mt-3">
									<div class="card shadow h-100" style="width: 18rem;">
										<!-- <img src="media/information.jpg" class="card-img-top" height="150px" alt=""> -->
										<div class="card-body text-center">
											<div class="badge badge-danger float-left">{{item.category.name}}</div>
											<div class="badge badge-secondary float-right">From: {{item.user.location.district}}</div>
											<div class="clearfix"></div>
											<br>
											<h5 class="card-title">Title: {{item.title}}</h5>
										</div>
										<div class="card-footer">
											<button class="btn btn-primary" :id="item.id" @click="viewInfo"  data-toggle="modal" data-target="#information">Read All</button>
											<span class="text-muted float-right">1 hour ago</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div v-if="topInfo.length > 6 && !showDetails" class="text-center mt-3">
							<button  class="btn btn-dark" id="top" @click="openDetails">View All</button>
						</div>
					</div>
				</div>

				<div class="card mt-3">
					<h3 class=" card-header">Regular Announcements ({{normalInfo.length}})</h3>
					<div class="card-body pl-5">
						<div class="row">
							<div v-for="item in normalInfo.slice(0,6)" :key="item.id">
								<div class="col-md-4 mt-3">
									<div class="card shadow h-100" style="width: 18rem;">
										<!-- <img src="media/information.jpg" class="card-img-top" height="150px" alt=""> -->
										<div class="card-body text-center">
											<div class="badge badge-success float-left">{{item.category.name}}</div>
											<div class="badge badge-secondary float-right">From: {{item.user.location.district}}</div>
											<div class="clearfix"></div>
											<br>
											<h5 class="card-title">Title: {{item.title}}</h5>
										</div>
										<div class="card-footer">
											<button class="btn btn-primary" :id="item.id" @click="viewInfo"  data-toggle="modal" data-target="#information">Read All</button>
											<span class="text-muted float-right">1 hour ago</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div v-if="normalInfo.length > 6" class="text-center mt-3">
							<button  class="btn btn-dark" id="regular" @click="openDetails">View All</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="information" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			    <div class="modal-dialog modal-lg">
			        <div class="modal-content">
			            <div class="modal-header">
			                <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                    <span aria-hidden="true">&times;</span>
			                </button>
			            </div>
			            <div class="modal-body">
			                <div v-if="info_data && !loading">
			                	<div class="card mb-3">
			                		<div class="card-body">
			                			<div v-if="info_data.media">
			                				
			                			</div>
			                			<div v-else>
			                				<img src="media/information.jpg" alt="">
			                			</div>
			                		</div>
			                	</div>
			                	<div class="table-responsive">
			                		<table class="align-middle mb-0 table table-borderless table-striped table-hover">
			                			<tbody>
			                				<tr>
			                					<td class="font-weight-bold text-capitalize">Title</td>
			                					<td>{{ info_data.title }}</td>
			                				</tr>
			                				<tr>
			                					<td class="font-weight-bold text-capitalize">Category</td>
			                					<td><div class="badge badge-success">{{ info_data.category.name }}</div></td>
			                				</tr>
			                				<tr>
			                					<td class="font-weight-bold text-capitalize">Information Content</td>
			                					<td>{{ info_data.content }}</td>
			                				</tr>
			                				<tr>
			                					<td class="font-weight-bold text-capitalize">Posted By</td>
			                					<td>{{ info_data.user.full_name }}</td>
			                				</tr>
			                				<tr>
			                					<td class="font-weight-bold text-capitalize">From</td>
			                					<td>{{ info_data.user.location.district }}</td>
			                				</tr>
			                			</tbody>
			                		</table>
			                	</div>
			                </div>
			            </div>
			            <div class="modal-footer">
			                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</v-app>
</template>

<style>
	.information {
		background-color: rgb(152,50,98);
	}
</style>

<script>
	/* eslint-disable */
	import axios from 'axios';

	export default {
		data(){
			return{
				information:[],
				info_data:[],
				topInfo: [],
				normalInfo: [],
				loading: true,
				mainLoad: true,
				showDetails: false,
			}
		},

		computed: {
		    topCount: function() {
		      return this.top;
		    },
		    normalCount: function() {
		      return this.normal;
		    }
		 },

		mounted(){
			axios.get('http://localhost:8000/community/information').then((res)=>{
				this.information = res.data;
				this.mainLoad = false;
				for (var i = 0; i< this.information.length; i++) {
					if (this.information[i].priority == 'top') {
						this.topInfo.push(this.information[i]);
					} else {
						this.normalInfo.push(this.information[i]);
					}			
				}
			})
		},

		methods: {
			viewInfo: function(e){
				console.log(e.target.id);
				axios.get('http://localhost:8000/community/manage/information/view/'+e.target.id)
				    .then(res=>{
				        this.info_data = res.data;
				        // console.log(res.data);
				 		this.loading = false;
				    })
			},
    		openDetails: function(){
    			this.showDetails = true;
    		}
		}
	};
</script>