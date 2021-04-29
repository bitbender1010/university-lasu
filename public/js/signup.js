var formInput = document.getElementsByClassName('form-input-signup');

var _loop = function _loop() {
  var input = formInput[i];
  var label = document.querySelector(".signup-label-".concat(input.name));
  input.addEventListener('focus', function () {
    label.classList.add('label-up');
  });
  input.addEventListener('focusout', function () {
    var value = input.value;

    if (value) {
      return label.classList.add('label-up');
    }

    return label.classList.remove('label-up');
  });
};

for (i = 0; i < formInput.length; i++) {
  _loop();
}

/*Get notifications to jobs*/
document.querySelector('#getjobs').addEventListener('change', showNotify);
let jobsNotify = document.querySelector('.jobsNotify');

/*
function showNotify() {
    jobsNotify.classList.remove('jobsNotify');
    console.log(jobsNotify);
}*/

function showNotify() {
    if (jobsNotify.style.display = "none") {
        jobsNotify.classList.add('test1');
        console.log("If none...block");
    }

    else if (jobsNotify.style.display = "block") {
        jobsNotify.classList.remove('test1');
        console.log("IF BLOCK - NONE");
    }
}


function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
