let valuee = document.querySelectorAll('.create-toggle-btn');
// valuee.addEventListener('click', run);

let popup = document.querySelector('.cc-popup');

valuee.forEach(values => {
    values.addEventListener('click', run);
});

function run() {
    console.log(popup);
    if (popup.style.display == 'block') {
    popup.style="display: none";
    
    } else {
        popup.style="display: block";
       
    }
}

//blur things
let contentWrapper = document.querySelector('.content-wrapper');
let iNav = document.querySelector('nav');
let iLogo = document.querySelector('.logo-container');
let iSidebar = document.querySelector('.nav-sidebar');
let iNLinks = document.querySelectorAll('.nav-links');


//popupfor modal (i)
let modalValues = document.querySelectorAll('.info-img');
let infopopup = document.querySelector('.courseinfo-box');

modalValues.forEach(modalValue => {
    modalValue.addEventListener('click', modalrun);
});

function modalrun() {
    console.log("catch modal baby");
    if (infopopup.style.display == 'block') {
        infopopup.style="display: none"
        } else {
            infopopup.style="display: block"
            //blur things
            console.log(contentWrapper);
            contentWrapper.style="opacity: 0.5; background: black;"
            iNav.style="opacity: 0.5; background: black;"
            iLogo.style="opacity: 0.5; background: black;"
            iSidebar.style="opacity: 0.5; background-color: black;"
            //some magic
            iNLinks.forEach(nLink => {
                nLink.style="background-color: black;"
            });
        }
}

//if x clicked hide
let xbtns = document.querySelectorAll('.x-cib');



xbtns.forEach(xbtn => {
xbtn.addEventListener('click', closexpopup);
});

function closexpopup() {
    console.log("logging the X");
    if (infopopup.style.display == 'block') {
        infopopup.style="display: none";
        contentWrapper.style="opacity: unset; background: white;"
        iNav.style="opacity: unset; background: white;"
        iLogo.style="opacity: unset; background: white;"
        iSidebar.style="opacity: unset; background-color: #F2F2F2;"
            //some magic
            iNLinks.forEach(nLink => {
                nLink.style="background-color: #F2F2F2;"
            });
        } else {
            infopopup.style="display: block";
        }
        
}


///if btn clicked color me
// let myNavLinks = document.querySelectorAll('.nav-one');

// myNavLinks.forEach(myNav => {
//     myNav.addEventListener('click', runNav);
// });

// function runNav(e) {
//     console.log(e.target);
//     if(e.target.classList.contains("nav-one")) {
//         console.log("class name");
//         if(e.target.parentNode.parentNode.classList.contains("nav-links")) {
//         e.target.parentNode.parentNode.style="color:#6534E2; background-color: #D2C1FF; border-left: 5px solid #6534E2;";
//         } 
//     }
// }

//Toggle Icon Navbar
let toggleIcon = document.querySelector('.nav-toggle-icon').addEventListener('click', toggleNav);
////////////////
let nav_sidebar = document.querySelector('.nav-sidebar');
let main_section = document.querySelector('.content-wrapper');
let div_body = document.querySelector('body');


function toggleNav() {
    console.log("toggle navvv");
    
    if (nav_sidebar.style.display=="block") {
        nav_sidebar.style.display="none"
        main_section.style="background: white; opacity: unset;"
        div_body.style="overflow: scroll";
    } else {
        nav_sidebar.style.display="block";
        main_section.style="background: black; opacity: 0.5;"
        div_body.style="overflow: hidden";
        
    }

    
}