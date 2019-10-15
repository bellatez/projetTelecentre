<template>
  <div id="app">
    <TheNav />
    <router-view/>
    <TheFooter />
  </div>
</template>

<script>
import TheNav from '@/components/TheNav'
import TheFooter from '@/components/TheFooter'

export default {
  name: 'app',
  components: {
    TheNav,
    TheFooter,
  }
}
</script>
