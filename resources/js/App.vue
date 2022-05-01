
<template>
<!-- Nav bar -->
  <!-- <laravelNav/>   -->
  <!-- The content which is displayed  when you visite available link-->
<router-view></router-view>
</template>
<script>
import Navbar from './components/Navbar.vue'
import laravelNav from './components/laraveNav.vue'
export default {
     components: {
Navbar,laravelNav
  
  },
}
</script>
<style>
</style>