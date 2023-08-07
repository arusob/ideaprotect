$(function () {
  var $curParent, Content;
  $(document).delegate("span", "click", function () {
    if ($(this).closest("s").length) {
      Content = $(this).parent("s").html();
      $curParent = $(this).closest("s");
      $(Content).insertAfter($curParent);
      $(this).closest("s").remove();
    } else {
      $(this).wrapAll("<s />");
    }
  });
});
