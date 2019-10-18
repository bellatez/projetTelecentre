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
                                        <h4><a v-bind:href="'http://localhost:9000/storage/files/epreuves/'+epreuve.file_link" target="_blank">Lire</a></h4> 
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4>Oprations</h4>
                            
                            <ul class="list-group list-group-flush">
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#MaddEpreuves">
                                    Nouvelle epreuve
                                </button>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        
    <!-- Modal Epreuves -->
    <div class="modal fade modal-md" id="MaddEpreuves" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" id="addBook">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un Livre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" enctype="multipart/form-data">

                    <div class="modal-body">
                        <div class="row">
                            <form class="col-md-12">
                                <div class="form-group row">
                                        <label for="colFormLabelLg" class="col-sm-12 col-form-label col-form-label-md">Titre du livre</label>
                                        <div class="col-sm-12">
                                            <!-- <input v-model="book.title" type="text"  class="form-control form-control-md" id="colFormLabelLg" placeholder="Guillaume Oyônô Mbia" required> -->
                                        </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabelLg" class="col-sm-12 col-form-label col-form-label-md">Auteur</label>
                                    <div class="col-sm-12">               
                                        <!-- <select v-model="book.auteurId" name="auteur_id" class="form-control form-control-md">
                                            <option  v-for="author in authors" :key="author.id" :value="author.id" class="form-control form-control-md">
                                                {{ author.name }}
                                            </option>
                                        </select> -->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabelLg" class="col-sm-12 col-form-label col-form-label-md">Categories</label>
                                    <div class="col-sm-12">
                                        <!-- <select v-model="book.categorieId" name="categorie_id" class="form-control form-control-md">
                                            
                                            <option  v-for="item in items" :key="item.id" :value="item.id" class="form-control form-control-md">
                                                {{ item.name }}
                                            </option>
                                        </select> -->
                                    </div>
                                </div>

                                <div class="form-group row">
                                        <label for="colFormLabelLg" class="col-sm-12 col-form-label col-form-label-md">Date d'edition</label>
                                        <div class="col-sm-12">
                                                <!-- <input class="form-control form-control-md" id="datepicker" name="edition_date"/>  -->
                                        </div>
                                </div>

                                <div class="form-group row">
                                            <label for="colFormLabelLg" class="col-sm-12 col-form-label col-form-label-md">Charge le fichier</label>
                                            <div class="col-sm-12">
                                                    <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile" name="file_link" accept="application/pdf">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>      
                                            </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button v-on:click="postEpreuve" type="button" class="btn btn-primary" >Enregistrer</button>
                    </div>
                </form>
                <div v-if="submited"> 
                    <h5 class="text-success">livre ajouté</h5>
                </div>
            </div>
        </div>
    </div>
</body>
</template>


<script>
// import Navbar from './Navbar';
// import Footer from './Footer';

   
export default {

    components:{
        // 'app-navbar' : Navbar,
        // 'app-footer' : Footer,
    },

    data() {
        return {
            id:this.$route.params.id,  
            matieres:[],
            epreuves: [],
            submited:false,
           
           
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
        },

        postEpreuve:function(event){
            console.log(12)
        }
    },
}
</script>