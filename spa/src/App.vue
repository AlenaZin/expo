<template>
  <div id="app">
    <Header/>
    <BlockExpo/>
    <About/>
    <Project3D/>
    <Services/>
    <Express/>
    <Working/>
    <Advantage/>
    <Review/>
    <Request/>
    <Footer/>
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
  import Advantage from './components/Advantage';
  import Review from './components/Review';
  import Footer from './components/Footer';
  import Request from './components/Request';


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
      Advantage,
      Review,
      Footer,
      Request,
    },
  };
</script>


<style>
  #app {
    margin-top:    25px;
  }
</style>
