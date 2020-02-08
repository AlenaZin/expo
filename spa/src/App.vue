<template>
  <div id="app">
    <Header/>
    <BlockExpo/>
    <About/>
    <Project3D/>
    <Services/>
    <Express/>
    <Working/>
  </div>
</template>


<script>
  import Header from './components/Header';
  import BlockExpo from './components/BlockExpo';
  import About from './components/About';
  import Project3D from './components/Project3D';
  import Services from './components/Services';
  import Express from './components/Express';
  import Working from './components/Working';

  export default {
    name: 'app',
    components: {
      Header,
      BlockExpo,
      About,
      Project3D,
      Services,
      Express,
      Working,
    },
  };
</script>


<style>
  #app {
    margin-top:    25px;
  }
</style>
