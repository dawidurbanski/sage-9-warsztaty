@if (has_nav_menu('primary_navigation'))
  <nav class="c-navigation-primary">
    @php
      wp_nav_menu([
        'theme_location' => 'primary_navigation',
        'menu_class' => 'c-navigation-primary__menu',
      ])
    @endphp
  </nav>
@endif
