<!DOCTYPE html>
<html lang="en">
  <head>
 
    @include('partials._head')
 
  </head>
  <body>

      @include('partials._nav')
      
      @include('partials._message')
     
      @yield('content')
        
     @include('partials._footer')

  

     @include('partials._javascript')
  </body>

</html>
