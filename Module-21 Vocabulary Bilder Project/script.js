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

  $("#alphabets").on("change", function () {
    const char = $(this).val();
    if ("all" == char) {
      $(".words tr").show();
      return true;
    }
    $(".words tr:gt(0)").hide();

    $(".words td")
      .filter(function () {
        const findWord = $(this).text().indexOf(char) == 0;
        return findWord;
      })
      .parent()
      .show();
  });
})(jQuery);
