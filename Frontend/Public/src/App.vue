<template>
  <v-app>
    <v-app-bar app>
      <v-toolbar-title class="headline text-uppercase">
        <span>CMCC</span>
        <span class="font-weight-light">Digital Platform</span>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn
        text
        href="https://github.com/vuetifyjs/vuetify/releases/latest"
        target="_blank"
      >
        <span class="mr-2">Login</span>
      </v-btn>
    </v-app-bar>

    <v-content>
    </v-content>
    <router-view></router-view>
  </v-app>
</template>

<script>
/* eslint-disable */
export default {
  name: 'App',
};
</script>
