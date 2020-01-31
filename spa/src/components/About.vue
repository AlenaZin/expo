<template>
  <div class="block-about">
    <div class="about container">
      <div class="about__title">
        <h2>Обо мне</h2>
      </div>
      <div class="about__info">
        <div class="about__text">
          <p>Что может быть лучше, когда ты получаешь удовольствие от своей работы? Все свое время я стараюсь
            реализовывать свои идеи и выставки это прямое доказательство. Маленькая идея/концепция на первый взгляд в
            итоге превращается в необычный стенд, который привлекает посетителей выставки и оставляет положительные
            эмоции. Вот это настоящий кайф! Видеть воочию свое «детище», в которое вложил идеи, эмоции и душу!</p>
        </div>
        <div class="about__info_statistics">
          <div class="about__info_expo">
            <p class="about__info_text">Опыт<br>работы</p>
            <p class="about__info_experience font-fira">5 лет</p>
          </div>
          <div class="about__info_expo">
            <p class="about__info_text">Федеральные<br>выставки</p>
            <P class="about__info_experience font-fira">15+</P>
          </div>
          <div class="about__info_expo">
            <p class="about__info_text">Региональные<br>выставки</p>
            <P class="about__info_experience font-fira">40+</P>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'About',
  };
</script>

<style scoped>
  .block-about {
    height: 740px;
    margin-top: 100px;
    background: url("~@/assets/images/about.png") no-repeat;
  }
  .about {
    display: flex;
    padding-top: 194px;
  }
  .about__title {
    width: 30%;
  }
  .about__title h2 {
    font-size: 44px;
    margin: 0;
    margin-top: -10px;
  }
  .about__info {
    width: 70%;
  }
  .about__info_statistics {
    display: flex;
    margin-top: 40px;
  }
  .about__text p {
    font-size: 18px;
    line-height: 27px;
    margin-top: 12px;
  }
  .about__info_expo {
    margin-right: 103px;
    width: 20%;
  }
  .about__info_text {
    font-weight: bold;
    font-size: 22px;
    line-height: 29px;
  }
  .about__info_experience {
    font-size: 64px;
    line-height: 64px;
    color: #0075FF;
  }
</style>