<template>
	<v-app>
		<div class="container-fluid my-5">
			<div class="row mx-5">
				<div class="news-title col-md-3 col-sm-12 col-xs-12">
					<h1 class="italics text-secondary">Nouvelles récentes
					<hr class="yellow-line">
					</h1>
					<div class="clearfix"></div>
					<h2 class="font-weight-bolder">QUOI DE NEUF DANS LE COMMUNAUTÉ?</h2>
					<br><br>
					<router-link to="/calendar">
						<img src="@/assets/images/calendar.jpg" alt="">
					</router-link>
					<br><br>
					<div v-if="!mainLoad3 && nextActivity.length">
						<div v-for="item in nextActivity">
							<p>
								<b class="text-secondary">Activité suivante:  </b> {{item.title}}
							</p>
							<p>
								<b class="text-secondary">&nbsp; A:  </b> {{item.venue}}
							</p>
							<p>Starts：</b>{{moment().to(item.start)}}</p>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div v-if="!showDetails" class="row ml-5">
						<div v-for="item in information.slice(0,6)" :key="item.id">
							<div class="col-md-3 mt-3">
								<div class="info-width">
									<a :id="item.id" @click="viewInfo"  data-toggle="modal" data-target="#information">
										<div :id="item.id" class=" bg-warning info-image-sm"></div>
										<div :id="item.id" class="bg-secondary info-image"></div>
										<div :id="item.id" class="clearfix"></div>
										<br :id="item.id">
										<h4 :id="item.id" class="font-weight-bold">{{item.title}}</h4>
										{{moment(item.created_at).fromNow()}}
										<p :id="item.id" class="text-secondary"><b :id="item.id">From:</b> {{item.user.location.district}}</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div v-if="!information.length">
						<h3 class="text-center">aucune annonce pour le moment</h3>
					</div>
					<div class="row" v-if="showDetails">
						<div v-for="item in information" :key="item.id">
							<div class="col-md-3 mt-3">
								<div class="info-width">
									<a :id="item.id" @click="viewInfo"  data-toggle="modal" data-target="#information">
										<div :id="item.id" class=" bg-warning info-image-sm"></div>
										<div :id="item.id" class="bg-secondary info-image"></div>
										<div :id="item.id" class="clearfix"></div>
										<br :id="item.id">
										<h4 :id="item.id" class="font-weight-bold">{{item.title}}</h4>
										{{moment(item.created_at).fromNow()}}
										<p :id="item.id" class="text-secondary"><b :id="item.id">From:</b> {{item.user.location.district}}</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div v-if="topInfo.length > 6 && !showDetails" class="mt-3">
						<button  class="btn btn-outline-warning btn-lg btn-rounded text-dark" id="top" @click="openDetails"><b>VOIR PLUS</b></button>
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
		                	<div class="row">
		                		<div class="col-md-6 offset-3">
				                	<div class="card mb-3">
				                		<div class="card-body">
				                			<img :src="info_data.media" class="card-img-top" height="200px" alt="annonce">
				                		</div>
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
	</v-app>
</template>

<script>
	/* eslint-disable */
	import axios from 'axios';
	var moment = require('moment');

	export default {
		data(){
			return{
				moment:moment,
				information:[],
				info_data:[],
				topInfo: [],
				normalInfo: [],
				activities: [],
				nextActivity: [],
				loading: true,
				mainLoad: true,
				mainLoad2: true,
				mainLoad3: true,
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
			axios.get('http://164.132.99.169:8000/community/information').then((res)=>{
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
			axios.get('http://164.132.99.169:8000/community/information/calendar').then((res)=>{
			    this.activities = res.data;
			    this.mainLoad2 = false;

			})
			axios.get('http://164.132.99.169:8000/community/information/activity').then((res)=>{
			    this.nextActivity = res.data;
			    this.mainLoad3 = false;

			})
		},

		methods: {
			viewInfo: function(e){
				console.log(e.target.id);
				axios.get('http://164.132.99.169:8000/community/manage/information/view/'+e.target.id)
				    .then(res=>{
				        this.info_data = res.data;
				 		this.loading = false;
				    })
			},
    		openDetails: function(){
    			this.showDetails = true;
    		},

    		// transform(props) {
		    //   Object.entries(props).forEach(([key, value]) => {
		    //     // Adds leading zero
		    //     const digits = value < 10 ? `0${value}` : value;

		    //     // uses singular form when the value is less than 2
		    //     const word = value < 2 ? key.replace(/s$/, '') : key;

		    //     props[key] = `${digits} ${word}`;
		    //   });

		    //   return props;
		    // },
		}
	};
</script>
