<template>
    <body>
        <app-navbar></app-navbar>
        <main role="main" style="margin-top: 90px">
            <div class="container">
                <div class="jumbotron p-4 p-md-5 text-white rounded " style="background-color: rgb(150, 50, 98)">
                    <div class="col-md-6 px-0">
                        <h4 class="display-6 font-italic">bibliotheuqe numerique</h4>
                        <p class="lead my-3">Retrouve les livres et les sujets des examens tels que Bac, Probatoire, B.E.P.C et bien d'autres.</p>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <h1 class="mb-0">Livres</h1>
                                    <div class="mb-1 text-muted">Nov 12</div>
                                        <p class="mb-auto">On peut aussi s'amuser en lisant.</p>
                                        <h4 class="d-inline-block mb-2 text-primary"> <router-link to="/books" class="stretched-link text-primary">Continuez votre lecture</router-link></h4>
                                    </div>
                                <div class="col-auto d-none d-lg-block">
                                <img src="@/assets/images/books.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h1 class="mb-0">Epreuves</h1>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="mb-auto">Retrouvez les anciens sujets des examens.</p>
                            <h4 class="d-inline-block mb-2 text-success"><router-link to="/examens" class="stretched-link text-success">Traitez les epreuves</router-link></h4>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="@/assets/images/exam.jpg" alt="">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </main>
        
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
    data () {
        return {
            text: 'I am the main pages'
        }
    },
}
</script>

<style scoped>
   
</style>
