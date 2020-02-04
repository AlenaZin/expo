<template>
  <div class="services container">
    <h2 class="services__title">Пакеты услуг</h2>
    <div class="services__packages">

      <div class="services__block mini">
        <p class="services__namber font-bebas">01</p>
        <h3 class="services__subtitle">Минимальный</h3>
        <ul class="services__list">
          <li>Оценка Вашего рынка, конкурентов, выставочной истории</li>
          <li>Разработка трех концепций стенда с учетом Ваших пожеланий и бюджета</li>
        </ul>
        <div class="services__result">
          <p class="services__result-text">Резульнат:</p>
        </div>
        <p class="services__result_text">Презентация с концепциями + заполенный бриф по выбранной концепции для
          обращения к застройщику</p>
        <div class="services__info">
          <p>Срок: 5 рабочих дней</p>
          <p>Стоимость: 10 000 руб.</p>
        </div>
      </div>

      <div class="services__block standard">
        <p class="services__namber font-bebas">02</p>
        <h3 class="services__subtitle">Стандартный</h3>
        <ul class="services__list">
          <li>Оценка Вашего рынка, конкурентов, выставочной истории</li>
          <li>Разработка трех концепций стенда с учетом Ваших пожеланий и бюджета</li>
          <li>Разработка 3-д модели стенда по выбранной концепции с неограниченным количеством правок, а также
            подробной сметой на застройку</li>
          <li>Круглосуточные консультации по вопросам организации выставки, заполнение документов на заезд и выезд,
            присутствие на заезде, приемка готового стенда</li>
        </ul>
        <div class="services__result">
          <p class="services__result-text">Резульнат:</p>
        </div>
        <p class="services__result_text">оригинальный стенд без проблем!</p>
        <div class="services__info">
          <p>Срок: мин. 4 недели</p>
          <p>Стоимость: 10% от стоимости стенда</p>
        </div>
      </div>

      <div class="services__block maxi">
        <p class="services__namber font-bebas">03</p>
        <h3 class="services__subtitle">Максимальный</h3>
        <ul class="services__list">
          <li>Оценка Вашего рынка, конкурентов, выставочной истории</li>
          <li>Разработка трех концепций стенда с учетом Ваших пожеланий и бюджета</li>
          <li>Разработка 3-д модели стенда по выбранной концепции с неограниченным количеством правок, а также
            подробной сметой на застройку</li>
          <li>Сопровождение всего документооборота: договор и оплата площади, договор на застройку, документы на заезд
            и выезд, дополнительные услуги, закрывающие документы по всем договорам</li>
          <li>Личное присутствие на выставке для своевременного решения любых возникающих вопросов</li>
        </ul>
        <div class="services__result">
          <p class="services__result-text">Резульнат:</p>
        </div>
        <p class="services__result_text">стенд под ключ!</p>
        <div class="services__info">
          <p>Срок: мин. 4 недели</p>
          <p>Стоимость: 15% от стоимости стенда</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Services',
  };
</script>

<style scoped>
  .services__title {
    font-size: 48px;
    line-height: 100%;
    margin-bottom: -65px;
  }
  .services__packages {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .services__block {
    position: relative;
    width: 28%;
    padding: 42px 24px 32px 24px;
    color: #FFFFFF;
    background: #0075FF;
    box-shadow: 0 14px 35px #CDD9E7;
    border-radius: 30px;
    z-index: 1;
  }
  .services__subtitle {
    font-size: 30px;
    line-height: 44px;
    margin: 0 32px 35px 32px;
    z-index: 10;
  }
  .services__list {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  .services__list li {
    position: relative;
    margin-bottom: 32px;
    margin-left: 32px;
  }
  .services__list li:before {
    position: absolute;
    top: 5px;
    left: -30px;
    content: "";
    width: 17px;
    height: 17px;
    background: url("~@/assets/images/service.png") no-repeat;
  }
  .services__namber {
    position: absolute;
    top: 19px;
    left: 23px;
    font-weight: bold;
    font-size: 96px;
    line-height: 96px;
    color: #0263D5;
    z-index: -1;
    margin: 0;
  }
  .services__result {
    background: #20518A;
    border-radius: 5px;
    width: 96px;
    height: 28px;
    margin-left: 25px;
  }
  .services__result-text {
    font-size:   16px;
    line-height: 27px;
    margin:      0 7px;
    font-weight: bold;
  }
  .services__result_text {
    margin-top: 0;
    margin-left: 32px;
    font-size: 16px;
    line-height: 24px;
  }
  .services__info {
    margin-top: 40px;
    background: #0066DD;
    border-radius: 30px;
    width: 100%;
    padding-top: 21px;
    padding-bottom: 21px;
  }
  .services__info p {
    margin: 0 0 0 24px;
    font-size: 16px;
    line-height: 24px;
  }
</style>