<template>
   <body>
    <app-navbar></app-navbar>
    <br><br><br><br>
    <main role="main">
        <div class="container">
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <nav class="navbar navbar-light bg-light justify-content-between">
                                <a class="navbar-brand" href="/examens"><button class="btn btn-outline-success my-2 my-sm-0">Back</button></a>
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                            </nav>
                        </div>
                        <hr class="col-md-10">
                        <div class="col-md-3">
                            <h4>listes des matieres</h4>
                            <ul class="list-group list-group-flush" v-for="(matiere, index) in matieres" :key="index">
                                
                                <li class="list-group-item"> <a href="#" :id="matiere.id" @click="getId" >{{matiere.title}}</a></li> 
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
                                        {{epreuve.title}}
                                    </h6>
                                    <hr>
                                    <h6 class="text-dark text-left">
                                    Session: {{epreuve.session}}
                                    </h6>
                                    <hr>
                                    <h6 class="text-dark text-left">
                                    Serie: {{epreuve.serie}}
                                    </h6>   
                                    <h4 class="text-dark text-left">
                                            <a target="_blank" href="">Ouvrir</a>  
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4>Oprations</h4>
                            <ul class="list-group list-group-flush">
                                <router-link to=""><li class="list-group-item">Nouvelle Epreuve</li></router-link>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        
    
   </body>
</template>


<script>
import Navbar from './Navbar';
import Footer from './Footer';

   
export default {

    components:{
        'app-navbar' : Navbar,
        'app-footer' : Footer,
    },

    data() {
        return {
            id:this.$route.params.id,  
            matieres:[],
            epreuves: [],
           
           
        }
    },

    created() {
        this.$http.get('http://localhost:9000/library/examen/show/' + this.id).then(function(data){
            this.epreuves = data.body.epreuves;
            this.matieres = data.body.matieres;
            console.log(this.epreuves);
            console.log(this.matieres);
        });
    },

    methods: {
        getId:function(event){
            console.log(event.target.id);
            this.$http.get('http://localhost:9000/library/matieres/show/' + event.target.id).then(function(data){
                this.epreuves = data.body.epreuves;
               // this.matieres = data.body.matieres;
                console.log(this.epreuves);
                //console.log(this.matieres);
            });
        }
    },
}
</script>