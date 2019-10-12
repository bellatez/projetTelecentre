<template>
    <body>
        <app-navbar></app-navbar>
        <br><br><br><br>
        <main role="main">
            <div class="container">
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row">
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
                                                        <div class="card-horizontal" style="display: flex; flex: 1 1 auto;">
                                                            <div class="img-square-wrapper">
                                                                <img class="" src="http://via.placeholder.com/300x180" alt="Card image cap">
                                                            </div>
                                                            <div class="card-body">
                                                                <h4 class="card-title">{{book.title}}</h4>
                                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                                <a href="/storage/files/livres/book.file_links" target="_blank">Ouvrir</a>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small class="text-muted">Last updated 3 mins ago</small>
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
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#MaddBooks">
                                        Ajouter Une categorie
                                    </button>
                                    <hr>
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#MaddBooks">
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
        <div class="modal fade" id="MaddBooks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <input v-model="something" type="title" name="title" class="form-control form-control-md" id="colFormLabelLg" placeholder="Science-fiction, roman graphique, ...">
                                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            
            </div>
        </div>
        </div>
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

    props:['dones'],
    
    data() {
        return {
            items: [],
            books: []
        }
    },
    
    methods:{
        
    },

    created() {
        this.$http.get('http://localhost:9000/library/livres/index').then(function(data){
            this.books = data.body.books;
            this.items = data.body.categories;
            console.log( this.books);
           
        });
    },

    methods: {
        getId:function(event){
            console.log(event.target.id);
            this.$http.get('http://localhost:9000/library/categories/show/' + event.target.id).then(function(data){
                this.books = data.body.books;
           
            });
        },

        addBooks:function(event){
            console.log('1234');
        }
    },

}
</script>


<style  scoped>
    
</style>