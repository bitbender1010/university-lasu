let tab = document.querySelectorAll('.cc-1');

//loop
tab.forEach(tabindex => {
        tabindex.addEventListener('click', doubletap);

    function doubletap() {
        let dropdown = tabindex.children[1];
        console.log(dropdown);
    
        if (dropdown.style.display == "block") {
            console.log("OFF");
            dropdown.style.display = "none";
            //flip arrow
            let flip = tabindex.children[0].children[2].children[0];
            flip.style.transform = "rotate(270deg)";
        }
        else {
            console.log("ON")
            dropdown.style.display = "block";
            //flip arrow
            let flip = tabindex.children[0].children[2].children[0];
            flip.style.transform = "rotate(90deg)";
        }
}
}    
)

// console.log("tab")




