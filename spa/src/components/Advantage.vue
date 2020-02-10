<template>
  <div class="block-advantage">
    <img class="block-advantage__img1" src="~@/assets/images/advantage.png">
    <img class="block-advantage__img2" src="~@/assets/images/advantage_2.png">
    <div class="advantage container">
      <h2 class="advantage__title"><b>Преимущества работы</b> со мной</h2>      
      <div class="advantag__block">
        <div class="advantag__pharagraph right-column">
          <h3 class="advantage__subtitle">Экономия на сотрудниках</h3>
          <p class="advantage__text">Общепрофильный специалист по рекламе или маркетингу не может так же хорошо
            разбираться в выставочной деятельности как и специалист по выставкам, который всю жизнь занимается только
            этим и имеет огромный опыт.</p>
          <p class="advantage__text">Но зачем держать в штате специалиста по выставкам, ради пары мероприятий в год?
            Платить ему зарплату, платить за него налоги, обеспечивать ему рабочее место… Намного выгоднее нанять
            специалиста на конкретный проект и избавиться от всех проблем!</p>
          <img class="advantage__img" src="~@/assets/images/advantage_money.png">
        </div>

        <div class="advantag__pharagraph left-column">
          <h3 class="advantage__subtitle">Экономия времени</h3>
          <p class="advantage__text">Возможно Вы еще ни разу не участвовали в выставках и думаете, что в этом нет
            ничего сложного?</p>
          <p class="advantage__text">Или Вы уже столкнулись с множеством нюансов организации выставок, которые на месяц
            другой вывели Вас из привычной рабочей колеи и теперь не хотите участвовать в выставках вовсе?</p>
          <p>Опытный специалист возьмет на себя все мельчайшие нюансы, Вам останется только согласовать проект и
            оплатить услуги 😊</p>
          <img class="advantage__img" src="~@/assets/images/advantage_time.png">
        </div>

        <div class="advantag__pharagraph margin right-column">
          <h3 class="advantage__subtitle">Экономия нервов</h3>
          <p class="advantage__text">Прошлая выставка свела вас с ума? Подрядчики звонили каждые пять минут? Выставка
            уже открылась, а мебель для стенда застряла в пробке? Финальная стоимость оказалась в три раза выше бюджета?
            Бухгалтерия до сих пор ждет закрывающие документы?</p>
          <p class="advantage__text">Больше у Вас не будет никаких проблем! Стенд будет готов строго в срок по
            согласованному бюджету и будет полностью соответствовать 3-д проекту!</p>
          <img class="advantage__img" src="~@/assets/images/advantage_nerves.png">
        </div>

        <div class="clear"></div>

      </div>

    </div>
  </div>

</template>

<script>
  export default {
    name: 'Advantage',
  };
</script>

<style scoped>
  .block-advantage {
    position: relative;
    margin-top:  110px;
  }
  .block-advantage__img1 {
    position: absolute;
    top: 0;
    right: 0;
    z-index: -2;
  }
  .block-advantage__img2 {
    position: absolute;
    left: 0;
    top: 35%;
    z-index: -2;
  }
  .advantage__title {
    font-weight: normal;
    font-size:   48px;
    line-height: 71px;
    width:       40%;
    padding-top: 36px;
  }
  .advantag__pharagraph {
    position: relative;
    width: 45%;
    min-height: 360px;
  }
  .advantage__img {
    position: absolute;
    top: -170px;
    left: -30px;
    z-index: -1;
  }
 .advantag__block:last-child {
    margin-top: 50px;
  }
  .margin {
    margin-top: 160px;
  }
  .right-column {
    float: right;
  }
  .left-column {
    float: left;
    margin-top: 250px;
  }
  .advantage__subtitle {
    font-size: 36px;
    line-height: 53px;
    margin: 0;
  }
  .advantage__text {
    font-size: 18px;
    line-height: 27px;
  }
  .clear {
    clear: both;
  }
</style>