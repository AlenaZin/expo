<template>
  <div class="block-request">
    <img class="block-request__img1" src="~@/assets/images/request_1.png">
    <img class="block-request__img2" src="~@/assets/images/request_2.png">
    <img class="block-request__img3" src="~@/assets/images/request_3.png">
    <img class="block-request__img4" src="~@/assets/images/request_4.png">
    <div class="request__form">
      <div class="request__block">
        <h2 class="request__title">Оставьте заявку на расчет Вашего проекта</h2>
        <div class="request__info">
          <div class="request__panel">
            <label for="name" class="request__text">Как к Вам обращаться:</label><br>
            <input type="text" name="text" id="name" placeholder="Имя" class="request__input">
          </div>

          <div class="request__panel">
            <label for="tel" class="request__text">Номер телефона:</label><br>
            <input type="tel" name="tel" id="tel" placeholder=" +7 ___ ___-__-__" class="request__input">
          </div>

          <div class="request__panel">
            <label for="email" class="request__text">Email:</label><br>
            <input type="email" name="email" id="email" placeholder="simple@mail.ru" class="request__input">
          </div>

          <div class="request__panel">
            <div class="request__comment">
              <label class="request__text">Комментарий</label><br>
              <div class="comment__add">
                <img src="~@/assets/images/request_5.png">
              </div>
            </div>
            <input type="text" name="comment" cols="150" rows="5" class="comment__text">
          </div>
          <button class="request__button">Оставить заявку</button>
          <p class="request__consent">Вы соглашаетесь с условиями обработки персональных данных</p>
        </div>
      </div>
    </div>
    <div class="request__image">
      <img src="~@/assets/images/request.png">
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Request',

  };
</script>

<style scoped>
  .block-request {
    position: relative;
    display:       flex;
    min-height:    684px;
    margin-bottom: 150px;
  }
  .block-request__img1 {
    position: absolute;
    top: -50px;
    right: 570px;
    z-index: -1;
  }
  .block-request__img2 {
    position: absolute;
    bottom: -60px;
    right: 187px;
  }
  .block-request__img3 {
    position: absolute;
    top: -25px;
    right: 200px;
  }
  .block-request__img4 {
    position: absolute;
    bottom: 72px;
    left: 123px;
  }
  .request__form {
    width:      50%;
    background: #0075FF;
  }
  .request__image {
    width: 50%;
  }
  .request__block {
    width:        415px;
    margin-right: 220px;
    color:        #FFFFFF;
    margin-left:  auto;
  }
  .request__title {
    font-size:     36px;
    line-height:   43px;
    margin-top:    77px;
    margin-bottom: 34px;
  }
  .request__info {
    width: 242px;
  }
  .request__panel {
    margin-bottom: 14px;
  }
  .request__text {
    font-size:    14px;
    line-height:  21px;
    padding-left: 2px;
  }
  .request__input {
    width: 216px;
    height: 42px;
    border-radius: 27px;
    margin-top: 6px;
    border: 1px solid #d1d2d6;
    padding-left: 26px;
  }
  .request__comment {
    display:  flex;
    position: relative;
  }
  .comment__add {
    position:         absolute;
    top:              0;
    right:            122px;
    content:          "";
    width:            20px;
    height:           20px;
    background-color: #FFFFFF;
    border-radius:    100%;
  }
  .comment__add img {
    position: absolute;
    top:      4px;
    right:    4px;
  }
  .comment__text {
    width: 100%;
    border-radius: 27px;
    border:        1px solid #d1d2d6;
  }
  .request__button {
    border-radius:    27px;
    width:            100%;
    height:           54px;
    font-weight:      bold;
    font-size:        18px;
    line-height:      27px;
    color:            #FFFFFF;
    background-color: #0075FF;;
    border:           1px solid #D1D2D6;
  }
  .request__consent {
    font-size:   13px;
    line-height: 19px;
    color:       #003D85;
    position:    relative;
    margin-top: 20px;
    margin-left: 24px;
  }
  .request__consent:before {
    position:   absolute;
    top:        0;
    left:       -23px;
    content:    "";
    width:      17px;
    height:     17px;
    background: url("~@/assets/images/request_6.png") no-repeat;
  }
  .request__image {
    position: relative;
  }
  .request__image img {
    position: absolute;
    left: -219px;
    top: 23px;
  }
</style>