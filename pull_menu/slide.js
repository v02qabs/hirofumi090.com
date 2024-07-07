window.onload = function () {
  const boxheight = 90;
  let flug = false;
  document.getElementById("li").addEventListener(
    "click",
    function () {
      flug = !flug
      if (flug) {
        document.getElementById("slide").style.height = boxheight + "px";
      } else {
        document.getElementById("slide").style.height = 0 + "px";
      }
    },
    false
  );
}

