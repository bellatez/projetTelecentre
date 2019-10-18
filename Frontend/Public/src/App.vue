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
            <a class="nav-link" href="#">S'enreigistrer</a>
          </li>
          <li class="nav-item mr-auto">
            <a class="nav-link" href="#"> <i class="fa fa-refresh"></i>Vidéo de Présentation</a>
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
        <div class="col-md-3"></div>
        <div class="col-md-1 buea"><img src="@/assets/logo/buea.jpg"></div>
        <div class="col-md-1 ndere"><img src="@/assets/logo/ndere.jpg"></div>
        <div class="col-md-1 giz"><img src="@/assets/GIZ-logo.png"></div>
        <div class="col-md-1 activspaces"><img src="https://www.activspaces.com/wp-content/uploads/2019/01/ActivSpaces-Logo_Dark-300x300.png"></div>
        <div class="col-md-1 minddevel"><img src="@/assets/logo/minddevel.jpg"></div>
        <div class="col-md-1 minpostel"><img src="@/assets/logo/minpostel.jpg"></div>
        <div class="col-md-4"></div>
      </div>
      <!-- <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3 p-2">
        </div>
        <div class="col-md-1 buea"><img src="@/assets/logo/buea.jpg"></div>
        <div class="col-md-1 ndere"><img src="@/assets/logo/ndere.jpg"></div>
        <div class="col-md-1 giz"><img src="@/assets/GIZ-logo.png"></div>
        <div class="col-md-1 activspaces"><img src="https://www.activspaces.com/wp-content/uploads/2019/01/ActivSpaces-Logo_Dark-300x300.png"></div>
        <div class="col-md-1 minddevel"><img src="@/assets/logo/minddevel.jpg"></div>
        <div class="col-md-1 minpostel"><img src="@/assets/logo/minpostel.jpg"></div>
        <div class="col-md-2"></div>
      </div> -->
    </footer>
  </v-app>
</template>

<style>
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

  @media screen and (max-width: 767px) {
    .descript-title {
      display: none;
    }
  }
</style>

<script>

export default {
  name: 'App',
};
</script>
