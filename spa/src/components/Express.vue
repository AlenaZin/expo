<template>
  <div class="express container">
    <div class="express__text">
      <p class="express__title">До выставки осталось меньше 4 недель, а у Вас ничего не готово?</p>
      <p class="express__subtitle">Нет ничего невозможного!</p>
      <p class="express__sum">Надбавка за срочность 30 000 руб.</p>
    </div>
    <div class="express__image">
      <img src="~@/assets/images/express.png">
    </div>
    <div class="express__button">
      <button class="express__button_text">Оставить заявку</button>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Express',
  };
</script>

<style scoped>
  .express {
    display: flex;
    margin-top: 50px;
  }
  .express__text {
    width: 43%;
  }
  .express__title {
    font-weight: bold;
    font-size:   24px;
    line-height: 100%;
    margin: 15px 0;
  }
  .express__subtitle {
    margin: 0;
    font-weight: bold;
    font-size: 18px;
    line-height: 27px;
  }
  .express__sum {
    margin: 0;
    font-size: 18px;
    line-height: 27px;
  }
  .express__image {
    margin-left: 15px;
    margin-right: 55px;
  }
  .express__button {
    margin: auto 0;
  }
  .express__button_text {
    border-radius: 27px;
    width: 216px;
    height: 54px;
    font-weight: bold;
    font-size: 18px;
    line-height: 27px;
    color: #0075FF;
    border: 1px solid #0075FF;
    background: #FFFFFF;
  }
</style>