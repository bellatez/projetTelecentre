<template>
  <v-app style="background:#e2e2e2">
    <nav class="navbar navbar-expand-sm navbar-custom bg-custom" style="height: 60px;">
      <a class="navbar-brand  text-white" href="#">CMCC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="inner ml-auto">
        <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link active text-white" href="#">HOME</a>
          <a class="nav-link text-white" href="#">CONNECTION</a>
          <a class="nav-link text-white" href="#">INSCRIPTION</a>
        </nav>
      </div>
    </nav>
    <section class="container-fluid subnav ">
      <div class="row">
        <div class="col- bg-success subnav-H">
          <img src="@/assets/img/undraw_broadcast_jhwxs.svg" class="" alt="" style="height: 50.455px; width:100%; max-width: 100%; margin-top: 8%;">
          <h6 class="text-white text-center" style="margin-top: -15%">INTERNET</h6>
        </div>

        <div class="col- bg-info subnav-H">
          <a href="http://192.168.8.101/aurora-files">
            <img src="@/assets/img/cloud2.png" class="" alt="" style="height: 50.455px; width:50%; max-width: 100%; margin-top: 0; margin-rigth:10px%;">
            <h6 class="text-white text-center" style="margin-top: -15%">DOCUMENT STORAGE</h6>
          </a>
        </div>

        <div class="col- bg-danger subnav-H">
          <img src="@/assets/img/undraw_social_growth_d0y3.svg" class="" alt="" style="height: 50.455px; width:100%; max-width: 100%; margin-top: 8%;">
          <h6 class="text-white text-center" style="margin-top: -15%">APPLICATION</h6>
        </div>
      </div>
    </section>
    <v-content>
    </v-content>
    <router-view></router-view>
    <footer class="mastfoot mt-auto text-center">
      <div class="inner">
        <footer class="container-fluid footer">
          <small class="p-1 mt-3 lead">Powered by: <a href="https://getbootstrap.com/">GIZ / PRADEC </a>, Team </small>
          <div class="row text-center border-top p-3">
            <div class="col-md-3"></div>
            <div class="col-md-1 col-2 buea"><img src="@/assets/img/logo/buea.jpg" class="border-r-circle"  style="width: 52px"></div>
            <div class="col-md-1 col-2 ndere"><img src="@/assets/img/logo/ndere.jpg" class="border-r-circle"></div>
            <div class="col-md-1 col-2 giz"><img src="@/assets/img/logo/GIZ-logo.png" class="border-r-circle"></div>
            <div class="col-md-1 col-2 activspaces"><img src="https://www.activspaces.com/wp-content/uploads/2019/01/ActivSpaces-Logo_Dark-300x300.png" class="border-r-circle"></div>
            <div class="col-md-1 col-2 minddevel"><img src="@/assets/img/logo/minddevel.jpg" class="border-r-circle"></div>
            <div class="col-md-1 col-2 minpostel"><img src="@/assets/img/logo/minpostel.jpg" class="border-r-circle"></div>
          </div>
        </footer>
      </div>
    </footer>
  </v-app>
</template>
<style lang="css">
  @import './style.css';

</style>

<script>

export default {
  name: 'App',
};
</script>
