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
                           <div class="loc">Courses > Computer as a Problem Solving Tool (CSC 120) > Concept of problem solving > Growth and reproduction (Video) </div>
                           <div class="loc-line"></div>
                       </div>

                <!--files-->
        <div class="videocontent-cover">
                <div class="video-container">
                <video src="{{ asset('videos/video.mp4')}}" controls>
                </div>

        <!--video title-->
        <div class="video-title">First generation computers</div>
        <!--video description-->
        <div style="margin-bottom: 10px; font-size: 18px; color: gray;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. A, dolores ratione. Expedita dolor illo ratione porro assumenda facere maiores reiciendis dignissimos velit magnam, incidunt deserunt aliquam animi at odit quis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti provident sint at alias, maiores culpa sed eaque consequuntur aliquam aliquid voluptate.
        </div>
        <!--show more-->
        <!-- <div class="show-more"> <span>SHOW MORE</span> <img src="../images/arrows.svg" class="show-more-img down-direction"/> </div> -->
        <!--other video details-->
        <!-- <div class="video-sub-details"> 
            <div class="no-views">500 views</div>
            <div class="round-dot"></div>
            <div class="date-posted">2 months ago</div>
        </div> -->
        <!--divider-->
        <div class="video-divider"> </div>
        <!--user profile details-->
        <div class="vup-cover">
            <div class="video-user-profile"> <img src="{{ asset('images/lasu.png')}}" /> </div>
            <div class="profile-name-vid"> <span class="marg-b1">Ololade Dammie</span> <span class="marg-b2">Lagos State University</span> </div>
        </div>
</div>
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