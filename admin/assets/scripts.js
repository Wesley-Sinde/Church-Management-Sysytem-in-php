var deadline = new Date("feb 31, 2022 15:37:25").getTime();
var now = new Date().getTime();
var t = deadline - now;
if (t < 0) {
  document.getElementById("CopyRights").innerHTML =
    'Website By <a  href="https://www.wesley.io.ke/" target="_blank" rel="noopener noreferrer">Wesley 🌍</a>';
}
$(function () {
  // Side Bar Toggle

  $(".hide-sidebar").click(function () {
    $("#sidebar").hide("fast", function () {
      $("#content").removeClass("span9");

      $("#content").addClass("span12");

      $(".hide-sidebar").hide();

      $(".show-sidebar").show();
    });
  });

  $(".show-sidebar").click(function () {
    $("#content").removeClass("span12");

    $("#content").addClass("span9");

    $(".show-sidebar").hide();

    $(".hide-sidebar").show();

    $("#sidebar").show("fast");
  });
});
