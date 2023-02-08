function myFunction(x) {
    x.classList.toggle('change');
    document.getElementById('sidebar').classList.toggle('active');
}

var togglebtn = document.querySelector('.toggle-btn');
function headnav1() {
  document.querySelector('.firstPart').scrollIntoView()
  togglebtn.classList.toggle('change');
  document.getElementById('sidebar').classList.toggle('active');
}
function headnav2() {
  document.querySelector('.secondPart').scrollIntoView()
  togglebtn.classList.toggle('change');
  document.getElementById('sidebar').classList.toggle('active');
}
function headnav3() {
  document.querySelector('.thirdPart').scrollIntoView()
  togglebtn.classList.toggle('change');
  document.getElementById('sidebar').classList.toggle('active');
}
function headnav4() {
  document.querySelector('.fourthPart').scrollIntoView()
  togglebtn.classList.toggle('change');
  document.getElementById('sidebar').classList.toggle('active');
}
function headnav5() {
  document.querySelector('.fifthPart').scrollIntoView()
  togglebtn.classList.toggle('change');
  document.getElementById('sidebar').classList.toggle('active');
}

function landNavv1() {
  document.querySelector('.firstPart').scrollIntoView()
}
function landNavv2() {
  document.querySelector('.secondPart').scrollIntoView()
}
function landNavv3() {
  document.querySelector('.thirdPart').scrollIntoView()
}
function landNavv4() {
  document.querySelector('.fourthPart').scrollIntoView()
}
function landNavv5() {
  document.querySelector('.fifthPart').scrollIntoView()
}



var lastKnownScrollPosition = 0;
let ticking = false;

function doSomething() {
  if (lastKnownScrollPosition >= 1) {
    $(".headCont").css("background-color", "var(--bg1)");
  } else {
    $(".headCont").css("background-color", "transparent");
  }

  
}

document.addEventListener('scroll', function(e) {
  lastKnownScrollPosition = window.scrollY;

  if (!ticking) {
    window.requestAnimationFrame(function() {
      doSomething(lastKnownScrollPosition);
      ticking = false;
    });

    ticking = true;
  }
});
doSomething()