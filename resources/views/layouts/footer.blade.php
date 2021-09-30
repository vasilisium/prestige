<footer>
  <div class="footerLogo">
    @include('layouts.logo')
    <p>
      Престиж<span>&copy;</span> 2021
    </p>
  </div>
  <div class="menu_button footer_button first">
    <a href="{{ url('') }}">Головна</a>
  </div>
  <div class="menu_button footer_button last_column">
    <a href="{{ url('about') }}">Про нас</a>
  </div>
  <div class="menu_button footer_button last_row">
    <a href="{{ url('contacts') }}">Контакти</a>
  </div>
  <div class="menu_button footer_button last last_row last_column">
    <a href="{{ url('blog') }}">Статті</a>
  </div>
  <div class="footerSpacerRight"></div>
</footer>