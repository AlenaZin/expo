<template>
  <div class="block-footer">
    <div class="footer container">
      <p class="footer__contact">КОНТАКТЫ</p>
      <nav class="footer__navigation">
        <div class="footer__logo">
          <img src="~@/assets/images/logo.png">
        </div>
        <div class="footer__info">
          <p class="footer__subtitle">Телефон:</p>
          <a href="#" class="footer__link">+7 (495) 128-13-56</a>
        </div>
        <div class="footer__info">
          <p class="footer__subtitle">Почта:</p>
          <a href="#" class="footer__link">exhibition@exhibition.ru</a>
        </div>
        <div class="footer__social">
          <p class="footer__social-title">Мы в соцсетях</p>
          <div class="footer__social-icon">
            <a>
              <img src="~@/assets/images/facebook.png">
            </a>
            <a>
              <img src="~@/assets/images/instagram.png">
            </a>
          </div>
        </div>
        <div class="footer__author">
          <p class="footer__author-expo">© 2020 ООО «Выставка легко</p>
          <p class="footer__author-polit">Политика конфиденциальности</p>
        </div>
      </nav>
    </div>
  </div>

</template>

<script>
  export default {
    name: 'Footer',
  };
</script>

<style scoped>
  .block-footer {
    height:     117px;
    background: #EDF1F5;;
  }
  .footer__navigation {
    display:         flex;
    justify-content: space-between;
    height: 100%;
    align-items: center;
  }
  .footer {
    position: relative;
    height: 117px;
  }
  .footer__contact {
    position: absolute;
    top: -16px;
    left: -57px;
    margin: 0;
    font-size: 14px;
    letter-spacing: 0.185em;
    color: #272727;
    opacity: 0.5;
    display: block;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
  }
  .footer__logo {
    margin-right: 16px;
  }
  .footer__subtitle {
    font-size: 14px;
    line-height: 21px;
    margin: 0;
  }
  .footer__link {
    text-decoration: none;
    font-weight: bold;
    font-size: 20px;
    line-height: 29px;
    color: #3A3A3A;
  }
  .footer__social-title {
    font-weight: bold;
    font-size: 10px;
    line-height: 17px;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    color: #FFFFFF;
    background: #679CD0;
    border-radius: 5px;
    height: 16px;
    width: 97px;
    text-align: center;
    margin-bottom: 6px;
  }
  .footer__social-icon {
    justify-content: space-around;
    display: flex;
  }
  .footer__author {
    font-size: 14px;
    line-height: 150%;
    color: #3A3A3A;
    opacity: 0.5;
  }
  .footer__author-expo {
    margin: 0;
  }
  .footer__author-polit {
    margin: 0;
    text-decoration: underline;
  }
</style>