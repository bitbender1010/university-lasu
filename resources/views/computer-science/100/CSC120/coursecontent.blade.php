@extends('layouts.homestudent')
@section('content')
               <!--back btn-->
               <div class="home-back-btn">
               <a href="{{ asset('computer-science/100/dashboard') }}"> <img src="{{ asset('images/back.svg')}}" class="course-back"/> </a>
               <a href="#"> <img src="{{ asset('images/megaphone.svg')}}" class="course-announcement"/> </a>
               <div class="announce-num">1</div>
               </div>
               
                       <!--list of courses-->
                       <div class="list-of-courses">
                           <div class="loc">Courses > Computer as a Problem Solving Tool (CSC 120)</div>
                           <div class="loc-line"></div>
                       </div>

                <!--1-->
                <a href="{{ asset('computer-science/100/CSC120/1/coursedetails') }}" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">1</div>
                           <div class="course-title ct-sub">Concept of problem solving</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </a>

                <!--2-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">2</div>
                           <div class="course-title ct-sub">Problem solving steps i.e Problem identification (e.g Management, Scence and Engineering)</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>
                
                <!--3-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">3</div>
                           <div class="course-title ct-sub">Defination of users' needs/requirement and Indentification of solution models </div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

                <!--4-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab">4</div>
                           <div class="course-title ct-sub">Algorithm design, coding and test running </div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                        </div>
                </div>




                <!--Resources-->
                <div class="inner-resources"> Resources: </div>
                <!--files-->

                
                <a href="{{ asset('files/BIO101/GROWTH AND REPRODUCTION(BIO101).ppt')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/ppt.svg')}}"/> </div>
                           <div class="course-title ct-sub">Growth and reproduction</div>
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