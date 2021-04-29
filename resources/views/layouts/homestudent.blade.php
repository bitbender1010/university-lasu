<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'UniversityX') }}</title> -->
    <title>UniversityX</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/doubletap.js') }}" defer></script>
    <script src="{{ asset('js/popup.js') }}" defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/coursedetails.css') }}" rel="stylesheet">
    <link href="{{ asset('css/courses.css') }}" rel="stylesheet">
    <link href="{{ asset('css/createcourse.css') }}" rel="stylesheet">

    <!--Video Page CSS-->
    <link href="{{ asset('css/videopage.css') }}" rel="stylesheet">

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
    <div class="logo-cover"> <img src="{{ asset('images/logo.png')}}"/> </div>
    </div>
    <!--search-->
    <div class="search-container">
    <div class="search-bar"> 
        <input type="text">
        <div class="search-icon1"></div>
        <div class="search-icon2"></div>
        <img src="{{ asset('images/search-icon.svg')}}">
    </div>
    </div>
    <!--Notification + Profile-->
    <div class="pro-notify-container">
    <div class="pro-notify">
        <!--notification-->
        <!-- <div class="notification"> <img src="{{asset("images/bell.svg")}}"/> </div>
        <span> <img class="notification-bell" width="20px" src="{{asset('images/bluecircle.svg')}}"/> -->
         </span>    <!--profile-->
        <div class="profile"> <img src="{{ asset('images/user.png')}}"/> </div>
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
<div class="sidebar">
<a href="{{ asset('computer-science/100/dashboard') }}">
        <div class="nav-links nav-active nav-1"> 
            <div class="side-one">
            <div class="sidebar-icons sb-icons"> 
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" fill="#656565" class="svg-hover"/></svg> 
            </div>
            </div>

            <div class="side-two">
            <div class="nav-text"> Home </div>
            </div>
        </div>
</a>
        <!--Browse-->
        <a href="{{ asset('computer-science/100/CSC120/coursecontent') }}" class="hover-links">
        <div class="nav-links nav-one nav-2"> 
            <div class="side-one">
            <div class="sidebar-icons sb-icons-big"> 
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.17 6l2 2H20v10H4V6h5.17M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z" fill="#656565" class="svg-hover"/></svg> </div>
            </div>

            <div class="side-two">
            <div class="nav-text"> Browse </div>
            </div>
        </div>
        </a>
        <!--Profile-->
        <div class="nav-links nav-one"> 
            <div class="side-one">
            <div class="sidebar-icons sb-icons-big"> 
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#656565"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 9c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 8.55C9.64 9.35 6.48 8 3 8v11c3.48 0 6.64 1.35 9 3.55 2.36-2.19 5.52-3.55 9-3.55V8c-3.48 0-6.64 1.35-9 3.55zm7 5.58c-2.53.34-4.93 1.3-7 2.82-2.06-1.52-4.47-2.49-7-2.83v-6.95c2.1.38 4.05 1.35 5.64 2.83L12 14.28l1.36-1.27c1.59-1.48 3.54-2.45 5.64-2.83v6.95z" class="svg-hover"/></svg>
            </div>
            </div>

            <div class="side-two">
            <div class="nav-text"> Xtra-classes </div>
            </div>
        </div>
        <!--Send Feedback-->
        <div class="nav-links nav-one"> 
            <div class="side-one">
            <div class="sidebar-icons sb-icons-big"> 
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 4.99L4 6h16zm0 12H4V8l8 5 8-5v10z" fill="#656565" class="svg-hover"/></svg>
            </div>
            </div>

            <div class="side-two">
            <div class="nav-text"> Send Feedback </div>
            </div>
        </div>
        <!--Buy Coffee-->
        <div class="nav-links nav-one"> 
            <div class="side-one">
            <div class="sidebar-icons small2big-icons"> 
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#656565"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 5v8c0 1.1-.9 2-2 2H8c-1.1 0-2-.9-2-2V5h10m4-2H4v10c0 2.21 1.79 4 4 4h6c2.21 0 4-1.79 4-4v-3h2c1.11 0 2-.89 2-2V5c0-1.11-.89-2-2-2zm-2 5V5h2v3h-2zm2 11H2v2h18v-2z" class="svg-hover"/></svg>
            </div>
            </div>

            <div class="side-two">
            <div class="nav-text"> Buy Coffee </div>
            </div>
        </div>
        <!--Help-->
        <div class="nav-links nav-one"> 
            <div class="side-one">
            <div class="sidebar-icons small2big-icons"> <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z" fill="#656565" class="svg-hover"/></svg>
            </div>
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
        <!-- <div class="sub-links"> About | Help | Privacy | Copyright </div>
        <div class="sub-links">@2020 University-X</div>
        <div class="sub-links"><li style="list-style: none"><a style="color: black; " href="#">Log Out</a></li></div> -->
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


                <!---Popup-->
                <div class="courseinfo-box">
                <!--Course Information Bar-->
                <div class="courseinfo-bar">
                    <div>Course Information</div>
                    <img src="{{ asset('images/plus.svg')}}" class="x-cib"/>
                </div>
                <!---Course Information Data--->
                <div class="courseinfo-details">
                    <div class="single-cid">
                    <div class="single-cid-ct">Course Title:</div>
                    <div>Computer as a Problem Solving Tool</div>
                    </div>

                    <div class="single-cid">
                    <div class="single-cid-ct">Course Code:</div>
                    <div>CSC 120</div>
                    </div>

                    <div class="single-cid">
                    <div class="single-cid-ct">Course Unit:</div>
                    <div>3 Units</div>
                    </div>

                    <div class="single-cid">
                    <div class="single-cid-ct">Course Instructors:</div>
                    <div>Dr Toyin Adewale (09033292522) <br> Dr Deji Onifade (08028286857)</div>
                    </div>
                    
                </div>
                </div>
</body>
</html>
