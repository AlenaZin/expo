<template>
  <div class="block-review">
    <img class="block-review__img1" src="~@/assets/images/review_1.png">
    <img class="block-review__img2" src="~@/assets/images/review.png">
    <div class="review">
      <h2 class="review__title">Мои <b>проекты и отзывы</b></h2>
      <div class="review__title-none"></div>
    </div>
    <carousel items="1">
      <div class="carousel">
        <div class="carousel__img">
          <img src="~@/assets/images/review_2.png">
        </div>

        <div class="carousel__text">
          <div class="carousel__background">
            <div class="carousel__block">
              <div class="carousel__title">
                <h3>Выставка в Сколково</h3>
                <p>2019</p>
              </div>
              <div class="quotes__left">
                <img src="~@/assets/images/quotes_left.png">
              </div>
              <p class="carousel__paragraph">Оценка Вашего рынка, конкурентов, выставочной истории. Разработка
                трех концепций стенда с учетом Ваших
                пожеланий и бюджета. Разработка 3-д модели стенда по выбранной концепции с неограниченным количеством
                правок, а также подробной сметой на застройку. Сопровождение всего документооборота: договор и оплата
                площади, договор на застройку, документы на заезд и выезд, дополнительные услуги, закрывающие документы по
                всем договорам.</p>
              <div class="quotes__right">
                <img src="~@/assets/images/quotes_right.png">
              </div>

              <p class="carousel__sign">Директор по продажам ЗАО «АНАЛИТИКА» Прищепа М.М.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel">
        <div class="carousel__img">
          <img src="~@/assets/images/review_2.png">
        </div>

        <div class="carousel__text">
          <div class="carousel__background">
            <div class="carousel__block">
              <div class="carousel__title">
                <h3>Выставка в Сколково</h3>
                <p>2019</p>
              </div>
              <div class="quotes__left">
                <img src="~@/assets/images/quotes_left.png">
              </div>
              <p class="carousel__paragraph">Оценка Вашего рынка, конкурентов, выставочной истории. Разработка
                трех концепций стенда с учетом Ваших
                пожеланий и бюджета. Разработка 3-д модели стенда по выбранной концепции с неограниченным количеством
                правок, а также подробной сметой на застройку. Сопровождение всего документооборота: договор и оплата
                площади, договор на застройку, документы на заезд и выезд, дополнительные услуги, закрывающие документы по
                всем договорам.</p>
              <div class="quotes__right">
                <img src="~@/assets/images/quotes_right.png">
              </div>

              <p class="carousel__sign">Директор по продажам ЗАО «АНАЛИТИКА» Прищепа М.М.</p>
            </div>
          </div>
        </div>
      </div>

      <template slot="prev"><span class="prev"></span></template>

      <template slot="next"><span class="next"></span></template>

    </carousel>


  </div>
</template>

<script>
  import carousel from 'vue-owl-carousel';

  export default {
    name: 'Review',
    components: { carousel },
  };
</script>

<style scoped>
  .block-review {
    margin-bottom: 150px;
    position: relative;
  }
  .block-review__img1 {
    position: absolute;
    top: 0;
    left: 120px;
  }
  .block-review__img2 {
    position: absolute;
    top: 0;
    right: 40px;
    z-index: 10;
  }
  .review {
    display: flex;
  }
  .review__title {
    font-weight: normal;
    font-size:   48px;
    line-height: 71px;
    width: 50%;
    margin-bottom: -71px;
    text-align: right;
    padding-right: 130px;
    z-index: 10;
  }
  .review__title-none {
    width: 50%;
  }
  .carousel {
    display:    flex;
    max-height: 847px;
  }
  .carousel__img {
    width: 50%;
    margin-top: 100px;
  }
  .carousel__text {
    width:      50%;
  }
  .carousel__background {
    background: #EDF1F5;
    padding-bottom: 30px;
    padding-top: 1px;
  }
  .carousel__block {
    margin-left: 90px;
    width:       500px;
  }
  .carousel__title {
    display:         flex;
    justify-content: space-between;
    margin-top: 100px;
    margin-bottom: 61px;
  }
  .carousel__title h3 {
    font-weight: bold;
    font-size:   24px;
    line-height: 35px;
    margin: 0;
  }
  .carousel__title p {
    font-size:   24px;
    line-height: 35px;
    margin: 0;
  }
  .carousel__paragraph {
    font-size: 18px;
    line-height: 27px;
    margin-top: 22px;
    margin-bottom: 22px;
  }
  .quotes__left {
    width:  38px;
    height: 33px;
  }
  .quotes__right {
    width:  38px;
    height: 33px;
    text-align: right;
  }
  .quotes__right img {
    display: inline-block;
  }
  .carousel__sign {
    font-size: 16px;
    line-height: 24px;
    margin-top: 23px;
  }
  .owl-carousel .owl-nav.disabled, .owl-carousel .owl-dots.disabled {
    display: block !important;
  }
</style>