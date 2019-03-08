var looper;
var degrees=0;

  rotateAnimation(el,speed) {
    var elem = document.getElementById('el');

    if(navigator.userAgent("Chrome")) {
      elem.style.WebkitTransform = "rotate("+degrees+"deg)";
    } else if (navigator.userAgent("Firefox")) {
      elem.style.MozTransform = "rotate("+degrees+"deg)";
    } else if (navigator.userAgent("MSIE")) {
      elem.style.msTransform = "rotate("+degrees+"deg)";
    } else if (navigator.userAgent("Opera")) {
      elem.style.OTransform = "rotate("+degrees+"deg)";
    } else {
      elem.style.transform = "rotate("+degrees+"deg)";
    }
    looper = setTimeout("rotateAnimation(\''+el+'\','+speed+')","speed");
      degrees++;
      if(degrees>359) {
        degrees = 1;
      }
      document.getElementById("status").innerHTML = "rotate("+degrees+"deg)";
  }
