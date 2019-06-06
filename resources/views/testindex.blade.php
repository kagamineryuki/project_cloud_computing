<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('master.head')
  </head>
  <body>
    <div class="container">
      <header class="row">
        @include('master.header')
      </header>
      <div id="main" class="row">
        @yield('content')
      </div>
      <footer class="row">
        @include('master.footer')
      </footer>
    </div>
  </body>
</html>
