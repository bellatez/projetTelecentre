<template>
  <v-app>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <router-link to="/" class="navbar-brand" href="#">CMCC 
        <small class="mb-5">
           Centre Des Reseaux Communataires Du Cameroun
        </small>
      </router-link>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <svg aria-hidden="true" height="32" width="32" focusable="false" data-prefix="fab" data-icon="windows" class="svg-inline--fa fa-windows fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M0 93.7l183.6-25.3v177.4H0V93.7zm0 324.6l183.6 25.3V268.4H0v149.9zm203.8 28L448 480V268.4H203.8v177.9zm0-380.6v180.1H448V32L203.8 65.7z"></path></svg>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ml-auto" >
          <li class="nav-item px-5">
              <a href="#" class="nav-link disabled btn btn-outline-success btn-sm my-2 my-sm-0">
                  <svg id="Layer_1" height="18" viewBox="0 0 128 128" width="32" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m95.424 114.4h-57.757a1.75 1.75 0 0 1 -1.75-1.75v-97.3a1.75 1.75 0 0 1 1.75-1.75h57.757a1.75 1.75 0 0 1 1.75 1.75v38.65a1.75 1.75 0 1 1 -3.5 0v-36.9h-54.257v93.8h54.257v-36.9a1.75 1.75 0 0 1 3.5 0v38.65a1.75 1.75 0 0 1 -1.75 1.75z" fill="#12304c"/><path d="m46.883 121.5-39.807-17.692v-79.616l39.807-17.692z" fill="#fb4a59"/><g fill="#12304c"><path d="m13.076 97.083a1.75 1.75 0 0 1 -1.75-1.75v-28.666a1.75 1.75 0 0 1 3.5 0v28.666a1.75 1.75 0 0 1 -1.75 1.75z"/><path d="m122.162 62.763-12.51-12.511a1.75 1.75 0 0 0 -2.475 2.475l9.523 9.523h-53.276a1.75 1.75 0 0 0 0 3.5h53.276l-9.523 9.523a1.75 1.75 0 1 0 2.475 2.475l12.51-12.511a1.749 1.749 0 0 0 0-2.474z"/><path d="m47.837 5.032a1.758 1.758 0 0 0 -1.665-.132l-39.807 17.693a1.751 1.751 0 0 0 -1.039 1.6v79.615a1.751 1.751 0 0 0 1.039 1.6l6 2.668a1.75 1.75 0 0 0 1.422-3.2l-4.961-2.206v-77.34l36.307-16.138v16.949a1.75 1.75 0 0 0 3.5 0v-19.641a1.751 1.751 0 0 0 -.796-1.468z"/><path d="m46.883 49.75a1.75 1.75 0 0 0 -1.75 1.75v67.308l-22.612-10.051a1.75 1.75 0 0 0 -1.422 3.2l25.073 11.143a1.75 1.75 0 0 0 2.461-1.6v-70a1.75 1.75 0 0 0 -1.75-1.75z"/><path d="m46.883 33.583a1.75 1.75 0 0 0 -1.75 1.75v6.917a1.75 1.75 0 0 0 3.5 0v-6.917a1.75 1.75 0 0 0 -1.75-1.75z"/></g></svg>
                  <span>
                    S'enreigistrer
                </span>
              </a>
          </li>
          <li class="nav-item">
              <a href="http://localhost/design-test" class="nav-link btn btn-outline-success btn-sm my-2 my-sm-0">
                  <span><i class="fas fa-sync"></i>
                    Vidéo de présentation
                  </span>
              </a>
          </li>
        </ul>
      </div>
    </nav>
    <v-content>
    </v-content>
    <router-view></router-view>
      <div class="row footer">
        <div class="col-md-1"></div>
        <div class="col-md-3 p-2">
          Powered by:
        </div>
        <div class="col-md-1 buea"><img src="@/assets/logo/buea.jpg"></div>
        <div class="col-md-1 ndere"><img src="@/assets/logo/ndere.jpg"></div>
        <div class="col-md-1 giz"><img src="@/assets/GIZ-logo.png"></div>
        <div class="col-md-1 activspaces"><img src="https://www.activspaces.com/wp-content/uploads/2019/01/ActivSpaces-Logo_Dark-300x300.png"></div>
        <div class="col-md-1 minddevel"><img src="@/assets/logo/minddevel.jpg"></div>
        <div class="col-md-1 minpostel"><img src="@/assets/logo/minpostel.jpg"></div>
        <div class="col-md-2"></div>
      </div>
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
