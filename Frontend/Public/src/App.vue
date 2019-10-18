<template>
  <v-app>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <router-link to="/" class="navbar-brand" href="#"><strong class="lead"> <img src="@/assets/icon.png" class="" alt="..." style="height: 35px; width: 35px"> CMCC</strong>
        <small class="mb-5 small">
           Centre Des Reseaux Communataires Du Cameroun
        </small>
      </router-link>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <svg aria-hidden="true" height="32" width="32" focusable="false" data-prefix="fab" data-icon="windows" class="svg-inline--fa fa-windows fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M0 93.7l183.6-25.3v177.4H0V93.7zm0 324.6l183.6 25.3V268.4H0v149.9zm203.8 28L448 480V268.4H203.8v177.9zm0-380.6v180.1H448V32L203.8 65.7z"></path></svg>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ml-auto" >
          <li class="nav-item px-5">
            <router-link to="/register" class="nav-link btn btn-outline-success btn-sm my-2 my-sm-0">
                  <span>
                    S'enreigistrer
                </span>
            </router-link>
          </li>
          <li class="nav-item">
              <router-link to="/" href="http://localhost/design-test" class="nav-link btn btn-outline-success btn-sm my-2 my-sm-0">
                  <span><i class="fas fa-sync"></i>
                    Vidéo de présentation
                  </span>
              </router-link>
          </li>
        </ul>
      </div>
    </nav>
    <v-content>
    </v-content>
    <router-view></router-view>
    <footer class="footer bg-dark">
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
</style>

<script>

export default {
  name: 'App',
};
</script>
