(function ($) {
  $(document).ready(function () {
    $("#login").on("click", function () {
      $("#form01 h3").html("Login");
      $("#action").val("login");
    });
    $("#register").on("click", function () {
      $("#form01 h3").html("Register Account");
      $("#action").val("register");
    });
  });

  $(".menu-item").on("click", function () {
    $(".helement").hide();
    var target = "#" + $(this).data("target");
    $(target).show();
  });
})(jQuery);
