<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="{{ (!empty($containerNav) ? $containerNav : 'container-fluid') }} d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      Parroquia
    </div>
    <div  class="d-none d-lg-inline-block">
      <!--<a href="{{ config('variables.licenseUrl') ? config('variables.licenseUrl') : '#' }}" class="footer-link me-4" target="_blank">License</a>
      <a href="{{ config('variables.moreThemes') ? config('variables.moreThemes') : '#' }}" target="_blank" class="footer-link me-4">More Themes</a>
      <a href="{{ config('variables.documentation') ? config('variables.documentation').'/laravel-introduction.html' : '#' }}" target="_blank" class="footer-link me-4">Documentation</a>
      <a href="{{ config('variables.support') ? config('variables.support') : '#' }}" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>-->
      © <script>document.write(new Date().getFullYear())</script>
      <b>SIGLESIA</b>. Un sistema propiedad de<a href="https://devna.mx" target="_blank"><img width="70px" src="{{asset('assets/img/logos/LogoDevna.png')}}"></a>| v1.0
    </div>
  </div>
</footer>
<!--/ Footer-->
