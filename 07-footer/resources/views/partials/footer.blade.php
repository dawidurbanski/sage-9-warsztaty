<section class="c-site__footer">
  <div class="o-container">
    <footer class="c-footer">
      <div class="c-footer__column">
        @include('components.logo')
        @php dynamic_sidebar('sidebar-footer-1') @endphp
      </div>
      <div class="c-footer__column">
        @php dynamic_sidebar('sidebar-footer-2') @endphp
      </div>
      <div class="c-footer__column">
        @php dynamic_sidebar('sidebar-footer-3') @endphp
      </div>
      <div class="c-footer__column">
        @php dynamic_sidebar('sidebar-footer-4') @endphp
      </div>
    </footer>
  </div>
</section>
