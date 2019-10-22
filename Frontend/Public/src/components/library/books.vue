<template>
    <body>
        <main role="main">
            <div class="container" style="margin-top:150px">
                <div class="album py-5 bg-light">
                    <div class="container" >
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
                                                        <div class="card-horizontal row" >
                                                            <div class="img-square-wrapper col-md-4" style="" id="imagSetText" v-randomColor>
                                                                <!-- <img class="" src="http://via.placeholder.com/200x300" alt="Card image cap"> -->
                                                                <img class="" src="@/assets/images/cover-200x300.png" >
                                                                <div class="text-block">
                                                                    <small >{{book.title}}</small>
                                                                    <br>
                                                                    <small><strong>{{book.name}}</strong> </small>
                                                                </div>
                                                            </div>
                                                            <div class="card-body col-md-8">
                                                                <h4 class="card-title">{{book.title}}</h4>
                                                                <p class="card-text">{{book.comments}}.</p>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <router-link v-bind:to="'/reader/'+ book.id" >Lire </router-link>

                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h4><a v-bind:href="book.file_links" target="_blank">Imprimer</a></h4>

                                                                    </div>
                                                                </div>
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

                        </div>
                    </div>
                </div>
            </div>
        </main>
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

        axios.get('http://0.0.0.0:3000/community/library/livres/index').then((response) => {
            this.books = response.data.books;
            this.items = response.data.categories;
            this.authors = response.data.authors;
        })
    },

    methods: {
        getId:function(event){
            axios.get('http://0.0.0.0:3000/community/library/categories/show/' + event.target.id).then((response) => {
                this.books = response.data.books;
            });
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
