<template>
    <body>
        <app-navbar></app-navbar>
        <br><br><br><br>
        <main role="main">
            <div class="container">
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row"  >
                            <div class="col-md-4" v-for="(exam, index) in examens" :key="index">
                                    <div class="card mb-4 shadow-sm">
                                            <div class="card-body">
                                                    <p class="card-text">{{exam.title}}</p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                            <div class="btn-group right">                                                                                                       
                                                                <router-link :to="{name: 'epreuves', params: {id: exam.id }}">Voir</router-link>
                                                            </div>
                                                    </div>
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
            examens:[],
            id : null,
        }
    },
    
    methods:{
       
    },

    created() {
        this.$http.get('http://localhost:9000/library/examen/index').then(function(data){
            this.examens = data.body;
        });
    },

}
</script>


<style  scoped>
    
</style>