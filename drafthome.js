{
  var prev = window.pageYOffset;
  window.onscroll = function () {
    var current = window.pageYOffset;
    if (prev > current) {
      document.getElementById("navbar").style.top = "0";
    } else {
      document.getElementById("navbar").style.top = "-100px";
    }
    prev = current;
  }
}
