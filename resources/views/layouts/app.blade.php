  <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
       <nav class="nav has-shadow">

         <div class="container">

          <div class="nav-left">
            <a class="nav-item"   href="{{route('home')}}">
            <img src="{{asset('images/devmarketer-logo.png')}}" alt="Devmarkter Logo"/>
            </a>
          <a href="" class="nav-item is-tab is-hidden-mobile m-l-10 ">Learn</a>
          <a href="" class="nav-item is-tab is-hidden-mobile">Discuss</a>
          <a href="" class="nav-item is-tab is-hidden-mobile">Share</a>
          </div>

          <div class="nav-right nav-menu" style="overflow: visible;">
           @if (!Auth::guest())

            <a href="#" class="nav-item is-tab">Login</a>
            <a href="#" class="nav-item is-tab">join the Community</a>
           @else
     <button  class="dropdown is-aligned-right  nav-item   is-tab">

   Hey Alex <span class="icon"><i class="fa fa-caret-down"></i></span>

   <ul class="dropdown-menu">
    
    <li><a href="">
      <span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>
      Profile</a</li>
    <li><a href="">
        <span class="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>
      Notification</a</li>
    <li><a href="">
        <span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>
      Settings</a></li>
    <li class="seperator"></li>
    <li><a href="">
        <span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>
      Logout</a></li>
    
   </ul>

     </button>

           @endif
          </div>

         </div>
       </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>  


