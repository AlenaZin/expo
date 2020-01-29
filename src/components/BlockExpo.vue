<template>
  <div id="block-expo">
    <div class="expo">
      <h1 class="expo__title">Выставка легко —</h1>
      <p class="expo__subtitle">организатор выставок и конференций любой сложности и любого профиля</p>
      <ul class="expo__list">
        <li class="expo__list_paragraph">Не хотите быть «как все», но не можете придумать креативную идею стенда?</li>
        <li class="expo__list_paragraph">Ни разу не участвовали в выставках и не знаете, с чего начать?</li>
        <li class="expo__list_paragraph">Нет времени на составление брифов, поиск подрядчиков, многочасовые совещания
          и отслеживание всех нюансов успешной выставки?</li>
      </ul>
      <p class="expo__welcome">Здравствуйте! Меня зовут Сергей, и я решу Ваши проблемы.</p>
    </div>
    <div class="foto">
      <img class="foto__img" src="~@/assets/images/ExpoSerg.png"/>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'BlockExpo',
  };
</script>

<style scoped>
  #block-expo {
    display: flex;
    margin-top: 30px;
  }
  .expo {
    width: 60%;
  }
  .expo__title {
    font-size: 40px;
    line-height: 94px;
    margin-left: 0;
  }
  .expo__subtitle {
    font-size: 40px;
    line-height: 94px;
    margin-left: 0;
  }

  .foto {
    width: 40%;
  }
  .foto__img {
    max-width: 561px;
  }
</style>
