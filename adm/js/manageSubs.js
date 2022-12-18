$(function () {
  $(".list__item").on("click", function () {
    $id = $(this).attr("id");
    $listItem = $(this);

    $.ajax({
      type: "post",
      url: "infoWorker.php",
      data: {
        id: $id,
      },
      success: function (res) {
        $(".list__item-data").html("");
        $listItem.after(res);
      },
    });
  });
})();
