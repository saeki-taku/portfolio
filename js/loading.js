// window.onload = function() {
//   const spinner = document.getElementById("js-loading");
//   spinner.classList.add("loaded");
// };
window.onpageshow = function (event) {
  if (event.persisted) {
    window.location.reload();
  }
};
