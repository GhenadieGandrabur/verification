    function newcerificate() {
        location.href = "/certificates/edit";
}
function newvehicle() {
        location.href = "/vehicle/edit";
}
    function newownesr() {
      location.href = "/vehiclesowners/edit";
}
    function newtaho() {
        location.href = "/taho/edit";
}

function newtyresize() {
    location.href = "/tyres/edit";
}
function newtahotype() {
    location.href = "/tahotype/edit";
}
    function newauthor() {
        location.href = "/author/register";
}
    function newbrand() {
        location.href = "/brand/edit";
}

addEventListener("DOMContentLoaded", () => {
  const hintElement = "smart-table-hint";
  const isHintVisible = JSON.parse(window.localStorage.getItem(hintElement) || "false");
  const collapsedClass = "collapsed";

  document.querySelector(".smart-table-hint")?.classList.toggle(collapsedClass, isHintVisible);

  window.addEventListener("click", function (e) {
    const target = e.target.closest(`.${hintElement}`);
    if (target) {
      const state = target.classList.contains(collapsedClass);
      window.localStorage.setItem(hintElement, JSON.stringify(!state));
      target.classList.toggle(collapsedClass, !state);
    }
  });
});

function myMenu() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

document.addEventListener('keypress', function (e) {
  if (e.keyCode === 13 || e.which === 13) {
    e.preventDefault();
    return false;
  }})

document.addEventListener('keydown', function (event) {
  if (event.keyCode === 13 && event.target.nodeName === 'INPUT') {
    var form = event.target.form;
    var index = Array.prototype.indexOf.call(form, event.target);
    form.elements[index + 1].focus();
    event.preventDefault();
  }
});