$(document).ready(function () {

  var sidebar = document.getElementsByClassName("sidebar")[0];

  $("#hamburger").on("click", function () {
    sidebar.classList.toggle("hide");
  });
});