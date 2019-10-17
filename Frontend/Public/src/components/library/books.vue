<template>
    <body>
        <main role="main">
            <div class="container">
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
                                <ul class="list-group list-group-flush" v-for="(item, index) in items" :key="index">
                                    <li class="list-group-item"><a href="#" :id="item.id" @click="getId">{{item.name}}</a></li>
                                </ul>
                            </div>
                            <div class="col-md-7">
                                <h4>Liste des lives disponibles</h4>
                                <div v-if="books.length > 0"> 
                                    <div class="card" v-for="(book, index) in books" :key="index"> 
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 mt-3">
                                                    <div class="card">
                                                        <div class="card-horizontal" style="display: flex; flex: 1 1 auto;" >
                                                            <div class="img-square-wrapper" style="" id="imagSetText" v-randomColor>
                                                                <!-- <img class="" src="http://via.placeholder.com/200x300" alt="Card image cap"> -->
                                                                <img class="" src="@/assets/images/cover-200x300.png" >
                                                                <div class="text-block">
                                                                    <small >{{book.title}}</small>
                                                                    <br>
                                                                    <small><strong>{{book.name}}</strong> </small>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <h4 class="card-title">{{book.title}}</h4>
                                                                <p class="card-text">{{book.comments}}.</p>
                                                                <h4><a v-bind:href="'http://localhost:9000/storage/files/livres/'+book.file_links" target="_blank">Lire</a></h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small class="text-muted">Last updated {{book.created_at}}</small>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div v-else>
                                    <h5>pas des livres disponibles</h5>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <h4>Oprations</h4>
                                <ul class="list-group list-group-flush">
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#MaddCategories">
                                        Ajouter Une categorie
                                    </button>
                                    <hr>
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#MaddAuteur">
                                        Ajouter Un auteur
                                    </button>
                                    <hr>
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#MaddBooks">
                                        Ajouter Un livre
                                    </button>
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

    

        <!-- Modal categories -->
        <div class="modal fade" id="MaddCategories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" id="addCat">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter une categorie</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="">

                        <div class="modal-body">
                            <div class="row">
                                <form class="col-md-12">
                                    <div class="form-group row">
                                            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-md">Categorie</label>
                                            <div class="col-sm-12">
                                                <input v-model="nameCat" type="title"  class="form-control form-control-md" id="colFormLabelLg" placeholder="Science-fiction, roman graphique, ..." required>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button v-on:click="postCategorie" type="button" class="btn btn-primary" data-dismiss="modal">Enregistrer</button>
                        </div>
                    </form>
                    <div v-if="submited"> 
                        <h5>categorie ajoutée</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Auteur -->
        <div class="modal fade" id="MaddAuteur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" id="addAut">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un Auteur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="">

                        <div class="modal-body">
                            <div class="row">
                                <form class="col-md-12">
                                    <div class="form-group row">
                                            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-md">Auteur</label>
                                            <div class="col-sm-12">
                                                <input v-model="nameAut" type="title"  class="form-control form-control-md" id="colFormLabelLg" placeholder="Guillaume Oyônô Mbia" required>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button v-on:click="postAuteur" type="button" class="btn btn-primary" data-dismiss="modal">Enregistrer</button>
                        </div>
                    </form>
                    <div v-if="submited"> 
                        <h5 class="text-success">auteur ajouté</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Books -->
        <div class="modal fade modal-md" id="MaddBooks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <input v-model="book.title" type="text"  class="form-control form-control-md" id="colFormLabelLg" placeholder="Guillaume Oyônô Mbia" required>
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="colFormLabelLg" class="col-sm-12 col-form-label col-form-label-md">Auteur</label>
                                        <div class="col-sm-12">               
                                            <select v-model="book.auteurId" name="auteur_id" class="form-control form-control-md">
                                                <option  v-for="author in authors" :key="author.id" :value="author.id" class="form-control form-control-md">
                                                    {{ author.name }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="colFormLabelLg" class="col-sm-12 col-form-label col-form-label-md">Categories</label>
                                        <div class="col-sm-12">
                                            <select v-model="book.categorieId" name="categorie_id" class="form-control form-control-md">
                                            
                                                <option  v-for="item in items" :key="item.id" :value="item.id" class="form-control form-control-md">
                                                    {{ item.name }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                            <label for="colFormLabelLg" class="col-sm-12 col-form-label col-form-label-md">Date d'edition</label>
                                            <div class="col-sm-12">
                                                    <input v-model="book.dateEdition" class="form-control form-control-md" id="datepicker" name="edition_date"/> 
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="colFormLabelLg" class="col-sm-12 col-form-label col-form-label-md">Commentaire</label>
                                            <div class="col-sm-12">
                                                    <input v-model="book.comments" class="form-control form-control-md" id="commens" name="edition_date"/> 
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                            <label for="colFormLabelLg" class="col-sm-12 col-form-label col-form-label-md">Charge le fichier</label>
                                            <div class="col-sm-12">
                                                <div class="custom-file">
                                                    <input type="file" id="file" ref="file" v-on:change="handleFileUpload()"/>
                                                </div>      
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button v-on:click="postBook" type="button" class="btn btn-primary" data-dismiss="modal">Enregistrer</button>
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
import axios from 'axios';
import Vue from 'vue';
Vue.directive('randomColor', {
    bind(el){
        el.style.background = "#"+ Math.random().toString().slice(2,8);
    }
});


export default {
    components:{
        
    },

    props:['dones'],
    
    data() {
        return {
            items: [],
            books: [],
            authors: [],
            nameCat: "",
            nameAut: "",
            submited:false,
            book:{
                title:"",
                auteurId:null,
                categorieId:null,
                dateEdition:"",
                file_links:"",
                comments:""
            },
            file:'',
        }
    },
    
    created() {
       
        axios.get('http://localhost:9000/library/livres/index').then((response) => {
            this.books = response.data.books;
            this.items = response.data.categories;
            this.authors = response.data.authors;
        })
    },

    methods: {
        getId:function(event){
            axios.get('http://localhost:9000/library/categories/show/' + event.target.id).then((response) => {
                this.books = response.data.books;
            });
        },

      

        postCategorie:function(){
            axios.post('http://localhost:9000/library/categories/store', {
                title: this.nameCat,
            })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
        },

        postAuteur:function(){
            axios.post('http://localhost:9000/library/author/store', {
                title: this.nameAut,
            })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
        },

        

        postBook:function(){
            axios.post('http://localhost:9000/library/livres/store',{
                title: this.book.title,
                auteur_id: this.book.auteurId,
                categorie_id: this.book.categorieId,
                edition_date: this.book.dateEdition,
                file_link: this.book.file_links,
                comments: this.book.comments,
                
            }).then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
        },

        handleFileUpload(){
            this.book.file_links = this.$refs.file.files[0];
           // console.log(this.book.file_links);
        },


    }

    

}

</script>


<style scoped>
    #imagSetText{
     
        position: relative;
        font-family: Arial;
    }

    .text-block {
    position: absolute;
    top: 20px;
    left: 10px;
    background-color: transparent;
    color: white;
    padding-left: 20px;
    padding-right: 20px;
    }

    body {
        background-color: gainsboro;
        /* background-color: rgb(150, 50, 98); */
        /* margin: 0; */
    }
    
</style>
