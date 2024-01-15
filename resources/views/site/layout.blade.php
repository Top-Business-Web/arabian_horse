<!DOCTYPE html>
<html>
    <!-- head section -->
@include('site.layouts.head')
<body>
    <!-- loader page -->
    <div class="loader">
        <img src="{{ asset('photo/load.gif') }}">
    </div>

    <!-- head section -->
    @include('site.layouts.navbar')
    
    <!-- landing -->
    @include('site.layouts.landing')

    @yield('content')

     <!-- contact -->
     @include('site.layouts.contact')


     <!-- modal video -->

     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <button type="button" class="btn-close m-2" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body">
            <iframe width="100%" height="315" src="{{ $settings->link_youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- scroll to top -->
    <a href="#" class="scroll-top">
      <div class="top">
        <i class="fa-solid fa-angle-up fa-lg"></i>
      </div>
    </a>

      
      @include('site.layouts.scripts')
      @yield('js')
</body>
</html>