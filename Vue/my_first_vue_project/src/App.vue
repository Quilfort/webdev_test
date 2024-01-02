<script setup>
import HelloWorld from './components/HelloWorld.vue'
import ReactiveData from './components/ReactiveData.vue'
</script>

<template>
  <header>
    <img alt="Q logo" class="logo" src="./assets/Logo_Q.png" width="250" height="250" />

    <div class="wrapper">
      <HelloWorld msg="Quilfort.co" />
    </div>
  </header>

  <main>
    <ReactiveData />
  </main>
</template>

<style scoped>
header {
  line-height: 1.5;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }
}
</style>
