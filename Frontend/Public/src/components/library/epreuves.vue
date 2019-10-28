<template>
<body>
    <main role="main">
        <div class="container" style="margin-top:175px">
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-light bg-light justify-content-between">
                                    <a class="navbar-brand" href="/library-index"><button class="btn btn-outline-success my-2 my-sm-0">Back</button></a>
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                            </nav>
                        </div>
                        <div class="col-md-3">
                            <!-- <h4 class="text-center">les examens</h4> -->
                            <ul class="list-group list-group-flush" v-for="(item, index) in examens" :key="index">
                                <li class="list-group-item"> <a href="#" :id="item.id" @click="getId" >{{item.titles}}</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4>listes des epreuves disponibles </h4>
                            <div class="media" v-for="(epreuve, index) in epreuves" :key="index">
                                <div class="icon mr-5">
                                    <a href=""><i class="fa fa-file-pdf-o" style="font-size:500%;color:red"></i></a>
                                </div>
                                <div class="media-body">
                                    <h6 class="h4">
                                        {{(epreuve.name)}}
                                        <small>classe:</small> {{epreuve.serie}}
                                    </h6>

                                    <h6 class="text-dark text-left">
                                        Session: {{epreuve.session}}
                                    </h6>

                                    <h6 class="text-dark text-left">
                                         matière: {{epreuve.title}}
                                    </h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="text-dark text-left">
                                               <router-link v-bind:to="'/reader/'+ epreuve.id" >Lire </router-link>
                                            </h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="text-dark text-left">
                                                <h4><a v-bind:href="epreuve.file_link" target="_blank">Imprimer</a></h4>
                                            </h4>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


</body>
</template>


<script>

import axios from 'axios';
export default {

    components:{

    },

    data() {
        return {
            id:this.$route.params.id,
            matieres:[],
            epreuves: [],
            examens: [],
            submited:false,
        }
    },

    created() {
<<<<<<< HEAD
        axios.get('http://localhost:3000/community/library/epreuves/index').then((response)=>{
=======
        axios.get('http://192.168.8.101:3000/community/library/epreuves/index').then((response)=>{
>>>>>>> 137c28274ebe22f08bd7b9c2fa351f56d02a9856
            this.epreuves = response.data.epreuves;
            this.matieres = response.data.matieres;
            this.examens = response.data.examens;
        });

    },

    methods: {
        getId:function(event){
<<<<<<< HEAD
            axios.get('http://localhost:3000/community/library/examen/show/' + event.target.id).then((response)=>{
=======
            axios.get('http://192.168.8.101:3000/community/library/examen/show/' + event.target.id).then((response)=>{
>>>>>>> 137c28274ebe22f08bd7b9c2fa351f56d02a9856
                this.epreuves = response.data;
            });
        },

        postEpreuve:function(){

        }


    },
}
</script>

<style  scoped>
    body {
        background-color: gainsboro;
        /* background-color: rgb(150, 50, 98); */
        /* margin: 0; */
    }
</style>
