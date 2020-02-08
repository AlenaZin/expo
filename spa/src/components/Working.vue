<template>
  <div class="working container">
    <h2 class="working__title">Как я работаю</h2>
    <div class="working__block">

      <div class="working__pharagraph">
        <div class="working__pharagraph_namber font-bebas">01</div>
        <p class="working__pharagraph_subtitle">Встреча</p>
        <p class="working__pharagraph_text">Я приезжаю к Вам на встречу, обсуждаем ваши задачи, ожидания и бюджет.
          Заключаем договор оказания услуг.</p>
        <p class="working__pharagraph_add-text">* При желании встречу можно заменить телефонным или
          скайп-разговором.</p>
      </div>

      <div class="working__pharagraph">
        <div class="working__pharagraph_namber font-bebas">02</div>
        <p class="working__pharagraph_subtitle">Анализ</p>
        <p class="working__pharagraph_text">Я анализирую ситуацию на Вашем рынке, оцениваю уже прошедшие выставки, Ваши
          предыдущие стенды и стенды Ваших конкурентов, и разрабатываю для Вас три концепции.</p>
      </div>

      <div class="working__pharagraph">
        <div class="working__pharagraph_namber font-bebas">03</div>
        <p class="working__pharagraph_subtitle">3-д Проект</p>
        <p class="working__pharagraph_text">Я разрабатываю 3-д проект стенда по выбранной концепции и спецификацию на
          застройку стенда у подрядчика. Подписываем договор на застройку по согласованной спецификации.</p>
      </div>

      <div class="working__pharagraph">
        <div class="working__pharagraph_namber font-bebas">04</div>
        <p class="working__pharagraph_subtitle">Сопровождение</p>
        <p class="working__pharagraph_text">Я заполняю для вас все документы для заезда и выезда с выставки, слежу за
          сроками, общаюсь со всеми подрядчиками, решаю все проблемы и гарантирую, что стенд будет сдан строго в
          соответствии с согласованным 3-д-проектом точно в срок.</p>
      </div>
    </div>

    <div class="working__pharagraph block-five">
      <div class="working__pharagraph_namber-five font-bebas">05</div>
      <p class="working__pharagraph_subtitle">Наслаждение</p>
      <p class="working__pharagraph_text">Вы работаете на выставке и ни о чем не беспокоитесь!</p>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Working',
  };
</script>

<style scoped>
  .working {
    margin-top: 130px;
  }
  .working__title {
    font-size:   48px;
    line-height: 71px;
    margin-top:      0;
  }
  .working__block {
    display: flex;
    flex-wrap: wrap;
  }
  .working__pharagraph {
    width: 40%;
    padding-right: 110px;
    height: 330px;
  }
  .working__pharagraph_namber {
    position: relative;
    font-weight: bold;
    font-size: 96px;
    line-height: 96px;
    color: #0075FF;
  }
  .working__pharagraph_namber:after {
    position: absolute;
    top: 48%;
    left: 112px;
    content: "";
    width: 330px;
    border: 1px solid #AFAFAF;
    box-sizing: border-box;
  }
  .working__pharagraph_subtitle {
    font-weight: bold;
    font-size: 30px;
    line-height: 44px;
    color: #0263D4;
    margin: 0;
  }
  .working__pharagraph_text {
    font-size: 18px;
    line-height: 27px;
  }
  .working__pharagraph_add-text {
    color: #AFAFAF;
    font-size: 18px;
    line-height: 27px;
    margin-top: -16px;
  }
  .block-five {
    margin-left: 50%;
    margin-top: 4%;
    max-height: 230px;
  }
  .working__pharagraph_namber-five {
    position: relative;
    font-weight: bold;
    font-size: 96px;
    line-height: 96px;
    color: #0075FF;
  }
  .working__pharagraph_namber-five:before {
    position: absolute;
    top: 48%;
    right: 555px;
    content: "";
    width: 100%;
    border: 1px solid #AFAFAF;
    box-sizing: border-box;
  }
</style>