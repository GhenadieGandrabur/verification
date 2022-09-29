    function newcerificate() {
        location.href = "/certificates/edit";
}
    function newvehicle() {
        location.href = "/vehicles/edit";
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
