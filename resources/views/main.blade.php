<!Doctype html>
<html lang="en">
    @include('partials._head')
  <body>
    @include('partials._nav')
    @include('partials._messages')
        <div class="container">
            @yield('content')
            @include('partials._footer')
        </div><!-- end of container .row -->

    @include('partials._javascript')
    @yield('scripts')
    </body>
</html>
