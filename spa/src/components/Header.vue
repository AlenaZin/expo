<template>
  <div class="header container">
    <div class="header__logo">
      <img src="~@/assets/images/logo.png"/>
    </div>

    <nav class="header__navigation">
      <ul class="header__navigation_link">
        <li>
          <a href="#">Пакеты услуг</a>
        </li>
        <li>
          <a href="#">Этапы работы</a>
        </li>
        <li>
          <a href="#">Преимущества</a>
        </li>
        <li>
          <a href="#">Проекты и отзывы</a>
        </li>
      </ul>
    </nav>

    <div class="header__button">
      <button class="header__button_text">Оставить заявку</button>
    </div>

  </div>
</template>

<script>
  export default {
    name: 'Header',
  };
</script>
<style scoped>
  .header {
    display: flex;
    justify-content: space-between;
  }
  .header__logo {
    max-width: 159px;
    margin: auto 0;
  }
  .header__navigation {
    margin: auto 0;
  }
  .header__navigation_link {
    max-width: 588px;
    display: flex;
    font-size: 14px;
    line-height: 24px;
    padding: 0;
  }
  .header__navigation_link li {
    list-style: none;
    margin-right: 33px;
  }
  .header__navigation_link li:last-child {
    margin-right: 0;
  }
  .header__navigation_link a {
    color:           inherit;
    text-decoration: none;
  }
  .header__button {
    margin: auto 0;
  }
  .header__button_text {
    border-radius: 27px;
    width: 216px;
    height: 54px;
    font-weight: bold;
    font-size: 18px;
    line-height: 27px;
    color: #FFFFFF;
    border: 1px solid #D1D2D6;
    background: url("~@/assets/images/header_button.png") #0075FF no-repeat top left;
  }
</style>
