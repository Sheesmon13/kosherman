<!doctype html>
<html lang="en">
  
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @include('admin.layouts.links')
  <title>Kosher Man</title>
</head>
<body>
 <!--start wrapper-->
  <div class="wrapper">

    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')

    <div class="page-content-wrapper">
    
    </div>

    <div class="switcher-body">
    @yield('body')
    </div>
    <div class="overlay nav-toggle-icon"></div>
  </div>
@include('admin.layouts.script')
</body>
</html>