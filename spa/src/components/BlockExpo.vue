<template>
  <div class="block-expo container">
    <div class="expo">
      <div class="expo__title">
        <h1>Выставка легко </h1>
        <b>—</b>
      </div>
      <p class="expo__subtitle">организатор выставок<br>
        и конференций любой сложности<br>
        и любого профиля</p>
      <div class="expo__list">
        <ul>
          <li>Не хотите быть «как все», но не можете придумать креативную идею стенда?</li>
          <li>Ни разу не участвовали в выставках и не знаете, с чего начать?</li>
          <li>Нет времени на составление брифов, поиск подрядчиков, многочасовые совещания
            и отслеживание всех нюансов успешной выставки?
          </li>
        </ul>
      </div>

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
  .block-expo {
    display:    flex;
    margin-top: 40px;
  }
  .expo {
    width:      65%;
    margin-top: 50px;
  }
  .expo__title {
    display: flex;
  }
  .expo__title h1 {
    font-size:    46px;
    line-height:  60px;
    margin:       0;
    margin-right: 15px;
  }
  .expo__title b {
    font-size: 32px;
    margin:    auto 0;
  }
  .expo__subtitle {
    font-size:   44px;
    line-height: 64px;
    margin:      0;
  }
  .expo__list {
    font-size:   19px;
    line-height: 33px;
    margin-top:  35px;
  }
  .expo__list ul {
    list-style: none;
    padding:    0;
    margin:     0;
  }
  .expo__list li {
    padding-left: 20px;
    position: relative;
  }
  .expo__list li:before {
    position: absolute;
    top: 10px;
    left: 0;
    content: "";
    width: 10px;
    height: 10px;
    background-color: #0075FF;
    border-radius: 100%;

  }
  .expo__welcome {
    font-size:   19px;
    font-weight: bold;
    color:       #0075FF;
    margin-top:  35px;
  }
  .foto {
    width:    35%;
    position: relative;
  }
  .foto__img {
    max-width: 164%;
    position:  absolute;
    top:       -20px;
    left:      -5px;
  }
</style>
