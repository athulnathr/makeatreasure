<!DOCTYPE html>
<html lang="en">
@include('components.heads')
<body>
  @include('components.header')
  

  @yield('section')


  @include('components.footer')
  @include('components.scripts')
</body>
</html>