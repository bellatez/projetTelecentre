<template>
  <div class="container mt-10 py-3 footers">
      <div class="row footer">
        <div class="col-md-1"></div>
        <div class="col-md-3 p-2">
          Powered by:
        </div>
        <div class="col-md-1 buea"><img src="../assets/logo/buea.jpg"></div>
        <div class="col-md-1 ndere"><img src="../assets/logo/ndere.jpg"></div>
        <div class="col-md-1 giz"><img src="../assets/GIZ-logo.png"></div>
        <div class="col-md-1 activspaces"><img src="https://www.activspaces.com/wp-content/uploads/2019/01/ActivSpaces-Logo_Dark-300x300.png"></div>
        <div class="col-md-1 minddevel"><img src="../assets/logo/minddevel.jpg"></div>
        <div class="col-md-1 minpostel"><img src="../assets/logo/minpostel.jpg"></div>
        <div class="col-md-2"></div>

    </div>
  </div>
</template>
<script>

export default {
  name: 'TheFooter',
  components: {

  }
}
</script>
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
