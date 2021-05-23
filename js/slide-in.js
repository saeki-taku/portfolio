$(window).on("load", () => {
  // const spinner = document.getElementById("js-loading");
  const spinner = $("#js-loading");
  const title = $(".p-slide-in");
  const titleInner = $(".p-slide-in__inner");
  const wind = $(".wind");
  const leaf = $(".leaf");

  $.when($(spinner).addClass("loaded"))
    .done(() => {
      $(title).addClass("slideLeftRight");
      $(titleInner).addClass("slideRightLeft");
    })
    .done(() => {
      $(wind).css("visibility", "visible");
    })
    .done(() => {
      $(leaf).addClass("leaf-animation");
    })
    .fail(() => {
      alert("読み込みに失敗しました。再読み込みを実行してください (- _ -)");
    });
});
