<template>
  <div class="project container">
    <div class="project__image">
      <img src="~@/assets/images/3D-Project.png">
    </div>
    <div class="progect__text">
      <h2>Что такое <b>3D проект</b></h2>
      <p>Оценка Вашего рынка, конкурентов, выставочной истории. Разработка трех концепций стенда с учетом Ваших
        пожеланий и бюджета. Разработка 3-д модели стенда по выбранной концепции с неограниченным количеством правок,
        а также подробной сметой на застройку. Сопровождение всего документооборота: договор и  оплата площади, договор
        на застройку, документы на заезд и выезд, дополнительные услуги, закрывающие документы по всем договорам.</p>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Project3D',
  };
</script>

<style scoped>
  .project {
    display: flex;
    justify-content: space-between;
    margin: 150px auto;
  }
  .project__image {
    position: relative;
    width: 48%;
    min-height: 596px;
  }
  .project__image img {
    position: absolute;
    top: 0;
    right: 0;
  }
  .progect__text {
    width: 46%;
    margin-right: 0;
    margin-top: 70px;
  }
  .progect__text h2 {
    font-weight: normal;
    font-size: 48px;
    line-height: 100%;
  }
  .progect__text p {
    font-size: 18px;
    line-height: 27px;
  }
</style>