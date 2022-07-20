// show Password Auth
$(document).ready(function () {
  $("#icon-click").click(function () {
    $("#icon").toggleClass("fa-eye-slash");
    var input = $("#pass");
    if (input.attr("type") === "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
});
// const currentLocation = location.href;
// const menuItem = document.querySelectorAll("a");
// const menuLenght = menuItem.length;
// for (let i = 0; 1 < menuLenght; i++) {
//   if (menuItem[i].href === currentLocation) {
//     menuItem[i].className = "active";
//   }
// }
