<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UniversityX') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="{{ asset('js/popup.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/coursedetails.css') }}" rel="stylesheet">
    <link href="{{ asset('css/courses.css') }}" rel="stylesheet">
    <link href="{{ asset('css/createcourse.css') }}" rel="stylesheet">

</head>
<body>
 <!--Navigation Bar-->
 <nav> 
     <!--toggle icon-->
     <div class="nav-toggle-icon">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!--logo-->
    <div class="logo-container">
    <div class="logo-cover"> <img src="../images/logo.png"/> </div>
    </div>
    <!--search-->
    <div class="search-container">
    <div class="search-bar"> 
        <input type="text">
        <div class="search-icon1"></div>
        <div class="search-icon2"></div>
        <img src="../images/search-icon.svg">
    </div>
    </div>
    <!--Notification + Profile-->
    <div class="pro-notify-container">
    <div class="pro-notify">
        <!--notification-->
        <!-- <div class="notification"> <img src="{{asset("images/bell.svg")}}"/> </div>
        <span> <img class="notification-bell" width="20px" src="{{asset('images/bluecircle.svg')}}"/> -->
         </span>    <!--profile-->
        <div class="profile"> <img src="../images/ololade.jpg"/> </div>
    </div>
    </div>
</nav>
    <!------------------------------------------->
       <!--Navigation Sidebar-->
   <div class="sidebar-course">
    <div class="nav-sidebar">
        <!--icons and labels-->
        <!--home-->
</br>
<div class = "sidebar">
        <div class="nav-links nav-active"> 
            <div class="side-one">
            <div class="sidebar-icons sb-icons-big"> <img src="../images/house-icon.svg"/> </div>
            </div>

            <div class="side-two">
            <div class="nav-text"> Dashboard </div>
            </div>
        </div>
        <!--Browse-->
        <div class="nav-links"> 
            <div class="side-one">
            <div class="sidebar-icons"> <img src="../images/folder.svg"/> </div>
            </div>

            <div class="side-two">
            <div class="nav-text"> Browse </div>
            </div>
        </div>
        <!--Profile-->
        <div class="nav-links"> 
            <div class="side-one">
            <div class="sidebar-icons sb-icons-big"> <img src="../images/profile-icon.svg"/> </div>
            </div>

            <div class="side-two">
            <div class="nav-text"> Profile </div>
            </div>
        </div>
        <!--Send Feedback-->
        <div class="nav-links"> 
            <div class="side-one">
            <div class="sidebar-icons"> <img src="../images/feedback.svg"/>
         </span> 
        </div>
            
            </div>

            <div class="side-two">
            <div class="nav-text"> Send Feedback </div>
            </div>
        </div>
        <!--Help-->
        <div class="nav-links"> 
            <div class="side-one">
            <div class="sidebar-icons small2big-icons"> <img src="../images/help.svg"/> </div>
            </div>

            <div class="side-two">
            <div class="nav-text"> Help </div>
            </div>
        </div>
</div>
        <!--other nav-links-->
</br>
</br>
</br>
</br>
        <div class="sub-links"> About | Help | Privacy | Copyright </div>
        <div class="sub-links">@2020 University-X</div>
        <div class="sub-links"><li style="list-style: none"><a style="color: black; " href="#">Log Out</a></li></div>
    </div>

    <!------------------------------->

    <div class="content-wrapper">
        <!------------------------------------CONTENT--------------------->
            <!--Course content-->
            <div class="main-section">
            @yield('content')
<!------->
</div>
</div>

        <!------END------->
    </div>
</body>
</html>
