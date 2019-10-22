<template>
  <v-app>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
      <router-link to="/" class="navbar-brand text-white lead"><img src="@/assets/icon.png" alt="" style="height: 32px; width: 32px;"> CMCC </router-link>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mr-auto" id="navbarsExample05">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <router-link to="/" class="nav-link descript-title">Centre des Réseaux Communautaires du Cameroun <span class="sr-only">(current)</span></router-link>
          </li>
          <li class="nav-item mr-auto">
            <a class="nav-link" href="#"><v-icon class="text-white">fa fa-film</v-icon> Vidéo de Présentation</a>
          </li>
           <!-- <li class="nav-item mr-auto">
            <a class="nav-link" href="@assets/mctdigitalize.apk"> Téléchargez l'application mobile</a>
          </li> -->
        </ul>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item mr-auto">
            <a class="nav-link text-white" href="http://164.132.99.169:8081"><v-icon class="text-white">fas fa-user-plus</v-icon> Inscription</a>
          </li>
          <li class="nav-item mr-auto">
            <a class="nav-link text-white" href="http://164.132.99.169:8081"><v-icon class="text-white">fas fa-sign-in-alt</v-icon> Connexion</a>
          </li>
        </ul>

        <ul class="navbar-nav mr-auto">
          <li class="nav-item mr-auto sidebar-link">
            <a class="nav-link text-white" href="http://164.132.99.169:8081"> Connexion Internet</a>
          </li>
          <li class="nav-item mr-auto sidebar-link">
            <a class="nav-link text-white" href="http://164.132.99.169:8081"> Garde Document</a>
          </li>
          <li class="nav-item mr-auto sidebar-link">
            <a class="nav-link text-white" href="http://164.132.99.169:8081"> Application</a>
          </li>
        </ul>
      </div>
    </nav>
    <v-content>
    </v-content>
    <router-view></router-view>
    <footer class="container-fluid footer bg-dark">
      <h4 class=" mt-3 text-white text-center">Powered by:</h4>
      <div class="row text-center">
        <div class="col-md-3 col-xs-3 col-sm-3"></div>
        <div class="col-md-1 col-sm-1 col-xs-1 buea"><img src="@/assets/logo/buea.jpg" class="rounded-circle"></div>
        <div class="col-md-1 col-sm-1 col-xs-1 ndere"><img src="@/assets/logo/ndere.jpg" class="rounded-circle"></div>
        <div class="col-md-1 col-sm-1 col-xs-1 giz"><img src="@/assets/GIZ-logo.png" class="rounded-circle"></div>
        <div class="col-md-1 col-sm-1 col-xs-1 activspaces"><img src="https://www.activspaces.com/wp-content/uploads/2019/01/ActivSpaces-Logo_Dark-300x300.png" class="rounded-circle"></div>
        <div class="col-md-1 col-sm-1 col-xs-1 minddevel"><img src="@/assets/logo/minddevel.jpg" class="rounded-circle"></div>
        <div class="col-md-1 col-sm-1 col-xs-1 minpostel"><img src="@/assets/logo/minpostel.jpg" class="rounded-circle"></div>
        <div class="col-md-3 col-sm-3 col-xs-3 "></div>
      </div>
      
    </footer>
  </v-app>
</template>

<style>
  .footers{
    height: 100px;
    margin-top: 100px;
  }
  .buea > img{
    height: 42px !important;
    width: 60px !important;
  }
  .ndere > img{
    height: 42px !important;
    width: 42px !important;
  }
  .minddevel > img{
    height: 42px !important;
    width: 42px !important;
  }
  .minpostel > img{
    height: 42px !important;
    width: 42px !important;
  }
  .activspaces > img{
    height: 42px !important;
    width: 42px !important;
  }
  .giz > img{
    height: 42px !important;
    width: 42px !important;
  }
  .sidebar-link {
    display: none;
  }
  @media screen and (max-width: 767px) {
    .descript-title {
      display: none;
    }
  }
  @media screen and (max-width: 969px) {
    .sidebar-link {
      display: block;
    }
  }
</style>

<script>

export default {
  name: 'App',
};
</script>
