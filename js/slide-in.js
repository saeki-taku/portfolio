// $(window).on("load", () => {
//   // const spinner = document.getElementById("js-loading");
//   const spinner = $("#js-loading");
//   const title = $(".p-slide-in");
//   const titleInner = $(".p-slide-in__inner");
//   const wind = $(".wind");
//   const leaf = $(".leaf");

//   $.when($(spinner).addClass("loaded"))
//     .done(() => {
//       $(title).addClass("slideLeftRight");
//       $(titleInner).addClass("slideRightLeft");
//     })
//     .done(() => {
//       setTimeout(() => {
//         $(wind).css("visibility", "visible");
//       }, 500);
//     })
//     .done(() => {
//       setTimeout(() => {
//         $(leaf).addClass("leaf-animation");
//       }, 100);
//     })
//     .fail(() => {
//       alert("読み込みに失敗しました。再読み込みを実行してください (- _ -)");
//     });
// });

const loaded = function() {
  return new Promise(function(resolve) {
    const loading = document.querySelector("#js-loading");
    loading.classList.add("loaded");
    resolve();
  });
};

const titleAnimation = function() {
  return new Promise(function(resolve) {
    const title = document.querySelector(".p-slide-in");
    const titleInner = document.querySelector(".p-slide-in__inner");
    title.classList.add("slideLeftRight");
    titleInner.classList.add("slideRightLeft");
    resolve();
  });
};

const windAnimation = function() {
  return new Promise(function(resolve) {
    setTimeout(function() {
      const wind = document.querySelector(".wind");
      wind.style.visibility = "visible";
      resolve();
    }, 800);
  });
};

const leafAnimation = function() {
  return new Promise(function(resolve) {
    setTimeout(function() {
      const leaf = document.querySelector(".leaf");
      leaf.classList.add("leaf-animation");
      resolve();
    }, 20);
  });
};

loaded()
  .then(titleAnimation)
  .then(windAnimation)
  .then(leafAnimation);
