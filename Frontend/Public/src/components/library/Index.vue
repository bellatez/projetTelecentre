<template>
    <body>
        <main role="main" style="margin-top: 50px;">
            <div class="container">
                <div class="jumbotron p-4 p-md-5 text-white rounded " style="background-color: rgb(150, 50, 98)">
                    <div class="col-md-6 px-0">
                        <h4 class="display-6 font-italic">bibliotheuqe numerique</h4>
                        <p class="lead my-3">Retrouve les livres et les sujets des examens tels que Bac, Probatoire, B.E.P.C et bien d'autres.</p>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: white">
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
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: white">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h1 class="mb-0">Epreuves</h1>
                                <div class="mb-1 text-muted">Nov 11</div>
                                <p class="mb-auto">Retrouvez les anciens sujets.</p>
                                <h4 class="d-inline-block mb-2 text-primary"><router-link to="/epreuves" class="stretched-link text-primary">Traitez les epreuves</router-link></h4>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img src="@/assets/images/exam.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: white">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h1 class="mb-0">Wikipedia</h1>
                                <h4 class="d-inline-block mb-2 text-primary"><a href="https://fr.wikipedia.org/wiki/Accueil" class="stretched-link text-primary">Utiliser Wikipedia pour votre recherche</a></h4>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img src="@/assets/images/wikipedia.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>
</template>

<script>

export default {
    data () {
        return {

        }
    },
}
</script>

<style scoped>
    body {
        background-color: gainsboro;
        /* background-color: rgb(150, 50, 98); */
        /* margin: 0; */
    }
</style>
