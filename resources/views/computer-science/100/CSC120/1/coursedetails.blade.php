@extends('layouts.homestudent')
@section('content')
               <!--back btn-->
               <div class="home-back-btn">
               <a href="{{ asset('computer-science/100/CSC120/coursecontent') }}"> <img src="{{ asset('images/back.svg')}}" class="course-back"/> </a>
               <a href="#"> <img src="{{ asset('images/megaphone.svg')}}" class="course-announcement"/> </a>
               <div class="announce-num">1</div>
               </div>
               
                       <!--list of courses-->
                       <div class="list-of-courses">
                           <div class="loc">Courses > Computer as a Problem Solving Tool (CSC 120) > Concept of problem solving </div>
                           <div class="loc-line"></div>
                       </div>

                <!--files-->   
                <a href="{{ asset('computer-science/100/CSC120/1/video-one')}}">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/ppt.svg')}}"/> </div>
                           <div class="course-title ct-sub">Growth and reproduction (Video)</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>


                <a href="{{ asset('files/BIO101/MACROMOLECULES 2.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf-icon.svg')}}"/> </div>
                           <div class="course-title ct-sub">Macromolecules</div>
                           <div class="c-info"> </div>
                       </div>
                </a>

<style>
    /* body {
        background: red;
    } */

    .nav-2 {
    background-color: #D2C1FF;
    border-right: none;
    border-left: 5px solid #6534E2;
    color: #6534E2;
    width: calc(100% - 5px);
    }

    .nav-2 .svg-hover {
    fill: #6534E2;
}

    .nav-2 .nav-text {
    color: #6534E2;
    font-weight: bold;
    }

    @media (max-width: 900px) {
    .nav-2 {
        width: -webkit-fill-available;
    }
}

</style>
@endsection