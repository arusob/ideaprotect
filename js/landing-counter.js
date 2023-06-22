$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 3000) {
      $(".counter").each(function () {
        var count = $(this);
        var countTo = count.attr("data-count");
        $({ countNum: count.text() }).animate(
          {
            countNum: countTo,
          },
          {
            duration: 2500,
            easing: "linear",
            step: function () {
              count.text(Math.floor(this.countNum));
            },
            complete: function () {
              count.text(this.countNum);
            },
          }
        );
      });
    }
  });
});
