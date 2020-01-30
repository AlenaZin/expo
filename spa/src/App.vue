<template>
  <div id="app">
    <Header/>
    <BlockExpo/>
  </div>
</template>


<script>
  import Header from './components/Header';
  import BlockExpo from './components/BlockExpo';

  export default {
    name: 'app',
    components: {
      Header,
      BlockExpo,
    },
  };
</script>


<style>
  #app {
    margin-top:    25px;
  }
</style>
