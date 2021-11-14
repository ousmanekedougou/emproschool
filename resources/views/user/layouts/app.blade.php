<!DOCTYPE html>
<html lang="en">

<head>
@include('user/layouts/head')
  @section('head')
  @show
</head>

<body>
  <div class="site-content">
    <div class="container">
      
      @section('main-content')
      @show
      
      @include('user/layouts/message')
      @include('user/layouts/footer')


    </div>
  </div>
  @section('js')
  @show

</body>

</html>
