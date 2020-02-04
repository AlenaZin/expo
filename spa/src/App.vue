<template>
  <div id="app">
    <Header/>
    <BlockExpo/>
    <About/>
    <Project3D/>
    <Services/>
  </div>
</template>


<script>
  import Header from './components/Header';
  import BlockExpo from './components/BlockExpo';
  import About from './components/About';
  import Project3D from './components/Project3D';
  import Services from './components/Services';

  export default {
    name: 'app',
    components: {
      Header,
      BlockExpo,
      About,
      Project3D,
      Services,
    },
  };
</script>


<style>
  #app {
    margin-top:    25px;
  }
</style>
