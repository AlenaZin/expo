<template>
  <div id="app">
    <Header/>
    <BlockExpo/>
    <About/>
  </div>
</template>


<script>
  import Header from './components/Header';
  import BlockExpo from './components/BlockExpo';
  import About from './components/About';

  export default {
    name: 'app',
    components: {
      Header,
      BlockExpo,
      About,
    },
  };
</script>


<style>
  #app {
    margin-top:    25px;
  }
</style>
