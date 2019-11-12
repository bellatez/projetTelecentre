<template>
    <v-app>
        <div class="container-fluid">
            <div class="container card">
                <div class="row card-body">
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
    </v-app>
</template>


<script>
import axios from 'axios';

export default {
    components:{

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
        axios.get('http://164.132.99.169:8000/community/library/examen/index').then((response)=>{
            this.examens = response.data;
        });
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
